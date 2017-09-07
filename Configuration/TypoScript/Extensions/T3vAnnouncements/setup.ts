# === T3v Announcements Configuration ===

plugin {
  tx_t3vannouncements {
    persistence {
      enableAutomaticCacheClearing = 1

      updateReferenceIndex = 1

      # storagePid = {$plugin.tx_t3vannouncements.persistence.storagePid}
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