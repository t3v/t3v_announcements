# -------------------------------
# | T3v Announcements Constants |
# -------------------------------

t3v {
  announcements {
    config {
      formatters {
        date {
          # cat=t3v/announcements/config/formatters/date; type=string; label=The format string of the date formatter
          strftime = %d.%m.%Y
        }

        dateAndTime {
          # cat=t3v/announcements/config/formatters/dateAndTime; type=string; label=The format string of the date and time formatter
          strftime = %d.%m.%Y %H:%M
        }
      }

      pages {
        jobAds {
          # cat=t3v/announcements/config/pages/jobAds; type=int+; label=The UID of the job ads page
          uid =
        }

        news {
          # cat=t3v/announcements/config/pages/news; type=int+; label=The UID of the news page
          uid =
        }
      }
    }
  }
}

# === Plugin Constants ===

plugin {
  tx_t3vannouncements {
    persistence {
      # cat=plugin/tx_t3vannouncements/persistence; type=boolean; label=Enables the automatic cache clearing when changing data sets
      enableAutomaticCacheClearing = 1

      # cat=plugin/tx_t3vannouncements/persistence; type=int+; label=The PID of the storage
      storagePid = 0

      # cat=plugin/tx_t3vannouncements/persistence; type=boolean; label=Updates reference index to ensure data integrity
      updateReferenceIndex = 1
    }

    settings {
      # ...
    }

    view {
      # cat=plugin/tx_t3vannouncements/view; type=string; label=The default path to the layouts
      layoutRootPath = EXT:t3v_announcements/Resources/Private/Layouts/

      # cat=plugin/tx_t3vannouncements/view; type=string; label=The default path to the templates
      templateRootPath = EXT:t3v_announcements/Resources/Private/Templates/

      # cat=plugin/tx_t3vannouncements/view; type=string; label=The default path to the partials
      partialRootPath = EXT:t3v_announcements/Resources/Private/Partials/
    }
  }
}

# === Locales ===

# --- United States: English ---

# [globalVar = GP:L = 1]
# t3v {
#   announcements {
#     config {
#       formatters {
#         date {
#           strftime = %m/%d/%Y
#         }
#
#         dateAndTime {
#           strftime = %m/%d/%Y %H:%i
#         }
#       }
#     }
#   }
# }
# [global]

# --- United Kingdom: English ---

# [globalVar = GP:L = 2]
# t3v {
#   announcements {
#     config {
#       formatters {
#         date {
#           strftime = %d/%m/%Y
#         }
#
#         dateAndTime {
#           strftime = %d/%m/%Y %H:%i
#         }
#       }
#     }
#   }
# }
# [global]

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/constants.ts">