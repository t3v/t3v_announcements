[T3v Announcements]
===================

[![Travis CI Status][Travis CI Status]][Travis CI]

**The announcements extension of TYPO3Voila.**

Dependencies
------------

* TYPO3 CMS 7.6 or greater
* Cocur/Slugify
* T3v Core extension
* T3v Content extension

Installation
------------

1. Add T3v Announcements as dependency to the [Composer] configuration
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Announcements

Models
------

* Job Ad
* News

Content Elements
----------------

* Job Ads Content Element
* Latest Job Ads Content Element
* Latest News Articles Content Element

Development
-----------

### Setup

```
$ ./Scripts/Setup.sh
```

### Run Unit Tests

```
$ ./Scripts/Tests/Unit.sh
```

### Run Functional Tests

```
$ ./Scripts/Tests/Functional.sh
```

Bug Reports
-----------

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues
and submit new problems [here].

Versioning
----------

This library aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs.
Specifically, if a minor or patch version is released that breaks backward compatibility, that version should be
immediately yanked and / or a new version should be immediately released that restores compatibility.

Credits
-------

### Icons

* [Curriculum free icon]
* [News paper free icon]

Icons made by [Smashicons] and [Vectors Market] from [Flaticon] is licensed by [CC 3.0 BY].

License
-------

T3v Announcements is released under the [MIT License (MIT)], see [LICENSE].

[Acceptance testing TYPO3]: https://wiki.typo3.org/Acceptance_testing "Acceptance testing TYPO3"
[Automated testing TYPO3]: https://wiki.typo3.org/Automated_testing "Automated testing TYPO3"
[CC 3.0 BY]: http://creativecommons.org/licenses/by/3.0/ "Creative Commons BY 3.0"
[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[Curriculum free icon]: https://www.flaticon.com/free-icon/curriculum_321882 "Curriculum free icon"
[Flaticon]: https://www.flaticon.com "Flaticon"
[Functional testing TYPO3]: https://wiki.typo3.org/Functional_testing "Functional testing TYPO3"
[here]: https://github.com/t3v/t3v_announcements/issues "GitHub Issue Tracker"
[LICENSE]: https://raw.githubusercontent.com/t3v/t3v_announcements/master/LICENSE "License"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[News paper free icon]: https://www.flaticon.com/free-icon/news-paper_269194 "News paper free icon"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[Smashicons]: https://www.flaticon.com/authors/smashicons "Smashicons"
[T3v Announcements]: https://t3v.github.io/t3v_announcements/ "The announcements extension of TYPO3Voila."
[Travis CI Status]: https://img.shields.io/travis/t3v/t3v_announcements.svg?style=flat "Travis CI Status"
[Travis CI]: https://travis-ci.org/t3v/t3v_announcements "T3v Announcements at Travis CI"
[TYPO3voila]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"
[Unit Testing TYPO3]: https://wiki.typo3.org/Unit_Testing_TYPO3 "Unit testing TYPO3"
[Vectors Market]: https://www.flaticon.com/authors/vectors-market "Vectors Market"