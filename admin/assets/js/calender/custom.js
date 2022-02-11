var nav = new DayPilot.Navigator("nav");
  nav.showMonths = 3;
  nav.skipMonths = 3;
  nav.init();

  var day = new DayPilot.Calendar("dpDay");
  day.viewType = "Day";
  configureCalendar(day);
  day.init();

  var week = new DayPilot.Calendar("dpWeek");
  week.viewType = "Week";
  configureCalendar(week);
  week.init();

  var month = new DayPilot.Month("dpMonth");
  configureCalendar(month);
  month.init();

  function configureCalendar(dp) {
    dp.contextMenu = new DayPilot.Menu({
      items: [
        {
          text: "Delete",
          onClick: function(args) {
            var params = {
              id: args.source.id(),
            };
            DayPilot.Http.ajax({
              url: "calendar_delete.php",
              data: params,
              success: function(ajax) {
                dp.events.remove(params.id);
                dp.message("Deleted");
              }
            });
          }
        },
        {
          text: "-"
        },
        {
          text: "Blue",
          icon: "icon icon-blue",
          color: "#3d85c6",
          onClick: function(args) { updateColor(args.source, args.item.color); }
        },
        {
          text: "Green",
          icon: "icon icon-green",
          color: "#6aa84f",
          onClick: function(args) { updateColor(args.source, args.item.color); }
        },
        {
          text: "Orange",
          icon: "icon icon-orange",
          color: "#e69138",
          onClick: function(args) { updateColor(args.source, args.item.color); }
        },
        {
          text: "Red",
          icon: "icon icon-red",
          color: "#cc4125",
          onClick: function(args) { updateColor(args.source, args.item.color); }
        }
      ]
    });


    dp.onBeforeEventRender = function(args) {
      if (!args.data.backColor) {
        args.data.backColor = "#6aa84f";
      }
      args.data.borderColor = "darker";
      args.data.fontColor = "#fff";
      args.data.barHidden = true;

      args.data.areas = [
        {
          right: 2,
          top: 2,
          width: 20,
          height: 20,
          html: "&equiv;",
          action: "ContextMenu",
          cssClass: "area-menu-icon",
          visibility: "Hover"
        }
      ];
    };

    dp.onEventMoved = function (args) {
      DayPilot.Http.ajax({
        url: "calendar_move.php",
        data: {
          id: args.e.id(),
          newStart: args.newStart,
          newEnd: args.newEnd
        },
        success: function() {
          console.log("Moved.");
        }
      });
    };

    dp.onEventResized = function (args) {
      DayPilot.Http.ajax({
        url: "calendar_move.php",
        data: {
          id: args.e.id(),
          newStart: args.newStart,
          newEnd: args.newEnd
        },
        success: function() {
          console.log("Resized.");
        }
      });

    };

    // event creating
    dp.onTimeRangeSelected = function (args) {

      var form = [
        {name: "Name", id: "text"},
        {name: "Start", id: "start", dateFormat: "MMMM d, yyyy h:mm tt", disabled: true},
        {name: "End", id: "end", dateFormat: "MMMM d, yyyy h:mm tt", disabled: true},
      ];

      var data = {
        start: args.start,
        end: args.end,
        text: "Event"
      };

      DayPilot.Modal.form(form, data).then(function(modal) {
        dp.clearSelection();

        if (modal.canceled) {
          return;
        }

        DayPilot.Http.ajax({
          url: "calendar_create.php",
          data: modal.result,
          success: function(ajax) {
            var dp = switcher.active.control;
            dp.events.add({
              start: data.start,
              end: data.end,
              id: ajax.data.id,
              text: data.text
            });
          }
        });

      });
    };

    dp.onEventClick = function(args) {
      DayPilot.Modal.alert(args.e.data.text);
    };
  }

  var switcher = new DayPilot.Switcher({
    triggers: [
      {id: "buttonDay", view: day },
      {id: "buttonWeek", view: week},
      {id: "buttonMonth", view: month}
    ],
    navigator: nav,
    selectedClass: "selected-button",
    onChanged: function(args) {
      console.log("onChanged fired");
      switcher.events.load("calendar_events.php");
    }
  });

  switcher.select("buttonWeek");

  function updateColor(e, color) {
    var params = {
      id: e.data.id,
      color: color
    };
    DayPilot.Http.ajax({
      url: "calendar_color.php",
      data: params,
      success: function(ajax) {
        var dp = switcher.active.control;
        e.data.backColor = color;
        dp.events.update(e);
        dp.message("Color updated");
      }
    });
  }