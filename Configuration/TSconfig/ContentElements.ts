# === New Content Element Wizard configuration ===

# mod {
#   wizards {
#     newContentElement {
#       wizardItems {
#         contentElements {
#           header = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:mod.wizards.newContentElement.wizardItems.contentElements.header
#
#           elements {
#             # ...
#           }
#
#           show = *
#         }
#       }
#     }
#   }
# }

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./ContentElements/LatestJobAdsContentElement.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./ContentElements/JobAdsContentElement.ts">

<INCLUDE_TYPOSCRIPT: source="FILE: ./ContentElements/LatestNewsArticlesContentElement.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./ContentElements/NewsArticlesContentElement.ts">