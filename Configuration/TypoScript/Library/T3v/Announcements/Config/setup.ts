lib {
  t3v {
    announcements {
      config {
        contentElements {
          # --- Job Ads ---

          jobAdsContentElement {
            container = TEXT
            container {
              value = {$t3v.announcements.config.contentElements.jobAdsContentElement.container}
            }
          }

          latestJobAdsContentElement {
            container = TEXT
            container {
              value = {$t3v.announcements.config.contentElements.latestJobAdsContentElement.container}
            }
          }

          # --- News Articles ---

          newsArticlesContentElement {
            container = TEXT
            container {
              value = {$t3v.announcements.config.contentElements.newsArticlesContentElement.container}
            }
          }

          latestNewsArticlesContentElement {
            container = TEXT
            container {
              value = {$t3v.announcements.config.contentElements.latestNewsArticlesContentElement.container}
            }
          }
        }

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