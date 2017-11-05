# === T3v Announcements Constants ===

t3v {
  announcements {
    pages {
      jobAds {
        uid =
      }

      news {
        uid =
      }
    }

    formatters {
      date {
        strftime = %d.%m.%Y
      }

      dateAndTime {
        strftime = %d.%m.%Y %H:%M
      }
    }
  }
}

# === Locales ===

# --- United States: English ---

# [globalVar = GP:L = 1]
# t3v {
#   announcements {
#     formatters {
#       date {
#         strftime = %m/%d/%Y
#       }
#
#       dateAndTime {
#         strftime = %m/%d/%Y %H:%i
#       }
#     }
#   }
# }
# [global]

# --- United Kingdom: English ---

# [globalVar = GP:L = 2]
# t3v {
#   announcements {
#     formatters {
#       date {
#         strftime = %d/%m/%Y
#       }
#
#       dateAndTime {
#         strftime = %d/%m/%Y %H:%i
#       }
#     }
#   }
# }
# [global]

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Vendor/constants.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/constants.ts">