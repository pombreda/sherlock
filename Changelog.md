Changelog
========

Master
------
 - Fix: Change default logging state to disabled [474fa95](https://github.com/polyfractal/sherlock/commit/474fa957c61b550fa043315757a4e279179dc0d8)
 - Fix: Integrate Symfony EventDispatcher to decouple nodes from Requests. [Fixes #10](https://github.com/polyfractal/sherlock/issues/10)
 - Feature: Enable custom logging handlers [Usage](https://github.com/polyfractal/sherlock/issues/12#issuecomment-14682664) [474fa95](https://github.com/polyfractal/sherlock/commit/474fa957c61b550fa043315757a4e279179dc0d8)

0.1.4
-----
 - Fix: Updated Analog dependency to remove a logging bug [4c3c69e](https://github.com/polyfractal/sherlock/commit/4c3c69e59365784e70c2ec8d0d83bc8d5a060fda)

0.1.3
------
 - Feature: Enable sorting on Search Requests
 - Fix: From/Size fixed
 - Fix: Match query now allows 'type' to be set
 - Fix: Default fuzziness for Match query set to 'null'
 - Fix: Default fuzziness for MultiMatch query set to 'null'


