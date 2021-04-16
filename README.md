# Replicate UI

Replicate UI adds a user interface to the Replicate module to manage the
cloning of entities and fields.

## Installation

- Install this module using the [official Backdrop CMS instructions](https://backdropcms.org/guide/modules).

## Dependencies

- Replicate

## Configuration and Usage

 - Configure user permissions in **Configuration > User accounts > Permissions**:
    - Replicate entities via UI

 - Makes the replicate / duplicate functionality available via the UI. Still
   requires Create permissions on an entity to display.

 - A setting has been added under **Configuration > User interface > Replicate**
   to allow you to skip the confirmation step when replicating.

 - To replicate a node, once the module is installed and enabled, edit the node.
   A new tab should appear titled 'replicate'. You will be asked if you are
   sure you want to replicate the entity. Click the replicate button to
   replicate the entity. You will then be sent to the replicated node, and
   should see a success message that the entity (old entity id) has been
   replicated to id (new entity id). You can then edit this new entity as needed.

 - Long term it would be nice to have a "Replicate" option in Operations drop
   menus and actions menus such as on the main "Content" listing page, but this
   is not functional yet.

More details may be found (or added) in the [Wiki](https://github.com/backdrop-contrib/replicate_ui/issues).

## Issues

Bugs and Feature requests should be reported in the [Issue Queue](https://github.com/backdrop-contrib/replicate_ui/issues).

## Current Maintainers

- [Laryn Kragt Bakker](https://github.com/laryn), [CEDC.org](https://CEDC.org)
- Collaboration and co-maintainers welcome!

## Credits

- Ported to Backdrop by [Laryn Kragt Bakker](https://github.com/laryn), [CEDC.org](https://CEDC.org)
- Maintained for Drupal by [Mark Milutinovic](https://www.drupal.org/u/mmilutinovic1313), [Bryan Ollendyke](https://www.drupal.org/u/btopro), and [Daniel Wehner](https://www.drupal.org/u/dawehner).
- This module was sponsored for Drupal by [Pennsylvania State University](https://www.drupal.org/pennsylvania-state-university), [ELMSLN](https://www.drupal.org/elmsln), and [Chapter Three](https://www.drupal.org/chapter-three).

## License

This project is GPL v2 software. See the LICENSE.txt file in this directory for
complete text.
