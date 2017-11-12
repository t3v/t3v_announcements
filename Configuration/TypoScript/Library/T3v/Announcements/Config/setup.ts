lib {
  t3v {
    announcements {
      config {
        formatters {
          date = TEXT
          date {
            current = 1

            strftime = {$t3v.announcements.config.formatters.date.strftime}
          }

          dateAndTime = TEXT
          dateAndTime {
            current = 1

            strftime = {$t3v.announcements.config.formatters.dateAndTime.strftime}
          }
        }

        pages {
          jobAds {
            uid = TEXT
            uid {
              value = {$t3v.announcements.config.pages.jobAds.uid}
            }
          }

          news {
            uid = TEXT
            uid {
              value = {$t3v.announcements.config.pages.news.uid}
            }
          }
        }
      }
    }
  }
}