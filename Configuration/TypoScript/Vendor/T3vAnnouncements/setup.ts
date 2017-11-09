# -----------------------------------
# | T3v Announcements Configuration |
# -----------------------------------

plugin {
  tx_t3vannouncements {
    persistence {
      classes {
        T3v\T3vAnnouncements\Domain\Model\JobAd {
          mapping {
            tableName = tx_t3vannouncements_domain_model_job_ad

            # columns {
            #   foo.mapOnProperty = foo
            #   bar.mapOnProperty = bar
            # }
          }
        }

        T3v\T3vAnnouncements\Domain\Model\NewsArticle {
          mapping {
            tableName = tx_t3vannouncements_domain_model_news_article

            # columns {
            #   foo.mapOnProperty = foo
            #   bar.mapOnProperty = bar
            # }
          }
        }
      }

      enableAutomaticCacheClearing = {$plugin.tx_t3vannouncements.persistence.enableAutomaticCacheClearing}

      storagePid = {$plugin.tx_t3vannouncements.persistence.storagePid}

      updateReferenceIndex = {$plugin.tx_t3vannouncements.persistence.updateReferenceIndex}
    }

    settings {
      # ...
    }

    view {
      layoutRootPaths {
        0 = {$plugin.tx_t3vannouncements.view.layoutRootPath}
      }

      templateRootPaths {
        0 = {$plugin.tx_t3vannouncements.view.templateRootPath}
      }

      partialRootPaths {
        0 = {$plugin.tx_t3vannouncements.view.partialRootPath}
      }
    }
  }
}