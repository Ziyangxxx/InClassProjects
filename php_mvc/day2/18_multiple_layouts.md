# Multiple Layouts

The dynamic layout is fine if you only have a section or two to worry about, but if you've got a site with multiple types of layout for different types of content, trying to make a single layout dynamic can be a frustrating experience... and one that's not necessary.

Simply create multiple layouts, one for each type of document.  With multiple layout files, you may want to store them in a sub-folder to keep them organized.

```text

-layouts
	+ default.blade.php
	+ home.blade.php
	+ blog.blade.php

```

Now, your views can extend whatever layout you need.



