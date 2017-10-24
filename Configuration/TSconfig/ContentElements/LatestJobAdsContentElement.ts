mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vannouncements_latestjobads {
              title = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.latestJobAdsContentElement.title

              description = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.latestJobAdsContentElement.description

              iconIdentifier = t3v_announcements-latest_job_ads_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vannouncements_latestjobads
              }
            }
          }

          show := addToList(t3vannouncements_latestjobads)
        }
      }
    }
  }
}