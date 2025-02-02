# CSS Counters Guide
CSS counters are "variables" maintained by CSS whose values can be incremented by CSS rules to track their usage. They allow you to adjust the appearance of content based on its placement in the document.
## Automatic Numbering with Counters
CSS counters function similarly to variables. Their values can be incremented by CSS rules, tracking their usage throughout the document.
### Key Properties and Functions
- **counter-reset**: Creates or resets a counter.
- **counter-increment**: Increments a counter value.
- **content**: Inserts generated content.
- **counter() or counters() function**: Adds the value of a counter to an element.
### Creating and Using a Counter
To use a CSS counter, it must first be created with `counter-reset`.
#### Example: Basic Counter
The following example creates a counter for the page (in the `body` selector), then increments the counter value for each `<h2>` element, adding "Section <value of the counter>:" to the beginning of each `<h2>` element:
```css
body {
  counter-reset: section;
}
h2::before {
  counter-increment: section;
  content: "Section " counter(section) ": ";
}
```

## Nesting Counters

You can create nested counters to handle hierarchical structures.

#### Example: Nested Counters
The following example creates one counter for the page (`section`) and one counter for each `<h1>` element (`subsection`). The "section" counter is incremented for each `<h1>` element, and the "subsection" counter is incremented for each `<h2>` element:

```css
body {
  counter-reset: section;
}

h1 {
  counter-reset: subsection;
}

h1::before {
  counter-increment: section;
  content: "Section " counter(section) ". ";
}

h2::before {
  counter-increment: subsection;
  content: counter(section) "." counter(subsection) " ";
}
```

### Outlined Lists with Counters
Counters are also useful for creating outlined lists. A new instance of a counter is automatically created in child elements. The `counters()` function inserts a string between different levels of nested counters:

#### Example: Outlined Lists
```css
ol {
  counter-reset: section;
  list-style-type: none;
}

li::before {
  counter-increment: section;
  content: counters(section, ".") " ";
}
```

## CSS Counter Properties

| Property           | Description                                                              |
|--------------------|--------------------------------------------------------------------------|
| **content**        | Used with the `::before` and `::after` pseudo-elements to insert generated content |
| **counter-increment** | Increments one or more counter values                                     |
| **counter-reset**     | Creates or resets one or more counters                                     |
| **counter()**         | Returns the current value of the named counter                            |
