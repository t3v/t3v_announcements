mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vannouncements_latestnewsarticles {
              title = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.latestNewsArticlesContentElement.title

              description = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.latestNewsArticlesContentElement.description

              iconIdentifier = t3v_announcements-latest_news_articles_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vannouncements_latestnewsarticles
              }
            }
          }

          show := addToList(t3vannouncements_latestnewsarticles)
        }
      }
    }
  }
}