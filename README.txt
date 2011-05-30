Installation
------------
Enable the features and mobile tools:
  * ding_mobile
  * ding_mobile_events
  * ding_mobile_news
  * ting_search_mobile
  * mobile_tools

Note that the mobile front page is located in the ding repository. This is due
to the fact that we can not have different variants, for a single panel, in
different features.

Configuration
-------------
First go into mobile tools (admin/settings/mobile-tools) and set which urls
should be use to display the mobile version and which should be use for the
desktop version.

Next go to admin/settings/mobile-tools/themes to select which theme should be
used for the mobile version of the site. Only active themes will be avaliable.

Next go to block (admin/build/block) settings for your mobile theme and change
the block settings for "Ting search box", to not show the block title.

Troubleshooting
---------------
Q: Mobile front page, shows desktop version ?
A: Make sure that the mobile theme is actived and selected under mobile tools

Q: Showing mobile theme with desktop front page content ?
A: Go into admin/build/pages/edit/page-front_panel select Content tab and press
   "Update and Save". Then revert the panel, so that is re-reads the panel form
   code. It should contain to variants: Mobile and panel.

Q: Search is not working ?
A: Make sure that ting_search_mobile module have be enabled.