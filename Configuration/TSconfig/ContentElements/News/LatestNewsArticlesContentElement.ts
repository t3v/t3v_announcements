mod {
  wizards {
    newContentElement {
      wizardItems {
        contentElements {
          elements {
            t3vannouncements_newslatestnewsarticles {
              title = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.news.latestNewsArticlesContentElement.title

              description = LLL:EXT:t3v_announcements/Resources/Private/Language/locallang_wizard.xlf:contentElements.news.latestNewsArticlesContentElement.description

              iconIdentifier = t3v_announcements-news_latest_news_articles_content_element

              tt_content_defValues {
                CType = list

                list_type = t3vannouncements_newslatestnewsarticles
              }
            }
          }

          show := addToList(t3vannouncements_newslatestnewsarticles)
        }
      }
    }
  }
}