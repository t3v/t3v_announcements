# -----------------------------------
# | T3v Announcements Configuration |
# -----------------------------------

# === Plugin Configuration ===

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
      extbase {
        controllerExtensionName = {$plugin.tx_t3vannouncements.settings.extbase.controllerExtensionName}
      }
    }

    view {
      layoutRootPath = {$plugin.tx_t3vannouncements.view.layoutRootPath}

      # Used to define several paths for layouts, which will be tried in reversed order (the paths are searched from
      # bottom to top). The first folder where the desired layout is found, is used. If the array keys are numeric,
      # they are first sorted and then tried in reversed order.
      layoutRootPaths {
        0 = {$plugin.tx_t3vannouncements.view.layoutRootPath}
      }

      templateRootPath = {$plugin.tx_t3vannouncements.view.templateRootPath}

      # Used to define several paths for templates, which will be tried in reversed order (the paths are searched from
      # bottom to top). The first folder where the desired layout is found, is used. If the array keys are numeric,
      # they are first sorted and then tried in reversed order.
      templateRootPaths {
        0 = {$plugin.tx_t3vannouncements.view.templateRootPath}
      }

      partialRootPath = {$plugin.tx_t3vannouncements.view.partialRootPath}

      # Used to define several paths for partials, which will be tried in reversed order. The first folder where the
      # desired partial is found, is used. The keys of the array define the order.
      partialRootPaths {
        0 = {$plugin.tx_t3vannouncements.view.partialRootPath}
      }
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/setup.ts">