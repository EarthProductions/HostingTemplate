  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<section>
<div class="container-fluid">
  <nav class="navbar bg-primary fixed-top" data-bs-theme="dark">
    
        Offcanvas
        Pagination
        Placeholders
        Popovers
        Progress
        Scrollspy
        Spinners
        Toasts
        Tooltips
    Helpers
        Clearfix
        Color & background
        Colored links
        Focus ring
        Icon link
        Position
        Ratio
        Stacks
        Stretched link
        Text truncation
        Vertical rule
        Visually hidden
    Utilities
        API
        Background
        Borders
        Colors
        Display
        Flex
        Float
        Interactions
        Link
        Object fit
        Opacity
        Overflow
        Position
        Shadows
        Sizing
        Spacing
        Text
        Vertical align
        Visibility
        Z-index
    Extend
        Approach
        Icons
    About
        Overview
        Team
        Brand
        License
        Translations
    Migration

Navbar

Documentation and examples for Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more, including support for our collapse plugin.
ads via Carbon
I've spent 2 years learning DNS while building NSLookup.io. Now, I'm teaching everything I know.
ads via Carbon
On this page

    How it works
    Supported content
        Brand
            Text
            Image
            Image and text
        Nav
        Forms
        Text
    Color schemes
    Containers
    Placement
    Scrolling
    Responsive behaviors
        Toggler
        External content
        Offcanvas
    CSS
        Variables
        Sass variables
        Sass loops

How it works

Here’s what you need to know before getting started with the navbar:

    Navbars require a wrapping .navbar with .navbar-expand{-sm|-md|-lg|-xl|-xxl} for responsive collapsing and color scheme classes.
    Navbars and their contents are fluid by default. Change the container to limit their horizontal width in different ways.
    Use our spacing and flex utility classes for controlling spacing and alignment within navbars.
    Navbars are responsive by default, but you can easily modify them to change that. Responsive behavior depends on our Collapse JavaScript plugin.
    Ensure accessibility by using a <nav> element or, if using a more generic element such as a <div>, add a role="navigation" to every navbar to explicitly identify it as a landmark region for users of assistive technologies.
    Indicate the current item by using aria-current="page" for the current page or aria-current="true" for the current item in a set.
    New in v5.2.0: Navbars can be themed with CSS variables that are scoped to the .navbar base class. .navbar-light has been deprecated and .navbar-dark has been rewritten to override CSS variables instead of adding additional styles.

The animation effect of this component is dependent on the prefers-reduced-motion media query. See the reduced motion section of our accessibility documentation.
Supported content

Navbars come with built-in support for a handful of sub-components. Choose from the following as needed:

    .navbar-brand for your company, product, or project name.
    .navbar-nav for a full-height and lightweight navigation (including support for dropdowns).
    .navbar-toggler for use with our collapse plugin and other navigation toggling behaviors.
    Flex and spacing utilities for any form controls and actions.
    .navbar-text for adding vertically centered strings of text.
    .collapse.navbar-collapse for grouping and hiding navbar contents by a parent breakpoint.
    Add an optional .navbar-scroll to set a max-height and scroll expanded navbar content.

Here’s an example of all the sub-components included in a responsive light-themed navbar that automatically collapses at the lg (large) breakpoint.
Navbar

    Home
    Link
    Dropdown
    Disabled

html

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
</nav>
</div>
</section>

