# === T3v Announcements Configuration ===

t3v {
  announcements {
    pages {
      jobAds {
        uid = {$t3v.announcements.pages.jobAds.uid}
      }

      news {
        uid = {$t3v.announcements.pages.news.uid}
      }
    }
  }
}

# === Includes ===

<INCLUDE_TYPOSCRIPT: source="FILE: ./Vendor/setup.ts">
<INCLUDE_TYPOSCRIPT: source="FILE: ./Library/setup.ts">