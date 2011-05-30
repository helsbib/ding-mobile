Installation
------------
Enable the features and mobile tools:
  * ding_mobile
  * ding_mobile_events
  * ding_mobile_news
  * ting_search_mobile
  * mobile_tools

Configuration
-------------
/admin/settings/mobile-tools
/admin/settings/mobile-tools/themes

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