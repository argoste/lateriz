#Matchbox is a graphical environment for small screen like embedded and netbooks.
Displays one application a time. Optional title bar.
Optional menu. Optional panel. 

## EeePc setup
This is the current flow of execution on my EEEpc
with every step calling the next one.

  ...
  startx
  xinit
  sh ~/.xinitrc
  matchbox-session (a sh script) is /usr/bin/matchbox-session
  ~/.matchbox/session 