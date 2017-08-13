CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Dependencies
 * Installation
 * Configuration
 * Maintainers


INTRODUCTION
------------

 * This provides user interface integration for the simple yet powerful Replicate
   API. Most notably, this provides integration with Drupal actions which means
   that you can start to replicate things via the user interfaces with built in
   support for:
    - Drupal core nodes
    - Drupal core actions
    - "Any" Drupal Entity available to Entity API (see hook_menu)
    - Views
    - Views Bulk Operations
    - Rules
    - Field Collections

 * For a full description of the module, visit the project page:
   https://www.drupal.org/project/replicate_ui

 * To submit bug reports and feature suggestions, or to track changes:
   https://www.drupal.org/project/issues/search/replicate_ui


DEPENDENCIES
------------

 * Replicate module: https://www.drupal.org/project/replicate


INSTALLATION
------------

 * Install as you would normally install a contributed Drupal module. Visit:
   https://drupal.org/documentation/install/modules-themes/modules-7
   for further information.


CONFIGURATION
-------------

 * Configure user permissions in Administration » People » Permissions:

    - Replicate entities via UI

 * Makes the replicate / duplicate functionality available via the UI. Still
   requires Create permissions on an entity to display.

 * The module has no menu or modifiable settings. There is no configuration.

 * To replicate a node, once the module is installed and enabled, edit the node.
   A new tab should appear titled 'replicate'. You will be asked if you are
   sure you want to replicate the entity. Click the replicate button to
   replicate the entity. You will then be sent to the replicated node, and
   should see a success message that the entity (old entity id) has been
   replicated to id (new entity id). You can then edit this new entity as needed.


MAINTAINERS
-----------

Current maintainers:
 * Mark Milutinovic (mmilutinovic1313) https://www.drupal.org/u/mmilutinovic1313
 * Bryan Ollendyke (btopro) https://www.drupal.org/u/btopro
 * Daniel Wehner (dawehner) https://www.drupal.org/u/dawehner

This module has been sponsored by:
 * Pennsylvania State University https://www.drupal.org/pennsylvania-state-university
 * ELMSLN https://www.drupal.org/elmsln
 * Chapter Three https://www.drupal.org/chapter-three
