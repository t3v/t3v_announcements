# === T3v Announcements Constants ===

plugin {
  tx_t3vannouncements {
    persistence {
      # cat=plugin/tx_t3vannouncements/persistence; type=int+; label=The PID of the storage
      # storagePid = 0
    }

    view {
      # cat=plugin/tx_t3vannouncements/view; type=string; label=Path to layouts
      layoutRootPath = EXT:t3v_announcements/Resources/Private/Layouts/

      # cat=plugin/tx_t3vannouncements/view; type=string; label=Path to templates
      templateRootPath = EXT:t3v_announcements/Resources/Private/Templates/

      # cat=plugin/tx_t3vannouncements/view; type=string; label=Path to template partials
      partialRootPath = EXT:t3v_announcements/Resources/Private/Partials/
    }

    settings {
      # ...
    }
  }
}