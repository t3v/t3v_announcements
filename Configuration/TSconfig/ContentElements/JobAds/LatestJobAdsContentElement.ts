mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vannouncements_jobadslatestjobads {
              title = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.jobAds.latestJobAdsContentElement.title

              description = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.jobAds.latestJobAdsContentElement.description

              iconIdentifier = t3v_announcements-job_ads_latest_job_ads_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vannouncements_jobadslatestjobads
              }
            }
          }

          show := addToList(t3vannouncements_jobadslatestjobads)
        }
      }
    }
  }
}