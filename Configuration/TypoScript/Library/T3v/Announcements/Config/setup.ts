lib {
  t3v {
    announcements {
      config {
        pages {
          jobAds {
            uid = TEXT
            uid {
              value = {$t3v.announcements.pages.jobAds.uid}
            }
          }

          news {
            uid = TEXT
            uid {
              value = {$t3v.announcements.pages.news.uid}
            }
          }
        }
      }
    }
  }
}