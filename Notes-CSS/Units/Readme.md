# CSS Units
CSS offers several different units for expressing length, which can be used in various properties such as width, margin, padding, and font-size.
## Table of Contents
- [Introduction](#introduction)
- [Example](#example)
- [Absolute Lengths](#absolute-lengths)
- [Relative Lengths](#relative-lengths)
- [Browser Support](#browser-support)
## Introduction
A length in CSS is a number followed by a unit, such as `10px` or `2em`. Note that no whitespace should appear between the number and the unit. However, if the value is `0`, the unit can be omitted. For some CSS properties, negative lengths are also allowed.
## Example
Here’s an example demonstrating different length values using pixels (px):
```css
h1 {
  font-size: 60px;
}
p {
  font-size: 25px;
  line-height: 50px;
}
```
## Absolute Lengths
Absolute length units are fixed and their size will not change. These units are less suitable for screen use due to varying screen sizes but can be useful for print layouts.

| Unit | Description |
|------|-------------|
| cm   | centimeters |
| mm   | millimeters |
| in   | inches (1in = 96px = 2.54cm) |
| px * | pixels (1px = 1/96th of 1in) |
| pt   | points (1pt = 1/72 of 1in) |
| pc   | picas (1pc = 12 pt) |

*Note: Pixels (px) are relative to the viewing device. On low-dpi devices, 1px is one device pixel (dot) of the display. For printers and high-resolution screens, 1px implies multiple device pixels.

## Relative Lengths
Relative length units are based on the size of another property and scale better across different rendering mediums.

| Unit | Description |
|------|-------------|
| em   | Relative to the font-size of the element (2em means 2 times the size of the current font) |
| ex   | Relative to the x-height of the current font (rarely used) |
| ch   | Relative to the width of the "0" (zero) |
| rem  | Relative to the font-size of the root element |
| vw   | Relative to 1% of the width of the viewport* |
| vh   | Relative to 1% of the height of the viewport* |
| vmin | Relative to 1% of the viewport's* smaller dimension |
| vmax | Relative to 1% of the viewport's* larger dimension |
| %    | Relative to the parent element |

*Viewport = the browser window size. If the viewport is 50cm wide, 1vw = 0.5cm.

### Tip
The `em` and `rem` units are particularly useful for creating scalable layouts.

## Browser Support
The table below specifies the first browser versions that fully support each length unit.

| Length Unit | Chrome | Firefox | Safari | Opera | Edge |
|-------------|--------|---------|--------|-------|------|
| em, ex, %, px, cm, mm, in, pt, pc | 1.0 | 3.0 | 1.0 | 1.0 | 3.5 |
| ch | 27.0 | 9.0 | 1.0 | 7.0 | 20.0 |
| rem | 4.0 | 9.0 | 3.6 | 4.1 | 11.6 |
| vh, vw | 20.0 | 9.0 | 19.0 | 6.0 | 20.0 |
| vmin | 20.0 | 12.0 | 19.0 | 6.0 | 20.0 |
| vmax | 26.0 | 16.0 | 19.0 | 7.0 | 20.0 |
