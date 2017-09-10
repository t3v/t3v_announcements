mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vannouncements_newslatestarticles {
              title = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.news.latestArticlesContentElement.title

              description = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.news.latestArticlesContentElement.description

              iconIdentifier = t3v_announcements-news_latest_articles_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vannouncements_newslatestarticles
              }
            }
          }

          show := addToList(t3vannouncements_newslatestarticles)
        }
      }
    }
  }
}