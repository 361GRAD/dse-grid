361 GRAD DIGITAL GmbH - Grid ELEMENT

For the moment we use our elements as single bundles.
Later we will use the dse-elements-bundle as metapackage
to implement all elements at once.

Description:
Grid-Element if active adds grid behaviour to articles and content elements.

Installation:

! Be sure you have access to gitlab via ssh or accesstoken !


1. Edit the contao composer.json and add these lines
```
"repositories": [
        {
            "type": "vcs",
            "url": "git@gitlab.com:361GRAD-Elements/dse-grid.git"
        }
],
```

2. On the cli enter and install via composer
```
composer require 361GRAD-Elements/dse-grid
```

3. Go to the contao/install and update db

4. Activate in contao layout

5. Done
