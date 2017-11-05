lib {
  t3v {
    announcements {
      formatters {
        date = TEXT
        date {
          current = 1

          strftime = {$t3v.announcements.formatters.date.strftime}
        }

        dateAndTime = TEXT
        dateAndTime {
          current = 1

          strftime = {$t3v.announcements.formatters.dateAndTime.strftime}
        }
      }
    }
  }
}