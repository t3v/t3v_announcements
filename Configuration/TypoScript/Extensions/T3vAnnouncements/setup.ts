# === T3v Announcements Configuration ===

plugin {
  tx_t3vannouncements {
    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 1

      # storagePid = {$plugin.tx_t3vannouncements.persistence.storagePid}

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
    }

    view {
      layoutRootPath = {$plugin.tx_t3vannouncements.view.layoutRootPath}

      templateRootPath = {$plugin.tx_t3vannouncements.view.templateRootPath}

      partialRootPath = {$plugin.tx_t3vannouncements.view.partialRootPath}
    }

    settings {
      # ...
    }
  }
}