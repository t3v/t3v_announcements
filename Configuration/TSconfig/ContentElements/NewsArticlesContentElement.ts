mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vannouncements_newsarticles {
              title = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.newsArticlesContentElement.title

              description = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.newsArticlesContentElement.description

              iconIdentifier = t3v_announcements-news_articles_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vannouncements_newsarticles
              }
            }
          }

          show := addToList(t3vannouncements_newsarticles)
        }
      }
    }
  }
}