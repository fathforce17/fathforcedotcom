<style>
@charset "UTF-8";
/*!
Theme Name: Sandbox - Modern & Multipurpose Bootstrap 5 Template
Theme URI:	https://sandbox.elemisthemes.com/
Version:	3.4.0
Author:		elemis
*/
@import url("https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700");
:root,
[data-bs-theme=light] {
  --bs-gray-100: #fefefe;
  --bs-gray-200: #f6f7f9;
  --bs-gray-300: #cacaca;
  --bs-gray-400: #aab0bc;
  --bs-gray-500: #959ca9;
  --bs-gray-600: #60697b;
  --bs-gray-700: #2f353a;
  --bs-gray-800: #21262c;
  --bs-gray-900: #1e2228;
  --bs-blue: #3f78e0;
  --bs-sky: #5eb9f0;
  --bs-purple: #747ed1;
  --bs-grape: #605dba;
  --bs-violet: #a07cc5;
  --bs-pink: #d16b86;
  --bs-fuchsia: #e668b3;
  --bs-red: #e2626b;
  --bs-orange: #f78b77;
  --bs-yellow: #fab758;
  --bs-green: #45c4a0;
  --bs-leaf: #7cb798;
  --bs-aqua: #54a8c7;
  --bs-navy: #343f52;
  --bs-ash: #9499a3;
  --bs-white: #fff;
  --bs-light: #fefefe;
  --bs-gray: #f6f7f9;
  --bs-dark: #262b32;
  --bs-primary: #3f78e0;
  --bs-secondary: #aab0bc;
  --bs-success: #45c4a0;
  --bs-info: #54a8c7;
  --bs-warning: #fab758;
  --bs-danger: #e2626b;
  --bs-blue-rgb: 63, 120, 224;
  --bs-sky-rgb: 94, 185, 240;
  --bs-purple-rgb: 116, 126, 209;
  --bs-grape-rgb: 96, 93, 186;
  --bs-violet-rgb: 160, 124, 197;
  --bs-pink-rgb: 209, 107, 134;
  --bs-fuchsia-rgb: 230, 104, 179;
  --bs-red-rgb: 226, 98, 107;
  --bs-orange-rgb: 247, 139, 119;
  --bs-yellow-rgb: 250, 183, 88;
  --bs-green-rgb: 69, 196, 160;
  --bs-leaf-rgb: 124, 183, 152;
  --bs-aqua-rgb: 84, 168, 199;
  --bs-navy-rgb: 52, 63, 82;
  --bs-ash-rgb: 148, 153, 163;
  --bs-white-rgb: 255, 255, 255;
  --bs-light-rgb: 254, 254, 254;
  --bs-gray-rgb: 246, 247, 249;
  --bs-dark-rgb: 38, 43, 50;
  --bs-primary-rgb: 63, 120, 224;
  --bs-secondary-rgb: 170, 176, 188;
  --bs-success-rgb: 69, 196, 160;
  --bs-info-rgb: 84, 168, 199;
  --bs-warning-rgb: 250, 183, 88;
  --bs-danger-rgb: 226, 98, 107;
  --bs-primary-text-emphasis: #2c549d;
  --bs-secondary-text-emphasis: #777b84;
  --bs-success-text-emphasis: #308970;
  --bs-info-text-emphasis: #3b768b;
  --bs-warning-text-emphasis: #af803e;
  --bs-danger-text-emphasis: #9e454b;
  --bs-light-text-emphasis: #b2b2b2;
  --bs-dark-text-emphasis: #1b1e23;
  --bs-primary-bg-subtle: #edf2fc;
  --bs-secondary-bg-subtle: #f7f7f9;
  --bs-success-bg-subtle: #edf9f6;
  --bs-info-bg-subtle: #eff7fa;
  --bs-warning-bg-subtle: #fff8ee;
  --bs-danger-bg-subtle: #fcf0f1;
  --bs-light-bg-subtle: #fbfbfc;
  --bs-dark-bg-subtle: #eaebec;
  --bs-soft-primary: #edf2fc;
  --bs-soft-blue: #edf2fc;
  --bs-soft-sky: #f0f8fe;
  --bs-soft-purple: #f2f3fb;
  --bs-soft-grape: #f0f0f8;
  --bs-soft-violet: #f6f3f9;
  --bs-soft-pink: #fbf1f4;
  --bs-soft-fuchsia: #fdf1f8;
  --bs-soft-red: #fcf0f1;
  --bs-soft-orange: #fef4f2;
  --bs-soft-yellow: #fff8ee;
  --bs-soft-green: #edf9f6;
  --bs-soft-leaf: #f3f8f5;
  --bs-soft-aqua: #eff7fa;
  --bs-soft-navy: #ecedef;
  --bs-soft-ash: #f5f5f6;
  --bs-soft-gray: rgba(164, 174, 198, 0.2);
  --bs-pale-primary: #e0e9fa;
  --bs-pale-blue: #e0e9fa;
  --bs-pale-sky: #e5f4fd;
  --bs-pale-purple: #e9eaf8;
  --bs-pale-grape: #e6e5f4;
  --bs-pale-violet: #f0eaf6;
  --bs-pale-pink: #f8e7ec;
  --bs-pale-fuchsia: #fbe7f3;
  --bs-pale-red: #fae6e7;
  --bs-pale-orange: #feece9;
  --bs-pale-yellow: #fef3e4;
  --bs-pale-green: #e1f6f0;
  --bs-pale-leaf: #eaf3ef;
  --bs-pale-aqua: #e4f1f6;
  --bs-pale-navy: #dfe0e3;
  --bs-pale-dark: #dcddde;
  --bs-pale-ash: rgba(164, 174, 198, 0.2);
  --bs-bullet-soft-primary: #dce7f9;
  --bs-bullet-soft-blue: #dce7f9;
  --bs-bullet-soft-sky: #e2f2fc;
  --bs-bullet-soft-purple: #e6e8f7;
  --bs-bullet-soft-grape: #e2e2f3;
  --bs-bullet-soft-violet: #eee7f5;
  --bs-bullet-soft-pink: #f7e4e9;
  --bs-bullet-soft-fuchsia: #fbe4f1;
  --bs-bullet-soft-red: #fae3e4;
  --bs-bullet-soft-orange: #feeae7;
  --bs-bullet-soft-yellow: #feeed9;
  --bs-bullet-soft-green: #def4ee;
  --bs-bullet-soft-leaf: #e7f2ec;
  --bs-bullet-soft-aqua: #e0eff5;
  --bs-bullet-soft-navy: #dadce0;
  --bs-bullet-soft-ash: #ecedee;
  --bs-icon-fill-primary: #8caeec;
  --bs-icon-fill-blue: #8caeec;
  --bs-icon-fill-sky: #9ed5f6;
  --bs-icon-fill-purple: #acb2e3;
  --bs-icon-fill-grape: #a09ed6;
  --bs-icon-fill-violet: #c6b0dc;
  --bs-icon-fill-pink: #e3a6b6;
  --bs-icon-fill-fuchsia: #f0a4d1;
  --bs-icon-fill-red: #eea1a6;
  --bs-icon-fill-orange: #fab9ad;
  --bs-icon-fill-yellow: #fcd49b;
  --bs-icon-fill-green: #8fdcc6;
  --bs-icon-fill-leaf: #b0d4c1;
  --bs-icon-fill-aqua: #98cbdd;
  --bs-icon-fill-navy: #858c97;
  --bs-icon-fill-ash: #bfc2c8;
  --bs-icon-solid-fill-primary: #b2c9f3;
  --bs-icon-solid-fill-blue: #b2c9f3;
  --bs-icon-solid-fill-sky: #bfe3f9;
  --bs-icon-solid-fill-purple: #c7cbed;
  --bs-icon-solid-fill-grape: #bfbee3;
  --bs-icon-solid-fill-violet: #d9cbe8;
  --bs-icon-solid-fill-pink: #edc4cf;
  --bs-icon-solid-fill-fuchsia: #f5c3e1;
  --bs-icon-solid-fill-red: #f3c0c4;
  --bs-icon-solid-fill-orange: #fcd1c9;
  --bs-icon-solid-fill-yellow: #fde2bc;
  --bs-icon-solid-fill-green: #b5e7d9;
  --bs-icon-solid-fill-leaf: #cbe2d6;
  --bs-icon-solid-fill-aqua: #bbdce9;
  --bs-icon-solid-fill-navy: #aeb2ba;
  --bs-icon-solid-fill-ash: #d4d6da;
  --bs-border-soft-primary: #c5d7f6;
  --bs-border-soft-blue: #c5d7f6;
  --bs-border-soft-sky: #cfeafb;
  --bs-border-soft-purple: #d5d8f1;
  --bs-border-soft-grape: #cfceea;
  --bs-border-soft-violet: #e3d8ee;
  --bs-border-soft-pink: #f1d3db;
  --bs-border-soft-fuchsia: #f8d2e8;
  --bs-border-soft-red: #f6d0d3;
  --bs-border-soft-orange: #fddcd6;
  --bs-border-soft-yellow: #fee9cd;
  --bs-border-soft-green: #c7ede3;
  --bs-border-soft-leaf: #d8e9e0;
  --bs-border-soft-aqua: #cce5ee;
  --bs-border-soft-navy: #c2c5cb;
  --bs-border-soft-ash: #dfe0e3;
  --bs-border-subtle-primary: #c5d7f6;
  --bs-border-subtle-secondary: #e6e7eb;
  --bs-border-subtle-success: #c7ede3;
  --bs-border-subtle-info: #cce5ee;
  --bs-border-subtle-warning: #fee9cd;
  --bs-border-subtle-danger: #f6d0d3;
  --bs-border-subtle-light: #f6f7f9;
  --bs-border-subtle-dark: #bebfc2;
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 0, 0, 0;
  --bs-font-sans-serif: "Manrope", sans-serif;
  --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-root-font-size: 20px;
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 0.8rem;
  --bs-body-font-weight: 500;
  --bs-body-line-height: 1.7;
  --bs-body-color: #60697b;
  --bs-body-color-rgb: 96, 105, 123;
  --bs-body-bg: #fefefe;
  --bs-body-bg-rgb: 254, 254, 254;
  --bs-emphasis-color: #000;
  --bs-emphasis-color-rgb: 0, 0, 0;
  --bs-secondary-color: rgba(96, 105, 123, 0.75);
  --bs-secondary-color-rgb: 96, 105, 123;
  --bs-secondary-bg: #f6f7f9;
  --bs-secondary-bg-rgb: 246, 247, 249;
  --bs-tertiary-color: rgba(96, 105, 123, 0.5);
  --bs-tertiary-color-rgb: 96, 105, 123;
  --bs-tertiary-bg: #fefefe;
  --bs-tertiary-bg-rgb: 254, 254, 254;
  --bs-heading-color: #343f52;
  --bs-link-color: #3f78e0;
  --bs-link-color-rgb: 63, 120, 224;
  --bs-link-decoration: none;
  --bs-link-hover-color: #3f78e0;
  --bs-link-hover-color-rgb: 63, 120, 224;
  --bs-code-color: #60697b;
  --bs-highlight-bg: #fef1de;
  --bs-border-width: 1px;
  --bs-border-style: solid;
  --bs-border-color: #cacaca;
  --bs-border-color-translucent: rgba(0, 0, 0, 0.175);
  --bs-border-radius: 0.4rem;
  --bs-border-radius-sm: 0.2rem;
  --bs-border-radius-lg: 0.4rem;
  --bs-border-radius-xl: 0.8rem;
  --bs-border-radius-xxl: 2rem;
  --bs-border-radius-2xl: var(--bs-border-radius-xxl);
  --bs-border-radius-pill: 50rem;
  --bs-box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  --bs-box-shadow-sm: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
  --bs-box-shadow-lg: 0rem 0.25rem 1.75rem rgba(30, 34, 40, 0.07);
  --bs-box-shadow-inset: inset 0 1px 2px rgba(0, 0, 0, 0.075);
  --bs-focus-ring-width: 0.25rem;
  --bs-focus-ring-opacity: 0.25;
  --bs-focus-ring-color: rgba(63, 120, 224, 0.25);
  --bs-form-valid-color: #198754;
  --bs-form-valid-border-color: #198754;
  --bs-form-invalid-color: #dc3545;
  --bs-form-invalid-border-color: #dc3545;
}
*,
*::before,
*::after {
  box-sizing: border-box;
}
:root {
  font-size: var(--bs-root-font-size);
}
body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
hr {
  margin: 4.5rem 0;
  color: rgba(164, 174, 198, 0.2);
  border: 0;
  border-top: var(--bs-border-width) solid;
  opacity: 1;
}
h6,
.h6,
h5,
.h5,
h4,
.h4,
h3,
.h3,
h2,
.h2,
h1,
.h1 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 700;
  line-height: 1.2;
  color: var(--bs-heading-color);
}
h1,
.h1 {
  font-size: calc(1.27rem + 0.24vw);
}
@media (min-width: 1200px) {
  h1,
  .h1 {
    font-size: 1.45rem;
  }
}
h2,
.h2 {
  font-size: calc(1.255rem + 0.06vw);
}
@media (min-width: 1200px) {
  h2,
  .h2 {
    font-size: 1.3rem;
  }
}
h3,
.h3 {
  font-size: 1.1rem;
}
h4,
.h4 {
  font-size: 0.95rem;
}
h5,
.h5 {
  font-size: 0.9rem;
}
h6,
.h6 {
  font-size: 0.85rem;
}
p {
  margin-top: 0;
  margin-bottom: 1rem;
}
abbr[title] {
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
  text-decoration-skip-ink: none;
}
address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}
ol,
ul {
  padding-left: 2rem;
}
ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}
ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}
dt {
  font-weight: 700;
}
dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}
blockquote {
  margin: 0 0 1rem;
}
b,
strong {
  font-weight: bolder;
}
small,
.small {
  font-size: 0.6rem;
}
mark,
.mark {
  padding: 0.05rem 0.4rem 0.2rem;
  background-color: var(--bs-highlight-bg);
}
sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}
sub {
  bottom: -0.25em;
}
sup {
  top: -0.5em;
}
a {
  color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
  text-decoration: none;
}
a:hover {
  --bs-link-color-rgb: var(--bs-link-hover-color-rgb);
}
a:not([href]):not([class]),
a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}
pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
}
pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 0.65rem;
  color: #273444;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}
code {
  font-size: 0.65rem;
  color: var(--bs-code-color);
  word-wrap: break-word;
}
a>code {
  color: inherit;
}
kbd {
  padding: 0.1875rem 0.375rem;
  font-size: 0.65rem;
  color: #60697b;
  background-color: var(--bs-body-color);
  border-radius: 0.2rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
}
figure {
  margin: 0 0 1rem;
}
img,
svg {
  vertical-align: middle;
}
table {
  caption-side: bottom;
  border-collapse: collapse;
}
caption {
  padding-top: 0.9rem;
  padding-bottom: 0.9rem;
  color: #aab0bc;
  text-align: left;
}
th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}
thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}
label {
  display: inline-block;
}
button {
  border-radius: 0;
}
button:focus:not(:focus-visible) {
  outline: 0;
}
input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
button,
select {
  text-transform: none;
}
[role=button] {
  cursor: pointer;
}
select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}
[list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
  display: none !important;
}
button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}
::-moz-focus-inner {
  padding: 0;
  border-style: none;
}
textarea {
  resize: vertical;
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend+* {
  clear: left;
}
::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}
::-webkit-inner-spin-button {
  height: auto;
}
[type=search] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}
/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}
::-webkit-color-swatch-wrapper {
  padding: 0;
}
::file-selector-button {
  font: inherit;
  -webkit-appearance: button;
}
output {
  display: inline-block;
}
iframe {
  border: 0;
}
summary {
  display: list-item;
  cursor: pointer;
}
progress {
  vertical-align: baseline;
}
[hidden] {
  display: none !important;
}
.lead {
  font-size: 0.9rem;
  font-weight: 500;
}
.display-1 {
  font-size: calc(1.365rem + 1.38vw);
  font-weight: 700;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 2.4rem;
  }
}
.display-2 {
  font-size: calc(1.345rem + 1.14vw);
  font-weight: 700;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 2.2rem;
  }
}
.display-3 {
  font-size: calc(1.325rem + 0.9vw);
  font-weight: 700;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 2rem;
  }
}
.display-4 {
  font-size: calc(1.305rem + 0.66vw);
  font-weight: 700;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 1.8rem;
  }
}
.display-5 {
  font-size: calc(1.285rem + 0.42vw);
  font-weight: 700;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 1.6rem;
  }
}
.display-6 {
  font-size: calc(1.265rem + 0.18vw);
  font-weight: 700;
  line-height: 1.2;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 1.4rem;
  }
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
}
.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}
.initialism {
  font-size: 0.6rem;
  text-transform: uppercase;
}
.blockquote {
  margin-bottom: 1rem;
  font-size: 0.85rem;
}
.blockquote> :last-child {
  margin-bottom: 0;
}
.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 0.6rem;
  color: #aab0bc;
}
.blockquote-footer::before {
  content: "\2014\a0";
}
.img-fluid {
  max-width: 100%;
  height: auto;
}
.img-thumbnail {
  padding: 0.25rem;
  background-color: var(--bs-body-bg);
  border: var(--bs-border-width) solid var(--bs-border-color);
  border-radius: var(--bs-border-radius);
  box-shadow: var(--bs-box-shadow-sm);
  max-width: 100%;
  height: auto;
}
.figure {
  display: inline-block;
}
.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}
.figure-caption {
  font-size: 0.6rem;
  color: var(--bs-secondary-color);
}
.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 576px) {
  .container-sm,
  .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md,
  .container-sm,
  .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg,
  .container-md,
  .container-sm,
  .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl,
  .container-lg,
  .container-md,
  .container-sm,
  .container {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-xxl,
  .container-xl,
  .container-lg,
  .container-md,
  .container-sm,
  .container {
    max-width: 1320px;
  }
}
:root {
  --bs-breakpoint-xs: 0;
  --bs-breakpoint-sm: 576px;
  --bs-breakpoint-md: 768px;
  --bs-breakpoint-lg: 992px;
  --bs-breakpoint-xl: 1200px;
  --bs-breakpoint-xxl: 1400px;
}
.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row>* {
  flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}
.col {
  flex: 1 0 0%;
}
.row-cols-auto>* {
  flex: 0 0 auto;
  width: auto;
}
.row-cols-1>* {
  flex: 0 0 auto;
  width: 100%;
}
.row-cols-2>* {
  flex: 0 0 auto;
  width: 50%;
}
.row-cols-3>* {
  flex: 0 0 auto;
  width: 33.3333333333%;
}
.row-cols-4>* {
  flex: 0 0 auto;
  width: 25%;
}
.row-cols-5>* {
  flex: 0 0 auto;
  width: 20%;
}
.row-cols-6>* {
  flex: 0 0 auto;
  width: 16.6666666667%;
}
.row-cols-7>* {
  flex: 0 0 auto;
  width: 14.2857142857%;
}
.row-cols-8>* {
  flex: 0 0 auto;
  width: 12.5%;
}
.row-cols-9>* {
  flex: 0 0 auto;
  width: 11.1111111111%;
}
.row-cols-10>* {
  flex: 0 0 auto;
  width: 10%;
}
.row-cols-11>* {
  flex: 0 0 auto;
  width: 9.0909090909%;
}
.row-cols-12>* {
  flex: 0 0 auto;
  width: 8.3333333333%;
}
.col-auto {
  flex: 0 0 auto;
  width: auto;
}
.col-1 {
  flex: 0 0 auto;
  width: 8.33333333%;
}
.col-2 {
  flex: 0 0 auto;
  width: 16.66666667%;
}
.col-3 {
  flex: 0 0 auto;
  width: 25%;
}
.col-4 {
  flex: 0 0 auto;
  width: 33.33333333%;
}
.col-5 {
  flex: 0 0 auto;
  width: 41.66666667%;
}
.col-6 {
  flex: 0 0 auto;
  width: 50%;
}
.col-7 {
  flex: 0 0 auto;
  width: 58.33333333%;
}
.col-8 {
  flex: 0 0 auto;
  width: 66.66666667%;
}
.col-9 {
  flex: 0 0 auto;
  width: 75%;
}
.col-10 {
  flex: 0 0 auto;
  width: 83.33333333%;
}
.col-11 {
  flex: 0 0 auto;
  width: 91.66666667%;
}
.col-12 {
  flex: 0 0 auto;
  width: 100%;
}
.offset-1 {
  margin-left: 8.33333333%;
}
.offset-2 {
  margin-left: 16.66666667%;
}
.offset-3 {
  margin-left: 25%;
}
.offset-4 {
  margin-left: 33.33333333%;
}
.offset-5 {
  margin-left: 41.66666667%;
}
.offset-6 {
  margin-left: 50%;
}
.offset-7 {
  margin-left: 58.33333333%;
}
.offset-8 {
  margin-left: 66.66666667%;
}
.offset-9 {
  margin-left: 75%;
}
.offset-10 {
  margin-left: 83.33333333%;
}
.offset-11 {
  margin-left: 91.66666667%;
}
.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}
.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}
.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}
.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}
.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}
.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}
.g-3,
.gx-3 {
  --bs-gutter-x: 0.75rem;
}
.g-3,
.gy-3 {
  --bs-gutter-y: 0.75rem;
}
.g-4,
.gx-4 {
  --bs-gutter-x: 1rem;
}
.g-4,
.gy-4 {
  --bs-gutter-y: 1rem;
}
.g-5,
.gx-5 {
  --bs-gutter-x: 1.25rem;
}
.g-5,
.gy-5 {
  --bs-gutter-y: 1.25rem;
}
.g-6,
.gx-6 {
  --bs-gutter-x: 1.5rem;
}
.g-6,
.gy-6 {
  --bs-gutter-y: 1.5rem;
}
.g-7,
.gx-7 {
  --bs-gutter-x: 1.75rem;
}
.g-7,
.gy-7 {
  --bs-gutter-y: 1.75rem;
}
.g-8,
.gx-8 {
  --bs-gutter-x: 2rem;
}
.g-8,
.gy-8 {
  --bs-gutter-y: 2rem;
}
.g-9,
.gx-9 {
  --bs-gutter-x: 2.25rem;
}
.g-9,
.gy-9 {
  --bs-gutter-y: 2.25rem;
}
.g-10,
.gx-10 {
  --bs-gutter-x: 2.5rem;
}
.g-10,
.gy-10 {
  --bs-gutter-y: 2.5rem;
}
.g-11,
.gx-11 {
  --bs-gutter-x: 3rem;
}
.g-11,
.gy-11 {
  --bs-gutter-y: 3rem;
}
.g-12,
.gx-12 {
  --bs-gutter-x: 3.5rem;
}
.g-12,
.gy-12 {
  --bs-gutter-y: 3.5rem;
}
.g-13,
.gx-13 {
  --bs-gutter-x: 4rem;
}
.g-13,
.gy-13 {
  --bs-gutter-y: 4rem;
}
.g-14,
.gx-14 {
  --bs-gutter-x: 4.5rem;
}
.g-14,
.gy-14 {
  --bs-gutter-y: 4.5rem;
}
.g-15,
.gx-15 {
  --bs-gutter-x: 5rem;
}
.g-15,
.gy-15 {
  --bs-gutter-y: 5rem;
}
.g-16,
.gx-16 {
  --bs-gutter-x: 6rem;
}
.g-16,
.gy-16 {
  --bs-gutter-y: 6rem;
}
.g-17,
.gx-17 {
  --bs-gutter-x: 7rem;
}
.g-17,
.gy-17 {
  --bs-gutter-y: 7rem;
}
.g-18,
.gx-18 {
  --bs-gutter-x: 8rem;
}
.g-18,
.gy-18 {
  --bs-gutter-y: 8rem;
}
.g-19,
.gx-19 {
  --bs-gutter-x: 9rem;
}
.g-19,
.gy-19 {
  --bs-gutter-y: 9rem;
}
.g-20,
.gx-20 {
  --bs-gutter-x: 10rem;
}
.g-20,
.gy-20 {
  --bs-gutter-y: 10rem;
}
.g-21,
.gx-21 {
  --bs-gutter-x: 12.5rem;
}
.g-21,
.gy-21 {
  --bs-gutter-y: 12.5rem;
}
.g-22,
.gx-22 {
  --bs-gutter-x: 15rem;
}
.g-22,
.gy-22 {
  --bs-gutter-y: 15rem;
}
.g-23,
.gx-23 {
  --bs-gutter-x: 17.5rem;
}
.g-23,
.gy-23 {
  --bs-gutter-y: 17.5rem;
}
.g-24,
.gx-24 {
  --bs-gutter-x: 20rem;
}
.g-24,
.gy-24 {
  --bs-gutter-y: 20rem;
}
.g-25,
.gx-25 {
  --bs-gutter-x: 22.5rem;
}
.g-25,
.gy-25 {
  --bs-gutter-y: 22.5rem;
}
@media (min-width: 576px) {
  .col-sm {
    flex: 1 0 0%;
  }
  .row-cols-sm-auto>* {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1>* {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2>* {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3>* {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-sm-4>* {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5>* {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6>* {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .row-cols-sm-7>* {
    flex: 0 0 auto;
    width: 14.2857142857%;
  }
  .row-cols-sm-8>* {
    flex: 0 0 auto;
    width: 12.5%;
  }
  .row-cols-sm-9>* {
    flex: 0 0 auto;
    width: 11.1111111111%;
  }
  .row-cols-sm-10>* {
    flex: 0 0 auto;
    width: 10%;
  }
  .row-cols-sm-11>* {
    flex: 0 0 auto;
    width: 9.0909090909%;
  }
  .row-cols-sm-12>* {
    flex: 0 0 auto;
    width: 8.3333333333%;
  }
  .col-sm-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-sm-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-sm-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-sm-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-sm-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-sm-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-sm-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-sm-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0;
  }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0;
  }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 0.75rem;
  }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 0.75rem;
  }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1rem;
  }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1rem;
  }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 1.25rem;
  }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 1.25rem;
  }
  .g-sm-6,
  .gx-sm-6 {
    --bs-gutter-x: 1.5rem;
  }
  .g-sm-6,
  .gy-sm-6 {
    --bs-gutter-y: 1.5rem;
  }
  .g-sm-7,
  .gx-sm-7 {
    --bs-gutter-x: 1.75rem;
  }
  .g-sm-7,
  .gy-sm-7 {
    --bs-gutter-y: 1.75rem;
  }
  .g-sm-8,
  .gx-sm-8 {
    --bs-gutter-x: 2rem;
  }
  .g-sm-8,
  .gy-sm-8 {
    --bs-gutter-y: 2rem;
  }
  .g-sm-9,
  .gx-sm-9 {
    --bs-gutter-x: 2.25rem;
  }
  .g-sm-9,
  .gy-sm-9 {
    --bs-gutter-y: 2.25rem;
  }
  .g-sm-10,
  .gx-sm-10 {
    --bs-gutter-x: 2.5rem;
  }
  .g-sm-10,
  .gy-sm-10 {
    --bs-gutter-y: 2.5rem;
  }
  .g-sm-11,
  .gx-sm-11 {
    --bs-gutter-x: 3rem;
  }
  .g-sm-11,
  .gy-sm-11 {
    --bs-gutter-y: 3rem;
  }
  .g-sm-12,
  .gx-sm-12 {
    --bs-gutter-x: 3.5rem;
  }
  .g-sm-12,
  .gy-sm-12 {
    --bs-gutter-y: 3.5rem;
  }
  .g-sm-13,
  .gx-sm-13 {
    --bs-gutter-x: 4rem;
  }
  .g-sm-13,
  .gy-sm-13 {
    --bs-gutter-y: 4rem;
  }
  .g-sm-14,
  .gx-sm-14 {
    --bs-gutter-x: 4.5rem;
  }
  .g-sm-14,
  .gy-sm-14 {
    --bs-gutter-y: 4.5rem;
  }
  .g-sm-15,
  .gx-sm-15 {
    --bs-gutter-x: 5rem;
  }
  .g-sm-15,
  .gy-sm-15 {
    --bs-gutter-y: 5rem;
  }
  .g-sm-16,
  .gx-sm-16 {
    --bs-gutter-x: 6rem;
  }
  .g-sm-16,
  .gy-sm-16 {
    --bs-gutter-y: 6rem;
  }
  .g-sm-17,
  .gx-sm-17 {
    --bs-gutter-x: 7rem;
  }
  .g-sm-17,
  .gy-sm-17 {
    --bs-gutter-y: 7rem;
  }
  .g-sm-18,
  .gx-sm-18 {
    --bs-gutter-x: 8rem;
  }
  .g-sm-18,
  .gy-sm-18 {
    --bs-gutter-y: 8rem;
  }
  .g-sm-19,
  .gx-sm-19 {
    --bs-gutter-x: 9rem;
  }
  .g-sm-19,
  .gy-sm-19 {
    --bs-gutter-y: 9rem;
  }
  .g-sm-20,
  .gx-sm-20 {
    --bs-gutter-x: 10rem;
  }
  .g-sm-20,
  .gy-sm-20 {
    --bs-gutter-y: 10rem;
  }
  .g-sm-21,
  .gx-sm-21 {
    --bs-gutter-x: 12.5rem;
  }
  .g-sm-21,
  .gy-sm-21 {
    --bs-gutter-y: 12.5rem;
  }
  .g-sm-22,
  .gx-sm-22 {
    --bs-gutter-x: 15rem;
  }
  .g-sm-22,
  .gy-sm-22 {
    --bs-gutter-y: 15rem;
  }
  .g-sm-23,
  .gx-sm-23 {
    --bs-gutter-x: 17.5rem;
  }
  .g-sm-23,
  .gy-sm-23 {
    --bs-gutter-y: 17.5rem;
  }
  .g-sm-24,
  .gx-sm-24 {
    --bs-gutter-x: 20rem;
  }
  .g-sm-24,
  .gy-sm-24 {
    --bs-gutter-y: 20rem;
  }
  .g-sm-25,
  .gx-sm-25 {
    --bs-gutter-x: 22.5rem;
  }
  .g-sm-25,
  .gy-sm-25 {
    --bs-gutter-y: 22.5rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    flex: 1 0 0%;
  }
  .row-cols-md-auto>* {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1>* {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2>* {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3>* {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-md-4>* {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5>* {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6>* {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .row-cols-md-7>* {
    flex: 0 0 auto;
    width: 14.2857142857%;
  }
  .row-cols-md-8>* {
    flex: 0 0 auto;
    width: 12.5%;
  }
  .row-cols-md-9>* {
    flex: 0 0 auto;
    width: 11.1111111111%;
  }
  .row-cols-md-10>* {
    flex: 0 0 auto;
    width: 10%;
  }
  .row-cols-md-11>* {
    flex: 0 0 auto;
    width: 9.0909090909%;
  }
  .row-cols-md-12>* {
    flex: 0 0 auto;
    width: 8.3333333333%;
  }
  .col-md-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-md-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-md-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-md-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-md-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-md-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-md-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-md-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0;
  }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0;
  }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 0.75rem;
  }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 0.75rem;
  }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1rem;
  }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1rem;
  }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 1.25rem;
  }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 1.25rem;
  }
  .g-md-6,
  .gx-md-6 {
    --bs-gutter-x: 1.5rem;
  }
  .g-md-6,
  .gy-md-6 {
    --bs-gutter-y: 1.5rem;
  }
  .g-md-7,
  .gx-md-7 {
    --bs-gutter-x: 1.75rem;
  }
  .g-md-7,
  .gy-md-7 {
    --bs-gutter-y: 1.75rem;
  }
  .g-md-8,
  .gx-md-8 {
    --bs-gutter-x: 2rem;
  }
  .g-md-8,
  .gy-md-8 {
    --bs-gutter-y: 2rem;
  }
  .g-md-9,
  .gx-md-9 {
    --bs-gutter-x: 2.25rem;
  }
  .g-md-9,
  .gy-md-9 {
    --bs-gutter-y: 2.25rem;
  }
  .g-md-10,
  .gx-md-10 {
    --bs-gutter-x: 2.5rem;
  }
  .g-md-10,
  .gy-md-10 {
    --bs-gutter-y: 2.5rem;
  }
  .g-md-11,
  .gx-md-11 {
    --bs-gutter-x: 3rem;
  }
  .g-md-11,
  .gy-md-11 {
    --bs-gutter-y: 3rem;
  }
  .g-md-12,
  .gx-md-12 {
    --bs-gutter-x: 3.5rem;
  }
  .g-md-12,
  .gy-md-12 {
    --bs-gutter-y: 3.5rem;
  }
  .g-md-13,
  .gx-md-13 {
    --bs-gutter-x: 4rem;
  }
  .g-md-13,
  .gy-md-13 {
    --bs-gutter-y: 4rem;
  }
  .g-md-14,
  .gx-md-14 {
    --bs-gutter-x: 4.5rem;
  }
  .g-md-14,
  .gy-md-14 {
    --bs-gutter-y: 4.5rem;
  }
  .g-md-15,
  .gx-md-15 {
    --bs-gutter-x: 5rem;
  }
  .g-md-15,
  .gy-md-15 {
    --bs-gutter-y: 5rem;
  }
  .g-md-16,
  .gx-md-16 {
    --bs-gutter-x: 6rem;
  }
  .g-md-16,
  .gy-md-16 {
    --bs-gutter-y: 6rem;
  }
  .g-md-17,
  .gx-md-17 {
    --bs-gutter-x: 7rem;
  }
  .g-md-17,
  .gy-md-17 {
    --bs-gutter-y: 7rem;
  }
  .g-md-18,
  .gx-md-18 {
    --bs-gutter-x: 8rem;
  }
  .g-md-18,
  .gy-md-18 {
    --bs-gutter-y: 8rem;
  }
  .g-md-19,
  .gx-md-19 {
    --bs-gutter-x: 9rem;
  }
  .g-md-19,
  .gy-md-19 {
    --bs-gutter-y: 9rem;
  }
  .g-md-20,
  .gx-md-20 {
    --bs-gutter-x: 10rem;
  }
  .g-md-20,
  .gy-md-20 {
    --bs-gutter-y: 10rem;
  }
  .g-md-21,
  .gx-md-21 {
    --bs-gutter-x: 12.5rem;
  }
  .g-md-21,
  .gy-md-21 {
    --bs-gutter-y: 12.5rem;
  }
  .g-md-22,
  .gx-md-22 {
    --bs-gutter-x: 15rem;
  }
  .g-md-22,
  .gy-md-22 {
    --bs-gutter-y: 15rem;
  }
  .g-md-23,
  .gx-md-23 {
    --bs-gutter-x: 17.5rem;
  }
  .g-md-23,
  .gy-md-23 {
    --bs-gutter-y: 17.5rem;
  }
  .g-md-24,
  .gx-md-24 {
    --bs-gutter-x: 20rem;
  }
  .g-md-24,
  .gy-md-24 {
    --bs-gutter-y: 20rem;
  }
  .g-md-25,
  .gx-md-25 {
    --bs-gutter-x: 22.5rem;
  }
  .g-md-25,
  .gy-md-25 {
    --bs-gutter-y: 22.5rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    flex: 1 0 0%;
  }
  .row-cols-lg-auto>* {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1>* {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2>* {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3>* {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-lg-4>* {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5>* {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6>* {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .row-cols-lg-7>* {
    flex: 0 0 auto;
    width: 14.2857142857%;
  }
  .row-cols-lg-8>* {
    flex: 0 0 auto;
    width: 12.5%;
  }
  .row-cols-lg-9>* {
    flex: 0 0 auto;
    width: 11.1111111111%;
  }
  .row-cols-lg-10>* {
    flex: 0 0 auto;
    width: 10%;
  }
  .row-cols-lg-11>* {
    flex: 0 0 auto;
    width: 9.0909090909%;
  }
  .row-cols-lg-12>* {
    flex: 0 0 auto;
    width: 8.3333333333%;
  }
  .col-lg-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-lg-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-lg-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-lg-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-lg-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-lg-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-lg-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0;
  }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0;
  }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 0.75rem;
  }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 0.75rem;
  }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1rem;
  }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1rem;
  }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 1.25rem;
  }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 1.25rem;
  }
  .g-lg-6,
  .gx-lg-6 {
    --bs-gutter-x: 1.5rem;
  }
  .g-lg-6,
  .gy-lg-6 {
    --bs-gutter-y: 1.5rem;
  }
  .g-lg-7,
  .gx-lg-7 {
    --bs-gutter-x: 1.75rem;
  }
  .g-lg-7,
  .gy-lg-7 {
    --bs-gutter-y: 1.75rem;
  }
  .g-lg-8,
  .gx-lg-8 {
    --bs-gutter-x: 2rem;
  }
  .g-lg-8,
  .gy-lg-8 {
    --bs-gutter-y: 2rem;
  }
  .g-lg-9,
  .gx-lg-9 {
    --bs-gutter-x: 2.25rem;
  }
  .g-lg-9,
  .gy-lg-9 {
    --bs-gutter-y: 2.25rem;
  }
  .g-lg-10,
  .gx-lg-10 {
    --bs-gutter-x: 2.5rem;
  }
  .g-lg-10,
  .gy-lg-10 {
    --bs-gutter-y: 2.5rem;
  }
  .g-lg-11,
  .gx-lg-11 {
    --bs-gutter-x: 3rem;
  }
  .g-lg-11,
  .gy-lg-11 {
    --bs-gutter-y: 3rem;
  }
  .g-lg-12,
  .gx-lg-12 {
    --bs-gutter-x: 3.5rem;
  }
  .g-lg-12,
  .gy-lg-12 {
    --bs-gutter-y: 3.5rem;
  }
  .g-lg-13,
  .gx-lg-13 {
    --bs-gutter-x: 4rem;
  }
  .g-lg-13,
  .gy-lg-13 {
    --bs-gutter-y: 4rem;
  }
  .g-lg-14,
  .gx-lg-14 {
    --bs-gutter-x: 4.5rem;
  }
  .g-lg-14,
  .gy-lg-14 {
    --bs-gutter-y: 4.5rem;
  }
  .g-lg-15,
  .gx-lg-15 {
    --bs-gutter-x: 5rem;
  }
  .g-lg-15,
  .gy-lg-15 {
    --bs-gutter-y: 5rem;
  }
  .g-lg-16,
  .gx-lg-16 {
    --bs-gutter-x: 6rem;
  }
  .g-lg-16,
  .gy-lg-16 {
    --bs-gutter-y: 6rem;
  }
  .g-lg-17,
  .gx-lg-17 {
    --bs-gutter-x: 7rem;
  }
  .g-lg-17,
  .gy-lg-17 {
    --bs-gutter-y: 7rem;
  }
  .g-lg-18,
  .gx-lg-18 {
    --bs-gutter-x: 8rem;
  }
  .g-lg-18,
  .gy-lg-18 {
    --bs-gutter-y: 8rem;
  }
  .g-lg-19,
  .gx-lg-19 {
    --bs-gutter-x: 9rem;
  }
  .g-lg-19,
  .gy-lg-19 {
    --bs-gutter-y: 9rem;
  }
  .g-lg-20,
  .gx-lg-20 {
    --bs-gutter-x: 10rem;
  }
  .g-lg-20,
  .gy-lg-20 {
    --bs-gutter-y: 10rem;
  }
  .g-lg-21,
  .gx-lg-21 {
    --bs-gutter-x: 12.5rem;
  }
  .g-lg-21,
  .gy-lg-21 {
    --bs-gutter-y: 12.5rem;
  }
  .g-lg-22,
  .gx-lg-22 {
    --bs-gutter-x: 15rem;
  }
  .g-lg-22,
  .gy-lg-22 {
    --bs-gutter-y: 15rem;
  }
  .g-lg-23,
  .gx-lg-23 {
    --bs-gutter-x: 17.5rem;
  }
  .g-lg-23,
  .gy-lg-23 {
    --bs-gutter-y: 17.5rem;
  }
  .g-lg-24,
  .gx-lg-24 {
    --bs-gutter-x: 20rem;
  }
  .g-lg-24,
  .gy-lg-24 {
    --bs-gutter-y: 20rem;
  }
  .g-lg-25,
  .gx-lg-25 {
    --bs-gutter-x: 22.5rem;
  }
  .g-lg-25,
  .gy-lg-25 {
    --bs-gutter-y: 22.5rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    flex: 1 0 0%;
  }
  .row-cols-xl-auto>* {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1>* {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2>* {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3>* {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xl-4>* {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5>* {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6>* {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .row-cols-xl-7>* {
    flex: 0 0 auto;
    width: 14.2857142857%;
  }
  .row-cols-xl-8>* {
    flex: 0 0 auto;
    width: 12.5%;
  }
  .row-cols-xl-9>* {
    flex: 0 0 auto;
    width: 11.1111111111%;
  }
  .row-cols-xl-10>* {
    flex: 0 0 auto;
    width: 10%;
  }
  .row-cols-xl-11>* {
    flex: 0 0 auto;
    width: 9.0909090909%;
  }
  .row-cols-xl-12>* {
    flex: 0 0 auto;
    width: 8.3333333333%;
  }
  .col-xl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0;
  }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0;
  }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 0.75rem;
  }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 0.75rem;
  }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1rem;
  }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1rem;
  }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 1.25rem;
  }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 1.25rem;
  }
  .g-xl-6,
  .gx-xl-6 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xl-6,
  .gy-xl-6 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xl-7,
  .gx-xl-7 {
    --bs-gutter-x: 1.75rem;
  }
  .g-xl-7,
  .gy-xl-7 {
    --bs-gutter-y: 1.75rem;
  }
  .g-xl-8,
  .gx-xl-8 {
    --bs-gutter-x: 2rem;
  }
  .g-xl-8,
  .gy-xl-8 {
    --bs-gutter-y: 2rem;
  }
  .g-xl-9,
  .gx-xl-9 {
    --bs-gutter-x: 2.25rem;
  }
  .g-xl-9,
  .gy-xl-9 {
    --bs-gutter-y: 2.25rem;
  }
  .g-xl-10,
  .gx-xl-10 {
    --bs-gutter-x: 2.5rem;
  }
  .g-xl-10,
  .gy-xl-10 {
    --bs-gutter-y: 2.5rem;
  }
  .g-xl-11,
  .gx-xl-11 {
    --bs-gutter-x: 3rem;
  }
  .g-xl-11,
  .gy-xl-11 {
    --bs-gutter-y: 3rem;
  }
  .g-xl-12,
  .gx-xl-12 {
    --bs-gutter-x: 3.5rem;
  }
  .g-xl-12,
  .gy-xl-12 {
    --bs-gutter-y: 3.5rem;
  }
  .g-xl-13,
  .gx-xl-13 {
    --bs-gutter-x: 4rem;
  }
  .g-xl-13,
  .gy-xl-13 {
    --bs-gutter-y: 4rem;
  }
  .g-xl-14,
  .gx-xl-14 {
    --bs-gutter-x: 4.5rem;
  }
  .g-xl-14,
  .gy-xl-14 {
    --bs-gutter-y: 4.5rem;
  }
  .g-xl-15,
  .gx-xl-15 {
    --bs-gutter-x: 5rem;
  }
  .g-xl-15,
  .gy-xl-15 {
    --bs-gutter-y: 5rem;
  }
  .g-xl-16,
  .gx-xl-16 {
    --bs-gutter-x: 6rem;
  }
  .g-xl-16,
  .gy-xl-16 {
    --bs-gutter-y: 6rem;
  }
  .g-xl-17,
  .gx-xl-17 {
    --bs-gutter-x: 7rem;
  }
  .g-xl-17,
  .gy-xl-17 {
    --bs-gutter-y: 7rem;
  }
  .g-xl-18,
  .gx-xl-18 {
    --bs-gutter-x: 8rem;
  }
  .g-xl-18,
  .gy-xl-18 {
    --bs-gutter-y: 8rem;
  }
  .g-xl-19,
  .gx-xl-19 {
    --bs-gutter-x: 9rem;
  }
  .g-xl-19,
  .gy-xl-19 {
    --bs-gutter-y: 9rem;
  }
  .g-xl-20,
  .gx-xl-20 {
    --bs-gutter-x: 10rem;
  }
  .g-xl-20,
  .gy-xl-20 {
    --bs-gutter-y: 10rem;
  }
  .g-xl-21,
  .gx-xl-21 {
    --bs-gutter-x: 12.5rem;
  }
  .g-xl-21,
  .gy-xl-21 {
    --bs-gutter-y: 12.5rem;
  }
  .g-xl-22,
  .gx-xl-22 {
    --bs-gutter-x: 15rem;
  }
  .g-xl-22,
  .gy-xl-22 {
    --bs-gutter-y: 15rem;
  }
  .g-xl-23,
  .gx-xl-23 {
    --bs-gutter-x: 17.5rem;
  }
  .g-xl-23,
  .gy-xl-23 {
    --bs-gutter-y: 17.5rem;
  }
  .g-xl-24,
  .gx-xl-24 {
    --bs-gutter-x: 20rem;
  }
  .g-xl-24,
  .gy-xl-24 {
    --bs-gutter-y: 20rem;
  }
  .g-xl-25,
  .gx-xl-25 {
    --bs-gutter-x: 22.5rem;
  }
  .g-xl-25,
  .gy-xl-25 {
    --bs-gutter-y: 22.5rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    flex: 1 0 0%;
  }
  .row-cols-xxl-auto>* {
    flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1>* {
    flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2>* {
    flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3>* {
    flex: 0 0 auto;
    width: 33.3333333333%;
  }
  .row-cols-xxl-4>* {
    flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5>* {
    flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6>* {
    flex: 0 0 auto;
    width: 16.6666666667%;
  }
  .row-cols-xxl-7>* {
    flex: 0 0 auto;
    width: 14.2857142857%;
  }
  .row-cols-xxl-8>* {
    flex: 0 0 auto;
    width: 12.5%;
  }
  .row-cols-xxl-9>* {
    flex: 0 0 auto;
    width: 11.1111111111%;
  }
  .row-cols-xxl-10>* {
    flex: 0 0 auto;
    width: 10%;
  }
  .row-cols-xxl-11>* {
    flex: 0 0 auto;
    width: 9.0909090909%;
  }
  .row-cols-xxl-12>* {
    flex: 0 0 auto;
    width: 8.3333333333%;
  }
  .col-xxl-auto {
    flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xxl-2 {
    flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-3 {
    flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xxl-5 {
    flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xxl-6 {
    flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xxl-8 {
    flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xxl-9 {
    flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xxl-11 {
    flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xxl-12 {
    flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0;
  }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0;
  }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 0.75rem;
  }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 0.75rem;
  }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1rem;
  }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1rem;
  }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 1.25rem;
  }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 1.25rem;
  }
  .g-xxl-6,
  .gx-xxl-6 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xxl-6,
  .gy-xxl-6 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xxl-7,
  .gx-xxl-7 {
    --bs-gutter-x: 1.75rem;
  }
  .g-xxl-7,
  .gy-xxl-7 {
    --bs-gutter-y: 1.75rem;
  }
  .g-xxl-8,
  .gx-xxl-8 {
    --bs-gutter-x: 2rem;
  }
  .g-xxl-8,
  .gy-xxl-8 {
    --bs-gutter-y: 2rem;
  }
  .g-xxl-9,
  .gx-xxl-9 {
    --bs-gutter-x: 2.25rem;
  }
  .g-xxl-9,
  .gy-xxl-9 {
    --bs-gutter-y: 2.25rem;
  }
  .g-xxl-10,
  .gx-xxl-10 {
    --bs-gutter-x: 2.5rem;
  }
  .g-xxl-10,
  .gy-xxl-10 {
    --bs-gutter-y: 2.5rem;
  }
  .g-xxl-11,
  .gx-xxl-11 {
    --bs-gutter-x: 3rem;
  }
  .g-xxl-11,
  .gy-xxl-11 {
    --bs-gutter-y: 3rem;
  }
  .g-xxl-12,
  .gx-xxl-12 {
    --bs-gutter-x: 3.5rem;
  }
  .g-xxl-12,
  .gy-xxl-12 {
    --bs-gutter-y: 3.5rem;
  }
  .g-xxl-13,
  .gx-xxl-13 {
    --bs-gutter-x: 4rem;
  }
  .g-xxl-13,
  .gy-xxl-13 {
    --bs-gutter-y: 4rem;
  }
  .g-xxl-14,
  .gx-xxl-14 {
    --bs-gutter-x: 4.5rem;
  }
  .g-xxl-14,
  .gy-xxl-14 {
    --bs-gutter-y: 4.5rem;
  }
  .g-xxl-15,
  .gx-xxl-15 {
    --bs-gutter-x: 5rem;
  }
  .g-xxl-15,
  .gy-xxl-15 {
    --bs-gutter-y: 5rem;
  }
  .g-xxl-16,
  .gx-xxl-16 {
    --bs-gutter-x: 6rem;
  }
  .g-xxl-16,
  .gy-xxl-16 {
    --bs-gutter-y: 6rem;
  }
  .g-xxl-17,
  .gx-xxl-17 {
    --bs-gutter-x: 7rem;
  }
  .g-xxl-17,
  .gy-xxl-17 {
    --bs-gutter-y: 7rem;
  }
  .g-xxl-18,
  .gx-xxl-18 {
    --bs-gutter-x: 8rem;
  }
  .g-xxl-18,
  .gy-xxl-18 {
    --bs-gutter-y: 8rem;
  }
  .g-xxl-19,
  .gx-xxl-19 {
    --bs-gutter-x: 9rem;
  }
  .g-xxl-19,
  .gy-xxl-19 {
    --bs-gutter-y: 9rem;
  }
  .g-xxl-20,
  .gx-xxl-20 {
    --bs-gutter-x: 10rem;
  }
  .g-xxl-20,
  .gy-xxl-20 {
    --bs-gutter-y: 10rem;
  }
  .g-xxl-21,
  .gx-xxl-21 {
    --bs-gutter-x: 12.5rem;
  }
  .g-xxl-21,
  .gy-xxl-21 {
    --bs-gutter-y: 12.5rem;
  }
  .g-xxl-22,
  .gx-xxl-22 {
    --bs-gutter-x: 15rem;
  }
  .g-xxl-22,
  .gy-xxl-22 {
    --bs-gutter-y: 15rem;
  }
  .g-xxl-23,
  .gx-xxl-23 {
    --bs-gutter-x: 17.5rem;
  }
  .g-xxl-23,
  .gy-xxl-23 {
    --bs-gutter-y: 17.5rem;
  }
  .g-xxl-24,
  .gx-xxl-24 {
    --bs-gutter-x: 20rem;
  }
  .g-xxl-24,
  .gy-xxl-24 {
    --bs-gutter-y: 20rem;
  }
  .g-xxl-25,
  .gx-xxl-25 {
    --bs-gutter-x: 22.5rem;
  }
  .g-xxl-25,
  .gy-xxl-25 {
    --bs-gutter-y: 22.5rem;
  }
}
.table {
  --bs-table-color-type: initial;
  --bs-table-bg-type: initial;
  --bs-table-color-state: initial;
  --bs-table-bg-state: initial;
  --bs-table-color: #60697b;
  --bs-table-bg: transparent;
  --bs-table-border-color: #edeff3;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: #60697b;
  --bs-table-striped-bg: rgba(164, 174, 198, 0.07);
  --bs-table-active-color: #60697b;
  --bs-table-active-bg: rgba(164, 174, 198, 0.07);
  --bs-table-hover-color: #60697b;
  --bs-table-hover-bg: rgba(164, 174, 198, 0.07);
  width: 100%;
  margin-bottom: 1rem;
  vertical-align: top;
  border-color: var(--bs-table-border-color);
}
.table> :not(caption)>*>* {
  padding: 0.9rem 0.9rem;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: 1px;
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
}
.table>tbody {
  vertical-align: inherit;
}
.table>thead {
  vertical-align: bottom;
}
.table-group-divider {
  border-top: calc(1px * 2) solid #edeff3;
}
.caption-top {
  caption-side: top;
}
.table-sm> :not(caption)>*>* {
  padding: 0.25rem 0.25rem;
}
.table-bordered> :not(caption)>* {
  border-width: 1px 0;
}
.table-bordered> :not(caption)>*>* {
  border-width: 0 1px;
}
.table-borderless> :not(caption)>*>* {
  border-bottom-width: 0;
}
.table-borderless> :not(:first-child) {
  border-top-width: 0;
}
.table-striped>tbody>tr:nth-of-type(odd)>* {
  --bs-table-color-type: var(--bs-table-striped-color);
  --bs-table-bg-type: var(--bs-table-striped-bg);
}
.table-striped-columns> :not(caption)>tr> :nth-child(even) {
  --bs-table-color-type: var(--bs-table-striped-color);
  --bs-table-bg-type: var(--bs-table-striped-bg);
}
.table-active {
  --bs-table-color-state: var(--bs-table-active-color);
  --bs-table-bg-state: var(--bs-table-active-bg);
}
.table-hover>tbody>tr:hover>* {
  --bs-table-color-state: var(--bs-table-hover-color);
  --bs-table-bg-state: var(--bs-table-hover-bg);
}
.table-primary {
  --bs-table-color: #343f52;
  --bs-table-bg: #d9e4f9;
  --bs-table-border-color: #c9d4e8;
  --bs-table-striped-bg: #cdd8ed;
  --bs-table-striped-color: #343f52;
  --bs-table-active-bg: #cdd8ed;
  --bs-table-active-color: #343f52;
  --bs-table-hover-bg: #cdd8ed;
  --bs-table-hover-color: #343f52;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}
.table-secondary {
  --bs-table-color: #343f52;
  --bs-table-bg: #eeeff2;
  --bs-table-border-color: #dbdde2;
  --bs-table-striped-bg: #e1e3e7;
  --bs-table-striped-color: #343f52;
  --bs-table-active-bg: #e1e3e7;
  --bs-table-active-color: #343f52;
  --bs-table-hover-bg: #e1e3e7;
  --bs-table-hover-color: #343f52;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}
.table-success {
  --bs-table-color: #343f52;
  --bs-table-bg: #daf3ec;
  --bs-table-border-color: #c9e1dd;
  --bs-table-striped-bg: #cee6e1;
  --bs-table-striped-color: #343f52;
  --bs-table-active-bg: #cee6e1;
  --bs-table-active-color: #343f52;
  --bs-table-hover-bg: #cee6e1;
  --bs-table-hover-color: #343f52;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}
.table-info {
  --bs-table-color: #343f52;
  --bs-table-bg: #ddeef4;
  --bs-table-border-color: #ccdde4;
  --bs-table-striped-bg: #d1e2e9;
  --bs-table-striped-color: #343f52;
  --bs-table-active-bg: #d1e2e9;
  --bs-table-active-color: #343f52;
  --bs-table-hover-bg: #d1e2e9;
  --bs-table-hover-color: #343f52;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}
.table-warning {
  --bs-table-color: #343f52;
  --bs-table-bg: #fef1de;
  --bs-table-border-color: #eadfd0;
  --bs-table-striped-bg: #f0e5d4;
  --bs-table-striped-color: #343f52;
  --bs-table-active-bg: #f0e5d4;
  --bs-table-active-color: #343f52;
  --bs-table-hover-bg: #f0e5d4;
  --bs-table-hover-color: #343f52;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}
.table-danger {
  --bs-table-color: #343f52;
  --bs-table-bg: #f9e0e1;
  --bs-table-border-color: #e5d0d3;
  --bs-table-striped-bg: #ebd5d7;
  --bs-table-striped-color: #343f52;
  --bs-table-active-bg: #ebd5d7;
  --bs-table-active-color: #343f52;
  --bs-table-hover-bg: #ebd5d7;
  --bs-table-hover-color: #343f52;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}
.table-light {
  --bs-table-color: #343f52;
  --bs-table-bg: #fefefe;
  --bs-table-border-color: #eaebed;
  --bs-table-striped-bg: #f0f1f2;
  --bs-table-striped-color: #343f52;
  --bs-table-active-bg: #f0f1f2;
  --bs-table-active-color: #343f52;
  --bs-table-hover-bg: #f0f1f2;
  --bs-table-hover-color: #343f52;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}
.table-dark {
  --bs-table-color: #fff;
  --bs-table-bg: #262b32;
  --bs-table-border-color: #3c4047;
  --bs-table-striped-bg: #353a40;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #353a40;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #353a40;
  --bs-table-hover-color: #fff;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}
.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}
@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
.form-label {
  margin-bottom: 0.5rem;
  color: #959ca9;
}
.col-form-label {
  padding-top: calc(0.6rem + 1px);
  padding-bottom: calc(0.6rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.7;
  color: #959ca9;
}
.col-form-label-lg {
  padding-top: calc(0.65rem + 1px);
  padding-bottom: calc(0.65rem + 1px);
  font-size: 0.85rem;
}
.col-form-label-sm {
  padding-top: calc(0.4rem + 1px);
  padding-bottom: calc(0.4rem + 1px);
  font-size: 0.7rem;
}
.form-text {
  margin-top: 0.25rem;
  font-size: 0.6rem;
  color: var(--bs-secondary-color);
}
.form-control {
  display: block;
  width: 100%;
  padding: 0.6rem 1rem;
  font-size: 0.75rem;
  font-weight: 500;
  line-height: 1.7;
  color: #60697b;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: var(--bs-body-bg);
  background-clip: padding-box;
  border: 1px solid rgba(8, 60, 130, 0.07);
  border-radius: 0.4rem;
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control[type=file] {
  overflow: hidden;
}
.form-control[type=file]:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control:focus {
  color: #60697b;
  background-color: var(--bs-body-bg);
  border-color: #9fbcf0;
  outline: 0;
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04), unset;
}
.form-control::-webkit-date-and-time-value {
  min-width: 85px;
  height: 1.7em;
  margin: 0;
}
.form-control::-webkit-datetime-edit {
  display: block;
  padding: 0;
}
.form-control::-moz-placeholder {
  color: #959ca9;
  opacity: 1;
}
.form-control::placeholder {
  color: #959ca9;
  opacity: 1;
}
.form-control:disabled {
  background-color: var(--bs-secondary-bg);
  opacity: 1;
}
.form-control::file-selector-button {
  padding: 0.6rem 1rem;
  margin: -0.6rem -1rem;
  -webkit-margin-end: 1rem;
  margin-inline-end: 1rem;
  color: #60697b;
  background-color: var(--bs-tertiary-bg);
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::file-selector-button {
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: var(--bs-secondary-bg);
}
.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.6rem 0;
  margin-bottom: 0;
  line-height: 1.7;
  color: var(--bs-body-color);
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext:focus {
  outline: 0;
}
.form-control-plaintext.form-control-sm,
.form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}
.form-control-sm {
  min-height: calc(1.7em + 0.8rem + 2px);
  padding: 0.4rem 0.6rem;
  font-size: 0.7rem;
  border-radius: 0.4rem;
}
.form-control-sm::file-selector-button {
  padding: 0.4rem 0.6rem;
  margin: -0.4rem -0.6rem;
  -webkit-margin-end: 0.6rem;
  margin-inline-end: 0.6rem;
}
.form-control-lg {
  min-height: calc(1.7em + 1.3rem + 2px);
  padding: 0.65rem 1.4rem;
  font-size: 0.85rem;
  border-radius: 0.4rem;
}
.form-control-lg::file-selector-button {
  padding: 0.65rem 1.4rem;
  margin: -0.65rem -1.4rem;
  -webkit-margin-end: 1.4rem;
  margin-inline-end: 1.4rem;
}
textarea.form-control {
  min-height: calc(1.7em + 1.2rem + 2px);
}
textarea.form-control-sm {
  min-height: calc(1.7em + 0.8rem + 2px);
}
textarea.form-control-lg {
  min-height: calc(1.7em + 1.3rem + 2px);
}
.form-control-color {
  width: 3rem;
  height: calc(1.7em + 1.2rem + 2px);
  padding: 0.6rem;
}
.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control-color::-moz-color-swatch {
  border: 0 !important;
  border-radius: 0.4rem;
}
.form-control-color::-webkit-color-swatch {
  border: 0 !important;
  border-radius: 0.4rem;
}
.form-control-color.form-control-sm {
  height: calc(1.7em + 0.8rem + 2px);
}
.form-control-color.form-control-lg {
  height: calc(1.7em + 1.3rem + 2px);
}
.form-select {
  --bs-form-select-bg-img: url("data:image/svg+xml,%3Csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 32 32'%3E%3Cpath fill='%2360697b' d='M22.667 12.227c-0.241-0.24-0.573-0.388-0.94-0.388s-0.699 0.148-0.94 0.388l0-0-4.787 4.72-4.72-4.72c-0.241-0.24-0.573-0.388-0.94-0.388s-0.699 0.148-0.94 0.388l0-0c-0.244 0.242-0.394 0.577-0.394 0.947s0.151 0.705 0.394 0.947l5.653 5.653c0.242 0.244 0.577 0.394 0.947 0.394s0.705-0.151 0.947-0.394l0-0 5.72-5.653c0.244-0.242 0.394-0.577 0.394-0.947s-0.151-0.705-0.394-0.947l-0-0z'%3E%3C/path%3E%3C/svg%3E");
  display: block;
  width: 100%;
  padding: 0.6rem 2rem 0.6rem 1rem;
  font-size: 0.75rem;
  font-weight: 500;
  line-height: 1.7;
  color: #959ca9;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: var(--bs-body-bg);
  background-image: var(--bs-form-select-bg-img), var(--bs-form-select-bg-icon, none);
  background-repeat: no-repeat;
  background-position: right 0.75rem center;
  background-size: 20px 20px;
  border: 1px solid rgba(8, 60, 130, 0.07);
  border-radius: 0.4rem;
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-select {
    transition: none;
  }
}
.form-select:focus {
  border-color: rgba(8, 60, 130, 0.1);
  outline: 0;
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04), unset;
}
.form-select[multiple],
.form-select[size]:not([size="1"]) {
  padding-right: 1rem;
  background-image: none;
}
.form-select:disabled {
  background-color: var(--bs-secondary-bg);
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #959ca9;
}
.form-select-sm {
  padding-top: 0.4rem;
  padding-bottom: 0.4rem;
  padding-left: 0.6rem;
  font-size: 0.7rem;
  border-radius: 0.4rem;
}
.form-select-lg {
  padding-top: 0.65rem;
  padding-bottom: 0.65rem;
  padding-left: 1.4rem;
  font-size: 0.85rem;
  border-radius: 0.4rem;
}
[data-bs-theme=dark] .form-select {
  --bs-form-select-bg-img: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23cacaca' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
}
.form-check {
  display: block;
  min-height: 1.36rem;
  padding-left: 1.55rem;
  margin-bottom: 0.125rem;
}
.form-check .form-check-input {
  float: left;
  margin-left: -1.55rem;
}
.form-check-reverse {
  padding-right: 1.55rem;
  padding-left: 0;
  text-align: right;
}
.form-check-reverse .form-check-input {
  float: right;
  margin-right: -1.55rem;
  margin-left: 0;
}
.form-check-input {
  --bs-form-check-bg: #fefefe;
  width: 1.05rem;
  height: 1.05rem;
  margin-top: 0.325rem;
  vertical-align: top;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: var(--bs-form-check-bg);
  background-image: var(--bs-form-check-bg-image);
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 1px solid rgba(8, 60, 130, 0.1);
  print-color-adjust: exact;
}
.form-check-input[type=checkbox] {
  border-radius: 0.25em;
}
.form-check-input[type=radio] {
  border-radius: 50%;
}
.form-check-input:active {
  filter: brightness(90%);
}
.form-check-input:focus {
  border-color: rgba(8, 60, 130, 0.1);
  outline: 0;
  box-shadow: none;
}
.form-check-input:checked {
  background-color: #3f78e0;
  border-color: #3f78e0;
}
.form-check-input:checked[type=checkbox] {
  --bs-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='m6 10 3 3 6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type=radio] {
  --bs-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='1.5' fill='%23fff'/%3e%3c/svg%3e");
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: #3f78e0;
  border-color: #3f78e0;
  --bs-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10h8'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
  pointer-events: none;
  filter: none;
  opacity: 0.5;
}
.form-check-input[disabled]~.form-check-label,
.form-check-input:disabled~.form-check-label {
  cursor: default;
  opacity: 0.5;
}
.form-switch {
  padding-left: 2.5em;
}
.form-switch .form-check-input {
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%280, 0, 0, 0.25%29'/%3e%3c/svg%3e");
  width: 2em;
  margin-left: -2.5em;
  background-image: var(--bs-form-switch-bg);
  background-position: left center;
  border-radius: 2em;
  transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}
.form-switch .form-check-input:focus {
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%239fbcf0'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-position: right center;
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.form-switch.form-check-reverse {
  padding-right: 2.5em;
  padding-left: 0;
}
.form-switch.form-check-reverse .form-check-input {
  margin-right: -2.5em;
  margin-left: 0;
}
.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}
.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check[disabled]+.btn,
.btn-check:disabled+.btn {
  pointer-events: none;
  filter: none;
  opacity: 0.65;
}
[data-bs-theme=dark] .form-switch .form-check-input:not(:checked):not(:focus) {
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='rgba%28255, 255, 255, 0.25%29'/%3e%3c/svg%3e");
}
.form-range {
  width: 100%;
  height: 1.5rem;
  padding: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: transparent;
}
.form-range:focus {
  outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fefefe, unset;
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fefefe, unset;
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  -webkit-appearance: none;
  appearance: none;
  background-color: #3f78e0;
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}
.form-range::-webkit-slider-thumb:active {
  background-color: #c5d7f6;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: var(--bs-tertiary-bg);
  border-color: transparent;
  border-radius: 1rem;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
}
.form-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  -moz-appearance: none;
  appearance: none;
  background-color: #3f78e0;
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.1rem 0.25rem rgba(0, 0, 0, 0.1);
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}
.form-range::-moz-range-thumb:active {
  background-color: #c5d7f6;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: var(--bs-tertiary-bg);
  border-color: transparent;
  border-radius: 1rem;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.075);
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: var(--bs-secondary-color);
}
.form-range:disabled::-moz-range-thumb {
  background-color: var(--bs-secondary-color);
}
.form-floating {
  position: relative;
}
.form-floating>.form-control,
.form-floating>.form-control-plaintext,
.form-floating>.form-select {
  height: calc(2.5rem + 2px);
  min-height: calc(2.5rem + 2px);
  line-height: 1.25;
}
.form-floating>label {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  height: 100%;
  padding: 0.6rem 1rem;
  overflow: hidden;
  text-align: start;
  text-overflow: ellipsis;
  white-space: nowrap;
  pointer-events: none;
  border: 1px solid transparent;
  transform-origin: 0 0;
  transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating>label {
    transition: none;
  }
}
.form-floating>.form-control,
.form-floating>.form-control-plaintext {
  padding: 0.6rem 1rem;
}
.form-floating>.form-control::-moz-placeholder,
.form-floating>.form-control-plaintext::-moz-placeholder {
  color: transparent;
}
.form-floating>.form-control::placeholder,
.form-floating>.form-control-plaintext::placeholder {
  color: transparent;
}
.form-floating>.form-control:not(:-moz-placeholder-shown),
.form-floating>.form-control-plaintext:not(:-moz-placeholder-shown) {
  padding-top: 1rem;
  padding-bottom: 0.2rem;
}
.form-floating>.form-control:focus,
.form-floating>.form-control:not(:placeholder-shown),
.form-floating>.form-control-plaintext:focus,
.form-floating>.form-control-plaintext:not(:placeholder-shown) {
  padding-top: 1rem;
  padding-bottom: 0.2rem;
}
.form-floating>.form-control:-webkit-autofill,
.form-floating>.form-control-plaintext:-webkit-autofill {
  padding-top: 1rem;
  padding-bottom: 0.2rem;
}
.form-floating>.form-select {
  padding-top: 1rem;
  padding-bottom: 0.2rem;
}
.form-floating>.form-control:not(:-moz-placeholder-shown)~label {
  color: rgba(var(--bs-body-color-rgb), 1);
  transform: scale(0.8) translateY(-0.4rem) translateX(0.2rem);
}
.form-floating>.form-control:focus~label,
.form-floating>.form-control:not(:placeholder-shown)~label,
.form-floating>.form-control-plaintext~label,
.form-floating>.form-select~label {
  color: rgba(var(--bs-body-color-rgb), 1);
  transform: scale(0.8) translateY(-0.4rem) translateX(0.2rem);
}
.form-floating>.form-control:not(:-moz-placeholder-shown)~label::after {
  position: absolute;
  inset: 0.6rem 0.5rem;
  z-index: -1;
  height: 1.5em;
  content: "";
  background-color: var(--bs-body-bg);
  border-radius: 0.4rem;
}
.form-floating>.form-control:focus~label::after,
.form-floating>.form-control:not(:placeholder-shown)~label::after,
.form-floating>.form-control-plaintext~label::after,
.form-floating>.form-select~label::after {
  position: absolute;
  inset: 0.6rem 0.5rem;
  z-index: -1;
  height: 1.5em;
  content: "";
  background-color: var(--bs-body-bg);
  border-radius: 0.4rem;
}
.form-floating>.form-control:-webkit-autofill~label {
  color: rgba(var(--bs-body-color-rgb), 1);
  transform: scale(0.8) translateY(-0.4rem) translateX(0.2rem);
}
.form-floating>.form-control-plaintext~label {
  border-width: 1px 0;
}
.form-floating> :disabled~label,
.form-floating>.form-control:disabled~label {
  color: #60697b;
}
.form-floating> :disabled~label::after,
.form-floating>.form-control:disabled~label::after {
  background-color: var(--bs-secondary-bg);
}
.input-group {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  width: 100%;
}
.input-group>.form-control,
.input-group>.form-select,
.input-group>.form-floating {
  position: relative;
  flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group>.form-control:focus,
.input-group>.form-select:focus,
.input-group>.form-floating:focus-within {
  z-index: 5;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 5;
}
.input-group-text {
  display: flex;
  align-items: center;
  padding: 0.6rem 1rem;
  font-size: 0.75rem;
  font-weight: 500;
  line-height: 1.7;
  color: #60697b;
  text-align: center;
  white-space: nowrap;
  background-color: var(--bs-tertiary-bg);
  border: 1px solid rgba(8, 60, 130, 0.07);
  border-radius: 0.4rem;
}
.input-group-lg>.form-control,
.input-group-lg>.form-select,
.input-group-lg>.input-group-text,
.input-group-lg>.btn {
  padding: 0.65rem 1.4rem;
  font-size: 0.85rem;
  border-radius: 0.4rem;
}
.input-group-sm>.form-control,
.input-group-sm>.form-select,
.input-group-sm>.input-group-text,
.input-group-sm>.btn {
  padding: 0.4rem 0.6rem;
  font-size: 0.7rem;
  border-radius: 0.4rem;
}
.input-group-lg>.form-select,
.input-group-sm>.form-select {
  padding-right: 3rem;
}
.input-group:not(.has-validation)> :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group:not(.has-validation)>.dropdown-toggle:nth-last-child(n+3),
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-control,
.input-group:not(.has-validation)>.form-floating:not(:last-child)>.form-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation> :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group.has-validation>.dropdown-toggle:nth-last-child(n+4),
.input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-control,
.input-group.has-validation>.form-floating:nth-last-child(n+3)>.form-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group> :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: calc(1px * -1);
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group>.form-floating:not(:first-child)>.form-control,
.input-group>.form-floating:not(:first-child)>.form-select {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.7rem;
  color: var(--bs-form-valid-color);
}
.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.5rem 0.75rem;
  margin-top: 0.1rem;
  font-size: 0.8rem;
  color: #fff;
  background-color: var(--bs-success);
  border-radius: 0.4rem;
}
.was-validated :valid~.valid-feedback,
.was-validated :valid~.valid-tooltip,
.is-valid~.valid-feedback,
.is-valid~.valid-tooltip {
  display: block;
}
.was-validated .form-control:valid,
.form-control.is-valid {
  border-color: var(--bs-form-valid-border-color);
  padding-right: calc(1.7em + 1.2rem);
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23198754' d='M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: right calc(0.425em + 0.3rem) center;
  background-size: calc(0.425em + 0.6rem) calc(0.425em + 0.6rem);
}
.was-validated .form-control:valid:focus,
.form-control.is-valid:focus {
  border-color: var(--bs-form-valid-border-color);
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-success-rgb), 0.25);
}
.was-validated textarea.form-control:valid,
textarea.form-control.is-valid {
  padding-right: calc(1.7em + 1.2rem);
  background-position: top calc(0.425em + 0.3rem) right calc(0.425em + 0.3rem);
}
.was-validated .form-select:valid,
.form-select.is-valid {
  border-color: var(--bs-form-valid-border-color);
}
.was-validated .form-select:valid:not([multiple]):not([size]),
.was-validated .form-select:valid:not([multiple])[size="1"],
.form-select.is-valid:not([multiple]):not([size]),
.form-select.is-valid:not([multiple])[size="1"] {
  --bs-form-select-bg-icon: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'%3E%3Cpath fill='%23198754' d='M14.72,8.79l-4.29,4.3L8.78,11.44a1,1,0,1,0-1.41,1.41l2.35,2.36a1,1,0,0,0,.71.29,1,1,0,0,0,.7-.29l5-5a1,1,0,0,0,0-1.42A1,1,0,0,0,14.72,8.79ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z'/%3E%3C/svg%3E");
  padding-right: 4.5rem;
  background-position: right 0.75rem center, center right 2rem;
  background-size: 20px 20px, calc(0.425em + 0.6rem) calc(0.425em + 0.6rem);
}
.was-validated .form-select:valid:focus,
.form-select.is-valid:focus {
  border-color: var(--bs-form-valid-border-color);
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-success-rgb), 0.25);
}
.was-validated .form-control-color:valid,
.form-control-color.is-valid {
  width: calc(3rem + calc(1.7em + 1.2rem));
}
.was-validated .form-check-input:valid,
.form-check-input.is-valid {
  border-color: var(--bs-form-valid-border-color);
}
.was-validated .form-check-input:valid:checked,
.form-check-input.is-valid:checked {
  background-color: var(--bs-form-valid-color);
}
.was-validated .form-check-input:valid:focus,
.form-check-input.is-valid:focus {
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-success-rgb), 0.25);
}
.was-validated .form-check-input:valid~.form-check-label,
.form-check-input.is-valid~.form-check-label {
  color: var(--bs-form-valid-color);
}
.form-check-inline .form-check-input~.valid-feedback {
  margin-left: 0.5em;
}
.was-validated .input-group>.form-control:not(:focus):valid,
.input-group>.form-control:not(:focus).is-valid,
.was-validated .input-group>.form-select:not(:focus):valid,
.input-group>.form-select:not(:focus).is-valid,
.was-validated .input-group>.form-floating:not(:focus-within):valid,
.input-group>.form-floating:not(:focus-within).is-valid {
  z-index: 3;
}
.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.7rem;
  color: var(--bs-form-invalid-color);
}
.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.5rem 0.75rem;
  margin-top: 0.1rem;
  font-size: 0.8rem;
  color: #fff;
  background-color: var(--bs-danger);
  border-radius: 0.4rem;
}
.was-validated :invalid~.invalid-feedback,
.was-validated :invalid~.invalid-tooltip,
.is-invalid~.invalid-feedback,
.is-invalid~.invalid-tooltip {
  display: block;
}
.was-validated .form-control:invalid,
.form-control.is-invalid {
  border-color: var(--bs-form-invalid-border-color);
  padding-right: calc(1.7em + 1.2rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.425em + 0.3rem) center;
  background-size: calc(0.425em + 0.6rem) calc(0.425em + 0.6rem);
}
.was-validated .form-control:invalid:focus,
.form-control.is-invalid:focus {
  border-color: var(--bs-form-invalid-border-color);
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-danger-rgb), 0.25);
}
.was-validated textarea.form-control:invalid,
textarea.form-control.is-invalid {
  padding-right: calc(1.7em + 1.2rem);
  background-position: top calc(0.425em + 0.3rem) right calc(0.425em + 0.3rem);
}
.was-validated .form-select:invalid,
.form-select.is-invalid {
  border-color: var(--bs-form-invalid-border-color);
}
.was-validated .form-select:invalid:not([multiple]):not([size]),
.was-validated .form-select:invalid:not([multiple])[size="1"],
.form-select.is-invalid:not([multiple]):not([size]),
.form-select.is-invalid:not([multiple])[size="1"] {
  --bs-form-select-bg-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  padding-right: 4.5rem;
  background-position: right 0.75rem center, center right 2rem;
  background-size: 20px 20px, calc(0.425em + 0.6rem) calc(0.425em + 0.6rem);
}
.was-validated .form-select:invalid:focus,
.form-select.is-invalid:focus {
  border-color: var(--bs-form-invalid-border-color);
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-danger-rgb), 0.25);
}
.was-validated .form-control-color:invalid,
.form-control-color.is-invalid {
  width: calc(3rem + calc(1.7em + 1.2rem));
}
.was-validated .form-check-input:invalid,
.form-check-input.is-invalid {
  border-color: var(--bs-form-invalid-border-color);
}
.was-validated .form-check-input:invalid:checked,
.form-check-input.is-invalid:checked {
  background-color: var(--bs-form-invalid-color);
}
.was-validated .form-check-input:invalid:focus,
.form-check-input.is-invalid:focus {
  box-shadow: 0 0 0 0.25rem rgba(var(--bs-danger-rgb), 0.25);
}
.was-validated .form-check-input:invalid~.form-check-label,
.form-check-input.is-invalid~.form-check-label {
  color: var(--bs-form-invalid-color);
}
.form-check-inline .form-check-input~.invalid-feedback {
  margin-left: 0.5em;
}
.was-validated .input-group>.form-control:not(:focus):invalid,
.input-group>.form-control:not(:focus).is-invalid,
.was-validated .input-group>.form-select:not(:focus):invalid,
.input-group>.form-select:not(:focus).is-invalid,
.was-validated .input-group>.form-floating:not(:focus-within):invalid,
.input-group>.form-floating:not(:focus-within).is-invalid {
  z-index: 4;
}
.btn {
  --bs-btn-padding-x: 1.2rem;
  --bs-btn-padding-y: 0.5rem;
  --bs-btn-font-family: ;
  --bs-btn-font-size: 0.8rem;
  --bs-btn-font-weight: 700;
  --bs-btn-line-height: 1.7;
  --bs-btn-color: var(--bs-body-color);
  --bs-btn-bg: transparent;
  --bs-btn-border-width: 2px;
  --bs-btn-border-color: transparent;
  --bs-btn-border-radius: 0.4rem;
  --bs-btn-hover-border-color: transparent;
  --bs-btn-box-shadow: unset;
  --bs-btn-disabled-opacity: 0.65;
  --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
  display: inline-block;
  padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
  font-family: var(--bs-btn-font-family);
  font-size: var(--bs-btn-font-size);
  font-weight: var(--bs-btn-font-weight);
  line-height: var(--bs-btn-line-height);
  color: var(--bs-btn-color);
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
  border-radius: var(--bs-btn-border-radius);
  background-color: var(--bs-btn-bg);
  box-shadow: var(--bs-btn-box-shadow);
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
.btn:hover {
  color: var(--bs-btn-hover-color);
  background-color: var(--bs-btn-hover-bg);
  border-color: var(--bs-btn-hover-border-color);
}
.btn-check+.btn:hover {
  color: var(--bs-btn-color);
  background-color: var(--bs-btn-bg);
  border-color: var(--bs-btn-border-color);
}
.btn:focus-visible {
  color: var(--bs-btn-hover-color);
  background-color: var(--bs-btn-hover-bg);
  border-color: var(--bs-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--bs-btn-box-shadow), var(--bs-btn-focus-box-shadow);
}
.btn-check:focus-visible+.btn {
  border-color: var(--bs-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--bs-btn-box-shadow), var(--bs-btn-focus-box-shadow);
}
.btn-check:checked+.btn,
:not(.btn-check)+.btn:active,
.btn:first-child:active,
.btn.active,
.btn.show {
  color: var(--bs-btn-active-color);
  background-color: var(--bs-btn-active-bg);
  border-color: var(--bs-btn-active-border-color);
  box-shadow: var(--bs-btn-active-shadow);
}
.btn-check:checked+.btn:focus-visible,
:not(.btn-check)+.btn:active:focus-visible,
.btn:first-child:active:focus-visible,
.btn.active:focus-visible,
.btn.show:focus-visible {
  box-shadow: var(--bs-btn-active-shadow), var(--bs-btn-focus-box-shadow);
}
.btn:disabled,
.btn.disabled,
fieldset:disabled .btn {
  color: var(--bs-btn-disabled-color);
  pointer-events: none;
  background-color: var(--bs-btn-disabled-bg);
  border-color: var(--bs-btn-disabled-border-color);
  opacity: var(--bs-btn-disabled-opacity);
  box-shadow: none;
}
.btn-blue {
  --bs-btn-color: #fff;
  --bs-btn-bg: #3f78e0;
  --bs-btn-border-color: #3f78e0;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #3f78e0;
  --bs-btn-hover-border-color: #3f78e0;
  --bs-btn-focus-shadow-rgb: 92, 140, 229;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #3f78e0;
  --bs-btn-active-border-color: #3f78e0;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #3f78e0;
  --bs-btn-disabled-border-color: #3f78e0;
}
.btn-sky {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #5eb9f0;
  --bs-btn-border-color: #5eb9f0;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #5eb9f0;
  --bs-btn-hover-border-color: #5eb9f0;
  --bs-btn-focus-shadow-rgb: 88, 167, 216;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #5eb9f0;
  --bs-btn-active-border-color: #5eb9f0;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #5eb9f0;
  --bs-btn-disabled-border-color: #5eb9f0;
}
.btn-purple {
  --bs-btn-color: #fff;
  --bs-btn-bg: #747ed1;
  --bs-btn-border-color: #747ed1;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #747ed1;
  --bs-btn-hover-border-color: #747ed1;
  --bs-btn-focus-shadow-rgb: 137, 145, 216;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #747ed1;
  --bs-btn-active-border-color: #747ed1;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #747ed1;
  --bs-btn-disabled-border-color: #747ed1;
}
.btn-grape {
  --bs-btn-color: #fff;
  --bs-btn-bg: #605dba;
  --bs-btn-border-color: #605dba;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #605dba;
  --bs-btn-hover-border-color: #605dba;
  --bs-btn-focus-shadow-rgb: 120, 117, 196;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #605dba;
  --bs-btn-active-border-color: #605dba;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #605dba;
  --bs-btn-disabled-border-color: #605dba;
}
.btn-violet {
  --bs-btn-color: #fff;
  --bs-btn-bg: #a07cc5;
  --bs-btn-border-color: #a07cc5;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #a07cc5;
  --bs-btn-hover-border-color: #a07cc5;
  --bs-btn-focus-shadow-rgb: 174, 144, 206;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #a07cc5;
  --bs-btn-active-border-color: #a07cc5;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #a07cc5;
  --bs-btn-disabled-border-color: #a07cc5;
}
.btn-pink {
  --bs-btn-color: #fff;
  --bs-btn-bg: #d16b86;
  --bs-btn-border-color: #d16b86;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #d16b86;
  --bs-btn-hover-border-color: #d16b86;
  --bs-btn-focus-shadow-rgb: 216, 129, 152;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #d16b86;
  --bs-btn-active-border-color: #d16b86;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #d16b86;
  --bs-btn-disabled-border-color: #d16b86;
}
.btn-fuchsia {
  --bs-btn-color: #fff;
  --bs-btn-bg: #e668b3;
  --bs-btn-border-color: #e668b3;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #e668b3;
  --bs-btn-hover-border-color: #e668b3;
  --bs-btn-focus-shadow-rgb: 234, 127, 190;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #e668b3;
  --bs-btn-active-border-color: #e668b3;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #e668b3;
  --bs-btn-disabled-border-color: #e668b3;
}
.btn-red {
  --bs-btn-color: #fff;
  --bs-btn-bg: #e2626b;
  --bs-btn-border-color: #e2626b;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #e2626b;
  --bs-btn-hover-border-color: #e2626b;
  --bs-btn-focus-shadow-rgb: 230, 122, 129;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #e2626b;
  --bs-btn-active-border-color: #e2626b;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #e2626b;
  --bs-btn-disabled-border-color: #e2626b;
}
.btn-orange {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #f78b77;
  --bs-btn-border-color: #f78b77;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #f78b77;
  --bs-btn-hover-border-color: #f78b77;
  --bs-btn-focus-shadow-rgb: 218, 128, 113;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #f78b77;
  --bs-btn-active-border-color: #f78b77;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #f78b77;
  --bs-btn-disabled-border-color: #f78b77;
}
.btn-yellow {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #fab758;
  --bs-btn-border-color: #fab758;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #fab758;
  --bs-btn-hover-border-color: #fab758;
  --bs-btn-focus-shadow-rgb: 220, 165, 87;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #fab758;
  --bs-btn-active-border-color: #fab758;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #fab758;
  --bs-btn-disabled-border-color: #fab758;
}
.btn-green {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #45c4a0;
  --bs-btn-border-color: #45c4a0;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #45c4a0;
  --bs-btn-hover-border-color: #45c4a0;
  --bs-btn-focus-shadow-rgb: 66, 176, 148;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #45c4a0;
  --bs-btn-active-border-color: #45c4a0;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #45c4a0;
  --bs-btn-disabled-border-color: #45c4a0;
}
.btn-leaf {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #7cb798;
  --bs-btn-border-color: #7cb798;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #7cb798;
  --bs-btn-hover-border-color: #7cb798;
  --bs-btn-focus-shadow-rgb: 113, 165, 142;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #7cb798;
  --bs-btn-active-border-color: #7cb798;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #7cb798;
  --bs-btn-disabled-border-color: #7cb798;
}
.btn-aqua {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #54a8c7;
  --bs-btn-border-color: #54a8c7;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #54a8c7;
  --bs-btn-hover-border-color: #54a8c7;
  --bs-btn-focus-shadow-rgb: 79, 152, 181;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #54a8c7;
  --bs-btn-active-border-color: #54a8c7;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #54a8c7;
  --bs-btn-disabled-border-color: #54a8c7;
}
.btn-navy {
  --bs-btn-color: #fff;
  --bs-btn-bg: #343f52;
  --bs-btn-border-color: #343f52;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #343f52;
  --bs-btn-hover-border-color: #343f52;
  --bs-btn-focus-shadow-rgb: 82, 92, 108;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #343f52;
  --bs-btn-active-border-color: #343f52;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #343f52;
  --bs-btn-disabled-border-color: #343f52;
}
.btn-ash {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #9499a3;
  --bs-btn-border-color: #9499a3;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #9499a3;
  --bs-btn-hover-border-color: #9499a3;
  --bs-btn-focus-shadow-rgb: 134, 140, 151;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #9499a3;
  --bs-btn-active-border-color: #9499a3;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #9499a3;
  --bs-btn-disabled-border-color: #9499a3;
}
.btn-white {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #fff;
  --bs-btn-border-color: #fff;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: white;
  --bs-btn-hover-border-color: white;
  --bs-btn-focus-shadow-rgb: 225, 226, 229;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: white;
  --bs-btn-active-border-color: white;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #fff;
  --bs-btn-disabled-border-color: #fff;
}
.btn-light {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #fefefe;
  --bs-btn-border-color: #fefefe;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #fefefe;
  --bs-btn-hover-border-color: #fefefe;
  --bs-btn-focus-shadow-rgb: 224, 225, 228;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #fefefe;
  --bs-btn-active-border-color: #fefefe;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #fefefe;
  --bs-btn-disabled-border-color: #fefefe;
}
.btn-gray {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #f6f7f9;
  --bs-btn-border-color: #f6f7f9;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #f6f7f9;
  --bs-btn-hover-border-color: #f6f7f9;
  --bs-btn-focus-shadow-rgb: 217, 219, 224;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #f6f7f9;
  --bs-btn-active-border-color: #f6f7f9;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #f6f7f9;
  --bs-btn-disabled-border-color: #f6f7f9;
}
.btn-dark {
  --bs-btn-color: #fff;
  --bs-btn-bg: #262b32;
  --bs-btn-border-color: #262b32;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #262b32;
  --bs-btn-hover-border-color: #262b32;
  --bs-btn-focus-shadow-rgb: 71, 75, 81;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #262b32;
  --bs-btn-active-border-color: #262b32;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #262b32;
  --bs-btn-disabled-border-color: #262b32;
}
.btn-primary {
  --bs-btn-color: #fff;
  --bs-btn-bg: #3f78e0;
  --bs-btn-border-color: #3f78e0;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #3f78e0;
  --bs-btn-hover-border-color: #3f78e0;
  --bs-btn-focus-shadow-rgb: 92, 140, 229;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #3f78e0;
  --bs-btn-active-border-color: #3f78e0;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #3f78e0;
  --bs-btn-disabled-border-color: #3f78e0;
}
.btn-secondary {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #aab0bc;
  --bs-btn-border-color: #aab0bc;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #aab0bc;
  --bs-btn-hover-border-color: #aab0bc;
  --bs-btn-focus-shadow-rgb: 152, 159, 172;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #aab0bc;
  --bs-btn-active-border-color: #aab0bc;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #aab0bc;
  --bs-btn-disabled-border-color: #aab0bc;
}
.btn-success {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #45c4a0;
  --bs-btn-border-color: #45c4a0;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #45c4a0;
  --bs-btn-hover-border-color: #45c4a0;
  --bs-btn-focus-shadow-rgb: 66, 176, 148;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #45c4a0;
  --bs-btn-active-border-color: #45c4a0;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #45c4a0;
  --bs-btn-disabled-border-color: #45c4a0;
}
.btn-info {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #54a8c7;
  --bs-btn-border-color: #54a8c7;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #54a8c7;
  --bs-btn-hover-border-color: #54a8c7;
  --bs-btn-focus-shadow-rgb: 79, 152, 181;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #54a8c7;
  --bs-btn-active-border-color: #54a8c7;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #54a8c7;
  --bs-btn-disabled-border-color: #54a8c7;
}
.btn-warning {
  --bs-btn-color: #343f52;
  --bs-btn-bg: #fab758;
  --bs-btn-border-color: #fab758;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #fab758;
  --bs-btn-hover-border-color: #fab758;
  --bs-btn-focus-shadow-rgb: 220, 165, 87;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #fab758;
  --bs-btn-active-border-color: #fab758;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: #fab758;
  --bs-btn-disabled-border-color: #fab758;
}
.btn-danger {
  --bs-btn-color: #fff;
  --bs-btn-bg: #e2626b;
  --bs-btn-border-color: #e2626b;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #e2626b;
  --bs-btn-hover-border-color: #e2626b;
  --bs-btn-focus-shadow-rgb: 230, 122, 129;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #e2626b;
  --bs-btn-active-border-color: #e2626b;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #e2626b;
  --bs-btn-disabled-border-color: #e2626b;
}
.btn-outline-blue {
  --bs-btn-color: #3f78e0;
  --bs-btn-border-color: #3f78e0;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #3f78e0;
  --bs-btn-hover-border-color: #3f78e0;
  --bs-btn-focus-shadow-rgb: 63, 120, 224;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #3f78e0;
  --bs-btn-active-border-color: #3f78e0;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #3f78e0;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #3f78e0;
  --bs-gradient: none;
}
.btn-outline-sky {
  --bs-btn-color: #5eb9f0;
  --bs-btn-border-color: #5eb9f0;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #5eb9f0;
  --bs-btn-hover-border-color: #5eb9f0;
  --bs-btn-focus-shadow-rgb: 94, 185, 240;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #5eb9f0;
  --bs-btn-active-border-color: #5eb9f0;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #5eb9f0;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #5eb9f0;
  --bs-gradient: none;
}
.btn-outline-purple {
  --bs-btn-color: #747ed1;
  --bs-btn-border-color: #747ed1;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #747ed1;
  --bs-btn-hover-border-color: #747ed1;
  --bs-btn-focus-shadow-rgb: 116, 126, 209;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #747ed1;
  --bs-btn-active-border-color: #747ed1;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #747ed1;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #747ed1;
  --bs-gradient: none;
}
.btn-outline-grape {
  --bs-btn-color: #605dba;
  --bs-btn-border-color: #605dba;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #605dba;
  --bs-btn-hover-border-color: #605dba;
  --bs-btn-focus-shadow-rgb: 96, 93, 186;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #605dba;
  --bs-btn-active-border-color: #605dba;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #605dba;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #605dba;
  --bs-gradient: none;
}
.btn-outline-violet {
  --bs-btn-color: #a07cc5;
  --bs-btn-border-color: #a07cc5;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #a07cc5;
  --bs-btn-hover-border-color: #a07cc5;
  --bs-btn-focus-shadow-rgb: 160, 124, 197;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #a07cc5;
  --bs-btn-active-border-color: #a07cc5;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #a07cc5;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #a07cc5;
  --bs-gradient: none;
}
.btn-outline-pink {
  --bs-btn-color: #d16b86;
  --bs-btn-border-color: #d16b86;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #d16b86;
  --bs-btn-hover-border-color: #d16b86;
  --bs-btn-focus-shadow-rgb: 209, 107, 134;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #d16b86;
  --bs-btn-active-border-color: #d16b86;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #d16b86;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #d16b86;
  --bs-gradient: none;
}
.btn-outline-fuchsia {
  --bs-btn-color: #e668b3;
  --bs-btn-border-color: #e668b3;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #e668b3;
  --bs-btn-hover-border-color: #e668b3;
  --bs-btn-focus-shadow-rgb: 230, 104, 179;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #e668b3;
  --bs-btn-active-border-color: #e668b3;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #e668b3;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #e668b3;
  --bs-gradient: none;
}
.btn-outline-red {
  --bs-btn-color: #e2626b;
  --bs-btn-border-color: #e2626b;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #e2626b;
  --bs-btn-hover-border-color: #e2626b;
  --bs-btn-focus-shadow-rgb: 226, 98, 107;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #e2626b;
  --bs-btn-active-border-color: #e2626b;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #e2626b;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #e2626b;
  --bs-gradient: none;
}
.btn-outline-orange {
  --bs-btn-color: #f78b77;
  --bs-btn-border-color: #f78b77;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #f78b77;
  --bs-btn-hover-border-color: #f78b77;
  --bs-btn-focus-shadow-rgb: 247, 139, 119;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #f78b77;
  --bs-btn-active-border-color: #f78b77;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #f78b77;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #f78b77;
  --bs-gradient: none;
}
.btn-outline-yellow {
  --bs-btn-color: #fab758;
  --bs-btn-border-color: #fab758;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #fab758;
  --bs-btn-hover-border-color: #fab758;
  --bs-btn-focus-shadow-rgb: 250, 183, 88;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #fab758;
  --bs-btn-active-border-color: #fab758;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fab758;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #fab758;
  --bs-gradient: none;
}
.btn-outline-green {
  --bs-btn-color: #45c4a0;
  --bs-btn-border-color: #45c4a0;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #45c4a0;
  --bs-btn-hover-border-color: #45c4a0;
  --bs-btn-focus-shadow-rgb: 69, 196, 160;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #45c4a0;
  --bs-btn-active-border-color: #45c4a0;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #45c4a0;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #45c4a0;
  --bs-gradient: none;
}
.btn-outline-leaf {
  --bs-btn-color: #7cb798;
  --bs-btn-border-color: #7cb798;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #7cb798;
  --bs-btn-hover-border-color: #7cb798;
  --bs-btn-focus-shadow-rgb: 124, 183, 152;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #7cb798;
  --bs-btn-active-border-color: #7cb798;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #7cb798;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #7cb798;
  --bs-gradient: none;
}
.btn-outline-aqua {
  --bs-btn-color: #54a8c7;
  --bs-btn-border-color: #54a8c7;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #54a8c7;
  --bs-btn-hover-border-color: #54a8c7;
  --bs-btn-focus-shadow-rgb: 84, 168, 199;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #54a8c7;
  --bs-btn-active-border-color: #54a8c7;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #54a8c7;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #54a8c7;
  --bs-gradient: none;
}
.btn-outline-navy {
  --bs-btn-color: #343f52;
  --bs-btn-border-color: #343f52;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #343f52;
  --bs-btn-hover-border-color: #343f52;
  --bs-btn-focus-shadow-rgb: 52, 63, 82;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #343f52;
  --bs-btn-active-border-color: #343f52;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #343f52;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #343f52;
  --bs-gradient: none;
}
.btn-outline-ash {
  --bs-btn-color: #9499a3;
  --bs-btn-border-color: #9499a3;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #9499a3;
  --bs-btn-hover-border-color: #9499a3;
  --bs-btn-focus-shadow-rgb: 148, 153, 163;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #9499a3;
  --bs-btn-active-border-color: #9499a3;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #9499a3;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #9499a3;
  --bs-gradient: none;
}
.btn-outline-white {
  --bs-btn-color: #fff;
  --bs-btn-border-color: #fff;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #fff;
  --bs-btn-hover-border-color: #fff;
  --bs-btn-focus-shadow-rgb: 255, 255, 255;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #fff;
  --bs-btn-active-border-color: #fff;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #fff;
  --bs-gradient: none;
}
.btn-outline-light {
  --bs-btn-color: #fefefe;
  --bs-btn-border-color: #fefefe;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #fefefe;
  --bs-btn-hover-border-color: #fefefe;
  --bs-btn-focus-shadow-rgb: 254, 254, 254;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #fefefe;
  --bs-btn-active-border-color: #fefefe;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fefefe;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #fefefe;
  --bs-gradient: none;
}
.btn-outline-gray {
  --bs-btn-color: #f6f7f9;
  --bs-btn-border-color: #f6f7f9;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #f6f7f9;
  --bs-btn-hover-border-color: #f6f7f9;
  --bs-btn-focus-shadow-rgb: 246, 247, 249;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #f6f7f9;
  --bs-btn-active-border-color: #f6f7f9;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #f6f7f9;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #f6f7f9;
  --bs-gradient: none;
}
.btn-outline-dark {
  --bs-btn-color: #262b32;
  --bs-btn-border-color: #262b32;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #262b32;
  --bs-btn-hover-border-color: #262b32;
  --bs-btn-focus-shadow-rgb: 38, 43, 50;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #262b32;
  --bs-btn-active-border-color: #262b32;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #262b32;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #262b32;
  --bs-gradient: none;
}
.btn-outline-primary {
  --bs-btn-color: #3f78e0;
  --bs-btn-border-color: #3f78e0;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #3f78e0;
  --bs-btn-hover-border-color: #3f78e0;
  --bs-btn-focus-shadow-rgb: 63, 120, 224;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #3f78e0;
  --bs-btn-active-border-color: #3f78e0;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #3f78e0;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #3f78e0;
  --bs-gradient: none;
}
.btn-outline-secondary {
  --bs-btn-color: #aab0bc;
  --bs-btn-border-color: #aab0bc;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #aab0bc;
  --bs-btn-hover-border-color: #aab0bc;
  --bs-btn-focus-shadow-rgb: 170, 176, 188;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #aab0bc;
  --bs-btn-active-border-color: #aab0bc;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #aab0bc;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #aab0bc;
  --bs-gradient: none;
}
.btn-outline-success {
  --bs-btn-color: #45c4a0;
  --bs-btn-border-color: #45c4a0;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #45c4a0;
  --bs-btn-hover-border-color: #45c4a0;
  --bs-btn-focus-shadow-rgb: 69, 196, 160;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #45c4a0;
  --bs-btn-active-border-color: #45c4a0;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #45c4a0;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #45c4a0;
  --bs-gradient: none;
}
.btn-outline-info {
  --bs-btn-color: #54a8c7;
  --bs-btn-border-color: #54a8c7;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #54a8c7;
  --bs-btn-hover-border-color: #54a8c7;
  --bs-btn-focus-shadow-rgb: 84, 168, 199;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #54a8c7;
  --bs-btn-active-border-color: #54a8c7;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #54a8c7;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #54a8c7;
  --bs-gradient: none;
}
.btn-outline-warning {
  --bs-btn-color: #fab758;
  --bs-btn-border-color: #fab758;
  --bs-btn-hover-color: #343f52;
  --bs-btn-hover-bg: #fab758;
  --bs-btn-hover-border-color: #fab758;
  --bs-btn-focus-shadow-rgb: 250, 183, 88;
  --bs-btn-active-color: #343f52;
  --bs-btn-active-bg: #fab758;
  --bs-btn-active-border-color: #fab758;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #fab758;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #fab758;
  --bs-gradient: none;
}
.btn-outline-danger {
  --bs-btn-color: #e2626b;
  --bs-btn-border-color: #e2626b;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #e2626b;
  --bs-btn-hover-border-color: #e2626b;
  --bs-btn-focus-shadow-rgb: 226, 98, 107;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #e2626b;
  --bs-btn-active-border-color: #e2626b;
  --bs-btn-active-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
  --bs-btn-disabled-color: #e2626b;
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: #e2626b;
  --bs-gradient: none;
}
.btn-link {
  --bs-btn-font-weight: 500;
  --bs-btn-color: var(--bs-link-color);
  --bs-btn-bg: transparent;
  --bs-btn-border-color: transparent;
  --bs-btn-hover-color: var(--bs-link-hover-color);
  --bs-btn-hover-border-color: transparent;
  --bs-btn-active-color: var(--bs-link-hover-color);
  --bs-btn-active-border-color: transparent;
  --bs-btn-disabled-color: #60697b;
  --bs-btn-disabled-border-color: transparent;
  --bs-btn-box-shadow: 0 0 0 #000;
  --bs-btn-focus-shadow-rgb: 92, 140, 229;
  text-decoration: none;
}
.btn-link:focus-visible {
  color: var(--bs-btn-color);
}
.btn-link:hover {
  color: var(--bs-btn-hover-color);
}
.btn-lg,
.btn-group-lg>.btn {
  --bs-btn-padding-y: 0.65rem;
  --bs-btn-padding-x: 1.4rem;
  --bs-btn-font-size: 0.85rem;
  --bs-btn-border-radius: 0.4rem;
}
.btn-sm,
.btn-group-sm>.btn {
  --bs-btn-padding-y: 0.4rem;
  --bs-btn-padding-x: 1rem;
  --bs-btn-font-size: 0.7rem;
  --bs-btn-border-radius: 0.4rem;
}
.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}
.collapse:not(.show) {
  display: none;
}
.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}
.dropup,
.dropend,
.dropdown,
.dropstart,
.dropup-center,
.dropdown-center {
  position: relative;
}
.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  font-family: "Unicons";
  display: inline-block;
  margin-left: 0.05rem;
  vertical-align: -3px;
  font-weight: 700 !important;
  content: "";
  border: 0;
  content: "\e92d";
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropdown-menu {
  --bs-dropdown-zindex: 1000;
  --bs-dropdown-min-width: 10rem;
  --bs-dropdown-padding-x: 0;
  --bs-dropdown-padding-y: 1rem;
  --bs-dropdown-spacer: 0.75rem;
  --bs-dropdown-font-size: 0.75rem;
  --bs-dropdown-color: #343f52;
  --bs-dropdown-bg: var(--bs-white);
  --bs-dropdown-border-color: transparent;
  --bs-dropdown-border-radius: 0.4rem;
  --bs-dropdown-border-width: var(--bs-border-width);
  --bs-dropdown-inner-border-radius: calc(0.4rem - var(--bs-border-width));
  --bs-dropdown-divider-bg: transparent;
  --bs-dropdown-divider-margin-y: 0.5rem;
  --bs-dropdown-box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.06);
  --bs-dropdown-link-color: #343f52;
  --bs-dropdown-link-hover-color: var(--bs-primary);
  --bs-dropdown-link-hover-bg: inherit;
  --bs-dropdown-link-active-color: var(--bs-primary);
  --bs-dropdown-link-active-bg: inherit;
  --bs-dropdown-link-disabled-color: #60697b;
  --bs-dropdown-item-padding-x: 1.5rem;
  --bs-dropdown-item-padding-y: 0.2rem;
  --bs-dropdown-header-color: var(--bs-primary);
  --bs-dropdown-header-padding-x: 1.5rem;
  --bs-dropdown-header-padding-y: 0.5rem;
  position: absolute;
  z-index: var(--bs-dropdown-zindex);
  display: none;
  min-width: var(--bs-dropdown-min-width);
  padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
  margin: 0;
  font-size: var(--bs-dropdown-font-size);
  color: var(--bs-dropdown-color);
  text-align: left;
  list-style: none;
  background-color: var(--bs-dropdown-bg);
  background-clip: padding-box;
  border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
  border-radius: var(--bs-dropdown-border-radius);
  box-shadow: var(--bs-dropdown-box-shadow);
}
.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: var(--bs-dropdown-spacer);
}
.dropdown-menu-start {
  --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}
.dropdown-menu-end {
  --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}
@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-end {
    --bs-position: end;
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: var(--bs-dropdown-spacer);
}
.dropup .dropdown-toggle::after {
  font-family: "Unicons";
  display: inline-block;
  margin-left: 0.05rem;
  vertical-align: -3px;
  font-weight: 700 !important;
  content: "";
  border: 0;
  content: "\e932";
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: var(--bs-dropdown-spacer);
}
.dropend .dropdown-toggle::after {
  font-family: "Unicons";
  display: inline-block;
  margin-left: 0.05rem;
  vertical-align: -3px;
  font-weight: 700 !important;
  content: "";
  border: 0;
  content: "\e931";
}
.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-toggle::after {
  vertical-align: 0;
}
.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: var(--bs-dropdown-spacer);
}
.dropstart .dropdown-toggle::after {
  font-family: "Unicons";
  display: inline-block;
  margin-left: 0.05rem;
  vertical-align: -3px;
  font-weight: 700 !important;
  content: "";
  border: 0;
  content: "\e92f";
}
.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}
.dropdown-divider {
  height: 0;
  margin: var(--bs-dropdown-divider-margin-y) 0;
  overflow: hidden;
  border-top: 1px solid var(--bs-dropdown-divider-bg);
  opacity: 1;
}
.dropdown-item {
  display: block;
  width: 100%;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  clear: both;
  font-weight: 500;
  color: var(--bs-dropdown-link-color);
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
  border-radius: var(--bs-dropdown-item-border-radius, 0);
}
.dropdown-item:hover,
.dropdown-item:focus {
  color: var(--bs-dropdown-link-hover-color);
  background-color: var(--bs-dropdown-link-hover-bg);
}
.dropdown-item.active,
.dropdown-item:active {
  color: var(--bs-dropdown-link-active-color);
  text-decoration: none;
  background-color: var(--bs-dropdown-link-active-bg);
}
.dropdown-item.disabled,
.dropdown-item:disabled {
  color: var(--bs-dropdown-link-disabled-color);
  pointer-events: none;
  background-color: transparent;
}
.dropdown-menu.show {
  display: block;
}
.dropdown-header {
  display: block;
  padding: var(--bs-dropdown-header-padding-y) var(--bs-dropdown-header-padding-x);
  margin-bottom: 0;
  font-size: 0.7rem;
  color: var(--bs-dropdown-header-color);
  white-space: nowrap;
}
.dropdown-item-text {
  display: block;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  color: var(--bs-dropdown-link-color);
}
.dropdown-menu-dark {
  --bs-dropdown-color: #cacaca;
  --bs-dropdown-bg: #2e353e;
  --bs-dropdown-border-color: transparent;
  --bs-dropdown-box-shadow: ;
  --bs-dropdown-link-color: #cacaca;
  --bs-dropdown-link-hover-color: var(--bs-white);
  --bs-dropdown-divider-bg: transparent;
  --bs-dropdown-link-hover-bg: rgba(var(--bs-white-rgb), 0.15);
  --bs-dropdown-link-active-color: var(--bs-primary);
  --bs-dropdown-link-active-bg: inherit;
  --bs-dropdown-link-disabled-color: #959ca9;
  --bs-dropdown-header-color: #959ca9;
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group>.btn,
.btn-group-vertical>.btn {
  position: relative;
  flex: 1 1 auto;
}
.btn-group>.btn-check:checked+.btn,
.btn-group>.btn-check:focus+.btn,
.btn-group>.btn:hover,
.btn-group>.btn:focus,
.btn-group>.btn:active,
.btn-group>.btn.active,
.btn-group-vertical>.btn-check:checked+.btn,
.btn-group-vertical>.btn-check:focus+.btn,
.btn-group-vertical>.btn:hover,
.btn-group-vertical>.btn:focus,
.btn-group-vertical>.btn:active,
.btn-group-vertical>.btn.active {
  z-index: 1;
}
.btn-toolbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}
.btn-group {
  border-radius: 0.4rem;
}
.btn-group> :not(.btn-check:first-child)+.btn,
.btn-group>.btn-group:not(:first-child) {
  margin-left: calc(2px * -1);
}
.btn-group>.btn:not(:last-child):not(.dropdown-toggle),
.btn-group>.btn.dropdown-toggle-split:first-child,
.btn-group>.btn-group:not(:last-child)>.btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group>.btn:nth-child(n+3),
.btn-group> :not(.btn-check)+.btn,
.btn-group>.btn-group:not(:first-child)>.btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.dropdown-toggle-split {
  padding-right: 0.9rem;
  padding-left: 0.9rem;
}
.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropend .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}
.btn-sm+.dropdown-toggle-split,
.btn-group-sm>.btn+.dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}
.btn-lg+.dropdown-toggle-split,
.btn-group-lg>.btn+.dropdown-toggle-split {
  padding-right: 1.05rem;
  padding-left: 1.05rem;
}
.btn-group.show .dropdown-toggle {
  box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
}
.btn-group.show .dropdown-toggle.btn-link {
  box-shadow: none;
}
.btn-group-vertical {
  flex-direction: column;
  align-items: flex-start;
  justify-content: center;
}
.btn-group-vertical>.btn,
.btn-group-vertical>.btn-group {
  width: 100%;
}
.btn-group-vertical>.btn:not(:first-child),
.btn-group-vertical>.btn-group:not(:first-child) {
  margin-top: calc(2px * -1);
}
.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical>.btn-group:not(:last-child)>.btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical>.btn~.btn,
.btn-group-vertical>.btn-group:not(:first-child)>.btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.nav {
  --bs-nav-link-padding-x: 1rem;
  --bs-nav-link-padding-y: 1.2rem;
  --bs-nav-link-font-size: 0.8rem;
  --bs-nav-link-font-weight: 700;
  --bs-nav-link-color: #343f52;
  --bs-nav-link-hover-color: var(--bs-primary);
  --bs-nav-link-disabled-color: #959ca9;
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav-link {
  display: block;
  padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
  font-size: var(--bs-nav-link-font-size);
  font-weight: var(--bs-nav-link-font-weight);
  color: var(--bs-nav-link-color);
  background: none;
  border: 0;
  transition: color 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}
.nav-link:hover,
.nav-link:focus {
  color: var(--bs-nav-link-hover-color);
}
.nav-link:focus-visible {
  outline: 0;
  box-shadow: 0 0 0 0.25rem rgba(63, 120, 224, 0.25);
}
.nav-link.disabled,
.nav-link:disabled {
  color: var(--bs-nav-link-disabled-color);
  pointer-events: none;
  cursor: default;
}
.nav-tabs {
  --bs-nav-tabs-border-width: var(--bs-border-width);
  --bs-nav-tabs-border-color: rgba(164, 174, 198, 0.2);
  --bs-nav-tabs-border-radius: 0.4rem;
  --bs-nav-tabs-link-hover-border-color: transparent;
  --bs-nav-tabs-link-active-color: var(--bs-primary);
  --bs-nav-tabs-link-active-bg: var(--bs-white);
  --bs-nav-tabs-link-active-border-color: rgba(164, 174, 198, 0.2);
  border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
}
.nav-tabs .nav-link {
  margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
  border: var(--bs-nav-tabs-border-width) solid transparent;
  border-top-left-radius: var(--bs-nav-tabs-border-radius);
  border-top-right-radius: var(--bs-nav-tabs-border-radius);
}
.nav-tabs .nav-link:hover,
.nav-tabs .nav-link:focus {
  isolation: isolate;
  border-color: var(--bs-nav-tabs-link-hover-border-color);
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: var(--bs-nav-tabs-link-active-color);
  background-color: var(--bs-nav-tabs-link-active-bg);
  border-color: var(--bs-nav-tabs-link-active-border-color);
}
.nav-tabs .dropdown-menu {
  margin-top: calc(-1 * var(--bs-nav-tabs-border-width));
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.nav-pills {
  --bs-nav-pills-border-radius: 0.4rem;
  --bs-nav-pills-link-active-color: var(--bs-primary);
  --bs-nav-pills-link-active-bg: var(--bs-white);
}
.nav-pills .nav-link {
  border-radius: var(--bs-nav-pills-border-radius);
}
.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
  color: var(--bs-nav-pills-link-active-color);
  background-color: var(--bs-nav-pills-link-active-bg);
}
.nav-underline {
  --bs-nav-underline-gap: 1rem;
  --bs-nav-underline-border-width: 0.125rem;
  --bs-nav-underline-link-active-color: var(--bs-emphasis-color);
  gap: var(--bs-nav-underline-gap);
}
.nav-underline .nav-link {
  padding-right: 0;
  padding-left: 0;
  border-bottom: var(--bs-nav-underline-border-width) solid transparent;
}
.nav-underline .nav-link:hover,
.nav-underline .nav-link:focus {
  border-bottom-color: currentcolor;
}
.nav-underline .nav-link.active,
.nav-underline .show>.nav-link {
  font-weight: 700;
  color: var(--bs-nav-underline-link-active-color);
  border-bottom-color: currentcolor;
}
.nav-fill>.nav-link,
.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center;
}
.nav-justified>.nav-link,
.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center;
}
.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}
.tab-content>.tab-pane {
  display: none;
}
.tab-content>.active {
  display: block;
}
.navbar {
  --bs-navbar-padding-x: 0;
  --bs-navbar-padding-y: 0;
  --bs-navbar-color: #343f52;
  --bs-navbar-hover-color: var(--bs-primary);
  --bs-navbar-disabled-color: rgba(52, 63, 82, 0.3);
  --bs-navbar-active-color: var(--bs-primary);
  --bs-navbar-brand-padding-y: 0;
  --bs-navbar-brand-margin-end: 0;
  --bs-navbar-brand-font-size: 0.7rem;
  --bs-navbar-brand-color: var(--bs-primary);
  --bs-navbar-brand-hover-color: var(--bs-primary);
  --bs-navbar-nav-link-padding-x: 1rem;
  --bs-navbar-toggler-padding-y: 0.25rem;
  --bs-navbar-toggler-padding-x: 0.75rem;
  --bs-navbar-toggler-font-size: 1rem;
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='45' height='32' viewBox='0 0 45 32'%3e%3cpath fill='%233f78e0' d='M26.88 29.888c-1.076 1.289-2.683 2.103-4.48 2.103s-3.404-0.814-4.472-2.093l-0.008-0.009-5.12-7.040-8.192-10.048-3.52-4.608c-0.646-0.848-1.036-1.922-1.036-3.087 0-2.828 2.292-5.12 5.12-5.12 0.139 0 0.277 0.006 0.413 0.016l-0.018-0.001h33.664c0.118-0.010 0.256-0.015 0.396-0.015 2.828 0 5.12 2.292 5.12 5.12 0 1.165-0.389 2.239-1.045 3.1l0.009-0.013-3.52 4.608-7.872 10.048z'/%3e%3c/svg%3e");
  --bs-navbar-toggler-border-color: transparent;
  --bs-navbar-toggler-border-radius: 0.4rem;
  --bs-navbar-toggler-focus-width: 0.25rem;
  --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
}
.navbar>.container,
.navbar>.container-fluid,
.navbar>.container-sm,
.navbar>.container-md,
.navbar>.container-lg,
.navbar>.container-xl,
.navbar>.container-xxl {
  display: flex;
  flex-wrap: inherit;
  align-items: center;
  justify-content: space-between;
}
.navbar-brand {
  padding-top: var(--bs-navbar-brand-padding-y);
  padding-bottom: var(--bs-navbar-brand-padding-y);
  margin-right: var(--bs-navbar-brand-margin-end);
  font-size: var(--bs-navbar-brand-font-size);
  color: var(--bs-navbar-brand-color);
  white-space: nowrap;
}
.navbar-brand:hover,
.navbar-brand:focus {
  color: var(--bs-navbar-brand-hover-color);
}
.navbar-nav {
  --bs-nav-link-padding-x: 0;
  --bs-nav-link-padding-y: 1.2rem;
  --bs-nav-link-font-size: 0.8rem;
  --bs-nav-link-font-weight: 700;
  --bs-nav-link-color: var(--bs-navbar-color);
  --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
  --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link.active,
.navbar-nav .nav-link.show {
  color: var(--bs-navbar-active-color);
}
.navbar-nav .dropdown-menu {
  position: static;
}
.navbar-text {
  padding-top: 1.2rem;
  padding-bottom: 1.2rem;
  color: var(--bs-navbar-color);
}
.navbar-text a,
.navbar-text a:hover,
.navbar-text a:focus {
  color: var(--bs-navbar-active-color);
}
.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center;
}
.navbar-toggler {
  padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
  font-size: var(--bs-navbar-toggler-font-size);
  line-height: 1;
  color: var(--bs-navbar-color);
  background-color: transparent;
  border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
  border-radius: var(--bs-navbar-toggler-border-radius);
  transition: var(--bs-navbar-toggler-transition);
}
@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
}
.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-image: var(--bs-navbar-toggler-icon-bg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}
.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}
@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    box-shadow: none;
    transition: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    box-shadow: none;
    transition: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    box-shadow: none;
    transition: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    box-shadow: none;
    transition: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl {
    flex-wrap: nowrap;
    justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: flex !important;
    flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: static;
    z-index: auto;
    flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    transform: none !important;
    box-shadow: none;
    transition: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
.navbar-expand {
  flex-wrap: nowrap;
  justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: var(--bs-navbar-nav-link-padding-x);
  padding-left: var(--bs-navbar-nav-link-padding-x);
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: flex !important;
  flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-expand .offcanvas {
  position: static;
  z-index: auto;
  flex-grow: 1;
  width: auto !important;
  height: auto !important;
  visibility: visible !important;
  background-color: transparent !important;
  border: 0 !important;
  transform: none !important;
  box-shadow: none;
  transition: none;
}
.navbar-expand .offcanvas .offcanvas-header {
  display: none;
}
.navbar-expand .offcanvas .offcanvas-body {
  display: flex;
  flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}
.navbar-dark,
.navbar[data-bs-theme=dark] {
  --bs-navbar-color: var(--bs-white);
  --bs-navbar-hover-color: rgba(var(--bs-white-rgb), 0.7);
  --bs-navbar-disabled-color: rgba(var(--bs-white-rgb), 0.25);
  --bs-navbar-active-color: rgba(var(--bs-white-rgb), 0.7);
  --bs-navbar-brand-color: rgba(var(--bs-white-rgb), 0.7);
  --bs-navbar-brand-hover-color: rgba(var(--bs-white-rgb), 0.7);
  --bs-navbar-toggler-border-color: transparent;
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='45' height='32' viewBox='0 0 45 32'%3e%3cpath fill='var%28--bs-white%29' d='M26.88 29.888c-1.076 1.289-2.683 2.103-4.48 2.103s-3.404-0.814-4.472-2.093l-0.008-0.009-5.12-7.040-8.192-10.048-3.52-4.608c-0.646-0.848-1.036-1.922-1.036-3.087 0-2.828 2.292-5.12 5.12-5.12 0.139 0 0.277 0.006 0.413 0.016l-0.018-0.001h33.664c0.118-0.010 0.256-0.015 0.396-0.015 2.828 0 5.12 2.292 5.12 5.12 0 1.165-0.389 2.239-1.045 3.1l0.009-0.013-3.52 4.608-7.872 10.048z'/%3e%3c/svg%3e");
}
[data-bs-theme=dark] .navbar-toggler-icon {
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg version='1.1' xmlns='http://www.w3.org/2000/svg' width='45' height='32' viewBox='0 0 45 32'%3e%3cpath fill='var%28--bs-white%29' d='M26.88 29.888c-1.076 1.289-2.683 2.103-4.48 2.103s-3.404-0.814-4.472-2.093l-0.008-0.009-5.12-7.040-8.192-10.048-3.52-4.608c-0.646-0.848-1.036-1.922-1.036-3.087 0-2.828 2.292-5.12 5.12-5.12 0.139 0 0.277 0.006 0.413 0.016l-0.018-0.001h33.664c0.118-0.010 0.256-0.015 0.396-0.015 2.828 0 5.12 2.292 5.12 5.12 0 1.165-0.389 2.239-1.045 3.1l0.009-0.013-3.52 4.608-7.872 10.048z'/%3e%3c/svg%3e");
}
.card {
  --bs-card-spacer-y: 2rem;
  --bs-card-spacer-x: 2rem;
  --bs-card-title-spacer-y: 0.5rem;
  --bs-card-title-color: #343f52;
  --bs-card-subtitle-color: ;
  --bs-card-border-width: 1px;
  --bs-card-border-color: rgba(164, 174, 198, 0.2);
  --bs-card-border-radius: 0.4rem;
  --bs-card-box-shadow: ;
  --bs-card-inner-border-radius: 0.4rem;
  --bs-card-cap-padding-y: 0.9rem;
  --bs-card-cap-padding-x: 2rem;
  --bs-card-cap-bg: transparent;
  --bs-card-cap-color: ;
  --bs-card-height: ;
  --bs-card-color: ;
  --bs-card-bg: var(--bs-white);
  --bs-card-img-overlay-padding: 1rem;
  --bs-card-group-margin: 0.75rem;
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  height: var(--bs-card-height);
  color: var(--bs-body-color);
  word-wrap: break-word;
  background-color: var(--bs-card-bg);
  background-clip: border-box;
  border: var(--bs-card-border-width) solid var(--bs-card-border-color);
  border-radius: var(--bs-card-border-radius);
  box-shadow: var(--bs-card-box-shadow);
}
.card>hr {
  margin-right: 0;
  margin-left: 0;
}
.card>.list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card>.list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: var(--bs-card-inner-border-radius);
  border-top-right-radius: var(--bs-card-inner-border-radius);
}
.card>.list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: var(--bs-card-inner-border-radius);
  border-bottom-left-radius: var(--bs-card-inner-border-radius);
}
.card>.card-header+.list-group,
.card>.list-group+.card-footer {
  border-top: 0;
}
.card-body {
  flex: 1 1 auto;
  padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
  color: var(--bs-card-color);
}
.card-title {
  margin-bottom: var(--bs-card-title-spacer-y);
  color: var(--bs-card-title-color);
}
.card-subtitle {
  margin-top: calc(-0.5 * var(--bs-card-title-spacer-y));
  margin-bottom: 0;
  color: var(--bs-card-subtitle-color);
}
.card-text:last-child {
  margin-bottom: 0;
}
.card-link+.card-link {
  margin-left: var(--bs-card-spacer-x);
}
.card-header {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  margin-bottom: 0;
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-header:first-child {
  border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
}
.card-footer {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-footer:last-child {
  border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
}
.card-header-tabs {
  margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
  margin-bottom: calc(-1 * var(--bs-card-cap-padding-y));
  margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
  border-bottom: 0;
}
.card-header-tabs .nav-link.active {
  background-color: var(--bs-card-bg);
  border-bottom-color: var(--bs-card-bg);
}
.card-header-pills {
  margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
  margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
}
.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--bs-card-img-overlay-padding);
  border-radius: var(--bs-card-inner-border-radius);
}
.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}
.card-img,
.card-img-top {
  border-top-left-radius: var(--bs-card-inner-border-radius);
  border-top-right-radius: var(--bs-card-inner-border-radius);
}
.card-img,
.card-img-bottom {
  border-bottom-right-radius: var(--bs-card-inner-border-radius);
  border-bottom-left-radius: var(--bs-card-inner-border-radius);
}
.card-group>.card {
  margin-bottom: var(--bs-card-group-margin);
}
@media (min-width: 576px) {
  .card-group {
    display: flex;
    flex-flow: row wrap;
  }
  .card-group>.card {
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group>.card+.card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group>.card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group>.card:not(:last-child) .card-img-top,
  .card-group>.card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group>.card:not(:last-child) .card-img-bottom,
  .card-group>.card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group>.card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group>.card:not(:first-child) .card-img-top,
  .card-group>.card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group>.card:not(:first-child) .card-img-bottom,
  .card-group>.card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}
.pagination {
  --bs-pagination-padding-x: 0;
  --bs-pagination-padding-y: 0;
  --bs-pagination-font-size: 0.65rem;
  --bs-pagination-color: #343f52;
  --bs-pagination-bg: var(--bs-white);
  --bs-pagination-border-width: 1px;
  --bs-pagination-border-color: rgba(164, 174, 198, 0.2);
  --bs-pagination-border-radius: 0.4rem;
  --bs-pagination-hover-color: var(--bs-primary);
  --bs-pagination-hover-bg: var(--bs-white);
  --bs-pagination-hover-border-color: rgba(164, 174, 198, 0.2);
  --bs-pagination-focus-color: var(--bs-primary);
  --bs-pagination-focus-bg: var(--bs-white);
  --bs-pagination-focus-box-shadow: unset;
  --bs-pagination-active-color: var(--bs-primary);
  --bs-pagination-active-bg: var(--bs-white);
  --bs-pagination-active-border-color: rgba(164, 174, 198, 0.2);
  --bs-pagination-disabled-color: #959ca9;
  --bs-pagination-disabled-bg: var(--bs-white);
  --bs-pagination-disabled-border-color: rgba(164, 174, 198, 0.2);
  display: flex;
  padding-left: 0;
  list-style: none;
}
.page-link {
  position: relative;
  display: block;
  padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
  font-size: var(--bs-pagination-font-size);
  color: var(--bs-pagination-color);
  background-color: var(--bs-pagination-bg);
  border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .page-link {
    transition: none;
  }
}
.page-link:hover {
  z-index: 2;
  color: var(--bs-pagination-hover-color);
  background-color: var(--bs-pagination-hover-bg);
  border-color: var(--bs-pagination-hover-border-color);
}
.page-link:focus {
  z-index: 3;
  color: var(--bs-pagination-focus-color);
  background-color: var(--bs-pagination-focus-bg);
  outline: 0;
  box-shadow: var(--bs-pagination-focus-box-shadow);
}
.page-link.active,
.active>.page-link {
  z-index: 3;
  color: var(--bs-pagination-active-color);
  background-color: var(--bs-pagination-active-bg);
  border-color: var(--bs-pagination-active-border-color);
}
.page-link.disabled,
.disabled>.page-link {
  color: var(--bs-pagination-disabled-color);
  pointer-events: none;
  background-color: var(--bs-pagination-disabled-bg);
  border-color: var(--bs-pagination-disabled-border-color);
}
.page-item:not(:first-child) .page-link {
  margin-left: calc(1px * -1);
}
.page-item:first-child .page-link {
  border-top-left-radius: var(--bs-pagination-border-radius);
  border-bottom-left-radius: var(--bs-pagination-border-radius);
}
.page-item:last-child .page-link {
  border-top-right-radius: var(--bs-pagination-border-radius);
  border-bottom-right-radius: var(--bs-pagination-border-radius);
}
.pagination-lg {
  --bs-pagination-padding-x: 0;
  --bs-pagination-padding-y: 0;
  --bs-pagination-font-size: 1rem;
  --bs-pagination-border-radius: var(--bs-border-radius-lg);
}
.pagination-sm {
  --bs-pagination-padding-x: 0;
  --bs-pagination-padding-y: 0;
  --bs-pagination-font-size: 0.7rem;
  --bs-pagination-border-radius: var(--bs-border-radius-sm);
}
.badge {
  --bs-badge-padding-x: 0.7em;
  --bs-badge-padding-y: 0.4em;
  --bs-badge-font-size: 0.75em;
  --bs-badge-font-weight: 700;
  --bs-badge-color: #fff;
  --bs-badge-border-radius: var(--bs-border-radius);
  display: inline-block;
  padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
  font-size: var(--bs-badge-font-size);
  font-weight: var(--bs-badge-font-weight);
  line-height: 1;
  color: var(--bs-badge-color);
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: var(--bs-badge-border-radius);
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.alert {
  --bs-alert-bg: transparent;
  --bs-alert-padding-x: 1rem;
  --bs-alert-padding-y: 1rem;
  --bs-alert-margin-bottom: 1rem;
  --bs-alert-color: inherit;
  --bs-alert-border-color: transparent;
  --bs-alert-border: 0 solid var(--bs-alert-border-color);
  --bs-alert-border-radius: var(--bs-border-radius);
  --bs-alert-link-color: inherit;
  position: relative;
  padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
  margin-bottom: var(--bs-alert-margin-bottom);
  color: var(--bs-alert-color);
  background-color: var(--bs-alert-bg);
  border: var(--bs-alert-border);
  border-radius: var(--bs-alert-border-radius);
}
.alert-heading {
  color: inherit;
}
.alert-link {
  font-weight: 700;
  color: var(--bs-alert-link-color);
}
.alert-dismissible {
  padding-right: 3rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.25rem 1rem;
}
.alert-blue {
  --bs-alert-color: var(--bs-blue-text-emphasis);
  --bs-alert-bg: var(--bs-blue-bg-subtle);
  --bs-alert-border-color: var(--bs-blue-border-subtle);
  --bs-alert-link-color: var(--bs-blue-text-emphasis);
}
.alert-sky {
  --bs-alert-color: var(--bs-sky-text-emphasis);
  --bs-alert-bg: var(--bs-sky-bg-subtle);
  --bs-alert-border-color: var(--bs-sky-border-subtle);
  --bs-alert-link-color: var(--bs-sky-text-emphasis);
}
.alert-purple {
  --bs-alert-color: var(--bs-purple-text-emphasis);
  --bs-alert-bg: var(--bs-purple-bg-subtle);
  --bs-alert-border-color: var(--bs-purple-border-subtle);
  --bs-alert-link-color: var(--bs-purple-text-emphasis);
}
.alert-grape {
  --bs-alert-color: var(--bs-grape-text-emphasis);
  --bs-alert-bg: var(--bs-grape-bg-subtle);
  --bs-alert-border-color: var(--bs-grape-border-subtle);
  --bs-alert-link-color: var(--bs-grape-text-emphasis);
}
.alert-violet {
  --bs-alert-color: var(--bs-violet-text-emphasis);
  --bs-alert-bg: var(--bs-violet-bg-subtle);
  --bs-alert-border-color: var(--bs-violet-border-subtle);
  --bs-alert-link-color: var(--bs-violet-text-emphasis);
}
.alert-pink {
  --bs-alert-color: var(--bs-pink-text-emphasis);
  --bs-alert-bg: var(--bs-pink-bg-subtle);
  --bs-alert-border-color: var(--bs-pink-border-subtle);
  --bs-alert-link-color: var(--bs-pink-text-emphasis);
}
.alert-fuchsia {
  --bs-alert-color: var(--bs-fuchsia-text-emphasis);
  --bs-alert-bg: var(--bs-fuchsia-bg-subtle);
  --bs-alert-border-color: var(--bs-fuchsia-border-subtle);
  --bs-alert-link-color: var(--bs-fuchsia-text-emphasis);
}
.alert-red {
  --bs-alert-color: var(--bs-red-text-emphasis);
  --bs-alert-bg: var(--bs-red-bg-subtle);
  --bs-alert-border-color: var(--bs-red-border-subtle);
  --bs-alert-link-color: var(--bs-red-text-emphasis);
}
.alert-orange {
  --bs-alert-color: var(--bs-orange-text-emphasis);
  --bs-alert-bg: var(--bs-orange-bg-subtle);
  --bs-alert-border-color: var(--bs-orange-border-subtle);
  --bs-alert-link-color: var(--bs-orange-text-emphasis);
}
.alert-yellow {
  --bs-alert-color: var(--bs-yellow-text-emphasis);
  --bs-alert-bg: var(--bs-yellow-bg-subtle);
  --bs-alert-border-color: var(--bs-yellow-border-subtle);
  --bs-alert-link-color: var(--bs-yellow-text-emphasis);
}
.alert-green {
  --bs-alert-color: var(--bs-green-text-emphasis);
  --bs-alert-bg: var(--bs-green-bg-subtle);
  --bs-alert-border-color: var(--bs-green-border-subtle);
  --bs-alert-link-color: var(--bs-green-text-emphasis);
}
.alert-leaf {
  --bs-alert-color: var(--bs-leaf-text-emphasis);
  --bs-alert-bg: var(--bs-leaf-bg-subtle);
  --bs-alert-border-color: var(--bs-leaf-border-subtle);
  --bs-alert-link-color: var(--bs-leaf-text-emphasis);
}
.alert-aqua {
  --bs-alert-color: var(--bs-aqua-text-emphasis);
  --bs-alert-bg: var(--bs-aqua-bg-subtle);
  --bs-alert-border-color: var(--bs-aqua-border-subtle);
  --bs-alert-link-color: var(--bs-aqua-text-emphasis);
}
.alert-navy {
  --bs-alert-color: var(--bs-navy-text-emphasis);
  --bs-alert-bg: var(--bs-navy-bg-subtle);
  --bs-alert-border-color: var(--bs-navy-border-subtle);
  --bs-alert-link-color: var(--bs-navy-text-emphasis);
}
.alert-ash {
  --bs-alert-color: var(--bs-ash-text-emphasis);
  --bs-alert-bg: var(--bs-ash-bg-subtle);
  --bs-alert-border-color: var(--bs-ash-border-subtle);
  --bs-alert-link-color: var(--bs-ash-text-emphasis);
}
.alert-white {
  --bs-alert-color: var(--bs-white-text-emphasis);
  --bs-alert-bg: var(--bs-white-bg-subtle);
  --bs-alert-border-color: var(--bs-white-border-subtle);
  --bs-alert-link-color: var(--bs-white-text-emphasis);
}
.alert-light {
  --bs-alert-color: var(--bs-light-text-emphasis);
  --bs-alert-bg: var(--bs-light-bg-subtle);
  --bs-alert-border-color: var(--bs-light-border-subtle);
  --bs-alert-link-color: var(--bs-light-text-emphasis);
}
.alert-gray {
  --bs-alert-color: var(--bs-gray-text-emphasis);
  --bs-alert-bg: var(--bs-gray-bg-subtle);
  --bs-alert-border-color: var(--bs-gray-border-subtle);
  --bs-alert-link-color: var(--bs-gray-text-emphasis);
}
.alert-dark {
  --bs-alert-color: var(--bs-dark-text-emphasis);
  --bs-alert-bg: var(--bs-dark-bg-subtle);
  --bs-alert-border-color: var(--bs-dark-border-subtle);
  --bs-alert-link-color: var(--bs-dark-text-emphasis);
}
.alert-primary {
  --bs-alert-color: var(--bs-primary-text-emphasis);
  --bs-alert-bg: var(--bs-primary-bg-subtle);
  --bs-alert-border-color: var(--bs-primary-border-subtle);
  --bs-alert-link-color: var(--bs-primary-text-emphasis);
}
.alert-secondary {
  --bs-alert-color: var(--bs-secondary-text-emphasis);
  --bs-alert-bg: var(--bs-secondary-bg-subtle);
  --bs-alert-border-color: var(--bs-secondary-border-subtle);
  --bs-alert-link-color: var(--bs-secondary-text-emphasis);
}
.alert-success {
  --bs-alert-color: var(--bs-success-text-emphasis);
  --bs-alert-bg: var(--bs-success-bg-subtle);
  --bs-alert-border-color: var(--bs-success-border-subtle);
  --bs-alert-link-color: var(--bs-success-text-emphasis);
}
.alert-info {
  --bs-alert-color: var(--bs-info-text-emphasis);
  --bs-alert-bg: var(--bs-info-bg-subtle);
  --bs-alert-border-color: var(--bs-info-border-subtle);
  --bs-alert-link-color: var(--bs-info-text-emphasis);
}
.alert-warning {
  --bs-alert-color: var(--bs-warning-text-emphasis);
  --bs-alert-bg: var(--bs-warning-bg-subtle);
  --bs-alert-border-color: var(--bs-warning-border-subtle);
  --bs-alert-link-color: var(--bs-warning-text-emphasis);
}
.alert-danger {
  --bs-alert-color: var(--bs-danger-text-emphasis);
  --bs-alert-bg: var(--bs-danger-bg-subtle);
  --bs-alert-border-color: var(--bs-danger-border-subtle);
  --bs-alert-link-color: var(--bs-danger-text-emphasis);
}
.list-group {
  --bs-list-group-color: var(--bs-body-color);
  --bs-list-group-bg: var(--bs-body-bg);
  --bs-list-group-border-color: var(--bs-border-color);
  --bs-list-group-border-width: var(--bs-border-width);
  --bs-list-group-border-radius: var(--bs-border-radius);
  --bs-list-group-item-padding-x: 1rem;
  --bs-list-group-item-padding-y: 0.5rem;
  --bs-list-group-action-color: var(--bs-secondary-color);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-tertiary-bg);
  --bs-list-group-action-active-color: var(--bs-body-color);
  --bs-list-group-action-active-bg: var(--bs-secondary-bg);
  --bs-list-group-disabled-color: var(--bs-secondary-color);
  --bs-list-group-disabled-bg: var(--bs-body-bg);
  --bs-list-group-active-color: #fff;
  --bs-list-group-active-bg: #3f78e0;
  --bs-list-group-active-border-color: #3f78e0;
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: var(--bs-list-group-border-radius);
}
.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}
.list-group-numbered>.list-group-item::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}
.list-group-item-action {
  width: 100%;
  color: var(--bs-list-group-action-color);
  text-align: inherit;
}
.list-group-item-action:hover,
.list-group-item-action:focus {
  z-index: 1;
  color: var(--bs-list-group-action-hover-color);
  text-decoration: none;
  background-color: var(--bs-list-group-action-hover-bg);
}
.list-group-item-action:active {
  color: var(--bs-list-group-action-active-color);
  background-color: var(--bs-list-group-action-active-bg);
}
.list-group-item {
  position: relative;
  display: block;
  padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
  color: var(--bs-list-group-color);
  background-color: var(--bs-list-group-bg);
  border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled,
.list-group-item:disabled {
  color: var(--bs-list-group-disabled-color);
  pointer-events: none;
  background-color: var(--bs-list-group-disabled-bg);
}
.list-group-item.active {
  z-index: 2;
  color: var(--bs-list-group-active-color);
  background-color: var(--bs-list-group-active-bg);
  border-color: var(--bs-list-group-active-border-color);
}
.list-group-item+.list-group-item {
  border-top-width: 0;
}
.list-group-item+.list-group-item.active {
  margin-top: calc(-1 * var(--bs-list-group-border-width));
  border-top-width: var(--bs-list-group-border-width);
}
.list-group-horizontal {
  flex-direction: row;
}
.list-group-horizontal>.list-group-item:first-child:not(:last-child) {
  border-bottom-left-radius: var(--bs-list-group-border-radius);
  border-top-right-radius: 0;
}
.list-group-horizontal>.list-group-item:last-child:not(:first-child) {
  border-top-right-radius: var(--bs-list-group-border-radius);
  border-bottom-left-radius: 0;
}
.list-group-horizontal>.list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal>.list-group-item+.list-group-item {
  border-top-width: var(--bs-list-group-border-width);
  border-left-width: 0;
}
.list-group-horizontal>.list-group-item+.list-group-item.active {
  margin-left: calc(-1 * var(--bs-list-group-border-width));
  border-left-width: var(--bs-list-group-border-width);
}
@media (min-width: 576px) {
  .list-group-horizontal-sm {
    flex-direction: row;
  }
  .list-group-horizontal-sm>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm>.list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm>.list-group-item+.list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-sm>.list-group-item+.list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    flex-direction: row;
  }
  .list-group-horizontal-md>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md>.list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md>.list-group-item+.list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-md>.list-group-item+.list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    flex-direction: row;
  }
  .list-group-horizontal-lg>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg>.list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg>.list-group-item+.list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-lg>.list-group-item+.list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    flex-direction: row;
  }
  .list-group-horizontal-xl>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl>.list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl>.list-group-item+.list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xl>.list-group-item+.list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    flex-direction: row;
  }
  .list-group-horizontal-xxl>.list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl>.list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl>.list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl>.list-group-item+.list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xxl>.list-group-item+.list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush>.list-group-item {
  border-width: 0 0 var(--bs-list-group-border-width);
}
.list-group-flush>.list-group-item:last-child {
  border-bottom-width: 0;
}
.list-group-item-blue {
  --bs-list-group-color: var(--bs-blue-text-emphasis);
  --bs-list-group-bg: var(--bs-blue-bg-subtle);
  --bs-list-group-border-color: var(--bs-blue-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-blue-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-blue-border-subtle);
  --bs-list-group-active-color: var(--bs-blue-bg-subtle);
  --bs-list-group-active-bg: var(--bs-blue-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-blue-text-emphasis);
}
.list-group-item-sky {
  --bs-list-group-color: var(--bs-sky-text-emphasis);
  --bs-list-group-bg: var(--bs-sky-bg-subtle);
  --bs-list-group-border-color: var(--bs-sky-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-sky-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-sky-border-subtle);
  --bs-list-group-active-color: var(--bs-sky-bg-subtle);
  --bs-list-group-active-bg: var(--bs-sky-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-sky-text-emphasis);
}
.list-group-item-purple {
  --bs-list-group-color: var(--bs-purple-text-emphasis);
  --bs-list-group-bg: var(--bs-purple-bg-subtle);
  --bs-list-group-border-color: var(--bs-purple-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-purple-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-purple-border-subtle);
  --bs-list-group-active-color: var(--bs-purple-bg-subtle);
  --bs-list-group-active-bg: var(--bs-purple-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-purple-text-emphasis);
}
.list-group-item-grape {
  --bs-list-group-color: var(--bs-grape-text-emphasis);
  --bs-list-group-bg: var(--bs-grape-bg-subtle);
  --bs-list-group-border-color: var(--bs-grape-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-grape-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-grape-border-subtle);
  --bs-list-group-active-color: var(--bs-grape-bg-subtle);
  --bs-list-group-active-bg: var(--bs-grape-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-grape-text-emphasis);
}
.list-group-item-violet {
  --bs-list-group-color: var(--bs-violet-text-emphasis);
  --bs-list-group-bg: var(--bs-violet-bg-subtle);
  --bs-list-group-border-color: var(--bs-violet-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-violet-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-violet-border-subtle);
  --bs-list-group-active-color: var(--bs-violet-bg-subtle);
  --bs-list-group-active-bg: var(--bs-violet-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-violet-text-emphasis);
}
.list-group-item-pink {
  --bs-list-group-color: var(--bs-pink-text-emphasis);
  --bs-list-group-bg: var(--bs-pink-bg-subtle);
  --bs-list-group-border-color: var(--bs-pink-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-pink-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-pink-border-subtle);
  --bs-list-group-active-color: var(--bs-pink-bg-subtle);
  --bs-list-group-active-bg: var(--bs-pink-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-pink-text-emphasis);
}
.list-group-item-fuchsia {
  --bs-list-group-color: var(--bs-fuchsia-text-emphasis);
  --bs-list-group-bg: var(--bs-fuchsia-bg-subtle);
  --bs-list-group-border-color: var(--bs-fuchsia-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-fuchsia-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-fuchsia-border-subtle);
  --bs-list-group-active-color: var(--bs-fuchsia-bg-subtle);
  --bs-list-group-active-bg: var(--bs-fuchsia-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-fuchsia-text-emphasis);
}
.list-group-item-red {
  --bs-list-group-color: var(--bs-red-text-emphasis);
  --bs-list-group-bg: var(--bs-red-bg-subtle);
  --bs-list-group-border-color: var(--bs-red-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-red-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-red-border-subtle);
  --bs-list-group-active-color: var(--bs-red-bg-subtle);
  --bs-list-group-active-bg: var(--bs-red-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-red-text-emphasis);
}
.list-group-item-orange {
  --bs-list-group-color: var(--bs-orange-text-emphasis);
  --bs-list-group-bg: var(--bs-orange-bg-subtle);
  --bs-list-group-border-color: var(--bs-orange-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-orange-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-orange-border-subtle);
  --bs-list-group-active-color: var(--bs-orange-bg-subtle);
  --bs-list-group-active-bg: var(--bs-orange-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-orange-text-emphasis);
}
.list-group-item-yellow {
  --bs-list-group-color: var(--bs-yellow-text-emphasis);
  --bs-list-group-bg: var(--bs-yellow-bg-subtle);
  --bs-list-group-border-color: var(--bs-yellow-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-yellow-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-yellow-border-subtle);
  --bs-list-group-active-color: var(--bs-yellow-bg-subtle);
  --bs-list-group-active-bg: var(--bs-yellow-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-yellow-text-emphasis);
}
.list-group-item-green {
  --bs-list-group-color: var(--bs-green-text-emphasis);
  --bs-list-group-bg: var(--bs-green-bg-subtle);
  --bs-list-group-border-color: var(--bs-green-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-green-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-green-border-subtle);
  --bs-list-group-active-color: var(--bs-green-bg-subtle);
  --bs-list-group-active-bg: var(--bs-green-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-green-text-emphasis);
}
.list-group-item-leaf {
  --bs-list-group-color: var(--bs-leaf-text-emphasis);
  --bs-list-group-bg: var(--bs-leaf-bg-subtle);
  --bs-list-group-border-color: var(--bs-leaf-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-leaf-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-leaf-border-subtle);
  --bs-list-group-active-color: var(--bs-leaf-bg-subtle);
  --bs-list-group-active-bg: var(--bs-leaf-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-leaf-text-emphasis);
}
.list-group-item-aqua {
  --bs-list-group-color: var(--bs-aqua-text-emphasis);
  --bs-list-group-bg: var(--bs-aqua-bg-subtle);
  --bs-list-group-border-color: var(--bs-aqua-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-aqua-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-aqua-border-subtle);
  --bs-list-group-active-color: var(--bs-aqua-bg-subtle);
  --bs-list-group-active-bg: var(--bs-aqua-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-aqua-text-emphasis);
}
.list-group-item-navy {
  --bs-list-group-color: var(--bs-navy-text-emphasis);
  --bs-list-group-bg: var(--bs-navy-bg-subtle);
  --bs-list-group-border-color: var(--bs-navy-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-navy-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-navy-border-subtle);
  --bs-list-group-active-color: var(--bs-navy-bg-subtle);
  --bs-list-group-active-bg: var(--bs-navy-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-navy-text-emphasis);
}
.list-group-item-ash {
  --bs-list-group-color: var(--bs-ash-text-emphasis);
  --bs-list-group-bg: var(--bs-ash-bg-subtle);
  --bs-list-group-border-color: var(--bs-ash-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-ash-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-ash-border-subtle);
  --bs-list-group-active-color: var(--bs-ash-bg-subtle);
  --bs-list-group-active-bg: var(--bs-ash-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-ash-text-emphasis);
}
.list-group-item-white {
  --bs-list-group-color: var(--bs-white-text-emphasis);
  --bs-list-group-bg: var(--bs-white-bg-subtle);
  --bs-list-group-border-color: var(--bs-white-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-white-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-white-border-subtle);
  --bs-list-group-active-color: var(--bs-white-bg-subtle);
  --bs-list-group-active-bg: var(--bs-white-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-white-text-emphasis);
}
.list-group-item-light {
  --bs-list-group-color: var(--bs-light-text-emphasis);
  --bs-list-group-bg: var(--bs-light-bg-subtle);
  --bs-list-group-border-color: var(--bs-light-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-light-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-light-border-subtle);
  --bs-list-group-active-color: var(--bs-light-bg-subtle);
  --bs-list-group-active-bg: var(--bs-light-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-light-text-emphasis);
}
.list-group-item-gray {
  --bs-list-group-color: var(--bs-gray-text-emphasis);
  --bs-list-group-bg: var(--bs-gray-bg-subtle);
  --bs-list-group-border-color: var(--bs-gray-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-gray-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-gray-border-subtle);
  --bs-list-group-active-color: var(--bs-gray-bg-subtle);
  --bs-list-group-active-bg: var(--bs-gray-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-gray-text-emphasis);
}
.list-group-item-dark {
  --bs-list-group-color: var(--bs-dark-text-emphasis);
  --bs-list-group-bg: var(--bs-dark-bg-subtle);
  --bs-list-group-border-color: var(--bs-dark-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-dark-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-dark-border-subtle);
  --bs-list-group-active-color: var(--bs-dark-bg-subtle);
  --bs-list-group-active-bg: var(--bs-dark-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-dark-text-emphasis);
}
.list-group-item-primary {
  --bs-list-group-color: var(--bs-primary-text-emphasis);
  --bs-list-group-bg: var(--bs-primary-bg-subtle);
  --bs-list-group-border-color: var(--bs-primary-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-primary-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-primary-border-subtle);
  --bs-list-group-active-color: var(--bs-primary-bg-subtle);
  --bs-list-group-active-bg: var(--bs-primary-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-primary-text-emphasis);
}
.list-group-item-secondary {
  --bs-list-group-color: var(--bs-secondary-text-emphasis);
  --bs-list-group-bg: var(--bs-secondary-bg-subtle);
  --bs-list-group-border-color: var(--bs-secondary-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-secondary-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-secondary-border-subtle);
  --bs-list-group-active-color: var(--bs-secondary-bg-subtle);
  --bs-list-group-active-bg: var(--bs-secondary-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-secondary-text-emphasis);
}
.list-group-item-success {
  --bs-list-group-color: var(--bs-success-text-emphasis);
  --bs-list-group-bg: var(--bs-success-bg-subtle);
  --bs-list-group-border-color: var(--bs-success-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-success-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-success-border-subtle);
  --bs-list-group-active-color: var(--bs-success-bg-subtle);
  --bs-list-group-active-bg: var(--bs-success-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-success-text-emphasis);
}
.list-group-item-info {
  --bs-list-group-color: var(--bs-info-text-emphasis);
  --bs-list-group-bg: var(--bs-info-bg-subtle);
  --bs-list-group-border-color: var(--bs-info-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-info-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-info-border-subtle);
  --bs-list-group-active-color: var(--bs-info-bg-subtle);
  --bs-list-group-active-bg: var(--bs-info-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-info-text-emphasis);
}
.list-group-item-warning {
  --bs-list-group-color: var(--bs-warning-text-emphasis);
  --bs-list-group-bg: var(--bs-warning-bg-subtle);
  --bs-list-group-border-color: var(--bs-warning-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-warning-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-warning-border-subtle);
  --bs-list-group-active-color: var(--bs-warning-bg-subtle);
  --bs-list-group-active-bg: var(--bs-warning-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-warning-text-emphasis);
}
.list-group-item-danger {
  --bs-list-group-color: var(--bs-danger-text-emphasis);
  --bs-list-group-bg: var(--bs-danger-bg-subtle);
  --bs-list-group-border-color: var(--bs-danger-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-danger-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-danger-border-subtle);
  --bs-list-group-active-color: var(--bs-danger-bg-subtle);
  --bs-list-group-active-bg: var(--bs-danger-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-danger-text-emphasis);
}
.toast {
  --bs-toast-zindex: 1090;
  --bs-toast-padding-x: 0.75rem;
  --bs-toast-padding-y: 0.5rem;
  --bs-toast-spacing: 1.5rem;
  --bs-toast-max-width: 350px;
  --bs-toast-font-size: 0.875rem;
  --bs-toast-color: ;
  --bs-toast-bg: rgba(var(--bs-body-bg-rgb), 0.85);
  --bs-toast-border-width: var(--bs-border-width);
  --bs-toast-border-color: var(--bs-border-color-translucent);
  --bs-toast-border-radius: var(--bs-border-radius);
  --bs-toast-box-shadow: var(--bs-box-shadow);
  --bs-toast-header-color: var(--bs-secondary-color);
  --bs-toast-header-bg: rgba(var(--bs-body-bg-rgb), 0.85);
  --bs-toast-header-border-color: var(--bs-border-color-translucent);
  width: var(--bs-toast-max-width);
  max-width: 100%;
  font-size: var(--bs-toast-font-size);
  color: var(--bs-toast-color);
  pointer-events: auto;
  background-color: var(--bs-toast-bg);
  background-clip: padding-box;
  border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
  box-shadow: var(--bs-toast-box-shadow);
  border-radius: var(--bs-toast-border-radius);
}
.toast.showing {
  opacity: 0;
}
.toast:not(.show) {
  display: none;
}
.toast-container {
  --bs-toast-zindex: 1090;
  position: absolute;
  z-index: var(--bs-toast-zindex);
  width: -moz-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}
.toast-container> :not(:last-child) {
  margin-bottom: var(--bs-toast-spacing);
}
.toast-header {
  display: flex;
  align-items: center;
  padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
  color: var(--bs-toast-header-color);
  background-color: var(--bs-toast-header-bg);
  background-clip: padding-box;
  border-bottom: var(--bs-toast-border-width) solid var(--bs-toast-header-border-color);
  border-top-left-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
  border-top-right-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
}
.toast-header .btn-close {
  margin-right: calc(-0.5 * var(--bs-toast-padding-x));
  margin-left: var(--bs-toast-padding-x);
}
.toast-body {
  padding: var(--bs-toast-padding-x);
  word-wrap: break-word;
}
.modal {
  --bs-modal-zindex: 1055;
  --bs-modal-width: 560px;
  --bs-modal-padding: 2.5rem;
  --bs-modal-margin: 0.5rem;
  --bs-modal-color: ;
  --bs-modal-bg: var(--bs-body-bg);
  --bs-modal-border-color: var(--bs-border-color-translucent);
  --bs-modal-border-width: 0;
  --bs-modal-border-radius: var(--bs-border-radius-lg);
  --bs-modal-box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
  --bs-modal-inner-border-radius: calc(var(--bs-border-radius-lg) - 0);
  --bs-modal-header-padding-x: 2.5rem;
  --bs-modal-header-padding-y: 2.5rem;
  --bs-modal-header-padding: 2.5rem 2.5rem;
  --bs-modal-header-border-color: var(--bs-border-color);
  --bs-modal-header-border-width: 0;
  --bs-modal-title-line-height: 1.7;
  --bs-modal-footer-gap: 0.5rem;
  --bs-modal-footer-bg: ;
  --bs-modal-footer-border-color: var(--bs-border-color);
  --bs-modal-footer-border-width: 0;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--bs-modal-zindex);
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: var(--bs-modal-margin);
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  transform: translate(0, -50px);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  transform: none;
}
.modal.modal-static .modal-dialog {
  transform: scale(1.02);
}
.modal-dialog-scrollable {
  height: calc(100% - var(--bs-modal-margin) * 2);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}
.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - var(--bs-modal-margin) * 2);
}
.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  color: var(--bs-modal-color);
  pointer-events: auto;
  background-color: var(--bs-modal-bg);
  background-clip: padding-box;
  border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
  border-radius: var(--bs-modal-border-radius);
  box-shadow: var(--bs-modal-box-shadow);
  outline: 0;
}
.modal-backdrop {
  --bs-backdrop-zindex: 1050;
  --bs-backdrop-bg: rgba(30, 34, 40, 0.9);
  --bs-backdrop-opacity: 1;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--bs-backdrop-zindex);
  width: 100vw;
  height: 100vh;
  background-color: var(--bs-backdrop-bg);
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: var(--bs-backdrop-opacity);
}
.modal-header {
  display: flex;
  flex-shrink: 0;
  align-items: center;
  justify-content: space-between;
  padding: var(--bs-modal-header-padding);
  border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
  border-top-left-radius: var(--bs-modal-inner-border-radius);
  border-top-right-radius: var(--bs-modal-inner-border-radius);
}
.modal-header .btn-close {
  padding: calc(var(--bs-modal-header-padding-y) * 0.5) calc(var(--bs-modal-header-padding-x) * 0.5);
  margin: calc(-0.5 * var(--bs-modal-header-padding-y)) calc(-0.5 * var(--bs-modal-header-padding-x)) calc(-0.5 * var(--bs-modal-header-padding-y)) auto;
}
.modal-title {
  margin-bottom: 0;
  line-height: var(--bs-modal-title-line-height);
}
.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: var(--bs-modal-padding);
}
.modal-footer {
  display: flex;
  flex-shrink: 0;
  flex-wrap: wrap;
  align-items: center;
  justify-content: flex-end;
  padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * 0.5);
  background-color: var(--bs-modal-footer-bg);
  border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
  border-bottom-right-radius: var(--bs-modal-inner-border-radius);
  border-bottom-left-radius: var(--bs-modal-inner-border-radius);
}
.modal-footer>* {
  margin: calc(var(--bs-modal-footer-gap) * 0.5);
}
@media (min-width: 576px) {
  .modal {
    --bs-modal-margin: 1.75rem;
    --bs-modal-box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  }
  .modal-dialog {
    max-width: var(--bs-modal-width);
    margin-right: auto;
    margin-left: auto;
  }
  .modal-sm {
    --bs-modal-width: 450px;
  }
}
@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    --bs-modal-width: 800px;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    --bs-modal-width: 1140px;
  }
}
.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}
.modal-fullscreen .modal-header,
.modal-fullscreen .modal-footer {
  border-radius: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}
@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header,
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header,
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header,
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header,
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-header,
  .modal-fullscreen-xxl-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
}
.tooltip {
  --bs-tooltip-zindex: 1080;
  --bs-tooltip-max-width: 200px;
  --bs-tooltip-padding-x: 0.75rem;
  --bs-tooltip-padding-y: 0.5rem;
  --bs-tooltip-margin: 0;
  --bs-tooltip-font-size: 0.8rem;
  --bs-tooltip-color: var(--bs-white);
  --bs-tooltip-bg: var(--bs-primary);
  --bs-tooltip-border-radius: 0.4rem;
  --bs-tooltip-opacity: 0.98;
  --bs-tooltip-arrow-width: 0.8rem;
  --bs-tooltip-arrow-height: 0.4rem;
  z-index: var(--bs-tooltip-zindex);
  display: block;
  margin: var(--bs-tooltip-margin);
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 500;
  line-height: 1.7;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--bs-tooltip-font-size);
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: var(--bs-tooltip-opacity);
}
.tooltip .tooltip-arrow {
  display: block;
  width: var(--bs-tooltip-arrow-width);
  height: var(--bs-tooltip-arrow-height);
}
.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}
.bs-tooltip-top .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
  bottom: calc(-1 * var(--bs-tooltip-arrow-height));
}
.bs-tooltip-top .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
  top: -1px;
  border-width: var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
  border-top-color: var(--bs-tooltip-bg);
}
/* rtl:begin:ignore */
.bs-tooltip-end .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
  left: calc(-1 * var(--bs-tooltip-arrow-height));
  width: var(--bs-tooltip-arrow-height);
  height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-end .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
  right: -1px;
  border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
  border-right-color: var(--bs-tooltip-bg);
}
/* rtl:end:ignore */
.bs-tooltip-bottom .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
  top: calc(-1 * var(--bs-tooltip-arrow-height));
}
.bs-tooltip-bottom .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
  border-bottom-color: var(--bs-tooltip-bg);
}
/* rtl:begin:ignore */
.bs-tooltip-start .tooltip-arrow,
.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
  right: calc(-1 * var(--bs-tooltip-arrow-height));
  width: var(--bs-tooltip-arrow-height);
  height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-start .tooltip-arrow::before,
.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
  left: -1px;
  border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
  border-left-color: var(--bs-tooltip-bg);
}
/* rtl:end:ignore */
.tooltip-inner {
  max-width: var(--bs-tooltip-max-width);
  padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
  color: var(--bs-tooltip-color);
  text-align: center;
  background-color: var(--bs-tooltip-bg);
  border-radius: var(--bs-tooltip-border-radius);
}
.popover {
  --bs-popover-zindex: 1070;
  --bs-popover-max-width: 276px;
  --bs-popover-font-size: 0.8rem;
  --bs-popover-bg: var(--bs-white);
  --bs-popover-border-width: 1px;
  --bs-popover-border-color: rgba(164, 174, 198, 0.2);
  --bs-popover-border-radius: 0.4rem;
  --bs-popover-inner-border-radius: calc(0.4rem - 1px);
  --bs-popover-box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  --bs-popover-header-padding-x: 1.25rem;
  --bs-popover-header-padding-y: 1rem;
  --bs-popover-header-font-size: 0.8rem;
  --bs-popover-header-color: #343f52;
  --bs-popover-header-bg: var(--bs-white);
  --bs-popover-body-padding-x: 1.25rem;
  --bs-popover-body-padding-y: 1rem;
  --bs-popover-body-color: #60697b;
  --bs-popover-arrow-width: 1rem;
  --bs-popover-arrow-height: 0.5rem;
  --bs-popover-arrow-border: var(--bs-popover-border-color);
  z-index: var(--bs-popover-zindex);
  display: block;
  max-width: var(--bs-popover-max-width);
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 500;
  line-height: 1.7;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--bs-popover-font-size);
  word-wrap: break-word;
  background-color: var(--bs-popover-bg);
  background-clip: padding-box;
  border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
  border-radius: var(--bs-popover-border-radius);
  box-shadow: var(--bs-popover-box-shadow);
}
.popover .popover-arrow {
  display: block;
  width: var(--bs-popover-arrow-width);
  height: var(--bs-popover-arrow-height);
}
.popover .popover-arrow::before,
.popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
  border-width: 0;
}
.bs-popover-top>.popover-arrow,
.bs-popover-auto[data-popper-placement^=top]>.popover-arrow {
  bottom: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
}
.bs-popover-top>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before,
.bs-popover-top>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after {
  border-width: var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-top>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::before {
  bottom: 0;
  border-top-color: var(--bs-popover-arrow-border);
}
.bs-popover-top>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=top]>.popover-arrow::after {
  bottom: var(--bs-popover-border-width);
  border-top-color: var(--bs-popover-bg);
}
/* rtl:begin:ignore */
.bs-popover-end>.popover-arrow,
.bs-popover-auto[data-popper-placement^=right]>.popover-arrow {
  left: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
  width: var(--bs-popover-arrow-height);
  height: var(--bs-popover-arrow-width);
}
.bs-popover-end>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before,
.bs-popover-end>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after {
  border-width: calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-end>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::before {
  left: 0;
  border-right-color: var(--bs-popover-arrow-border);
}
.bs-popover-end>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=right]>.popover-arrow::after {
  left: var(--bs-popover-border-width);
  border-right-color: var(--bs-popover-bg);
}
/* rtl:end:ignore */
.bs-popover-bottom>.popover-arrow,
.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow {
  top: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
}
.bs-popover-bottom>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before,
.bs-popover-bottom>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after {
  border-width: 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-bottom>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::before {
  top: 0;
  border-bottom-color: var(--bs-popover-arrow-border);
}
.bs-popover-bottom>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=bottom]>.popover-arrow::after {
  top: var(--bs-popover-border-width);
  border-bottom-color: var(--bs-popover-bg);
}
.bs-popover-bottom .popover-header::before,
.bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: var(--bs-popover-arrow-width);
  margin-left: calc(-0.5 * var(--bs-popover-arrow-width));
  content: "";
  border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-header-bg);
}
/* rtl:begin:ignore */
.bs-popover-start>.popover-arrow,
.bs-popover-auto[data-popper-placement^=left]>.popover-arrow {
  right: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
  width: var(--bs-popover-arrow-height);
  height: var(--bs-popover-arrow-width);
}
.bs-popover-start>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before,
.bs-popover-start>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after {
  border-width: calc(var(--bs-popover-arrow-width) * 0.5) 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-start>.popover-arrow::before,
.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::before {
  right: 0;
  border-left-color: var(--bs-popover-arrow-border);
}
.bs-popover-start>.popover-arrow::after,
.bs-popover-auto[data-popper-placement^=left]>.popover-arrow::after {
  right: var(--bs-popover-border-width);
  border-left-color: var(--bs-popover-bg);
}
/* rtl:end:ignore */
.popover-header {
  padding: var(--bs-popover-header-padding-y) var(--bs-popover-header-padding-x);
  margin-bottom: 0;
  font-size: var(--bs-popover-header-font-size);
  color: var(--bs-popover-header-color);
  background-color: var(--bs-popover-header-bg);
  border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
  border-top-left-radius: var(--bs-popover-inner-border-radius);
  border-top-right-radius: var(--bs-popover-inner-border-radius);
}
.popover-header:empty {
  display: none;
}
.popover-body {
  padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
  color: var(--bs-popover-body-color);
}
.carousel {
  position: relative;
}
.carousel.pointer-event {
  touch-action: pan-y;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}
.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  transition: transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}
.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}
.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  transform: translateX(100%);
}
.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  transform: translateX(-100%);
}
.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    transition: none;
  }
}
.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}
.carousel-control-prev:hover,
.carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}
.carousel-control-prev {
  left: 0;
}
.carousel-control-next {
  right: 0;
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}
/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}
.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}
.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: flex;
  justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
}
.carousel-indicators [data-bs-target] {
  box-sizing: content-box;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}
.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #000;
}
.carousel-dark .carousel-caption {
  color: #000;
}
[data-bs-theme=dark] .carousel .carousel-control-prev-icon,
[data-bs-theme=dark] .carousel .carousel-control-next-icon,
[data-bs-theme=dark].carousel .carousel-control-prev-icon,
[data-bs-theme=dark].carousel .carousel-control-next-icon {
  filter: invert(1) grayscale(100);
}
[data-bs-theme=dark] .carousel .carousel-indicators [data-bs-target],
[data-bs-theme=dark].carousel .carousel-indicators [data-bs-target] {
  background-color: #000;
}
[data-bs-theme=dark] .carousel .carousel-caption,
[data-bs-theme=dark].carousel .carousel-caption {
  color: #000;
}
.spinner-grow,
.spinner-border {
  display: inline-block;
  width: var(--bs-spinner-width);
  height: var(--bs-spinner-height);
  vertical-align: var(--bs-spinner-vertical-align);
  border-radius: 50%;
  animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name);
}
@keyframes spinner-border {
  to {
    transform: rotate(360deg)
      /* rtl:ignore */
    ;
  }
}
.spinner-border {
  --bs-spinner-width: 2rem;
  --bs-spinner-height: 2rem;
  --bs-spinner-vertical-align: -0.125em;
  --bs-spinner-border-width: 0.25em;
  --bs-spinner-animation-speed: 0.75s;
  --bs-spinner-animation-name: spinner-border;
  border: var(--bs-spinner-border-width) solid currentcolor;
  border-right-color: transparent;
}
.spinner-border-sm {
  --bs-spinner-width: 1rem;
  --bs-spinner-height: 1rem;
  --bs-spinner-border-width: 0.2em;
}
@keyframes spinner-grow {
  0% {
    transform: scale(0);
  }
  50% {
    opacity: 1;
    transform: none;
  }
}
.spinner-grow {
  --bs-spinner-width: 2rem;
  --bs-spinner-height: 2rem;
  --bs-spinner-vertical-align: -0.125em;
  --bs-spinner-animation-speed: 0.75s;
  --bs-spinner-animation-name: spinner-grow;
  background-color: currentcolor;
  opacity: 0;
}
.spinner-grow-sm {
  --bs-spinner-width: 1rem;
  --bs-spinner-height: 1rem;
}
@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    --bs-spinner-animation-speed: 1.5s;
  }
}
.offcanvas,
.offcanvas-xxl,
.offcanvas-xl,
.offcanvas-lg,
.offcanvas-md,
.offcanvas-sm {
  --bs-offcanvas-zindex: 1045;
  --bs-offcanvas-width: 15rem;
  --bs-offcanvas-height: 30vh;
  --bs-offcanvas-padding-x: 1.5rem;
  --bs-offcanvas-padding-y: 1.5rem;
  --bs-offcanvas-color: var(--bs-white);
  --bs-offcanvas-bg: #1e2228;
  --bs-offcanvas-border-width: 0;
  --bs-offcanvas-border-color: transparent;
  --bs-offcanvas-box-shadow: none;
  --bs-offcanvas-transition: transform 0.3s ease-in-out;
  --bs-offcanvas-title-line-height: 1;
}
@media (max-width: 575.98px) {
  .offcanvas-sm {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    box-shadow: var(--bs-offcanvas-box-shadow);
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-sm {
    transition: none;
  }
}
@media (max-width: 575.98px) {
  .offcanvas-sm.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
}
@media (max-width: 575.98px) {
  .offcanvas-sm.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
}
@media (max-width: 575.98px) {
  .offcanvas-sm.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
}
@media (max-width: 575.98px) {
  .offcanvas-sm.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
}
@media (max-width: 575.98px) {
  .offcanvas-sm.showing,
  .offcanvas-sm.show:not(.hiding) {
    transform: none;
  }
}
@media (max-width: 575.98px) {
  .offcanvas-sm.showing,
  .offcanvas-sm.hiding,
  .offcanvas-sm.show {
    visibility: visible;
  }
}
@media (min-width: 576px) {
  .offcanvas-sm {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-sm .offcanvas-header {
    display: none;
  }
  .offcanvas-sm .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    box-shadow: var(--bs-offcanvas-box-shadow);
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-md {
    transition: none;
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md.showing,
  .offcanvas-md.show:not(.hiding) {
    transform: none;
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md.showing,
  .offcanvas-md.hiding,
  .offcanvas-md.show {
    visibility: visible;
  }
}
@media (min-width: 768px) {
  .offcanvas-md {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-md .offcanvas-header {
    display: none;
  }
  .offcanvas-md .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    box-shadow: var(--bs-offcanvas-box-shadow);
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-lg {
    transition: none;
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg.showing,
  .offcanvas-lg.show:not(.hiding) {
    transform: none;
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg.showing,
  .offcanvas-lg.hiding,
  .offcanvas-lg.show {
    visibility: visible;
  }
}
@media (min-width: 992px) {
  .offcanvas-lg {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-lg .offcanvas-header {
    display: none;
  }
  .offcanvas-lg .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    box-shadow: var(--bs-offcanvas-box-shadow);
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-xl {
    transition: none;
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl.showing,
  .offcanvas-xl.show:not(.hiding) {
    transform: none;
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl.showing,
  .offcanvas-xl.hiding,
  .offcanvas-xl.show {
    visibility: visible;
  }
}
@media (min-width: 1200px) {
  .offcanvas-xl {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-xl .offcanvas-header {
    display: none;
  }
  .offcanvas-xl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}
@media (max-width: 1399.98px) {
  .offcanvas-xxl {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: flex;
    flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    box-shadow: var(--bs-offcanvas-box-shadow);
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 1399.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-xxl {
    transition: none;
  }
}
@media (max-width: 1399.98px) {
  .offcanvas-xxl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(-100%);
  }
}
@media (max-width: 1399.98px) {
  .offcanvas-xxl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateX(100%);
  }
}
@media (max-width: 1399.98px) {
  .offcanvas-xxl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(-100%);
  }
}
@media (max-width: 1399.98px) {
  .offcanvas-xxl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    transform: translateY(100%);
  }
}
@media (max-width: 1399.98px) {
  .offcanvas-xxl.showing,
  .offcanvas-xxl.show:not(.hiding) {
    transform: none;
  }
}
@media (max-width: 1399.98px) {
  .offcanvas-xxl.showing,
  .offcanvas-xxl.hiding,
  .offcanvas-xxl.show {
    visibility: visible;
  }
}
@media (min-width: 1400px) {
  .offcanvas-xxl {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-xxl .offcanvas-header {
    display: none;
  }
  .offcanvas-xxl .offcanvas-body {
    display: flex;
    flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}
.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: var(--bs-offcanvas-zindex);
  display: flex;
  flex-direction: column;
  max-width: 100%;
  color: var(--bs-offcanvas-color);
  visibility: hidden;
  background-color: var(--bs-offcanvas-bg);
  background-clip: padding-box;
  outline: 0;
  box-shadow: var(--bs-offcanvas-box-shadow);
  transition: var(--bs-offcanvas-transition);
}
@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    transition: none;
  }
}
.offcanvas.offcanvas-start {
  top: 0;
  left: 0;
  width: var(--bs-offcanvas-width);
  border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateX(-100%);
}
.offcanvas.offcanvas-end {
  top: 0;
  right: 0;
  width: var(--bs-offcanvas-width);
  border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateX(100%);
}
.offcanvas.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: var(--bs-offcanvas-height);
  max-height: 100%;
  border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateY(-100%);
}
.offcanvas.offcanvas-bottom {
  right: 0;
  left: 0;
  height: var(--bs-offcanvas-height);
  max-height: 100%;
  border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  transform: translateY(100%);
}
.offcanvas.showing,
.offcanvas.show:not(.hiding) {
  transform: none;
}
.offcanvas.showing,
.offcanvas.hiding,
.offcanvas.show {
  visibility: visible;
}
.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: rgba(30, 34, 40, 0.7);
}
.offcanvas-backdrop.fade {
  opacity: 0;
}
.offcanvas-backdrop.show {
  opacity: 1;
}
.offcanvas-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
}
.offcanvas-header .btn-close {
  padding: calc(var(--bs-offcanvas-padding-y) * 0.5) calc(var(--bs-offcanvas-padding-x) * 0.5);
  margin-top: calc(-0.5 * var(--bs-offcanvas-padding-y));
  margin-right: calc(-0.5 * var(--bs-offcanvas-padding-x));
  margin-bottom: calc(-0.5 * var(--bs-offcanvas-padding-y));
}
.offcanvas-title {
  margin-bottom: 0;
  line-height: var(--bs-offcanvas-title-line-height);
}
.offcanvas-body {
  flex-grow: 1;
  padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
  overflow-y: auto;
}
.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentcolor;
  opacity: 0.5;
}
.placeholder.btn::before {
  display: inline-block;
  content: "";
}
.placeholder-xs {
  min-height: 0.6em;
}
.placeholder-sm {
  min-height: 0.8em;
}
.placeholder-lg {
  min-height: 1.2em;
}
.placeholder-glow .placeholder {
  animation: placeholder-glow 2s ease-in-out infinite;
}
@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}
.placeholder-wave {
  -webkit-mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  mask-image: linear-gradient(130deg, #000 55%, rgba(0, 0, 0, 0.8) 75%, #000 95%);
  -webkit-mask-size: 200% 100%;
  mask-size: 200% 100%;
  animation: placeholder-wave 2s linear infinite;
}
@keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
    mask-position: -200% 0%;
  }
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}
.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}
.ratio>* {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}
.ratio-4x3 {
  --bs-aspect-ratio: 75%;
}
.ratio-16x9 {
  --bs-aspect-ratio: 56.25%;
}
.ratio-21x9 {
  --bs-aspect-ratio: 42.8571428571%;
}
.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}
.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}
.sticky-top {
  position: sticky;
  top: 0;
  z-index: 1020;
}
.sticky-bottom {
  position: sticky;
  bottom: 0;
  z-index: 1020;
}
@media (min-width: 576px) {
  .sticky-sm-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-sm-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-md-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-lg-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xxl-bottom {
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}
.visually-hidden:not(caption),
.visually-hidden-focusable:not(:focus):not(:focus-within):not(caption) {
  position: absolute !important;
}
.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}
.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.align-baseline {
  vertical-align: baseline !important;
}
.align-top {
  vertical-align: top !important;
}
.align-middle {
  vertical-align: middle !important;
}
.align-bottom {
  vertical-align: bottom !important;
}
.align-text-bottom {
  vertical-align: text-bottom !important;
}
.align-text-top {
  vertical-align: text-top !important;
}
.float-start {
  float: left !important;
}
.float-end {
  float: right !important;
}
.float-none {
  float: none !important;
}
.object-fit-contain {
  -o-object-fit: contain !important;
  object-fit: contain !important;
}
.object-fit-cover {
  -o-object-fit: cover !important;
  object-fit: cover !important;
}
.object-fit-fill {
  -o-object-fit: fill !important;
  object-fit: fill !important;
}
.object-fit-scale {
  -o-object-fit: scale-down !important;
  object-fit: scale-down !important;
}
.object-fit-none {
  -o-object-fit: none !important;
  object-fit: none !important;
}
.opacity-0 {
  opacity: 0 !important;
}
.opacity-25 {
  opacity: 0.25 !important;
}
.opacity-50 {
  opacity: 0.5 !important;
}
.opacity-75 {
  opacity: 0.75 !important;
}
.opacity-90 {
  opacity: 0.9 !important;
}
.opacity-100 {
  opacity: 1 !important;
}
.overflow-auto {
  overflow: auto !important;
}
.overflow-hidden {
  overflow: hidden !important;
}
.overflow-visible {
  overflow: visible !important;
}
.overflow-scroll {
  overflow: scroll !important;
}
.overflow-x-auto {
  overflow-x: auto !important;
}
.overflow-x-hidden {
  overflow-x: hidden !important;
}
.overflow-x-visible {
  overflow-x: visible !important;
}
.overflow-x-scroll {
  overflow-x: scroll !important;
}
.overflow-y-auto {
  overflow-y: auto !important;
}
.overflow-y-hidden {
  overflow-y: hidden !important;
}
.overflow-y-visible {
  overflow-y: visible !important;
}
.overflow-y-scroll {
  overflow-y: scroll !important;
}
.d-inline {
  display: inline !important;
}
.d-inline-block {
  display: inline-block !important;
}
.d-block {
  display: block !important;
}
.d-grid {
  display: grid !important;
}
.d-inline-grid {
  display: inline-grid !important;
}
.d-table {
  display: table !important;
}
.d-table-row {
  display: table-row !important;
}
.d-table-cell {
  display: table-cell !important;
}
.d-flex {
  display: flex !important;
}
.d-inline-flex {
  display: inline-flex !important;
}
.d-none {
  display: none !important;
}
.shadow {
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04) !important;
}
.shadow-sm {
  box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02) !important;
}
.shadow-lg {
  box-shadow: 0rem 0.25rem 1.75rem rgba(30, 34, 40, 0.07) !important;
}
.shadow-xl {
  box-shadow: rgba(30, 34, 40, 0.02) 0px 2px 1px, rgba(30, 34, 40, 0.02) 0px 4px 2px, rgba(30, 34, 40, 0.02) 0px 8px 4px, rgba(30, 34, 40, 0.02) 0px 16px 8px, rgba(30, 34, 40, 0.03) 0px 32px 16px !important;
}
.shadow-none {
  box-shadow: none !important;
}
.focus-ring-blue {
  --bs-focus-ring-color: rgba(var(--bs-blue-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-sky {
  --bs-focus-ring-color: rgba(var(--bs-sky-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-purple {
  --bs-focus-ring-color: rgba(var(--bs-purple-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-grape {
  --bs-focus-ring-color: rgba(var(--bs-grape-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-violet {
  --bs-focus-ring-color: rgba(var(--bs-violet-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-pink {
  --bs-focus-ring-color: rgba(var(--bs-pink-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-fuchsia {
  --bs-focus-ring-color: rgba(var(--bs-fuchsia-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-red {
  --bs-focus-ring-color: rgba(var(--bs-red-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-orange {
  --bs-focus-ring-color: rgba(var(--bs-orange-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-yellow {
  --bs-focus-ring-color: rgba(var(--bs-yellow-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-green {
  --bs-focus-ring-color: rgba(var(--bs-green-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-leaf {
  --bs-focus-ring-color: rgba(var(--bs-leaf-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-aqua {
  --bs-focus-ring-color: rgba(var(--bs-aqua-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-navy {
  --bs-focus-ring-color: rgba(var(--bs-navy-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-ash {
  --bs-focus-ring-color: rgba(var(--bs-ash-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-white {
  --bs-focus-ring-color: rgba(var(--bs-white-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-light {
  --bs-focus-ring-color: rgba(var(--bs-light-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-gray {
  --bs-focus-ring-color: rgba(var(--bs-gray-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-dark {
  --bs-focus-ring-color: rgba(var(--bs-dark-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-primary {
  --bs-focus-ring-color: rgba(var(--bs-primary-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-secondary {
  --bs-focus-ring-color: rgba(var(--bs-secondary-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-success {
  --bs-focus-ring-color: rgba(var(--bs-success-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-info {
  --bs-focus-ring-color: rgba(var(--bs-info-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-warning {
  --bs-focus-ring-color: rgba(var(--bs-warning-rgb), var(--bs-focus-ring-opacity));
}
.focus-ring-danger {
  --bs-focus-ring-color: rgba(var(--bs-danger-rgb), var(--bs-focus-ring-opacity));
}
.position-static {
  position: static !important;
}
.position-relative {
  position: relative !important;
}
.position-absolute {
  position: absolute !important;
}
.position-fixed {
  position: fixed !important;
}
.position-sticky {
  position: sticky !important;
}
.top-0 {
  top: 0 !important;
}
.top-50 {
  top: 50% !important;
}
.top-100 {
  top: 100% !important;
}
.bottom-0 {
  bottom: 0 !important;
}
.bottom-50 {
  bottom: 50% !important;
}
.bottom-100 {
  bottom: 100% !important;
}
.start-0 {
  left: 0 !important;
}
.start-50 {
  left: 50% !important;
}
.start-100 {
  left: 100% !important;
}
.end-0 {
  right: 0 !important;
}
.end-50 {
  right: 50% !important;
}
.end-100 {
  right: 100% !important;
}
.translate-middle {
  transform: translate(-50%, -50%) !important;
}
.translate-middle-x {
  transform: translateX(-50%) !important;
}
.translate-middle-y {
  transform: translateY(-50%) !important;
}
.border {
  border: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}
.border-0 {
  border: 0 !important;
}
.border-top {
  border-top: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}
.border-top-0 {
  border-top: 0 !important;
}
.border-end {
  border-right: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}
.border-end-0 {
  border-right: 0 !important;
}
.border-bottom {
  border-bottom: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}
.border-bottom-0 {
  border-bottom: 0 !important;
}
.border-start {
  border-left: var(--bs-border-width) var(--bs-border-style) var(--bs-border-color) !important;
}
.border-start-0 {
  border-left: 0 !important;
}
.border-blue {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-blue-rgb), var(--bs-border-opacity)) !important;
}
.border-sky {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-sky-rgb), var(--bs-border-opacity)) !important;
}
.border-purple {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-purple-rgb), var(--bs-border-opacity)) !important;
}
.border-grape {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-grape-rgb), var(--bs-border-opacity)) !important;
}
.border-violet {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-violet-rgb), var(--bs-border-opacity)) !important;
}
.border-pink {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-pink-rgb), var(--bs-border-opacity)) !important;
}
.border-fuchsia {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-fuchsia-rgb), var(--bs-border-opacity)) !important;
}
.border-red {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-red-rgb), var(--bs-border-opacity)) !important;
}
.border-orange {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-orange-rgb), var(--bs-border-opacity)) !important;
}
.border-yellow {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-yellow-rgb), var(--bs-border-opacity)) !important;
}
.border-green {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-green-rgb), var(--bs-border-opacity)) !important;
}
.border-leaf {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-leaf-rgb), var(--bs-border-opacity)) !important;
}
.border-aqua {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-aqua-rgb), var(--bs-border-opacity)) !important;
}
.border-navy {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-navy-rgb), var(--bs-border-opacity)) !important;
}
.border-ash {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-ash-rgb), var(--bs-border-opacity)) !important;
}
.border-white {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-white-rgb), var(--bs-border-opacity)) !important;
}
.border-light {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-light-rgb), var(--bs-border-opacity)) !important;
}
.border-gray {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-gray-rgb), var(--bs-border-opacity)) !important;
}
.border-dark {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-dark-rgb), var(--bs-border-opacity)) !important;
}
.border-primary {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-primary-rgb), var(--bs-border-opacity)) !important;
}
.border-secondary {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-secondary-rgb), var(--bs-border-opacity)) !important;
}
.border-success {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-success-rgb), var(--bs-border-opacity)) !important;
}
.border-info {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-info-rgb), var(--bs-border-opacity)) !important;
}
.border-warning {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-warning-rgb), var(--bs-border-opacity)) !important;
}
.border-danger {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-danger-rgb), var(--bs-border-opacity)) !important;
}
.border-black {
  --bs-border-opacity: 1;
  border-color: rgba(var(--bs-black-rgb), var(--bs-border-opacity)) !important;
}
.border-primary-subtle {
  border-color: var(--bs-primary-border-subtle) !important;
}
.border-secondary-subtle {
  border-color: var(--bs-secondary-border-subtle) !important;
}
.border-success-subtle {
  border-color: var(--bs-success-border-subtle) !important;
}
.border-info-subtle {
  border-color: var(--bs-info-border-subtle) !important;
}
.border-warning-subtle {
  border-color: var(--bs-warning-border-subtle) !important;
}
.border-danger-subtle {
  border-color: var(--bs-danger-border-subtle) !important;
}
.border-light-subtle {
  border-color: var(--bs-light-border-subtle) !important;
}
.border-dark-subtle {
  border-color: var(--bs-dark-border-subtle) !important;
}
.border-blue-soft {
  border-color: var(--bs-soft-blue-border) !important;
}
.border-sky-soft {
  border-color: var(--bs-soft-sky-border) !important;
}
.border-purple-soft {
  border-color: var(--bs-soft-purple-border) !important;
}
.border-grape-soft {
  border-color: var(--bs-soft-grape-border) !important;
}
.border-violet-soft {
  border-color: var(--bs-soft-violet-border) !important;
}
.border-pink-soft {
  border-color: var(--bs-soft-pink-border) !important;
}
.border-fuchsia-soft {
  border-color: var(--bs-soft-fuchsia-border) !important;
}
.border-red-soft {
  border-color: var(--bs-soft-red-border) !important;
}
.border-orange-soft {
  border-color: var(--bs-soft-orange-border) !important;
}
.border-yellow-soft {
  border-color: var(--bs-soft-yellow-border) !important;
}
.border-green-soft {
  border-color: var(--bs-soft-green-border) !important;
}
.border-leaf-soft {
  border-color: var(--bs-soft-leaf-border) !important;
}
.border-aqua-soft {
  border-color: var(--bs-soft-aqua-border) !important;
}
.border-navy-soft {
  border-color: var(--bs-soft-navy-border) !important;
}
.border-ash-soft {
  border-color: var(--bs-soft-ash-border) !important;
}
.border-1 {
  border-width: 1px !important;
}
.border-2 {
  border-width: 2px !important;
}
.border-3 {
  border-width: 3px !important;
}
.border-4 {
  border-width: 4px !important;
}
.border-5 {
  border-width: 5px !important;
}
.border-opacity-10 {
  --bs-border-opacity: 0.1;
}
.border-opacity-25 {
  --bs-border-opacity: 0.25;
}
.border-opacity-50 {
  --bs-border-opacity: 0.5;
}
.border-opacity-75 {
  --bs-border-opacity: 0.75;
}
.border-opacity-100 {
  --bs-border-opacity: 1;
}
.w-25 {
  width: 22.5rem !important;
}
.w-50 {
  width: 50% !important;
}
.w-75 {
  width: 75% !important;
}
.w-100 {
  width: 100% !important;
}
.w-auto {
  width: auto !important;
}
.w-0 {
  width: 0 !important;
}
.w-1 {
  width: 0.25rem !important;
}
.w-2 {
  width: 0.5rem !important;
}
.w-3 {
  width: 0.75rem !important;
}
.w-4 {
  width: 1rem !important;
}
.w-5 {
  width: 1.25rem !important;
}
.w-6 {
  width: 1.5rem !important;
}
.w-7 {
  width: 1.75rem !important;
}
.w-8 {
  width: 2rem !important;
}
.w-9 {
  width: 2.25rem !important;
}
.w-10 {
  width: 2.5rem !important;
}
.w-11 {
  width: 3rem !important;
}
.w-12 {
  width: 3.5rem !important;
}
.w-13 {
  width: 4rem !important;
}
.w-14 {
  width: 4.5rem !important;
}
.w-15 {
  width: 5rem !important;
}
.w-16 {
  width: 6rem !important;
}
.w-17 {
  width: 7rem !important;
}
.w-18 {
  width: 8rem !important;
}
.w-19 {
  width: 9rem !important;
}
.w-20 {
  width: 10rem !important;
}
.w-21 {
  width: 12.5rem !important;
}
.w-22 {
  width: 15rem !important;
}
.w-23 {
  width: 17.5rem !important;
}
.w-24 {
  width: 20rem !important;
}
.mw-100 {
  max-width: 100% !important;
}
.vw-100 {
  width: 100vw !important;
}
.min-vw-100 {
  min-width: 100vw !important;
}
.h-25 {
  height: 22.5rem !important;
}
.h-50 {
  height: 50% !important;
}
.h-75 {
  height: 75% !important;
}
.h-100 {
  height: 100% !important;
}
.h-auto {
  height: auto !important;
}
.h-0 {
  height: 0 !important;
}
.h-1 {
  height: 0.25rem !important;
}
.h-2 {
  height: 0.5rem !important;
}
.h-3 {
  height: 0.75rem !important;
}
.h-4 {
  height: 1rem !important;
}
.h-5 {
  height: 1.25rem !important;
}
.h-6 {
  height: 1.5rem !important;
}
.h-7 {
  height: 1.75rem !important;
}
.h-8 {
  height: 2rem !important;
}
.h-9 {
  height: 2.25rem !important;
}
.h-10 {
  height: 2.5rem !important;
}
.h-11 {
  height: 3rem !important;
}
.h-12 {
  height: 3.5rem !important;
}
.h-13 {
  height: 4rem !important;
}
.h-14 {
  height: 4.5rem !important;
}
.h-15 {
  height: 5rem !important;
}
.h-16 {
  height: 6rem !important;
}
.h-17 {
  height: 7rem !important;
}
.h-18 {
  height: 8rem !important;
}
.h-19 {
  height: 9rem !important;
}
.h-20 {
  height: 10rem !important;
}
.h-21 {
  height: 12.5rem !important;
}
.h-22 {
  height: 15rem !important;
}
.h-23 {
  height: 17.5rem !important;
}
.h-24 {
  height: 20rem !important;
}
.mh-100 {
  max-height: 100% !important;
}
.vh-100 {
  height: 100vh !important;
}
.min-vh-25 {
  min-height: 25vh !important;
}
.min-vh-30 {
  min-height: 30vh !important;
}
.min-vh-50 {
  min-height: 50vh !important;
}
.min-vh-60 {
  min-height: 60vh !important;
}
.min-vh-70 {
  min-height: 70vh !important;
}
.min-vh-75 {
  min-height: 75vh !important;
}
.min-vh-80 {
  min-height: 80vh !important;
}
.min-vh-100 {
  min-height: 100vh !important;
}
.flex-fill {
  flex: 1 1 auto !important;
}
.flex-row {
  flex-direction: row !important;
}
.flex-column {
  flex-direction: column !important;
}
.flex-row-reverse {
  flex-direction: row-reverse !important;
}
.flex-column-reverse {
  flex-direction: column-reverse !important;
}
.flex-grow-0 {
  flex-grow: 0 !important;
}
.flex-grow-1 {
  flex-grow: 1 !important;
}
.flex-shrink-0 {
  flex-shrink: 0 !important;
}
.flex-shrink-1 {
  flex-shrink: 1 !important;
}
.flex-wrap {
  flex-wrap: wrap !important;
}
.flex-nowrap {
  flex-wrap: nowrap !important;
}
.flex-wrap-reverse {
  flex-wrap: wrap-reverse !important;
}
.justify-content-start {
  justify-content: flex-start !important;
}
.justify-content-end {
  justify-content: flex-end !important;
}
.justify-content-center {
  justify-content: center !important;
}
.justify-content-between {
  justify-content: space-between !important;
}
.justify-content-around {
  justify-content: space-around !important;
}
.justify-content-evenly {
  justify-content: space-evenly !important;
}
.align-items-start {
  align-items: flex-start !important;
}
.align-items-end {
  align-items: flex-end !important;
}
.align-items-center {
  align-items: center !important;
}
.align-items-baseline {
  align-items: baseline !important;
}
.align-items-stretch {
  align-items: stretch !important;
}
.align-content-start {
  align-content: flex-start !important;
}
.align-content-end {
  align-content: flex-end !important;
}
.align-content-center {
  align-content: center !important;
}
.align-content-between {
  align-content: space-between !important;
}
.align-content-around {
  align-content: space-around !important;
}
.align-content-stretch {
  align-content: stretch !important;
}
.align-self-auto {
  align-self: auto !important;
}
.align-self-start {
  align-self: flex-start !important;
}
.align-self-end {
  align-self: flex-end !important;
}
.align-self-center {
  align-self: center !important;
}
.align-self-baseline {
  align-self: baseline !important;
}
.align-self-stretch {
  align-self: stretch !important;
}
.order-first {
  order: -1 !important;
}
.order-0 {
  order: 0 !important;
}
.order-1 {
  order: 1 !important;
}
.order-2 {
  order: 2 !important;
}
.order-3 {
  order: 3 !important;
}
.order-4 {
  order: 4 !important;
}
.order-5 {
  order: 5 !important;
}
.order-last {
  order: 6 !important;
}
.m-0 {
  margin: 0 !important;
}
.m-1 {
  margin: 0.25rem !important;
}
.m-2 {
  margin: 0.5rem !important;
}
.m-3 {
  margin: 0.75rem !important;
}
.m-4 {
  margin: 1rem !important;
}
.m-5 {
  margin: 1.25rem !important;
}
.m-6 {
  margin: 1.5rem !important;
}
.m-7 {
  margin: 1.75rem !important;
}
.m-8 {
  margin: 2rem !important;
}
.m-9 {
  margin: 2.25rem !important;
}
.m-10 {
  margin: 2.5rem !important;
}
.m-11 {
  margin: 3rem !important;
}
.m-12 {
  margin: 3.5rem !important;
}
.m-13 {
  margin: 4rem !important;
}
.m-14 {
  margin: 4.5rem !important;
}
.m-15 {
  margin: 5rem !important;
}
.m-16 {
  margin: 6rem !important;
}
.m-17 {
  margin: 7rem !important;
}
.m-18 {
  margin: 8rem !important;
}
.m-19 {
  margin: 9rem !important;
}
.m-20 {
  margin: 10rem !important;
}
.m-21 {
  margin: 12.5rem !important;
}
.m-22 {
  margin: 15rem !important;
}
.m-23 {
  margin: 17.5rem !important;
}
.m-24 {
  margin: 20rem !important;
}
.m-25 {
  margin: 22.5rem !important;
}
.m-auto {
  margin: auto !important;
}
.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}
.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}
.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}
.mx-3 {
  margin-right: 0.75rem !important;
  margin-left: 0.75rem !important;
}
.mx-4 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}
.mx-5 {
  margin-right: 1.25rem !important;
  margin-left: 1.25rem !important;
}
.mx-6 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}
.mx-7 {
  margin-right: 1.75rem !important;
  margin-left: 1.75rem !important;
}
.mx-8 {
  margin-right: 2rem !important;
  margin-left: 2rem !important;
}
.mx-9 {
  margin-right: 2.25rem !important;
  margin-left: 2.25rem !important;
}
.mx-10 {
  margin-right: 2.5rem !important;
  margin-left: 2.5rem !important;
}
.mx-11 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}
.mx-12 {
  margin-right: 3.5rem !important;
  margin-left: 3.5rem !important;
}
.mx-13 {
  margin-right: 4rem !important;
  margin-left: 4rem !important;
}
.mx-14 {
  margin-right: 4.5rem !important;
  margin-left: 4.5rem !important;
}
.mx-15 {
  margin-right: 5rem !important;
  margin-left: 5rem !important;
}
.mx-16 {
  margin-right: 6rem !important;
  margin-left: 6rem !important;
}
.mx-17 {
  margin-right: 7rem !important;
  margin-left: 7rem !important;
}
.mx-18 {
  margin-right: 8rem !important;
  margin-left: 8rem !important;
}
.mx-19 {
  margin-right: 9rem !important;
  margin-left: 9rem !important;
}
.mx-20 {
  margin-right: 10rem !important;
  margin-left: 10rem !important;
}
.mx-21 {
  margin-right: 12.5rem !important;
  margin-left: 12.5rem !important;
}
.mx-22 {
  margin-right: 15rem !important;
  margin-left: 15rem !important;
}
.mx-23 {
  margin-right: 17.5rem !important;
  margin-left: 17.5rem !important;
}
.mx-24 {
  margin-right: 20rem !important;
  margin-left: 20rem !important;
}
.mx-25 {
  margin-right: 22.5rem !important;
  margin-left: 22.5rem !important;
}
.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}
.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}
.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}
.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}
.my-3 {
  margin-top: 0.75rem !important;
  margin-bottom: 0.75rem !important;
}
.my-4 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}
.my-5 {
  margin-top: 1.25rem !important;
  margin-bottom: 1.25rem !important;
}
.my-6 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}
.my-7 {
  margin-top: 1.75rem !important;
  margin-bottom: 1.75rem !important;
}
.my-8 {
  margin-top: 2rem !important;
  margin-bottom: 2rem !important;
}
.my-9 {
  margin-top: 2.25rem !important;
  margin-bottom: 2.25rem !important;
}
.my-10 {
  margin-top: 2.5rem !important;
  margin-bottom: 2.5rem !important;
}
.my-11 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}
.my-12 {
  margin-top: 3.5rem !important;
  margin-bottom: 3.5rem !important;
}
.my-13 {
  margin-top: 4rem !important;
  margin-bottom: 4rem !important;
}
.my-14 {
  margin-top: 4.5rem !important;
  margin-bottom: 4.5rem !important;
}
.my-15 {
  margin-top: 5rem !important;
  margin-bottom: 5rem !important;
}
.my-16 {
  margin-top: 6rem !important;
  margin-bottom: 6rem !important;
}
.my-17 {
  margin-top: 7rem !important;
  margin-bottom: 7rem !important;
}
.my-18 {
  margin-top: 8rem !important;
  margin-bottom: 8rem !important;
}
.my-19 {
  margin-top: 9rem !important;
  margin-bottom: 9rem !important;
}
.my-20 {
  margin-top: 10rem !important;
  margin-bottom: 10rem !important;
}
.my-21 {
  margin-top: 12.5rem !important;
  margin-bottom: 12.5rem !important;
}
.my-22 {
  margin-top: 15rem !important;
  margin-bottom: 15rem !important;
}
.my-23 {
  margin-top: 17.5rem !important;
  margin-bottom: 17.5rem !important;
}
.my-24 {
  margin-top: 20rem !important;
  margin-bottom: 20rem !important;
}
.my-25 {
  margin-top: 22.5rem !important;
  margin-bottom: 22.5rem !important;
}
.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}
.mt-0 {
  margin-top: 0 !important;
}
.mt-1 {
  margin-top: 0.25rem !important;
}
.mt-2 {
  margin-top: 0.5rem !important;
}
.mt-3 {
  margin-top: 0.75rem !important;
}
.mt-4 {
  margin-top: 1rem !important;
}
.mt-5 {
  margin-top: 1.25rem !important;
}
.mt-6 {
  margin-top: 1.5rem !important;
}
.mt-7 {
  margin-top: 1.75rem !important;
}
.mt-8 {
  margin-top: 2rem !important;
}
.mt-9 {
  margin-top: 2.25rem !important;
}
.mt-10 {
  margin-top: 2.5rem !important;
}
.mt-11 {
  margin-top: 3rem !important;
}
.mt-12 {
  margin-top: 3.5rem !important;
}
.mt-13 {
  margin-top: 4rem !important;
}
.mt-14 {
  margin-top: 4.5rem !important;
}
.mt-15 {
  margin-top: 5rem !important;
}
.mt-16 {
  margin-top: 6rem !important;
}
.mt-17 {
  margin-top: 7rem !important;
}
.mt-18 {
  margin-top: 8rem !important;
}
.mt-19 {
  margin-top: 9rem !important;
}
.mt-20 {
  margin-top: 10rem !important;
}
.mt-21 {
  margin-top: 12.5rem !important;
}
.mt-22 {
  margin-top: 15rem !important;
}
.mt-23 {
  margin-top: 17.5rem !important;
}
.mt-24 {
  margin-top: 20rem !important;
}
.mt-25 {
  margin-top: 22.5rem !important;
}
.mt-auto {
  margin-top: auto !important;
}
.me-0 {
  margin-right: 0 !important;
}
.me-1 {
  margin-right: 0.25rem !important;
}
.me-2 {
  margin-right: 0.5rem !important;
}
.me-3 {
  margin-right: 0.75rem !important;
}
.me-4 {
  margin-right: 1rem !important;
}
.me-5 {
  margin-right: 1.25rem !important;
}
.me-6 {
  margin-right: 1.5rem !important;
}
.me-7 {
  margin-right: 1.75rem !important;
}
.me-8 {
  margin-right: 2rem !important;
}
.me-9 {
  margin-right: 2.25rem !important;
}
.me-10 {
  margin-right: 2.5rem !important;
}
.me-11 {
  margin-right: 3rem !important;
}
.me-12 {
  margin-right: 3.5rem !important;
}
.me-13 {
  margin-right: 4rem !important;
}
.me-14 {
  margin-right: 4.5rem !important;
}
.me-15 {
  margin-right: 5rem !important;
}
.me-16 {
  margin-right: 6rem !important;
}
.me-17 {
  margin-right: 7rem !important;
}
.me-18 {
  margin-right: 8rem !important;
}
.me-19 {
  margin-right: 9rem !important;
}
.me-20 {
  margin-right: 10rem !important;
}
.me-21 {
  margin-right: 12.5rem !important;
}
.me-22 {
  margin-right: 15rem !important;
}
.me-23 {
  margin-right: 17.5rem !important;
}
.me-24 {
  margin-right: 20rem !important;
}
.me-25 {
  margin-right: 22.5rem !important;
}
.me-auto {
  margin-right: auto !important;
}
.mb-0 {
  margin-bottom: 0 !important;
}
.mb-1 {
  margin-bottom: 0.25rem !important;
}
.mb-2 {
  margin-bottom: 0.5rem !important;
}
.mb-3 {
  margin-bottom: 0.75rem !important;
}
.mb-4 {
  margin-bottom: 1rem !important;
}
.mb-5 {
  margin-bottom: 1.25rem !important;
}
.mb-6 {
  margin-bottom: 1.5rem !important;
}
.mb-7 {
  margin-bottom: 1.75rem !important;
}
.mb-8 {
  margin-bottom: 2rem !important;
}
.mb-9 {
  margin-bottom: 2.25rem !important;
}
.mb-10 {
  margin-bottom: 2.5rem !important;
}
.mb-11 {
  margin-bottom: 3rem !important;
}
.mb-12 {
  margin-bottom: 3.5rem !important;
}
.mb-13 {
  margin-bottom: 4rem !important;
}
.mb-14 {
  margin-bottom: 4.5rem !important;
}
.mb-15 {
  margin-bottom: 5rem !important;
}
.mb-16 {
  margin-bottom: 6rem !important;
}
.mb-17 {
  margin-bottom: 7rem !important;
}
.mb-18 {
  margin-bottom: 8rem !important;
}
.mb-19 {
  margin-bottom: 9rem !important;
}
.mb-20 {
  margin-bottom: 10rem !important;
}
.mb-21 {
  margin-bottom: 12.5rem !important;
}
.mb-22 {
  margin-bottom: 15rem !important;
}
.mb-23 {
  margin-bottom: 17.5rem !important;
}
.mb-24 {
  margin-bottom: 20rem !important;
}
.mb-25 {
  margin-bottom: 22.5rem !important;
}
.mb-auto {
  margin-bottom: auto !important;
}
.ms-0 {
  margin-left: 0 !important;
}
.ms-1 {
  margin-left: 0.25rem !important;
}
.ms-2 {
  margin-left: 0.5rem !important;
}
.ms-3 {
  margin-left: 0.75rem !important;
}
.ms-4 {
  margin-left: 1rem !important;
}
.ms-5 {
  margin-left: 1.25rem !important;
}
.ms-6 {
  margin-left: 1.5rem !important;
}
.ms-7 {
  margin-left: 1.75rem !important;
}
.ms-8 {
  margin-left: 2rem !important;
}
.ms-9 {
  margin-left: 2.25rem !important;
}
.ms-10 {
  margin-left: 2.5rem !important;
}
.ms-11 {
  margin-left: 3rem !important;
}
.ms-12 {
  margin-left: 3.5rem !important;
}
.ms-13 {
  margin-left: 4rem !important;
}
.ms-14 {
  margin-left: 4.5rem !important;
}
.ms-15 {
  margin-left: 5rem !important;
}
.ms-16 {
  margin-left: 6rem !important;
}
.ms-17 {
  margin-left: 7rem !important;
}
.ms-18 {
  margin-left: 8rem !important;
}
.ms-19 {
  margin-left: 9rem !important;
}
.ms-20 {
  margin-left: 10rem !important;
}
.ms-21 {
  margin-left: 12.5rem !important;
}
.ms-22 {
  margin-left: 15rem !important;
}
.ms-23 {
  margin-left: 17.5rem !important;
}
.ms-24 {
  margin-left: 20rem !important;
}
.ms-25 {
  margin-left: 22.5rem !important;
}
.ms-auto {
  margin-left: auto !important;
}
.m-n1 {
  margin: -0.25rem !important;
}
.m-n2 {
  margin: -0.5rem !important;
}
.m-n3 {
  margin: -0.75rem !important;
}
.m-n4 {
  margin: -1rem !important;
}
.m-n5 {
  margin: -1.25rem !important;
}
.m-n6 {
  margin: -1.5rem !important;
}
.m-n7 {
  margin: -1.75rem !important;
}
.m-n8 {
  margin: -2rem !important;
}
.m-n9 {
  margin: -2.25rem !important;
}
.m-n10 {
  margin: -2.5rem !important;
}
.m-n11 {
  margin: -3rem !important;
}
.m-n12 {
  margin: -3.5rem !important;
}
.m-n13 {
  margin: -4rem !important;
}
.m-n14 {
  margin: -4.5rem !important;
}
.m-n15 {
  margin: -5rem !important;
}
.m-n16 {
  margin: -6rem !important;
}
.m-n17 {
  margin: -7rem !important;
}
.m-n18 {
  margin: -8rem !important;
}
.m-n19 {
  margin: -9rem !important;
}
.m-n20 {
  margin: -10rem !important;
}
.m-n21 {
  margin: -12.5rem !important;
}
.m-n22 {
  margin: -15rem !important;
}
.m-n23 {
  margin: -17.5rem !important;
}
.m-n24 {
  margin: -20rem !important;
}
.m-n25 {
  margin: -22.5rem !important;
}
.mx-n1 {
  margin-right: -0.25rem !important;
  margin-left: -0.25rem !important;
}
.mx-n2 {
  margin-right: -0.5rem !important;
  margin-left: -0.5rem !important;
}
.mx-n3 {
  margin-right: -0.75rem !important;
  margin-left: -0.75rem !important;
}
.mx-n4 {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}
.mx-n5 {
  margin-right: -1.25rem !important;
  margin-left: -1.25rem !important;
}
.mx-n6 {
  margin-right: -1.5rem !important;
  margin-left: -1.5rem !important;
}
.mx-n7 {
  margin-right: -1.75rem !important;
  margin-left: -1.75rem !important;
}
.mx-n8 {
  margin-right: -2rem !important;
  margin-left: -2rem !important;
}
.mx-n9 {
  margin-right: -2.25rem !important;
  margin-left: -2.25rem !important;
}
.mx-n10 {
  margin-right: -2.5rem !important;
  margin-left: -2.5rem !important;
}
.mx-n11 {
  margin-right: -3rem !important;
  margin-left: -3rem !important;
}
.mx-n12 {
  margin-right: -3.5rem !important;
  margin-left: -3.5rem !important;
}
.mx-n13 {
  margin-right: -4rem !important;
  margin-left: -4rem !important;
}
.mx-n14 {
  margin-right: -4.5rem !important;
  margin-left: -4.5rem !important;
}
.mx-n15 {
  margin-right: -5rem !important;
  margin-left: -5rem !important;
}
.mx-n16 {
  margin-right: -6rem !important;
  margin-left: -6rem !important;
}
.mx-n17 {
  margin-right: -7rem !important;
  margin-left: -7rem !important;
}
.mx-n18 {
  margin-right: -8rem !important;
  margin-left: -8rem !important;
}
.mx-n19 {
  margin-right: -9rem !important;
  margin-left: -9rem !important;
}
.mx-n20 {
  margin-right: -10rem !important;
  margin-left: -10rem !important;
}
.mx-n21 {
  margin-right: -12.5rem !important;
  margin-left: -12.5rem !important;
}
.mx-n22 {
  margin-right: -15rem !important;
  margin-left: -15rem !important;
}
.mx-n23 {
  margin-right: -17.5rem !important;
  margin-left: -17.5rem !important;
}
.mx-n24 {
  margin-right: -20rem !important;
  margin-left: -20rem !important;
}
.mx-n25 {
  margin-right: -22.5rem !important;
  margin-left: -22.5rem !important;
}
.my-n1 {
  margin-top: -0.25rem !important;
  margin-bottom: -0.25rem !important;
}
.my-n2 {
  margin-top: -0.5rem !important;
  margin-bottom: -0.5rem !important;
}
.my-n3 {
  margin-top: -0.75rem !important;
  margin-bottom: -0.75rem !important;
}
.my-n4 {
  margin-top: -1rem !important;
  margin-bottom: -1rem !important;
}
.my-n5 {
  margin-top: -1.25rem !important;
  margin-bottom: -1.25rem !important;
}
.my-n6 {
  margin-top: -1.5rem !important;
  margin-bottom: -1.5rem !important;
}
.my-n7 {
  margin-top: -1.75rem !important;
  margin-bottom: -1.75rem !important;
}
.my-n8 {
  margin-top: -2rem !important;
  margin-bottom: -2rem !important;
}
.my-n9 {
  margin-top: -2.25rem !important;
  margin-bottom: -2.25rem !important;
}
.my-n10 {
  margin-top: -2.5rem !important;
  margin-bottom: -2.5rem !important;
}
.my-n11 {
  margin-top: -3rem !important;
  margin-bottom: -3rem !important;
}
.my-n12 {
  margin-top: -3.5rem !important;
  margin-bottom: -3.5rem !important;
}
.my-n13 {
  margin-top: -4rem !important;
  margin-bottom: -4rem !important;
}
.my-n14 {
  margin-top: -4.5rem !important;
  margin-bottom: -4.5rem !important;
}
.my-n15 {
  margin-top: -5rem !important;
  margin-bottom: -5rem !important;
}
.my-n16 {
  margin-top: -6rem !important;
  margin-bottom: -6rem !important;
}
.my-n17 {
  margin-top: -7rem !important;
  margin-bottom: -7rem !important;
}
.my-n18 {
  margin-top: -8rem !important;
  margin-bottom: -8rem !important;
}
.my-n19 {
  margin-top: -9rem !important;
  margin-bottom: -9rem !important;
}
.my-n20 {
  margin-top: -10rem !important;
  margin-bottom: -10rem !important;
}
.my-n21 {
  margin-top: -12.5rem !important;
  margin-bottom: -12.5rem !important;
}
.my-n22 {
  margin-top: -15rem !important;
  margin-bottom: -15rem !important;
}
.my-n23 {
  margin-top: -17.5rem !important;
  margin-bottom: -17.5rem !important;
}
.my-n24 {
  margin-top: -20rem !important;
  margin-bottom: -20rem !important;
}
.my-n25 {
  margin-top: -22.5rem !important;
  margin-bottom: -22.5rem !important;
}
.mt-n1 {
  margin-top: -0.25rem !important;
}
.mt-n2 {
  margin-top: -0.5rem !important;
}
.mt-n3 {
  margin-top: -0.75rem !important;
}
.mt-n4 {
  margin-top: -1rem !important;
}
.mt-n5 {
  margin-top: -1.25rem !important;
}
.mt-n6 {
  margin-top: -1.5rem !important;
}
.mt-n7 {
  margin-top: -1.75rem !important;
}
.mt-n8 {
  margin-top: -2rem !important;
}
.mt-n9 {
  margin-top: -2.25rem !important;
}
.mt-n10 {
  margin-top: -2.5rem !important;
}
.mt-n11 {
  margin-top: -3rem !important;
}
.mt-n12 {
  margin-top: -3.5rem !important;
}
.mt-n13 {
  margin-top: -4rem !important;
}
.mt-n14 {
  margin-top: -4.5rem !important;
}
.mt-n15 {
  margin-top: -5rem !important;
}
.mt-n16 {
  margin-top: -6rem !important;
}
.mt-n17 {
  margin-top: -7rem !important;
}
.mt-n18 {
  margin-top: -8rem !important;
}
.mt-n19 {
  margin-top: -9rem !important;
}
.mt-n20 {
  margin-top: -10rem !important;
}
.mt-n21 {
  margin-top: -12.5rem !important;
}
.mt-n22 {
  margin-top: -15rem !important;
}
.mt-n23 {
  margin-top: -17.5rem !important;
}
.mt-n24 {
  margin-top: -20rem !important;
}
.mt-n25 {
  margin-top: -22.5rem !important;
}
.me-n1 {
  margin-right: -0.25rem !important;
}
.me-n2 {
  margin-right: -0.5rem !important;
}
.me-n3 {
  margin-right: -0.75rem !important;
}
.me-n4 {
  margin-right: -1rem !important;
}
.me-n5 {
  margin-right: -1.25rem !important;
}
.me-n6 {
  margin-right: -1.5rem !important;
}
.me-n7 {
  margin-right: -1.75rem !important;
}
.me-n8 {
  margin-right: -2rem !important;
}
.me-n9 {
  margin-right: -2.25rem !important;
}
.me-n10 {
  margin-right: -2.5rem !important;
}
.me-n11 {
  margin-right: -3rem !important;
}
.me-n12 {
  margin-right: -3.5rem !important;
}
.me-n13 {
  margin-right: -4rem !important;
}
.me-n14 {
  margin-right: -4.5rem !important;
}
.me-n15 {
  margin-right: -5rem !important;
}
.me-n16 {
  margin-right: -6rem !important;
}
.me-n17 {
  margin-right: -7rem !important;
}
.me-n18 {
  margin-right: -8rem !important;
}
.me-n19 {
  margin-right: -9rem !important;
}
.me-n20 {
  margin-right: -10rem !important;
}
.me-n21 {
  margin-right: -12.5rem !important;
}
.me-n22 {
  margin-right: -15rem !important;
}
.me-n23 {
  margin-right: -17.5rem !important;
}
.me-n24 {
  margin-right: -20rem !important;
}
.me-n25 {
  margin-right: -22.5rem !important;
}
.mb-n1 {
  margin-bottom: -0.25rem !important;
}
.mb-n2 {
  margin-bottom: -0.5rem !important;
}
.mb-n3 {
  margin-bottom: -0.75rem !important;
}
.mb-n4 {
  margin-bottom: -1rem !important;
}
.mb-n5 {
  margin-bottom: -1.25rem !important;
}
.mb-n6 {
  margin-bottom: -1.5rem !important;
}
.mb-n7 {
  margin-bottom: -1.75rem !important;
}
.mb-n8 {
  margin-bottom: -2rem !important;
}
.mb-n9 {
  margin-bottom: -2.25rem !important;
}
.mb-n10 {
  margin-bottom: -2.5rem !important;
}
.mb-n11 {
  margin-bottom: -3rem !important;
}
.mb-n12 {
  margin-bottom: -3.5rem !important;
}
.mb-n13 {
  margin-bottom: -4rem !important;
}
.mb-n14 {
  margin-bottom: -4.5rem !important;
}
.mb-n15 {
  margin-bottom: -5rem !important;
}
.mb-n16 {
  margin-bottom: -6rem !important;
}
.mb-n17 {
  margin-bottom: -7rem !important;
}
.mb-n18 {
  margin-bottom: -8rem !important;
}
.mb-n19 {
  margin-bottom: -9rem !important;
}
.mb-n20 {
  margin-bottom: -10rem !important;
}
.mb-n21 {
  margin-bottom: -12.5rem !important;
}
.mb-n22 {
  margin-bottom: -15rem !important;
}
.mb-n23 {
  margin-bottom: -17.5rem !important;
}
.mb-n24 {
  margin-bottom: -20rem !important;
}
.mb-n25 {
  margin-bottom: -22.5rem !important;
}
.ms-n1 {
  margin-left: -0.25rem !important;
}
.ms-n2 {
  margin-left: -0.5rem !important;
}
.ms-n3 {
  margin-left: -0.75rem !important;
}
.ms-n4 {
  margin-left: -1rem !important;
}
.ms-n5 {
  margin-left: -1.25rem !important;
}
.ms-n6 {
  margin-left: -1.5rem !important;
}
.ms-n7 {
  margin-left: -1.75rem !important;
}
.ms-n8 {
  margin-left: -2rem !important;
}
.ms-n9 {
  margin-left: -2.25rem !important;
}
.ms-n10 {
  margin-left: -2.5rem !important;
}
.ms-n11 {
  margin-left: -3rem !important;
}
.ms-n12 {
  margin-left: -3.5rem !important;
}
.ms-n13 {
  margin-left: -4rem !important;
}
.ms-n14 {
  margin-left: -4.5rem !important;
}
.ms-n15 {
  margin-left: -5rem !important;
}
.ms-n16 {
  margin-left: -6rem !important;
}
.ms-n17 {
  margin-left: -7rem !important;
}
.ms-n18 {
  margin-left: -8rem !important;
}
.ms-n19 {
  margin-left: -9rem !important;
}
.ms-n20 {
  margin-left: -10rem !important;
}
.ms-n21 {
  margin-left: -12.5rem !important;
}
.ms-n22 {
  margin-left: -15rem !important;
}
.ms-n23 {
  margin-left: -17.5rem !important;
}
.ms-n24 {
  margin-left: -20rem !important;
}
.ms-n25 {
  margin-left: -22.5rem !important;
}
.p-0 {
  padding: 0 !important;
}
.p-1 {
  padding: 0.25rem !important;
}
.p-2 {
  padding: 0.5rem !important;
}
.p-3 {
  padding: 0.75rem !important;
}
.p-4 {
  padding: 1rem !important;
}
.p-5 {
  padding: 1.25rem !important;
}
.p-6 {
  padding: 1.5rem !important;
}
.p-7 {
  padding: 1.75rem !important;
}
.p-8 {
  padding: 2rem !important;
}
.p-9 {
  padding: 2.25rem !important;
}
.p-10 {
  padding: 2.5rem !important;
}
.p-11 {
  padding: 3rem !important;
}
.p-12 {
  padding: 3.5rem !important;
}
.p-13 {
  padding: 4rem !important;
}
.p-14 {
  padding: 4.5rem !important;
}
.p-15 {
  padding: 5rem !important;
}
.p-16 {
  padding: 6rem !important;
}
.p-17 {
  padding: 7rem !important;
}
.p-18 {
  padding: 8rem !important;
}
.p-19 {
  padding: 9rem !important;
}
.p-20 {
  padding: 10rem !important;
}
.p-21 {
  padding: 12.5rem !important;
}
.p-22 {
  padding: 15rem !important;
}
.p-23 {
  padding: 17.5rem !important;
}
.p-24 {
  padding: 20rem !important;
}
.p-25 {
  padding: 22.5rem !important;
}
.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}
.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}
.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}
.px-3 {
  padding-right: 0.75rem !important;
  padding-left: 0.75rem !important;
}
.px-4 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}
.px-5 {
  padding-right: 1.25rem !important;
  padding-left: 1.25rem !important;
}
.px-6 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}
.px-7 {
  padding-right: 1.75rem !important;
  padding-left: 1.75rem !important;
}
.px-8 {
  padding-right: 2rem !important;
  padding-left: 2rem !important;
}
.px-9 {
  padding-right: 2.25rem !important;
  padding-left: 2.25rem !important;
}
.px-10 {
  padding-right: 2.5rem !important;
  padding-left: 2.5rem !important;
}
.px-11 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}
.px-12 {
  padding-right: 3.5rem !important;
  padding-left: 3.5rem !important;
}
.px-13 {
  padding-right: 4rem !important;
  padding-left: 4rem !important;
}
.px-14 {
  padding-right: 4.5rem !important;
  padding-left: 4.5rem !important;
}
.px-15 {
  padding-right: 5rem !important;
  padding-left: 5rem !important;
}
.px-16 {
  padding-right: 6rem !important;
  padding-left: 6rem !important;
}
.px-17 {
  padding-right: 7rem !important;
  padding-left: 7rem !important;
}
.px-18 {
  padding-right: 8rem !important;
  padding-left: 8rem !important;
}
.px-19 {
  padding-right: 9rem !important;
  padding-left: 9rem !important;
}
.px-20 {
  padding-right: 10rem !important;
  padding-left: 10rem !important;
}
.px-21 {
  padding-right: 12.5rem !important;
  padding-left: 12.5rem !important;
}
.px-22 {
  padding-right: 15rem !important;
  padding-left: 15rem !important;
}
.px-23 {
  padding-right: 17.5rem !important;
  padding-left: 17.5rem !important;
}
.px-24 {
  padding-right: 20rem !important;
  padding-left: 20rem !important;
}
.px-25 {
  padding-right: 22.5rem !important;
  padding-left: 22.5rem !important;
}
.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}
.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}
.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}
.py-3 {
  padding-top: 0.75rem !important;
  padding-bottom: 0.75rem !important;
}
.py-4 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}
.py-5 {
  padding-top: 1.25rem !important;
  padding-bottom: 1.25rem !important;
}
.py-6 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}
.py-7 {
  padding-top: 1.75rem !important;
  padding-bottom: 1.75rem !important;
}
.py-8 {
  padding-top: 2rem !important;
  padding-bottom: 2rem !important;
}
.py-9 {
  padding-top: 2.25rem !important;
  padding-bottom: 2.25rem !important;
}
.py-10 {
  padding-top: 2.5rem !important;
  padding-bottom: 2.5rem !important;
}
.py-11 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}
.py-12 {
  padding-top: 3.5rem !important;
  padding-bottom: 3.5rem !important;
}
.py-13 {
  padding-top: 4rem !important;
  padding-bottom: 4rem !important;
}
.py-14 {
  padding-top: 4.5rem !important;
  padding-bottom: 4.5rem !important;
}
.py-15 {
  padding-top: 5rem !important;
  padding-bottom: 5rem !important;
}
.py-16 {
  padding-top: 6rem !important;
  padding-bottom: 6rem !important;
}
.py-17 {
  padding-top: 7rem !important;
  padding-bottom: 7rem !important;
}
.py-18 {
  padding-top: 8rem !important;
  padding-bottom: 8rem !important;
}
.py-19 {
  padding-top: 9rem !important;
  padding-bottom: 9rem !important;
}
.py-20 {
  padding-top: 10rem !important;
  padding-bottom: 10rem !important;
}
.py-21 {
  padding-top: 12.5rem !important;
  padding-bottom: 12.5rem !important;
}
.py-22 {
  padding-top: 15rem !important;
  padding-bottom: 15rem !important;
}
.py-23 {
  padding-top: 17.5rem !important;
  padding-bottom: 17.5rem !important;
}
.py-24 {
  padding-top: 20rem !important;
  padding-bottom: 20rem !important;
}
.py-25 {
  padding-top: 22.5rem !important;
  padding-bottom: 22.5rem !important;
}
.pt-0 {
  padding-top: 0 !important;
}
.pt-1 {
  padding-top: 0.25rem !important;
}
.pt-2 {
  padding-top: 0.5rem !important;
}
.pt-3 {
  padding-top: 0.75rem !important;
}
.pt-4 {
  padding-top: 1rem !important;
}
.pt-5 {
  padding-top: 1.25rem !important;
}
.pt-6 {
  padding-top: 1.5rem !important;
}
.pt-7 {
  padding-top: 1.75rem !important;
}
.pt-8 {
  padding-top: 2rem !important;
}
.pt-9 {
  padding-top: 2.25rem !important;
}
.pt-10 {
  padding-top: 2.5rem !important;
}
.pt-11 {
  padding-top: 3rem !important;
}
.pt-12 {
  padding-top: 3.5rem !important;
}
.pt-13 {
  padding-top: 4rem !important;
}
.pt-14 {
  padding-top: 4.5rem !important;
}
.pt-15 {
  padding-top: 5rem !important;
}
.pt-16 {
  padding-top: 6rem !important;
}
.pt-17 {
  padding-top: 7rem !important;
}
.pt-18 {
  padding-top: 8rem !important;
}
.pt-19 {
  padding-top: 9rem !important;
}
.pt-20 {
  padding-top: 10rem !important;
}
.pt-21 {
  padding-top: 12.5rem !important;
}
.pt-22 {
  padding-top: 15rem !important;
}
.pt-23 {
  padding-top: 17.5rem !important;
}
.pt-24 {
  padding-top: 20rem !important;
}
.pt-25 {
  padding-top: 22.5rem !important;
}
.pe-0 {
  padding-right: 0 !important;
}
.pe-1 {
  padding-right: 0.25rem !important;
}
.pe-2 {
  padding-right: 0.5rem !important;
}
.pe-3 {
  padding-right: 0.75rem !important;
}
.pe-4 {
  padding-right: 1rem !important;
}
.pe-5 {
  padding-right: 1.25rem !important;
}
.pe-6 {
  padding-right: 1.5rem !important;
}
.pe-7 {
  padding-right: 1.75rem !important;
}
.pe-8 {
  padding-right: 2rem !important;
}
.pe-9 {
  padding-right: 2.25rem !important;
}
.pe-10 {
  padding-right: 2.5rem !important;
}
.pe-11 {
  padding-right: 3rem !important;
}
.pe-12 {
  padding-right: 3.5rem !important;
}
.pe-13 {
  padding-right: 4rem !important;
}
.pe-14 {
  padding-right: 4.5rem !important;
}
.pe-15 {
  padding-right: 5rem !important;
}
.pe-16 {
  padding-right: 6rem !important;
}
.pe-17 {
  padding-right: 7rem !important;
}
.pe-18 {
  padding-right: 8rem !important;
}
.pe-19 {
  padding-right: 9rem !important;
}
.pe-20 {
  padding-right: 10rem !important;
}
.pe-21 {
  padding-right: 12.5rem !important;
}
.pe-22 {
  padding-right: 15rem !important;
}
.pe-23 {
  padding-right: 17.5rem !important;
}
.pe-24 {
  padding-right: 20rem !important;
}
.pe-25 {
  padding-right: 22.5rem !important;
}
.pb-0 {
  padding-bottom: 0 !important;
}
.pb-1 {
  padding-bottom: 0.25rem !important;
}
.pb-2 {
  padding-bottom: 0.5rem !important;
}
.pb-3 {
  padding-bottom: 0.75rem !important;
}
.pb-4 {
  padding-bottom: 1rem !important;
}
.pb-5 {
  padding-bottom: 1.25rem !important;
}
.pb-6 {
  padding-bottom: 1.5rem !important;
}
.pb-7 {
  padding-bottom: 1.75rem !important;
}
.pb-8 {
  padding-bottom: 2rem !important;
}
.pb-9 {
  padding-bottom: 2.25rem !important;
}
.pb-10 {
  padding-bottom: 2.5rem !important;
}
.pb-11 {
  padding-bottom: 3rem !important;
}
.pb-12 {
  padding-bottom: 3.5rem !important;
}
.pb-13 {
  padding-bottom: 4rem !important;
}
.pb-14 {
  padding-bottom: 4.5rem !important;
}
.pb-15 {
  padding-bottom: 5rem !important;
}
.pb-16 {
  padding-bottom: 6rem !important;
}
.pb-17 {
  padding-bottom: 7rem !important;
}
.pb-18 {
  padding-bottom: 8rem !important;
}
.pb-19 {
  padding-bottom: 9rem !important;
}
.pb-20 {
  padding-bottom: 10rem !important;
}
.pb-21 {
  padding-bottom: 12.5rem !important;
}
.pb-22 {
  padding-bottom: 15rem !important;
}
.pb-23 {
  padding-bottom: 17.5rem !important;
}
.pb-24 {
  padding-bottom: 20rem !important;
}
.pb-25 {
  padding-bottom: 22.5rem !important;
}
.ps-0 {
  padding-left: 0 !important;
}
.ps-1 {
  padding-left: 0.25rem !important;
}
.ps-2 {
  padding-left: 0.5rem !important;
}
.ps-3 {
  padding-left: 0.75rem !important;
}
.ps-4 {
  padding-left: 1rem !important;
}
.ps-5 {
  padding-left: 1.25rem !important;
}
.ps-6 {
  padding-left: 1.5rem !important;
}
.ps-7 {
  padding-left: 1.75rem !important;
}
.ps-8 {
  padding-left: 2rem !important;
}
.ps-9 {
  padding-left: 2.25rem !important;
}
.ps-10 {
  padding-left: 2.5rem !important;
}
.ps-11 {
  padding-left: 3rem !important;
}
.ps-12 {
  padding-left: 3.5rem !important;
}
.ps-13 {
  padding-left: 4rem !important;
}
.ps-14 {
  padding-left: 4.5rem !important;
}
.ps-15 {
  padding-left: 5rem !important;
}
.ps-16 {
  padding-left: 6rem !important;
}
.ps-17 {
  padding-left: 7rem !important;
}
.ps-18 {
  padding-left: 8rem !important;
}
.ps-19 {
  padding-left: 9rem !important;
}
.ps-20 {
  padding-left: 10rem !important;
}
.ps-21 {
  padding-left: 12.5rem !important;
}
.ps-22 {
  padding-left: 15rem !important;
}
.ps-23 {
  padding-left: 17.5rem !important;
}
.ps-24 {
  padding-left: 20rem !important;
}
.ps-25 {
  padding-left: 22.5rem !important;
}
.gap-0 {
  gap: 0 !important;
}
.gap-1 {
  gap: 0.25rem !important;
}
.gap-2 {
  gap: 0.5rem !important;
}
.gap-3 {
  gap: 0.75rem !important;
}
.gap-4 {
  gap: 1rem !important;
}
.gap-5 {
  gap: 1.25rem !important;
}
.gap-6 {
  gap: 1.5rem !important;
}
.gap-7 {
  gap: 1.75rem !important;
}
.gap-8 {
  gap: 2rem !important;
}
.gap-9 {
  gap: 2.25rem !important;
}
.gap-10 {
  gap: 2.5rem !important;
}
.gap-11 {
  gap: 3rem !important;
}
.gap-12 {
  gap: 3.5rem !important;
}
.gap-13 {
  gap: 4rem !important;
}
.gap-14 {
  gap: 4.5rem !important;
}
.gap-15 {
  gap: 5rem !important;
}
.gap-16 {
  gap: 6rem !important;
}
.gap-17 {
  gap: 7rem !important;
}
.gap-18 {
  gap: 8rem !important;
}
.gap-19 {
  gap: 9rem !important;
}
.gap-20 {
  gap: 10rem !important;
}
.gap-21 {
  gap: 12.5rem !important;
}
.gap-22 {
  gap: 15rem !important;
}
.gap-23 {
  gap: 17.5rem !important;
}
.gap-24 {
  gap: 20rem !important;
}
.gap-25 {
  gap: 22.5rem !important;
}
.row-gap-0 {
  row-gap: 0 !important;
}
.row-gap-1 {
  row-gap: 0.25rem !important;
}
.row-gap-2 {
  row-gap: 0.5rem !important;
}
.row-gap-3 {
  row-gap: 0.75rem !important;
}
.row-gap-4 {
  row-gap: 1rem !important;
}
.row-gap-5 {
  row-gap: 1.25rem !important;
}
.row-gap-6 {
  row-gap: 1.5rem !important;
}
.row-gap-7 {
  row-gap: 1.75rem !important;
}
.row-gap-8 {
  row-gap: 2rem !important;
}
.row-gap-9 {
  row-gap: 2.25rem !important;
}
.row-gap-10 {
  row-gap: 2.5rem !important;
}
.row-gap-11 {
  row-gap: 3rem !important;
}
.row-gap-12 {
  row-gap: 3.5rem !important;
}
.row-gap-13 {
  row-gap: 4rem !important;
}
.row-gap-14 {
  row-gap: 4.5rem !important;
}
.row-gap-15 {
  row-gap: 5rem !important;
}
.row-gap-16 {
  row-gap: 6rem !important;
}
.row-gap-17 {
  row-gap: 7rem !important;
}
.row-gap-18 {
  row-gap: 8rem !important;
}
.row-gap-19 {
  row-gap: 9rem !important;
}
.row-gap-20 {
  row-gap: 10rem !important;
}
.row-gap-21 {
  row-gap: 12.5rem !important;
}
.row-gap-22 {
  row-gap: 15rem !important;
}
.row-gap-23 {
  row-gap: 17.5rem !important;
}
.row-gap-24 {
  row-gap: 20rem !important;
}
.row-gap-25 {
  row-gap: 22.5rem !important;
}
.column-gap-0 {
  -moz-column-gap: 0 !important;
  column-gap: 0 !important;
}
.column-gap-1 {
  -moz-column-gap: 0.25rem !important;
  column-gap: 0.25rem !important;
}
.column-gap-2 {
  -moz-column-gap: 0.5rem !important;
  column-gap: 0.5rem !important;
}
.column-gap-3 {
  -moz-column-gap: 0.75rem !important;
  column-gap: 0.75rem !important;
}
.column-gap-4 {
  -moz-column-gap: 1rem !important;
  column-gap: 1rem !important;
}
.column-gap-5 {
  -moz-column-gap: 1.25rem !important;
  column-gap: 1.25rem !important;
}
.column-gap-6 {
  -moz-column-gap: 1.5rem !important;
  column-gap: 1.5rem !important;
}
.column-gap-7 {
  -moz-column-gap: 1.75rem !important;
  column-gap: 1.75rem !important;
}
.column-gap-8 {
  -moz-column-gap: 2rem !important;
  column-gap: 2rem !important;
}
.column-gap-9 {
  -moz-column-gap: 2.25rem !important;
  column-gap: 2.25rem !important;
}
.column-gap-10 {
  -moz-column-gap: 2.5rem !important;
  column-gap: 2.5rem !important;
}
.column-gap-11 {
  -moz-column-gap: 3rem !important;
  column-gap: 3rem !important;
}
.column-gap-12 {
  -moz-column-gap: 3.5rem !important;
  column-gap: 3.5rem !important;
}
.column-gap-13 {
  -moz-column-gap: 4rem !important;
  column-gap: 4rem !important;
}
.column-gap-14 {
  -moz-column-gap: 4.5rem !important;
  column-gap: 4.5rem !important;
}
.column-gap-15 {
  -moz-column-gap: 5rem !important;
  column-gap: 5rem !important;
}
.column-gap-16 {
  -moz-column-gap: 6rem !important;
  column-gap: 6rem !important;
}
.column-gap-17 {
  -moz-column-gap: 7rem !important;
  column-gap: 7rem !important;
}
.column-gap-18 {
  -moz-column-gap: 8rem !important;
  column-gap: 8rem !important;
}
.column-gap-19 {
  -moz-column-gap: 9rem !important;
  column-gap: 9rem !important;
}
.column-gap-20 {
  -moz-column-gap: 10rem !important;
  column-gap: 10rem !important;
}
.column-gap-21 {
  -moz-column-gap: 12.5rem !important;
  column-gap: 12.5rem !important;
}
.column-gap-22 {
  -moz-column-gap: 15rem !important;
  column-gap: 15rem !important;
}
.column-gap-23 {
  -moz-column-gap: 17.5rem !important;
  column-gap: 17.5rem !important;
}
.column-gap-24 {
  -moz-column-gap: 20rem !important;
  column-gap: 20rem !important;
}
.column-gap-25 {
  -moz-column-gap: 22.5rem !important;
  column-gap: 22.5rem !important;
}
.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}
.fst-italic {
  font-style: italic !important;
}
.fst-normal {
  font-style: normal !important;
}
.fw-lighter {
  font-weight: lighter !important;
}
.fw-light {
  font-weight: 400 !important;
}
.fw-normal {
  font-weight: 500 !important;
}
.fw-medium {
  font-weight: 500 !important;
}
.fw-semibold {
  font-weight: 600 !important;
}
.fw-bold {
  font-weight: 700 !important;
}
.fw-bolder {
  font-weight: bolder !important;
}
.lh-1 {
  line-height: 1 !important;
}
.lh-xxs {
  line-height: 1.05 !important;
}
.lh-xs {
  line-height: 1.35 !important;
}
.lh-sm {
  line-height: 1.5 !important;
}
.lh-base {
  line-height: 1.7 !important;
}
.lh-lg {
  line-height: 1.9 !important;
}
.text-start {
  text-align: left !important;
}
.text-end {
  text-align: right !important;
}
.text-center {
  text-align: center !important;
}
.text-decoration-none {
  text-decoration: none !important;
}
.text-decoration-underline {
  text-decoration: underline !important;
}
.text-decoration-line-through {
  text-decoration: line-through !important;
}
.text-lowercase {
  text-transform: lowercase !important;
}
.text-uppercase {
  text-transform: uppercase !important;
}
.text-capitalize {
  text-transform: capitalize !important;
}
.text-wrap {
  white-space: normal !important;
}
.text-nowrap {
  white-space: nowrap !important;
}
/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}
/* rtl:end:remove */
.text-blue {
  --bs-text-opacity: 1;
  color: #3f78e0 !important;
}
.text-sky {
  --bs-text-opacity: 1;
  color: #5eb9f0 !important;
}
.text-purple {
  --bs-text-opacity: 1;
  color: #747ed1 !important;
}
.text-grape {
  --bs-text-opacity: 1;
  color: #605dba !important;
}
.text-violet {
  --bs-text-opacity: 1;
  color: #a07cc5 !important;
}
.text-pink {
  --bs-text-opacity: 1;
  color: #d16b86 !important;
}
.text-fuchsia {
  --bs-text-opacity: 1;
  color: #e668b3 !important;
}
.text-red {
  --bs-text-opacity: 1;
  color: #e2626b !important;
}
.text-orange {
  --bs-text-opacity: 1;
  color: #f78b77 !important;
}
.text-yellow {
  --bs-text-opacity: 1;
  color: #fab758 !important;
}
.text-green {
  --bs-text-opacity: 1;
  color: #45c4a0 !important;
}
.text-leaf {
  --bs-text-opacity: 1;
  color: #7cb798 !important;
}
.text-aqua {
  --bs-text-opacity: 1;
  color: #54a8c7 !important;
}
.text-navy {
  --bs-text-opacity: 1;
  color: #343f52 !important;
}
.text-ash {
  --bs-text-opacity: 1;
  color: #9499a3 !important;
}
.text-white {
  --bs-text-opacity: 1;
  color: #fff !important;
}
.text-light {
  --bs-text-opacity: 1;
  color: #fefefe !important;
}
.text-gray {
  --bs-text-opacity: 1;
  color: #f6f7f9 !important;
}
.text-primary {
  --bs-text-opacity: 1;
  color: #3f78e0 !important;
}
.text-secondary {
  --bs-text-opacity: 1;
  color: #aab0bc !important;
}
.text-success {
  --bs-text-opacity: 1;
  color: #45c4a0 !important;
}
.text-info {
  --bs-text-opacity: 1;
  color: #54a8c7 !important;
}
.text-warning {
  --bs-text-opacity: 1;
  color: #fab758 !important;
}
.text-danger {
  --bs-text-opacity: 1;
  color: #e2626b !important;
}
.text-body {
  --bs-text-opacity: 1;
  color: #60697b !important;
}
.text-muted {
  --bs-text-opacity: 1;
  color: #aab0bc !important;
}
.text-inverse {
  --bs-text-opacity: 1;
  color: #cacaca !important;
}
.text-dark {
  --bs-text-opacity: 1;
  color: #343f52 !important;
}
.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(0, 0, 0, 0.5) !important;
}
.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}
.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important;
}
.text-opacity-25 {
  --bs-text-opacity: 0.25;
}
.text-opacity-50 {
  --bs-text-opacity: 0.5;
}
.text-opacity-75 {
  --bs-text-opacity: 0.75;
}
.text-opacity-100 {
  --bs-text-opacity: 1;
}
.text-primary-emphasis {
  color: var(--bs-primary-text-emphasis) !important;
}
.text-secondary-emphasis {
  color: var(--bs-secondary-text-emphasis) !important;
}
.text-success-emphasis {
  color: var(--bs-success-text-emphasis) !important;
}
.text-info-emphasis {
  color: var(--bs-info-text-emphasis) !important;
}
.text-warning-emphasis {
  color: var(--bs-warning-text-emphasis) !important;
}
.text-danger-emphasis {
  color: var(--bs-danger-text-emphasis) !important;
}
.text-light-emphasis {
  color: var(--bs-light-text-emphasis) !important;
}
.text-dark-emphasis {
  color: var(--bs-dark-text-emphasis) !important;
}
.link-opacity-10 {
  --bs-link-opacity: 0.1;
}
.link-opacity-10-hover:hover {
  --bs-link-opacity: 0.1;
}
.link-opacity-25 {
  --bs-link-opacity: 0.25;
}
.link-opacity-25-hover:hover {
  --bs-link-opacity: 0.25;
}
.link-opacity-50 {
  --bs-link-opacity: 0.5;
}
.link-opacity-50-hover:hover {
  --bs-link-opacity: 0.5;
}
.link-opacity-75 {
  --bs-link-opacity: 0.75;
}
.link-opacity-75-hover:hover {
  --bs-link-opacity: 0.75;
}
.link-opacity-100 {
  --bs-link-opacity: 1;
}
.link-opacity-100-hover:hover {
  --bs-link-opacity: 1;
}
.link-offset-1 {
  text-underline-offset: 0.125em !important;
}
.link-offset-1-hover:hover {
  text-underline-offset: 0.125em !important;
}
.link-offset-2 {
  text-underline-offset: 0.25em !important;
}
.link-offset-2-hover:hover {
  text-underline-offset: 0.25em !important;
}
.link-offset-3 {
  text-underline-offset: 0.375em !important;
}
.link-offset-3-hover:hover {
  text-underline-offset: 0.375em !important;
}
.link-underline-blue {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-blue-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-blue-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-sky {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-sky-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-sky-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-purple {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-purple-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-purple-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-grape {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-grape-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-grape-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-violet {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-violet-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-violet-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-pink {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-pink-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-pink-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-fuchsia {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-fuchsia-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-fuchsia-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-red {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-red-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-red-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-orange {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-orange-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-orange-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-yellow {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-yellow-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-yellow-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-green {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-green-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-green-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-leaf {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-leaf-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-leaf-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-aqua {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-aqua-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-aqua-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-navy {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-navy-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-navy-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-ash {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-ash-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-ash-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-white {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-white-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-white-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-light {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-gray {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-gray-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-gray-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-dark {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-primary {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-secondary {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-success {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-info {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-warning {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline-danger {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important;
  text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important;
}
.link-underline {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
  text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-underline-opacity-0 {
  --bs-link-underline-opacity: 0;
}
.link-underline-opacity-0-hover:hover {
  --bs-link-underline-opacity: 0;
}
.link-underline-opacity-10 {
  --bs-link-underline-opacity: 0.1;
}
.link-underline-opacity-10-hover:hover {
  --bs-link-underline-opacity: 0.1;
}
.link-underline-opacity-25 {
  --bs-link-underline-opacity: 0.25;
}
.link-underline-opacity-25-hover:hover {
  --bs-link-underline-opacity: 0.25;
}
.link-underline-opacity-50 {
  --bs-link-underline-opacity: 0.5;
}
.link-underline-opacity-50-hover:hover {
  --bs-link-underline-opacity: 0.5;
}
.link-underline-opacity-75 {
  --bs-link-underline-opacity: 0.75;
}
.link-underline-opacity-75-hover:hover {
  --bs-link-underline-opacity: 0.75;
}
.link-underline-opacity-100 {
  --bs-link-underline-opacity: 1;
}
.link-underline-opacity-100-hover:hover {
  --bs-link-underline-opacity: 1;
}
.bg-blue {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-blue-rgb), var(--bs-bg-opacity)) !important;
}
.bg-sky {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-sky-rgb), var(--bs-bg-opacity)) !important;
}
.bg-purple {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-purple-rgb), var(--bs-bg-opacity)) !important;
}
.bg-grape {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-grape-rgb), var(--bs-bg-opacity)) !important;
}
.bg-violet {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-violet-rgb), var(--bs-bg-opacity)) !important;
}
.bg-pink {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-pink-rgb), var(--bs-bg-opacity)) !important;
}
.bg-fuchsia {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-fuchsia-rgb), var(--bs-bg-opacity)) !important;
}
.bg-red {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-red-rgb), var(--bs-bg-opacity)) !important;
}
.bg-orange {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-orange-rgb), var(--bs-bg-opacity)) !important;
}
.bg-yellow {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-yellow-rgb), var(--bs-bg-opacity)) !important;
}
.bg-green {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-green-rgb), var(--bs-bg-opacity)) !important;
}
.bg-leaf {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-leaf-rgb), var(--bs-bg-opacity)) !important;
}
.bg-aqua {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-aqua-rgb), var(--bs-bg-opacity)) !important;
}
.bg-navy {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-navy-rgb), var(--bs-bg-opacity)) !important;
}
.bg-ash {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-ash-rgb), var(--bs-bg-opacity)) !important;
}
.bg-white {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
}
.bg-light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}
.bg-gray {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-gray-rgb), var(--bs-bg-opacity)) !important;
}
.bg-dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}
.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}
.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}
.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}
.bg-info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}
.bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}
.bg-danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
}
.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
}
.bg-body {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-body-bg-rgb), var(--bs-bg-opacity)) !important;
}
.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}
.bg-body-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-bg-rgb), var(--bs-bg-opacity)) !important;
}
.bg-body-tertiary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-tertiary-bg-rgb), var(--bs-bg-opacity)) !important;
}
.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}
.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}
.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}
.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}
.bg-opacity-100 {
  --bs-bg-opacity: 1;
}
.bg-primary-subtle {
  background-color: var(--bs-primary-bg-subtle) !important;
}
.bg-secondary-subtle {
  background-color: var(--bs-secondary-bg-subtle) !important;
}
.bg-success-subtle {
  background-color: var(--bs-success-bg-subtle) !important;
}
.bg-info-subtle {
  background-color: var(--bs-info-bg-subtle) !important;
}
.bg-warning-subtle {
  background-color: var(--bs-warning-bg-subtle) !important;
}
.bg-danger-subtle {
  background-color: var(--bs-danger-bg-subtle) !important;
}
.bg-light-subtle {
  background-color: var(--bs-light-bg-subtle) !important;
}
.bg-dark-subtle {
  background-color: var(--bs-dark-bg-subtle) !important;
}
.bg-gradient {
  background-image: var(--bs-gradient) !important;
}
.user-select-all {
  -webkit-user-select: all !important;
  -moz-user-select: all !important;
  user-select: all !important;
}
.user-select-auto {
  -webkit-user-select: auto !important;
  -moz-user-select: auto !important;
  user-select: auto !important;
}
.user-select-none {
  -webkit-user-select: none !important;
  -moz-user-select: none !important;
  user-select: none !important;
}
.pe-none {
  pointer-events: none !important;
}
.pe-auto {
  pointer-events: auto !important;
}
.rounded {
  border-radius: 0.4rem !important;
}
.rounded-0 {
  border-radius: 0 !important;
}
.rounded-1 {
  border-radius: 0.2rem !important;
}
.rounded-2 {
  border-radius: 0.4rem !important;
}
.rounded-3 {
  border-radius: 0.4rem !important;
}
.rounded-4 {
  border-radius: 0.8rem !important;
}
.rounded-circle {
  border-radius: 50% !important;
}
.rounded-pill {
  border-radius: 50rem !important;
}
.rounded-top {
  border-top-left-radius: var(--bs-border-radius) !important;
  border-top-right-radius: var(--bs-border-radius) !important;
}
.rounded-top-0 {
  border-top-left-radius: 0 !important;
  border-top-right-radius: 0 !important;
}
.rounded-top-1 {
  border-top-left-radius: var(--bs-border-radius-sm) !important;
  border-top-right-radius: var(--bs-border-radius-sm) !important;
}
.rounded-top-2 {
  border-top-left-radius: var(--bs-border-radius) !important;
  border-top-right-radius: var(--bs-border-radius) !important;
}
.rounded-top-3 {
  border-top-left-radius: var(--bs-border-radius-lg) !important;
  border-top-right-radius: var(--bs-border-radius-lg) !important;
}
.rounded-top-4 {
  border-top-left-radius: var(--bs-border-radius-xl) !important;
  border-top-right-radius: var(--bs-border-radius-xl) !important;
}
.rounded-top-5 {
  border-top-left-radius: var(--bs-border-radius-xxl) !important;
  border-top-right-radius: var(--bs-border-radius-xxl) !important;
}
.rounded-top-circle {
  border-top-left-radius: 50% !important;
  border-top-right-radius: 50% !important;
}
.rounded-top-pill {
  border-top-left-radius: var(--bs-border-radius-pill) !important;
  border-top-right-radius: var(--bs-border-radius-pill) !important;
}
.rounded-end {
  border-top-right-radius: var(--bs-border-radius) !important;
  border-bottom-right-radius: var(--bs-border-radius) !important;
}
.rounded-end-0 {
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}
.rounded-end-1 {
  border-top-right-radius: var(--bs-border-radius-sm) !important;
  border-bottom-right-radius: var(--bs-border-radius-sm) !important;
}
.rounded-end-2 {
  border-top-right-radius: var(--bs-border-radius) !important;
  border-bottom-right-radius: var(--bs-border-radius) !important;
}
.rounded-end-3 {
  border-top-right-radius: var(--bs-border-radius-lg) !important;
  border-bottom-right-radius: var(--bs-border-radius-lg) !important;
}
.rounded-end-4 {
  border-top-right-radius: var(--bs-border-radius-xl) !important;
  border-bottom-right-radius: var(--bs-border-radius-xl) !important;
}
.rounded-end-5 {
  border-top-right-radius: var(--bs-border-radius-xxl) !important;
  border-bottom-right-radius: var(--bs-border-radius-xxl) !important;
}
.rounded-end-circle {
  border-top-right-radius: 50% !important;
  border-bottom-right-radius: 50% !important;
}
.rounded-end-pill {
  border-top-right-radius: var(--bs-border-radius-pill) !important;
  border-bottom-right-radius: var(--bs-border-radius-pill) !important;
}
.rounded-bottom {
  border-bottom-right-radius: var(--bs-border-radius) !important;
  border-bottom-left-radius: var(--bs-border-radius) !important;
}
.rounded-bottom-0 {
  border-bottom-right-radius: 0 !important;
  border-bottom-left-radius: 0 !important;
}
.rounded-bottom-1 {
  border-bottom-right-radius: var(--bs-border-radius-sm) !important;
  border-bottom-left-radius: var(--bs-border-radius-sm) !important;
}
.rounded-bottom-2 {
  border-bottom-right-radius: var(--bs-border-radius) !important;
  border-bottom-left-radius: var(--bs-border-radius) !important;
}
.rounded-bottom-3 {
  border-bottom-right-radius: var(--bs-border-radius-lg) !important;
  border-bottom-left-radius: var(--bs-border-radius-lg) !important;
}
.rounded-bottom-4 {
  border-bottom-right-radius: var(--bs-border-radius-xl) !important;
  border-bottom-left-radius: var(--bs-border-radius-xl) !important;
}
.rounded-bottom-5 {
  border-bottom-right-radius: var(--bs-border-radius-xxl) !important;
  border-bottom-left-radius: var(--bs-border-radius-xxl) !important;
}
.rounded-bottom-circle {
  border-bottom-right-radius: 50% !important;
  border-bottom-left-radius: 50% !important;
}
.rounded-bottom-pill {
  border-bottom-right-radius: var(--bs-border-radius-pill) !important;
  border-bottom-left-radius: var(--bs-border-radius-pill) !important;
}
.rounded-start {
  border-bottom-left-radius: var(--bs-border-radius) !important;
  border-top-left-radius: var(--bs-border-radius) !important;
}
.rounded-start-0 {
  border-bottom-left-radius: 0 !important;
  border-top-left-radius: 0 !important;
}
.rounded-start-1 {
  border-bottom-left-radius: var(--bs-border-radius-sm) !important;
  border-top-left-radius: var(--bs-border-radius-sm) !important;
}
.rounded-start-2 {
  border-bottom-left-radius: var(--bs-border-radius) !important;
  border-top-left-radius: var(--bs-border-radius) !important;
}
.rounded-start-3 {
  border-bottom-left-radius: var(--bs-border-radius-lg) !important;
  border-top-left-radius: var(--bs-border-radius-lg) !important;
}
.rounded-start-4 {
  border-bottom-left-radius: var(--bs-border-radius-xl) !important;
  border-top-left-radius: var(--bs-border-radius-xl) !important;
}
.rounded-start-5 {
  border-bottom-left-radius: var(--bs-border-radius-xxl) !important;
  border-top-left-radius: var(--bs-border-radius-xxl) !important;
}
.rounded-start-circle {
  border-bottom-left-radius: 50% !important;
  border-top-left-radius: 50% !important;
}
.rounded-start-pill {
  border-bottom-left-radius: var(--bs-border-radius-pill) !important;
  border-top-left-radius: var(--bs-border-radius-pill) !important;
}
.visible {
  visibility: visible !important;
}
.invisible {
  visibility: hidden !important;
}
.z-n1 {
  z-index: -1 !important;
}
.z-0 {
  z-index: 0 !important;
}
.z-1 {
  z-index: 1 !important;
}
.z-2 {
  z-index: 2 !important;
}
.z-3 {
  z-index: 3 !important;
}
@media (min-width: 576px) {
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .object-fit-sm-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important;
  }
  .object-fit-sm-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important;
  }
  .object-fit-sm-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important;
  }
  .object-fit-sm-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important;
  }
  .object-fit-sm-none {
    -o-object-fit: none !important;
    object-fit: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-inline-grid {
    display: inline-grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .flex-sm-fill {
    flex: 1 1 auto !important;
  }
  .flex-sm-row {
    flex-direction: row !important;
  }
  .flex-sm-column {
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-sm-start {
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    justify-content: center !important;
  }
  .justify-content-sm-between {
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    align-items: center !important;
  }
  .align-items-sm-baseline {
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    align-items: stretch !important;
  }
  .align-content-sm-start {
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    align-content: center !important;
  }
  .align-content-sm-between {
    align-content: space-between !important;
  }
  .align-content-sm-around {
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    align-self: auto !important;
  }
  .align-self-sm-start {
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    align-self: center !important;
  }
  .align-self-sm-baseline {
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    align-self: stretch !important;
  }
  .order-sm-first {
    order: -1 !important;
  }
  .order-sm-0 {
    order: 0 !important;
  }
  .order-sm-1 {
    order: 1 !important;
  }
  .order-sm-2 {
    order: 2 !important;
  }
  .order-sm-3 {
    order: 3 !important;
  }
  .order-sm-4 {
    order: 4 !important;
  }
  .order-sm-5 {
    order: 5 !important;
  }
  .order-sm-last {
    order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 0.75rem !important;
  }
  .m-sm-4 {
    margin: 1rem !important;
  }
  .m-sm-5 {
    margin: 1.25rem !important;
  }
  .m-sm-6 {
    margin: 1.5rem !important;
  }
  .m-sm-7 {
    margin: 1.75rem !important;
  }
  .m-sm-8 {
    margin: 2rem !important;
  }
  .m-sm-9 {
    margin: 2.25rem !important;
  }
  .m-sm-10 {
    margin: 2.5rem !important;
  }
  .m-sm-11 {
    margin: 3rem !important;
  }
  .m-sm-12 {
    margin: 3.5rem !important;
  }
  .m-sm-13 {
    margin: 4rem !important;
  }
  .m-sm-14 {
    margin: 4.5rem !important;
  }
  .m-sm-15 {
    margin: 5rem !important;
  }
  .m-sm-16 {
    margin: 6rem !important;
  }
  .m-sm-17 {
    margin: 7rem !important;
  }
  .m-sm-18 {
    margin: 8rem !important;
  }
  .m-sm-19 {
    margin: 9rem !important;
  }
  .m-sm-20 {
    margin: 10rem !important;
  }
  .m-sm-21 {
    margin: 12.5rem !important;
  }
  .m-sm-22 {
    margin: 15rem !important;
  }
  .m-sm-23 {
    margin: 17.5rem !important;
  }
  .m-sm-24 {
    margin: 20rem !important;
  }
  .m-sm-25 {
    margin: 22.5rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 0.75rem !important;
    margin-left: 0.75rem !important;
  }
  .mx-sm-4 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-5 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important;
  }
  .mx-sm-6 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-7 {
    margin-right: 1.75rem !important;
    margin-left: 1.75rem !important;
  }
  .mx-sm-8 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-sm-9 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important;
  }
  .mx-sm-10 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-sm-11 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-12 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-sm-13 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-sm-14 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-sm-15 {
    margin-right: 5rem !important;
    margin-left: 5rem !important;
  }
  .mx-sm-16 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-sm-17 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-sm-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-sm-19 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-sm-20 {
    margin-right: 10rem !important;
    margin-left: 10rem !important;
  }
  .mx-sm-21 {
    margin-right: 12.5rem !important;
    margin-left: 12.5rem !important;
  }
  .mx-sm-22 {
    margin-right: 15rem !important;
    margin-left: 15rem !important;
  }
  .mx-sm-23 {
    margin-right: 17.5rem !important;
    margin-left: 17.5rem !important;
  }
  .mx-sm-24 {
    margin-right: 20rem !important;
    margin-left: 20rem !important;
  }
  .mx-sm-25 {
    margin-right: 22.5rem !important;
    margin-left: 22.5rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 0.75rem !important;
    margin-bottom: 0.75rem !important;
  }
  .my-sm-4 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-5 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important;
  }
  .my-sm-6 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-7 {
    margin-top: 1.75rem !important;
    margin-bottom: 1.75rem !important;
  }
  .my-sm-8 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-sm-9 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important;
  }
  .my-sm-10 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-sm-11 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-12 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-sm-13 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-sm-14 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-sm-15 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important;
  }
  .my-sm-16 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-sm-17 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-sm-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-sm-19 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-sm-20 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }
  .my-sm-21 {
    margin-top: 12.5rem !important;
    margin-bottom: 12.5rem !important;
  }
  .my-sm-22 {
    margin-top: 15rem !important;
    margin-bottom: 15rem !important;
  }
  .my-sm-23 {
    margin-top: 17.5rem !important;
    margin-bottom: 17.5rem !important;
  }
  .my-sm-24 {
    margin-top: 20rem !important;
    margin-bottom: 20rem !important;
  }
  .my-sm-25 {
    margin-top: 22.5rem !important;
    margin-bottom: 22.5rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 0.75rem !important;
  }
  .mt-sm-4 {
    margin-top: 1rem !important;
  }
  .mt-sm-5 {
    margin-top: 1.25rem !important;
  }
  .mt-sm-6 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-7 {
    margin-top: 1.75rem !important;
  }
  .mt-sm-8 {
    margin-top: 2rem !important;
  }
  .mt-sm-9 {
    margin-top: 2.25rem !important;
  }
  .mt-sm-10 {
    margin-top: 2.5rem !important;
  }
  .mt-sm-11 {
    margin-top: 3rem !important;
  }
  .mt-sm-12 {
    margin-top: 3.5rem !important;
  }
  .mt-sm-13 {
    margin-top: 4rem !important;
  }
  .mt-sm-14 {
    margin-top: 4.5rem !important;
  }
  .mt-sm-15 {
    margin-top: 5rem !important;
  }
  .mt-sm-16 {
    margin-top: 6rem !important;
  }
  .mt-sm-17 {
    margin-top: 7rem !important;
  }
  .mt-sm-18 {
    margin-top: 8rem !important;
  }
  .mt-sm-19 {
    margin-top: 9rem !important;
  }
  .mt-sm-20 {
    margin-top: 10rem !important;
  }
  .mt-sm-21 {
    margin-top: 12.5rem !important;
  }
  .mt-sm-22 {
    margin-top: 15rem !important;
  }
  .mt-sm-23 {
    margin-top: 17.5rem !important;
  }
  .mt-sm-24 {
    margin-top: 20rem !important;
  }
  .mt-sm-25 {
    margin-top: 22.5rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 0.75rem !important;
  }
  .me-sm-4 {
    margin-right: 1rem !important;
  }
  .me-sm-5 {
    margin-right: 1.25rem !important;
  }
  .me-sm-6 {
    margin-right: 1.5rem !important;
  }
  .me-sm-7 {
    margin-right: 1.75rem !important;
  }
  .me-sm-8 {
    margin-right: 2rem !important;
  }
  .me-sm-9 {
    margin-right: 2.25rem !important;
  }
  .me-sm-10 {
    margin-right: 2.5rem !important;
  }
  .me-sm-11 {
    margin-right: 3rem !important;
  }
  .me-sm-12 {
    margin-right: 3.5rem !important;
  }
  .me-sm-13 {
    margin-right: 4rem !important;
  }
  .me-sm-14 {
    margin-right: 4.5rem !important;
  }
  .me-sm-15 {
    margin-right: 5rem !important;
  }
  .me-sm-16 {
    margin-right: 6rem !important;
  }
  .me-sm-17 {
    margin-right: 7rem !important;
  }
  .me-sm-18 {
    margin-right: 8rem !important;
  }
  .me-sm-19 {
    margin-right: 9rem !important;
  }
  .me-sm-20 {
    margin-right: 10rem !important;
  }
  .me-sm-21 {
    margin-right: 12.5rem !important;
  }
  .me-sm-22 {
    margin-right: 15rem !important;
  }
  .me-sm-23 {
    margin-right: 17.5rem !important;
  }
  .me-sm-24 {
    margin-right: 20rem !important;
  }
  .me-sm-25 {
    margin-right: 22.5rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 0.75rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 1.25rem !important;
  }
  .mb-sm-6 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-7 {
    margin-bottom: 1.75rem !important;
  }
  .mb-sm-8 {
    margin-bottom: 2rem !important;
  }
  .mb-sm-9 {
    margin-bottom: 2.25rem !important;
  }
  .mb-sm-10 {
    margin-bottom: 2.5rem !important;
  }
  .mb-sm-11 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-12 {
    margin-bottom: 3.5rem !important;
  }
  .mb-sm-13 {
    margin-bottom: 4rem !important;
  }
  .mb-sm-14 {
    margin-bottom: 4.5rem !important;
  }
  .mb-sm-15 {
    margin-bottom: 5rem !important;
  }
  .mb-sm-16 {
    margin-bottom: 6rem !important;
  }
  .mb-sm-17 {
    margin-bottom: 7rem !important;
  }
  .mb-sm-18 {
    margin-bottom: 8rem !important;
  }
  .mb-sm-19 {
    margin-bottom: 9rem !important;
  }
  .mb-sm-20 {
    margin-bottom: 10rem !important;
  }
  .mb-sm-21 {
    margin-bottom: 12.5rem !important;
  }
  .mb-sm-22 {
    margin-bottom: 15rem !important;
  }
  .mb-sm-23 {
    margin-bottom: 17.5rem !important;
  }
  .mb-sm-24 {
    margin-bottom: 20rem !important;
  }
  .mb-sm-25 {
    margin-bottom: 22.5rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 0.75rem !important;
  }
  .ms-sm-4 {
    margin-left: 1rem !important;
  }
  .ms-sm-5 {
    margin-left: 1.25rem !important;
  }
  .ms-sm-6 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-7 {
    margin-left: 1.75rem !important;
  }
  .ms-sm-8 {
    margin-left: 2rem !important;
  }
  .ms-sm-9 {
    margin-left: 2.25rem !important;
  }
  .ms-sm-10 {
    margin-left: 2.5rem !important;
  }
  .ms-sm-11 {
    margin-left: 3rem !important;
  }
  .ms-sm-12 {
    margin-left: 3.5rem !important;
  }
  .ms-sm-13 {
    margin-left: 4rem !important;
  }
  .ms-sm-14 {
    margin-left: 4.5rem !important;
  }
  .ms-sm-15 {
    margin-left: 5rem !important;
  }
  .ms-sm-16 {
    margin-left: 6rem !important;
  }
  .ms-sm-17 {
    margin-left: 7rem !important;
  }
  .ms-sm-18 {
    margin-left: 8rem !important;
  }
  .ms-sm-19 {
    margin-left: 9rem !important;
  }
  .ms-sm-20 {
    margin-left: 10rem !important;
  }
  .ms-sm-21 {
    margin-left: 12.5rem !important;
  }
  .ms-sm-22 {
    margin-left: 15rem !important;
  }
  .ms-sm-23 {
    margin-left: 17.5rem !important;
  }
  .ms-sm-24 {
    margin-left: 20rem !important;
  }
  .ms-sm-25 {
    margin-left: 22.5rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -0.75rem !important;
  }
  .m-sm-n4 {
    margin: -1rem !important;
  }
  .m-sm-n5 {
    margin: -1.25rem !important;
  }
  .m-sm-n6 {
    margin: -1.5rem !important;
  }
  .m-sm-n7 {
    margin: -1.75rem !important;
  }
  .m-sm-n8 {
    margin: -2rem !important;
  }
  .m-sm-n9 {
    margin: -2.25rem !important;
  }
  .m-sm-n10 {
    margin: -2.5rem !important;
  }
  .m-sm-n11 {
    margin: -3rem !important;
  }
  .m-sm-n12 {
    margin: -3.5rem !important;
  }
  .m-sm-n13 {
    margin: -4rem !important;
  }
  .m-sm-n14 {
    margin: -4.5rem !important;
  }
  .m-sm-n15 {
    margin: -5rem !important;
  }
  .m-sm-n16 {
    margin: -6rem !important;
  }
  .m-sm-n17 {
    margin: -7rem !important;
  }
  .m-sm-n18 {
    margin: -8rem !important;
  }
  .m-sm-n19 {
    margin: -9rem !important;
  }
  .m-sm-n20 {
    margin: -10rem !important;
  }
  .m-sm-n21 {
    margin: -12.5rem !important;
  }
  .m-sm-n22 {
    margin: -15rem !important;
  }
  .m-sm-n23 {
    margin: -17.5rem !important;
  }
  .m-sm-n24 {
    margin: -20rem !important;
  }
  .m-sm-n25 {
    margin: -22.5rem !important;
  }
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-sm-n3 {
    margin-right: -0.75rem !important;
    margin-left: -0.75rem !important;
  }
  .mx-sm-n4 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-sm-n5 {
    margin-right: -1.25rem !important;
    margin-left: -1.25rem !important;
  }
  .mx-sm-n6 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-sm-n7 {
    margin-right: -1.75rem !important;
    margin-left: -1.75rem !important;
  }
  .mx-sm-n8 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-sm-n9 {
    margin-right: -2.25rem !important;
    margin-left: -2.25rem !important;
  }
  .mx-sm-n10 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-sm-n11 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-sm-n12 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-sm-n13 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-sm-n14 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-sm-n15 {
    margin-right: -5rem !important;
    margin-left: -5rem !important;
  }
  .mx-sm-n16 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-sm-n17 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-sm-n18 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-sm-n19 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-sm-n20 {
    margin-right: -10rem !important;
    margin-left: -10rem !important;
  }
  .mx-sm-n21 {
    margin-right: -12.5rem !important;
    margin-left: -12.5rem !important;
  }
  .mx-sm-n22 {
    margin-right: -15rem !important;
    margin-left: -15rem !important;
  }
  .mx-sm-n23 {
    margin-right: -17.5rem !important;
    margin-left: -17.5rem !important;
  }
  .mx-sm-n24 {
    margin-right: -20rem !important;
    margin-left: -20rem !important;
  }
  .mx-sm-n25 {
    margin-right: -22.5rem !important;
    margin-left: -22.5rem !important;
  }
  .my-sm-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-sm-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-sm-n3 {
    margin-top: -0.75rem !important;
    margin-bottom: -0.75rem !important;
  }
  .my-sm-n4 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-sm-n5 {
    margin-top: -1.25rem !important;
    margin-bottom: -1.25rem !important;
  }
  .my-sm-n6 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-sm-n7 {
    margin-top: -1.75rem !important;
    margin-bottom: -1.75rem !important;
  }
  .my-sm-n8 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-sm-n9 {
    margin-top: -2.25rem !important;
    margin-bottom: -2.25rem !important;
  }
  .my-sm-n10 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-sm-n11 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-sm-n12 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-sm-n13 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-sm-n14 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-sm-n15 {
    margin-top: -5rem !important;
    margin-bottom: -5rem !important;
  }
  .my-sm-n16 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-sm-n17 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-sm-n18 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-sm-n19 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-sm-n20 {
    margin-top: -10rem !important;
    margin-bottom: -10rem !important;
  }
  .my-sm-n21 {
    margin-top: -12.5rem !important;
    margin-bottom: -12.5rem !important;
  }
  .my-sm-n22 {
    margin-top: -15rem !important;
    margin-bottom: -15rem !important;
  }
  .my-sm-n23 {
    margin-top: -17.5rem !important;
    margin-bottom: -17.5rem !important;
  }
  .my-sm-n24 {
    margin-top: -20rem !important;
    margin-bottom: -20rem !important;
  }
  .my-sm-n25 {
    margin-top: -22.5rem !important;
    margin-bottom: -22.5rem !important;
  }
  .mt-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-sm-n3 {
    margin-top: -0.75rem !important;
  }
  .mt-sm-n4 {
    margin-top: -1rem !important;
  }
  .mt-sm-n5 {
    margin-top: -1.25rem !important;
  }
  .mt-sm-n6 {
    margin-top: -1.5rem !important;
  }
  .mt-sm-n7 {
    margin-top: -1.75rem !important;
  }
  .mt-sm-n8 {
    margin-top: -2rem !important;
  }
  .mt-sm-n9 {
    margin-top: -2.25rem !important;
  }
  .mt-sm-n10 {
    margin-top: -2.5rem !important;
  }
  .mt-sm-n11 {
    margin-top: -3rem !important;
  }
  .mt-sm-n12 {
    margin-top: -3.5rem !important;
  }
  .mt-sm-n13 {
    margin-top: -4rem !important;
  }
  .mt-sm-n14 {
    margin-top: -4.5rem !important;
  }
  .mt-sm-n15 {
    margin-top: -5rem !important;
  }
  .mt-sm-n16 {
    margin-top: -6rem !important;
  }
  .mt-sm-n17 {
    margin-top: -7rem !important;
  }
  .mt-sm-n18 {
    margin-top: -8rem !important;
  }
  .mt-sm-n19 {
    margin-top: -9rem !important;
  }
  .mt-sm-n20 {
    margin-top: -10rem !important;
  }
  .mt-sm-n21 {
    margin-top: -12.5rem !important;
  }
  .mt-sm-n22 {
    margin-top: -15rem !important;
  }
  .mt-sm-n23 {
    margin-top: -17.5rem !important;
  }
  .mt-sm-n24 {
    margin-top: -20rem !important;
  }
  .mt-sm-n25 {
    margin-top: -22.5rem !important;
  }
  .me-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .me-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .me-sm-n3 {
    margin-right: -0.75rem !important;
  }
  .me-sm-n4 {
    margin-right: -1rem !important;
  }
  .me-sm-n5 {
    margin-right: -1.25rem !important;
  }
  .me-sm-n6 {
    margin-right: -1.5rem !important;
  }
  .me-sm-n7 {
    margin-right: -1.75rem !important;
  }
  .me-sm-n8 {
    margin-right: -2rem !important;
  }
  .me-sm-n9 {
    margin-right: -2.25rem !important;
  }
  .me-sm-n10 {
    margin-right: -2.5rem !important;
  }
  .me-sm-n11 {
    margin-right: -3rem !important;
  }
  .me-sm-n12 {
    margin-right: -3.5rem !important;
  }
  .me-sm-n13 {
    margin-right: -4rem !important;
  }
  .me-sm-n14 {
    margin-right: -4.5rem !important;
  }
  .me-sm-n15 {
    margin-right: -5rem !important;
  }
  .me-sm-n16 {
    margin-right: -6rem !important;
  }
  .me-sm-n17 {
    margin-right: -7rem !important;
  }
  .me-sm-n18 {
    margin-right: -8rem !important;
  }
  .me-sm-n19 {
    margin-right: -9rem !important;
  }
  .me-sm-n20 {
    margin-right: -10rem !important;
  }
  .me-sm-n21 {
    margin-right: -12.5rem !important;
  }
  .me-sm-n22 {
    margin-right: -15rem !important;
  }
  .me-sm-n23 {
    margin-right: -17.5rem !important;
  }
  .me-sm-n24 {
    margin-right: -20rem !important;
  }
  .me-sm-n25 {
    margin-right: -22.5rem !important;
  }
  .mb-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-sm-n3 {
    margin-bottom: -0.75rem !important;
  }
  .mb-sm-n4 {
    margin-bottom: -1rem !important;
  }
  .mb-sm-n5 {
    margin-bottom: -1.25rem !important;
  }
  .mb-sm-n6 {
    margin-bottom: -1.5rem !important;
  }
  .mb-sm-n7 {
    margin-bottom: -1.75rem !important;
  }
  .mb-sm-n8 {
    margin-bottom: -2rem !important;
  }
  .mb-sm-n9 {
    margin-bottom: -2.25rem !important;
  }
  .mb-sm-n10 {
    margin-bottom: -2.5rem !important;
  }
  .mb-sm-n11 {
    margin-bottom: -3rem !important;
  }
  .mb-sm-n12 {
    margin-bottom: -3.5rem !important;
  }
  .mb-sm-n13 {
    margin-bottom: -4rem !important;
  }
  .mb-sm-n14 {
    margin-bottom: -4.5rem !important;
  }
  .mb-sm-n15 {
    margin-bottom: -5rem !important;
  }
  .mb-sm-n16 {
    margin-bottom: -6rem !important;
  }
  .mb-sm-n17 {
    margin-bottom: -7rem !important;
  }
  .mb-sm-n18 {
    margin-bottom: -8rem !important;
  }
  .mb-sm-n19 {
    margin-bottom: -9rem !important;
  }
  .mb-sm-n20 {
    margin-bottom: -10rem !important;
  }
  .mb-sm-n21 {
    margin-bottom: -12.5rem !important;
  }
  .mb-sm-n22 {
    margin-bottom: -15rem !important;
  }
  .mb-sm-n23 {
    margin-bottom: -17.5rem !important;
  }
  .mb-sm-n24 {
    margin-bottom: -20rem !important;
  }
  .mb-sm-n25 {
    margin-bottom: -22.5rem !important;
  }
  .ms-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-sm-n3 {
    margin-left: -0.75rem !important;
  }
  .ms-sm-n4 {
    margin-left: -1rem !important;
  }
  .ms-sm-n5 {
    margin-left: -1.25rem !important;
  }
  .ms-sm-n6 {
    margin-left: -1.5rem !important;
  }
  .ms-sm-n7 {
    margin-left: -1.75rem !important;
  }
  .ms-sm-n8 {
    margin-left: -2rem !important;
  }
  .ms-sm-n9 {
    margin-left: -2.25rem !important;
  }
  .ms-sm-n10 {
    margin-left: -2.5rem !important;
  }
  .ms-sm-n11 {
    margin-left: -3rem !important;
  }
  .ms-sm-n12 {
    margin-left: -3.5rem !important;
  }
  .ms-sm-n13 {
    margin-left: -4rem !important;
  }
  .ms-sm-n14 {
    margin-left: -4.5rem !important;
  }
  .ms-sm-n15 {
    margin-left: -5rem !important;
  }
  .ms-sm-n16 {
    margin-left: -6rem !important;
  }
  .ms-sm-n17 {
    margin-left: -7rem !important;
  }
  .ms-sm-n18 {
    margin-left: -8rem !important;
  }
  .ms-sm-n19 {
    margin-left: -9rem !important;
  }
  .ms-sm-n20 {
    margin-left: -10rem !important;
  }
  .ms-sm-n21 {
    margin-left: -12.5rem !important;
  }
  .ms-sm-n22 {
    margin-left: -15rem !important;
  }
  .ms-sm-n23 {
    margin-left: -17.5rem !important;
  }
  .ms-sm-n24 {
    margin-left: -20rem !important;
  }
  .ms-sm-n25 {
    margin-left: -22.5rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 0.75rem !important;
  }
  .p-sm-4 {
    padding: 1rem !important;
  }
  .p-sm-5 {
    padding: 1.25rem !important;
  }
  .p-sm-6 {
    padding: 1.5rem !important;
  }
  .p-sm-7 {
    padding: 1.75rem !important;
  }
  .p-sm-8 {
    padding: 2rem !important;
  }
  .p-sm-9 {
    padding: 2.25rem !important;
  }
  .p-sm-10 {
    padding: 2.5rem !important;
  }
  .p-sm-11 {
    padding: 3rem !important;
  }
  .p-sm-12 {
    padding: 3.5rem !important;
  }
  .p-sm-13 {
    padding: 4rem !important;
  }
  .p-sm-14 {
    padding: 4.5rem !important;
  }
  .p-sm-15 {
    padding: 5rem !important;
  }
  .p-sm-16 {
    padding: 6rem !important;
  }
  .p-sm-17 {
    padding: 7rem !important;
  }
  .p-sm-18 {
    padding: 8rem !important;
  }
  .p-sm-19 {
    padding: 9rem !important;
  }
  .p-sm-20 {
    padding: 10rem !important;
  }
  .p-sm-21 {
    padding: 12.5rem !important;
  }
  .p-sm-22 {
    padding: 15rem !important;
  }
  .p-sm-23 {
    padding: 17.5rem !important;
  }
  .p-sm-24 {
    padding: 20rem !important;
  }
  .p-sm-25 {
    padding: 22.5rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 0.75rem !important;
    padding-left: 0.75rem !important;
  }
  .px-sm-4 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-5 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important;
  }
  .px-sm-6 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-7 {
    padding-right: 1.75rem !important;
    padding-left: 1.75rem !important;
  }
  .px-sm-8 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-sm-9 {
    padding-right: 2.25rem !important;
    padding-left: 2.25rem !important;
  }
  .px-sm-10 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-sm-11 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-sm-12 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-sm-13 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-sm-14 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-sm-15 {
    padding-right: 5rem !important;
    padding-left: 5rem !important;
  }
  .px-sm-16 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-sm-17 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-sm-18 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-sm-19 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-sm-20 {
    padding-right: 10rem !important;
    padding-left: 10rem !important;
  }
  .px-sm-21 {
    padding-right: 12.5rem !important;
    padding-left: 12.5rem !important;
  }
  .px-sm-22 {
    padding-right: 15rem !important;
    padding-left: 15rem !important;
  }
  .px-sm-23 {
    padding-right: 17.5rem !important;
    padding-left: 17.5rem !important;
  }
  .px-sm-24 {
    padding-right: 20rem !important;
    padding-left: 20rem !important;
  }
  .px-sm-25 {
    padding-right: 22.5rem !important;
    padding-left: 22.5rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 0.75rem !important;
    padding-bottom: 0.75rem !important;
  }
  .py-sm-4 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-5 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .py-sm-6 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-7 {
    padding-top: 1.75rem !important;
    padding-bottom: 1.75rem !important;
  }
  .py-sm-8 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-sm-9 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important;
  }
  .py-sm-10 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-sm-11 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-sm-12 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-sm-13 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-sm-14 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-sm-15 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important;
  }
  .py-sm-16 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-sm-17 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-sm-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-sm-19 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-sm-20 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }
  .py-sm-21 {
    padding-top: 12.5rem !important;
    padding-bottom: 12.5rem !important;
  }
  .py-sm-22 {
    padding-top: 15rem !important;
    padding-bottom: 15rem !important;
  }
  .py-sm-23 {
    padding-top: 17.5rem !important;
    padding-bottom: 17.5rem !important;
  }
  .py-sm-24 {
    padding-top: 20rem !important;
    padding-bottom: 20rem !important;
  }
  .py-sm-25 {
    padding-top: 22.5rem !important;
    padding-bottom: 22.5rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 0.75rem !important;
  }
  .pt-sm-4 {
    padding-top: 1rem !important;
  }
  .pt-sm-5 {
    padding-top: 1.25rem !important;
  }
  .pt-sm-6 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-7 {
    padding-top: 1.75rem !important;
  }
  .pt-sm-8 {
    padding-top: 2rem !important;
  }
  .pt-sm-9 {
    padding-top: 2.25rem !important;
  }
  .pt-sm-10 {
    padding-top: 2.5rem !important;
  }
  .pt-sm-11 {
    padding-top: 3rem !important;
  }
  .pt-sm-12 {
    padding-top: 3.5rem !important;
  }
  .pt-sm-13 {
    padding-top: 4rem !important;
  }
  .pt-sm-14 {
    padding-top: 4.5rem !important;
  }
  .pt-sm-15 {
    padding-top: 5rem !important;
  }
  .pt-sm-16 {
    padding-top: 6rem !important;
  }
  .pt-sm-17 {
    padding-top: 7rem !important;
  }
  .pt-sm-18 {
    padding-top: 8rem !important;
  }
  .pt-sm-19 {
    padding-top: 9rem !important;
  }
  .pt-sm-20 {
    padding-top: 10rem !important;
  }
  .pt-sm-21 {
    padding-top: 12.5rem !important;
  }
  .pt-sm-22 {
    padding-top: 15rem !important;
  }
  .pt-sm-23 {
    padding-top: 17.5rem !important;
  }
  .pt-sm-24 {
    padding-top: 20rem !important;
  }
  .pt-sm-25 {
    padding-top: 22.5rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 0.75rem !important;
  }
  .pe-sm-4 {
    padding-right: 1rem !important;
  }
  .pe-sm-5 {
    padding-right: 1.25rem !important;
  }
  .pe-sm-6 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-7 {
    padding-right: 1.75rem !important;
  }
  .pe-sm-8 {
    padding-right: 2rem !important;
  }
  .pe-sm-9 {
    padding-right: 2.25rem !important;
  }
  .pe-sm-10 {
    padding-right: 2.5rem !important;
  }
  .pe-sm-11 {
    padding-right: 3rem !important;
  }
  .pe-sm-12 {
    padding-right: 3.5rem !important;
  }
  .pe-sm-13 {
    padding-right: 4rem !important;
  }
  .pe-sm-14 {
    padding-right: 4.5rem !important;
  }
  .pe-sm-15 {
    padding-right: 5rem !important;
  }
  .pe-sm-16 {
    padding-right: 6rem !important;
  }
  .pe-sm-17 {
    padding-right: 7rem !important;
  }
  .pe-sm-18 {
    padding-right: 8rem !important;
  }
  .pe-sm-19 {
    padding-right: 9rem !important;
  }
  .pe-sm-20 {
    padding-right: 10rem !important;
  }
  .pe-sm-21 {
    padding-right: 12.5rem !important;
  }
  .pe-sm-22 {
    padding-right: 15rem !important;
  }
  .pe-sm-23 {
    padding-right: 17.5rem !important;
  }
  .pe-sm-24 {
    padding-right: 20rem !important;
  }
  .pe-sm-25 {
    padding-right: 22.5rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 0.75rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 1.25rem !important;
  }
  .pb-sm-6 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-7 {
    padding-bottom: 1.75rem !important;
  }
  .pb-sm-8 {
    padding-bottom: 2rem !important;
  }
  .pb-sm-9 {
    padding-bottom: 2.25rem !important;
  }
  .pb-sm-10 {
    padding-bottom: 2.5rem !important;
  }
  .pb-sm-11 {
    padding-bottom: 3rem !important;
  }
  .pb-sm-12 {
    padding-bottom: 3.5rem !important;
  }
  .pb-sm-13 {
    padding-bottom: 4rem !important;
  }
  .pb-sm-14 {
    padding-bottom: 4.5rem !important;
  }
  .pb-sm-15 {
    padding-bottom: 5rem !important;
  }
  .pb-sm-16 {
    padding-bottom: 6rem !important;
  }
  .pb-sm-17 {
    padding-bottom: 7rem !important;
  }
  .pb-sm-18 {
    padding-bottom: 8rem !important;
  }
  .pb-sm-19 {
    padding-bottom: 9rem !important;
  }
  .pb-sm-20 {
    padding-bottom: 10rem !important;
  }
  .pb-sm-21 {
    padding-bottom: 12.5rem !important;
  }
  .pb-sm-22 {
    padding-bottom: 15rem !important;
  }
  .pb-sm-23 {
    padding-bottom: 17.5rem !important;
  }
  .pb-sm-24 {
    padding-bottom: 20rem !important;
  }
  .pb-sm-25 {
    padding-bottom: 22.5rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 0.75rem !important;
  }
  .ps-sm-4 {
    padding-left: 1rem !important;
  }
  .ps-sm-5 {
    padding-left: 1.25rem !important;
  }
  .ps-sm-6 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-7 {
    padding-left: 1.75rem !important;
  }
  .ps-sm-8 {
    padding-left: 2rem !important;
  }
  .ps-sm-9 {
    padding-left: 2.25rem !important;
  }
  .ps-sm-10 {
    padding-left: 2.5rem !important;
  }
  .ps-sm-11 {
    padding-left: 3rem !important;
  }
  .ps-sm-12 {
    padding-left: 3.5rem !important;
  }
  .ps-sm-13 {
    padding-left: 4rem !important;
  }
  .ps-sm-14 {
    padding-left: 4.5rem !important;
  }
  .ps-sm-15 {
    padding-left: 5rem !important;
  }
  .ps-sm-16 {
    padding-left: 6rem !important;
  }
  .ps-sm-17 {
    padding-left: 7rem !important;
  }
  .ps-sm-18 {
    padding-left: 8rem !important;
  }
  .ps-sm-19 {
    padding-left: 9rem !important;
  }
  .ps-sm-20 {
    padding-left: 10rem !important;
  }
  .ps-sm-21 {
    padding-left: 12.5rem !important;
  }
  .ps-sm-22 {
    padding-left: 15rem !important;
  }
  .ps-sm-23 {
    padding-left: 17.5rem !important;
  }
  .ps-sm-24 {
    padding-left: 20rem !important;
  }
  .ps-sm-25 {
    padding-left: 22.5rem !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 0.75rem !important;
  }
  .gap-sm-4 {
    gap: 1rem !important;
  }
  .gap-sm-5 {
    gap: 1.25rem !important;
  }
  .gap-sm-6 {
    gap: 1.5rem !important;
  }
  .gap-sm-7 {
    gap: 1.75rem !important;
  }
  .gap-sm-8 {
    gap: 2rem !important;
  }
  .gap-sm-9 {
    gap: 2.25rem !important;
  }
  .gap-sm-10 {
    gap: 2.5rem !important;
  }
  .gap-sm-11 {
    gap: 3rem !important;
  }
  .gap-sm-12 {
    gap: 3.5rem !important;
  }
  .gap-sm-13 {
    gap: 4rem !important;
  }
  .gap-sm-14 {
    gap: 4.5rem !important;
  }
  .gap-sm-15 {
    gap: 5rem !important;
  }
  .gap-sm-16 {
    gap: 6rem !important;
  }
  .gap-sm-17 {
    gap: 7rem !important;
  }
  .gap-sm-18 {
    gap: 8rem !important;
  }
  .gap-sm-19 {
    gap: 9rem !important;
  }
  .gap-sm-20 {
    gap: 10rem !important;
  }
  .gap-sm-21 {
    gap: 12.5rem !important;
  }
  .gap-sm-22 {
    gap: 15rem !important;
  }
  .gap-sm-23 {
    gap: 17.5rem !important;
  }
  .gap-sm-24 {
    gap: 20rem !important;
  }
  .gap-sm-25 {
    gap: 22.5rem !important;
  }
  .row-gap-sm-0 {
    row-gap: 0 !important;
  }
  .row-gap-sm-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-sm-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-sm-3 {
    row-gap: 0.75rem !important;
  }
  .row-gap-sm-4 {
    row-gap: 1rem !important;
  }
  .row-gap-sm-5 {
    row-gap: 1.25rem !important;
  }
  .row-gap-sm-6 {
    row-gap: 1.5rem !important;
  }
  .row-gap-sm-7 {
    row-gap: 1.75rem !important;
  }
  .row-gap-sm-8 {
    row-gap: 2rem !important;
  }
  .row-gap-sm-9 {
    row-gap: 2.25rem !important;
  }
  .row-gap-sm-10 {
    row-gap: 2.5rem !important;
  }
  .row-gap-sm-11 {
    row-gap: 3rem !important;
  }
  .row-gap-sm-12 {
    row-gap: 3.5rem !important;
  }
  .row-gap-sm-13 {
    row-gap: 4rem !important;
  }
  .row-gap-sm-14 {
    row-gap: 4.5rem !important;
  }
  .row-gap-sm-15 {
    row-gap: 5rem !important;
  }
  .row-gap-sm-16 {
    row-gap: 6rem !important;
  }
  .row-gap-sm-17 {
    row-gap: 7rem !important;
  }
  .row-gap-sm-18 {
    row-gap: 8rem !important;
  }
  .row-gap-sm-19 {
    row-gap: 9rem !important;
  }
  .row-gap-sm-20 {
    row-gap: 10rem !important;
  }
  .row-gap-sm-21 {
    row-gap: 12.5rem !important;
  }
  .row-gap-sm-22 {
    row-gap: 15rem !important;
  }
  .row-gap-sm-23 {
    row-gap: 17.5rem !important;
  }
  .row-gap-sm-24 {
    row-gap: 20rem !important;
  }
  .row-gap-sm-25 {
    row-gap: 22.5rem !important;
  }
  .column-gap-sm-0 {
    -moz-column-gap: 0 !important;
    column-gap: 0 !important;
  }
  .column-gap-sm-1 {
    -moz-column-gap: 0.25rem !important;
    column-gap: 0.25rem !important;
  }
  .column-gap-sm-2 {
    -moz-column-gap: 0.5rem !important;
    column-gap: 0.5rem !important;
  }
  .column-gap-sm-3 {
    -moz-column-gap: 0.75rem !important;
    column-gap: 0.75rem !important;
  }
  .column-gap-sm-4 {
    -moz-column-gap: 1rem !important;
    column-gap: 1rem !important;
  }
  .column-gap-sm-5 {
    -moz-column-gap: 1.25rem !important;
    column-gap: 1.25rem !important;
  }
  .column-gap-sm-6 {
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important;
  }
  .column-gap-sm-7 {
    -moz-column-gap: 1.75rem !important;
    column-gap: 1.75rem !important;
  }
  .column-gap-sm-8 {
    -moz-column-gap: 2rem !important;
    column-gap: 2rem !important;
  }
  .column-gap-sm-9 {
    -moz-column-gap: 2.25rem !important;
    column-gap: 2.25rem !important;
  }
  .column-gap-sm-10 {
    -moz-column-gap: 2.5rem !important;
    column-gap: 2.5rem !important;
  }
  .column-gap-sm-11 {
    -moz-column-gap: 3rem !important;
    column-gap: 3rem !important;
  }
  .column-gap-sm-12 {
    -moz-column-gap: 3.5rem !important;
    column-gap: 3.5rem !important;
  }
  .column-gap-sm-13 {
    -moz-column-gap: 4rem !important;
    column-gap: 4rem !important;
  }
  .column-gap-sm-14 {
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important;
  }
  .column-gap-sm-15 {
    -moz-column-gap: 5rem !important;
    column-gap: 5rem !important;
  }
  .column-gap-sm-16 {
    -moz-column-gap: 6rem !important;
    column-gap: 6rem !important;
  }
  .column-gap-sm-17 {
    -moz-column-gap: 7rem !important;
    column-gap: 7rem !important;
  }
  .column-gap-sm-18 {
    -moz-column-gap: 8rem !important;
    column-gap: 8rem !important;
  }
  .column-gap-sm-19 {
    -moz-column-gap: 9rem !important;
    column-gap: 9rem !important;
  }
  .column-gap-sm-20 {
    -moz-column-gap: 10rem !important;
    column-gap: 10rem !important;
  }
  .column-gap-sm-21 {
    -moz-column-gap: 12.5rem !important;
    column-gap: 12.5rem !important;
  }
  .column-gap-sm-22 {
    -moz-column-gap: 15rem !important;
    column-gap: 15rem !important;
  }
  .column-gap-sm-23 {
    -moz-column-gap: 17.5rem !important;
    column-gap: 17.5rem !important;
  }
  .column-gap-sm-24 {
    -moz-column-gap: 20rem !important;
    column-gap: 20rem !important;
  }
  .column-gap-sm-25 {
    -moz-column-gap: 22.5rem !important;
    column-gap: 22.5rem !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}
@media (min-width: 768px) {
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .object-fit-md-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important;
  }
  .object-fit-md-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important;
  }
  .object-fit-md-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important;
  }
  .object-fit-md-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important;
  }
  .object-fit-md-none {
    -o-object-fit: none !important;
    object-fit: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-inline-grid {
    display: inline-grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: flex !important;
  }
  .d-md-inline-flex {
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .flex-md-fill {
    flex: 1 1 auto !important;
  }
  .flex-md-row {
    flex-direction: row !important;
  }
  .flex-md-column {
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-md-start {
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    justify-content: center !important;
  }
  .justify-content-md-between {
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-md-start {
    align-items: flex-start !important;
  }
  .align-items-md-end {
    align-items: flex-end !important;
  }
  .align-items-md-center {
    align-items: center !important;
  }
  .align-items-md-baseline {
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    align-items: stretch !important;
  }
  .align-content-md-start {
    align-content: flex-start !important;
  }
  .align-content-md-end {
    align-content: flex-end !important;
  }
  .align-content-md-center {
    align-content: center !important;
  }
  .align-content-md-between {
    align-content: space-between !important;
  }
  .align-content-md-around {
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    align-content: stretch !important;
  }
  .align-self-md-auto {
    align-self: auto !important;
  }
  .align-self-md-start {
    align-self: flex-start !important;
  }
  .align-self-md-end {
    align-self: flex-end !important;
  }
  .align-self-md-center {
    align-self: center !important;
  }
  .align-self-md-baseline {
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    align-self: stretch !important;
  }
  .order-md-first {
    order: -1 !important;
  }
  .order-md-0 {
    order: 0 !important;
  }
  .order-md-1 {
    order: 1 !important;
  }
  .order-md-2 {
    order: 2 !important;
  }
  .order-md-3 {
    order: 3 !important;
  }
  .order-md-4 {
    order: 4 !important;
  }
  .order-md-5 {
    order: 5 !important;
  }
  .order-md-last {
    order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 0.75rem !important;
  }
  .m-md-4 {
    margin: 1rem !important;
  }
  .m-md-5 {
    margin: 1.25rem !important;
  }
  .m-md-6 {
    margin: 1.5rem !important;
  }
  .m-md-7 {
    margin: 1.75rem !important;
  }
  .m-md-8 {
    margin: 2rem !important;
  }
  .m-md-9 {
    margin: 2.25rem !important;
  }
  .m-md-10 {
    margin: 2.5rem !important;
  }
  .m-md-11 {
    margin: 3rem !important;
  }
  .m-md-12 {
    margin: 3.5rem !important;
  }
  .m-md-13 {
    margin: 4rem !important;
  }
  .m-md-14 {
    margin: 4.5rem !important;
  }
  .m-md-15 {
    margin: 5rem !important;
  }
  .m-md-16 {
    margin: 6rem !important;
  }
  .m-md-17 {
    margin: 7rem !important;
  }
  .m-md-18 {
    margin: 8rem !important;
  }
  .m-md-19 {
    margin: 9rem !important;
  }
  .m-md-20 {
    margin: 10rem !important;
  }
  .m-md-21 {
    margin: 12.5rem !important;
  }
  .m-md-22 {
    margin: 15rem !important;
  }
  .m-md-23 {
    margin: 17.5rem !important;
  }
  .m-md-24 {
    margin: 20rem !important;
  }
  .m-md-25 {
    margin: 22.5rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 0.75rem !important;
    margin-left: 0.75rem !important;
  }
  .mx-md-4 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-5 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important;
  }
  .mx-md-6 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-7 {
    margin-right: 1.75rem !important;
    margin-left: 1.75rem !important;
  }
  .mx-md-8 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-md-9 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important;
  }
  .mx-md-10 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-md-11 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-12 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-md-13 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-md-14 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-md-15 {
    margin-right: 5rem !important;
    margin-left: 5rem !important;
  }
  .mx-md-16 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-md-17 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-md-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-md-19 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-md-20 {
    margin-right: 10rem !important;
    margin-left: 10rem !important;
  }
  .mx-md-21 {
    margin-right: 12.5rem !important;
    margin-left: 12.5rem !important;
  }
  .mx-md-22 {
    margin-right: 15rem !important;
    margin-left: 15rem !important;
  }
  .mx-md-23 {
    margin-right: 17.5rem !important;
    margin-left: 17.5rem !important;
  }
  .mx-md-24 {
    margin-right: 20rem !important;
    margin-left: 20rem !important;
  }
  .mx-md-25 {
    margin-right: 22.5rem !important;
    margin-left: 22.5rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 0.75rem !important;
    margin-bottom: 0.75rem !important;
  }
  .my-md-4 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-5 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important;
  }
  .my-md-6 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-7 {
    margin-top: 1.75rem !important;
    margin-bottom: 1.75rem !important;
  }
  .my-md-8 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-md-9 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important;
  }
  .my-md-10 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-md-11 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-12 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-md-13 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-md-14 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-md-15 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important;
  }
  .my-md-16 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-md-17 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-md-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-md-19 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-md-20 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }
  .my-md-21 {
    margin-top: 12.5rem !important;
    margin-bottom: 12.5rem !important;
  }
  .my-md-22 {
    margin-top: 15rem !important;
    margin-bottom: 15rem !important;
  }
  .my-md-23 {
    margin-top: 17.5rem !important;
    margin-bottom: 17.5rem !important;
  }
  .my-md-24 {
    margin-top: 20rem !important;
    margin-bottom: 20rem !important;
  }
  .my-md-25 {
    margin-top: 22.5rem !important;
    margin-bottom: 22.5rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 0.75rem !important;
  }
  .mt-md-4 {
    margin-top: 1rem !important;
  }
  .mt-md-5 {
    margin-top: 1.25rem !important;
  }
  .mt-md-6 {
    margin-top: 1.5rem !important;
  }
  .mt-md-7 {
    margin-top: 1.75rem !important;
  }
  .mt-md-8 {
    margin-top: 2rem !important;
  }
  .mt-md-9 {
    margin-top: 2.25rem !important;
  }
  .mt-md-10 {
    margin-top: 2.5rem !important;
  }
  .mt-md-11 {
    margin-top: 3rem !important;
  }
  .mt-md-12 {
    margin-top: 3.5rem !important;
  }
  .mt-md-13 {
    margin-top: 4rem !important;
  }
  .mt-md-14 {
    margin-top: 4.5rem !important;
  }
  .mt-md-15 {
    margin-top: 5rem !important;
  }
  .mt-md-16 {
    margin-top: 6rem !important;
  }
  .mt-md-17 {
    margin-top: 7rem !important;
  }
  .mt-md-18 {
    margin-top: 8rem !important;
  }
  .mt-md-19 {
    margin-top: 9rem !important;
  }
  .mt-md-20 {
    margin-top: 10rem !important;
  }
  .mt-md-21 {
    margin-top: 12.5rem !important;
  }
  .mt-md-22 {
    margin-top: 15rem !important;
  }
  .mt-md-23 {
    margin-top: 17.5rem !important;
  }
  .mt-md-24 {
    margin-top: 20rem !important;
  }
  .mt-md-25 {
    margin-top: 22.5rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 0.75rem !important;
  }
  .me-md-4 {
    margin-right: 1rem !important;
  }
  .me-md-5 {
    margin-right: 1.25rem !important;
  }
  .me-md-6 {
    margin-right: 1.5rem !important;
  }
  .me-md-7 {
    margin-right: 1.75rem !important;
  }
  .me-md-8 {
    margin-right: 2rem !important;
  }
  .me-md-9 {
    margin-right: 2.25rem !important;
  }
  .me-md-10 {
    margin-right: 2.5rem !important;
  }
  .me-md-11 {
    margin-right: 3rem !important;
  }
  .me-md-12 {
    margin-right: 3.5rem !important;
  }
  .me-md-13 {
    margin-right: 4rem !important;
  }
  .me-md-14 {
    margin-right: 4.5rem !important;
  }
  .me-md-15 {
    margin-right: 5rem !important;
  }
  .me-md-16 {
    margin-right: 6rem !important;
  }
  .me-md-17 {
    margin-right: 7rem !important;
  }
  .me-md-18 {
    margin-right: 8rem !important;
  }
  .me-md-19 {
    margin-right: 9rem !important;
  }
  .me-md-20 {
    margin-right: 10rem !important;
  }
  .me-md-21 {
    margin-right: 12.5rem !important;
  }
  .me-md-22 {
    margin-right: 15rem !important;
  }
  .me-md-23 {
    margin-right: 17.5rem !important;
  }
  .me-md-24 {
    margin-right: 20rem !important;
  }
  .me-md-25 {
    margin-right: 22.5rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 0.75rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1rem !important;
  }
  .mb-md-5 {
    margin-bottom: 1.25rem !important;
  }
  .mb-md-6 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-7 {
    margin-bottom: 1.75rem !important;
  }
  .mb-md-8 {
    margin-bottom: 2rem !important;
  }
  .mb-md-9 {
    margin-bottom: 2.25rem !important;
  }
  .mb-md-10 {
    margin-bottom: 2.5rem !important;
  }
  .mb-md-11 {
    margin-bottom: 3rem !important;
  }
  .mb-md-12 {
    margin-bottom: 3.5rem !important;
  }
  .mb-md-13 {
    margin-bottom: 4rem !important;
  }
  .mb-md-14 {
    margin-bottom: 4.5rem !important;
  }
  .mb-md-15 {
    margin-bottom: 5rem !important;
  }
  .mb-md-16 {
    margin-bottom: 6rem !important;
  }
  .mb-md-17 {
    margin-bottom: 7rem !important;
  }
  .mb-md-18 {
    margin-bottom: 8rem !important;
  }
  .mb-md-19 {
    margin-bottom: 9rem !important;
  }
  .mb-md-20 {
    margin-bottom: 10rem !important;
  }
  .mb-md-21 {
    margin-bottom: 12.5rem !important;
  }
  .mb-md-22 {
    margin-bottom: 15rem !important;
  }
  .mb-md-23 {
    margin-bottom: 17.5rem !important;
  }
  .mb-md-24 {
    margin-bottom: 20rem !important;
  }
  .mb-md-25 {
    margin-bottom: 22.5rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 0.75rem !important;
  }
  .ms-md-4 {
    margin-left: 1rem !important;
  }
  .ms-md-5 {
    margin-left: 1.25rem !important;
  }
  .ms-md-6 {
    margin-left: 1.5rem !important;
  }
  .ms-md-7 {
    margin-left: 1.75rem !important;
  }
  .ms-md-8 {
    margin-left: 2rem !important;
  }
  .ms-md-9 {
    margin-left: 2.25rem !important;
  }
  .ms-md-10 {
    margin-left: 2.5rem !important;
  }
  .ms-md-11 {
    margin-left: 3rem !important;
  }
  .ms-md-12 {
    margin-left: 3.5rem !important;
  }
  .ms-md-13 {
    margin-left: 4rem !important;
  }
  .ms-md-14 {
    margin-left: 4.5rem !important;
  }
  .ms-md-15 {
    margin-left: 5rem !important;
  }
  .ms-md-16 {
    margin-left: 6rem !important;
  }
  .ms-md-17 {
    margin-left: 7rem !important;
  }
  .ms-md-18 {
    margin-left: 8rem !important;
  }
  .ms-md-19 {
    margin-left: 9rem !important;
  }
  .ms-md-20 {
    margin-left: 10rem !important;
  }
  .ms-md-21 {
    margin-left: 12.5rem !important;
  }
  .ms-md-22 {
    margin-left: 15rem !important;
  }
  .ms-md-23 {
    margin-left: 17.5rem !important;
  }
  .ms-md-24 {
    margin-left: 20rem !important;
  }
  .ms-md-25 {
    margin-left: 22.5rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -0.75rem !important;
  }
  .m-md-n4 {
    margin: -1rem !important;
  }
  .m-md-n5 {
    margin: -1.25rem !important;
  }
  .m-md-n6 {
    margin: -1.5rem !important;
  }
  .m-md-n7 {
    margin: -1.75rem !important;
  }
  .m-md-n8 {
    margin: -2rem !important;
  }
  .m-md-n9 {
    margin: -2.25rem !important;
  }
  .m-md-n10 {
    margin: -2.5rem !important;
  }
  .m-md-n11 {
    margin: -3rem !important;
  }
  .m-md-n12 {
    margin: -3.5rem !important;
  }
  .m-md-n13 {
    margin: -4rem !important;
  }
  .m-md-n14 {
    margin: -4.5rem !important;
  }
  .m-md-n15 {
    margin: -5rem !important;
  }
  .m-md-n16 {
    margin: -6rem !important;
  }
  .m-md-n17 {
    margin: -7rem !important;
  }
  .m-md-n18 {
    margin: -8rem !important;
  }
  .m-md-n19 {
    margin: -9rem !important;
  }
  .m-md-n20 {
    margin: -10rem !important;
  }
  .m-md-n21 {
    margin: -12.5rem !important;
  }
  .m-md-n22 {
    margin: -15rem !important;
  }
  .m-md-n23 {
    margin: -17.5rem !important;
  }
  .m-md-n24 {
    margin: -20rem !important;
  }
  .m-md-n25 {
    margin: -22.5rem !important;
  }
  .mx-md-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-md-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-md-n3 {
    margin-right: -0.75rem !important;
    margin-left: -0.75rem !important;
  }
  .mx-md-n4 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-md-n5 {
    margin-right: -1.25rem !important;
    margin-left: -1.25rem !important;
  }
  .mx-md-n6 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-md-n7 {
    margin-right: -1.75rem !important;
    margin-left: -1.75rem !important;
  }
  .mx-md-n8 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-md-n9 {
    margin-right: -2.25rem !important;
    margin-left: -2.25rem !important;
  }
  .mx-md-n10 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-md-n11 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-md-n12 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-md-n13 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-md-n14 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-md-n15 {
    margin-right: -5rem !important;
    margin-left: -5rem !important;
  }
  .mx-md-n16 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-md-n17 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-md-n18 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-md-n19 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-md-n20 {
    margin-right: -10rem !important;
    margin-left: -10rem !important;
  }
  .mx-md-n21 {
    margin-right: -12.5rem !important;
    margin-left: -12.5rem !important;
  }
  .mx-md-n22 {
    margin-right: -15rem !important;
    margin-left: -15rem !important;
  }
  .mx-md-n23 {
    margin-right: -17.5rem !important;
    margin-left: -17.5rem !important;
  }
  .mx-md-n24 {
    margin-right: -20rem !important;
    margin-left: -20rem !important;
  }
  .mx-md-n25 {
    margin-right: -22.5rem !important;
    margin-left: -22.5rem !important;
  }
  .my-md-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-md-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-md-n3 {
    margin-top: -0.75rem !important;
    margin-bottom: -0.75rem !important;
  }
  .my-md-n4 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-md-n5 {
    margin-top: -1.25rem !important;
    margin-bottom: -1.25rem !important;
  }
  .my-md-n6 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-md-n7 {
    margin-top: -1.75rem !important;
    margin-bottom: -1.75rem !important;
  }
  .my-md-n8 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-md-n9 {
    margin-top: -2.25rem !important;
    margin-bottom: -2.25rem !important;
  }
  .my-md-n10 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-md-n11 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-md-n12 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-md-n13 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-md-n14 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-md-n15 {
    margin-top: -5rem !important;
    margin-bottom: -5rem !important;
  }
  .my-md-n16 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-md-n17 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-md-n18 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-md-n19 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-md-n20 {
    margin-top: -10rem !important;
    margin-bottom: -10rem !important;
  }
  .my-md-n21 {
    margin-top: -12.5rem !important;
    margin-bottom: -12.5rem !important;
  }
  .my-md-n22 {
    margin-top: -15rem !important;
    margin-bottom: -15rem !important;
  }
  .my-md-n23 {
    margin-top: -17.5rem !important;
    margin-bottom: -17.5rem !important;
  }
  .my-md-n24 {
    margin-top: -20rem !important;
    margin-bottom: -20rem !important;
  }
  .my-md-n25 {
    margin-top: -22.5rem !important;
    margin-bottom: -22.5rem !important;
  }
  .mt-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-md-n3 {
    margin-top: -0.75rem !important;
  }
  .mt-md-n4 {
    margin-top: -1rem !important;
  }
  .mt-md-n5 {
    margin-top: -1.25rem !important;
  }
  .mt-md-n6 {
    margin-top: -1.5rem !important;
  }
  .mt-md-n7 {
    margin-top: -1.75rem !important;
  }
  .mt-md-n8 {
    margin-top: -2rem !important;
  }
  .mt-md-n9 {
    margin-top: -2.25rem !important;
  }
  .mt-md-n10 {
    margin-top: -2.5rem !important;
  }
  .mt-md-n11 {
    margin-top: -3rem !important;
  }
  .mt-md-n12 {
    margin-top: -3.5rem !important;
  }
  .mt-md-n13 {
    margin-top: -4rem !important;
  }
  .mt-md-n14 {
    margin-top: -4.5rem !important;
  }
  .mt-md-n15 {
    margin-top: -5rem !important;
  }
  .mt-md-n16 {
    margin-top: -6rem !important;
  }
  .mt-md-n17 {
    margin-top: -7rem !important;
  }
  .mt-md-n18 {
    margin-top: -8rem !important;
  }
  .mt-md-n19 {
    margin-top: -9rem !important;
  }
  .mt-md-n20 {
    margin-top: -10rem !important;
  }
  .mt-md-n21 {
    margin-top: -12.5rem !important;
  }
  .mt-md-n22 {
    margin-top: -15rem !important;
  }
  .mt-md-n23 {
    margin-top: -17.5rem !important;
  }
  .mt-md-n24 {
    margin-top: -20rem !important;
  }
  .mt-md-n25 {
    margin-top: -22.5rem !important;
  }
  .me-md-n1 {
    margin-right: -0.25rem !important;
  }
  .me-md-n2 {
    margin-right: -0.5rem !important;
  }
  .me-md-n3 {
    margin-right: -0.75rem !important;
  }
  .me-md-n4 {
    margin-right: -1rem !important;
  }
  .me-md-n5 {
    margin-right: -1.25rem !important;
  }
  .me-md-n6 {
    margin-right: -1.5rem !important;
  }
  .me-md-n7 {
    margin-right: -1.75rem !important;
  }
  .me-md-n8 {
    margin-right: -2rem !important;
  }
  .me-md-n9 {
    margin-right: -2.25rem !important;
  }
  .me-md-n10 {
    margin-right: -2.5rem !important;
  }
  .me-md-n11 {
    margin-right: -3rem !important;
  }
  .me-md-n12 {
    margin-right: -3.5rem !important;
  }
  .me-md-n13 {
    margin-right: -4rem !important;
  }
  .me-md-n14 {
    margin-right: -4.5rem !important;
  }
  .me-md-n15 {
    margin-right: -5rem !important;
  }
  .me-md-n16 {
    margin-right: -6rem !important;
  }
  .me-md-n17 {
    margin-right: -7rem !important;
  }
  .me-md-n18 {
    margin-right: -8rem !important;
  }
  .me-md-n19 {
    margin-right: -9rem !important;
  }
  .me-md-n20 {
    margin-right: -10rem !important;
  }
  .me-md-n21 {
    margin-right: -12.5rem !important;
  }
  .me-md-n22 {
    margin-right: -15rem !important;
  }
  .me-md-n23 {
    margin-right: -17.5rem !important;
  }
  .me-md-n24 {
    margin-right: -20rem !important;
  }
  .me-md-n25 {
    margin-right: -22.5rem !important;
  }
  .mb-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-md-n3 {
    margin-bottom: -0.75rem !important;
  }
  .mb-md-n4 {
    margin-bottom: -1rem !important;
  }
  .mb-md-n5 {
    margin-bottom: -1.25rem !important;
  }
  .mb-md-n6 {
    margin-bottom: -1.5rem !important;
  }
  .mb-md-n7 {
    margin-bottom: -1.75rem !important;
  }
  .mb-md-n8 {
    margin-bottom: -2rem !important;
  }
  .mb-md-n9 {
    margin-bottom: -2.25rem !important;
  }
  .mb-md-n10 {
    margin-bottom: -2.5rem !important;
  }
  .mb-md-n11 {
    margin-bottom: -3rem !important;
  }
  .mb-md-n12 {
    margin-bottom: -3.5rem !important;
  }
  .mb-md-n13 {
    margin-bottom: -4rem !important;
  }
  .mb-md-n14 {
    margin-bottom: -4.5rem !important;
  }
  .mb-md-n15 {
    margin-bottom: -5rem !important;
  }
  .mb-md-n16 {
    margin-bottom: -6rem !important;
  }
  .mb-md-n17 {
    margin-bottom: -7rem !important;
  }
  .mb-md-n18 {
    margin-bottom: -8rem !important;
  }
  .mb-md-n19 {
    margin-bottom: -9rem !important;
  }
  .mb-md-n20 {
    margin-bottom: -10rem !important;
  }
  .mb-md-n21 {
    margin-bottom: -12.5rem !important;
  }
  .mb-md-n22 {
    margin-bottom: -15rem !important;
  }
  .mb-md-n23 {
    margin-bottom: -17.5rem !important;
  }
  .mb-md-n24 {
    margin-bottom: -20rem !important;
  }
  .mb-md-n25 {
    margin-bottom: -22.5rem !important;
  }
  .ms-md-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-md-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-md-n3 {
    margin-left: -0.75rem !important;
  }
  .ms-md-n4 {
    margin-left: -1rem !important;
  }
  .ms-md-n5 {
    margin-left: -1.25rem !important;
  }
  .ms-md-n6 {
    margin-left: -1.5rem !important;
  }
  .ms-md-n7 {
    margin-left: -1.75rem !important;
  }
  .ms-md-n8 {
    margin-left: -2rem !important;
  }
  .ms-md-n9 {
    margin-left: -2.25rem !important;
  }
  .ms-md-n10 {
    margin-left: -2.5rem !important;
  }
  .ms-md-n11 {
    margin-left: -3rem !important;
  }
  .ms-md-n12 {
    margin-left: -3.5rem !important;
  }
  .ms-md-n13 {
    margin-left: -4rem !important;
  }
  .ms-md-n14 {
    margin-left: -4.5rem !important;
  }
  .ms-md-n15 {
    margin-left: -5rem !important;
  }
  .ms-md-n16 {
    margin-left: -6rem !important;
  }
  .ms-md-n17 {
    margin-left: -7rem !important;
  }
  .ms-md-n18 {
    margin-left: -8rem !important;
  }
  .ms-md-n19 {
    margin-left: -9rem !important;
  }
  .ms-md-n20 {
    margin-left: -10rem !important;
  }
  .ms-md-n21 {
    margin-left: -12.5rem !important;
  }
  .ms-md-n22 {
    margin-left: -15rem !important;
  }
  .ms-md-n23 {
    margin-left: -17.5rem !important;
  }
  .ms-md-n24 {
    margin-left: -20rem !important;
  }
  .ms-md-n25 {
    margin-left: -22.5rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 0.75rem !important;
  }
  .p-md-4 {
    padding: 1rem !important;
  }
  .p-md-5 {
    padding: 1.25rem !important;
  }
  .p-md-6 {
    padding: 1.5rem !important;
  }
  .p-md-7 {
    padding: 1.75rem !important;
  }
  .p-md-8 {
    padding: 2rem !important;
  }
  .p-md-9 {
    padding: 2.25rem !important;
  }
  .p-md-10 {
    padding: 2.5rem !important;
  }
  .p-md-11 {
    padding: 3rem !important;
  }
  .p-md-12 {
    padding: 3.5rem !important;
  }
  .p-md-13 {
    padding: 4rem !important;
  }
  .p-md-14 {
    padding: 4.5rem !important;
  }
  .p-md-15 {
    padding: 5rem !important;
  }
  .p-md-16 {
    padding: 6rem !important;
  }
  .p-md-17 {
    padding: 7rem !important;
  }
  .p-md-18 {
    padding: 8rem !important;
  }
  .p-md-19 {
    padding: 9rem !important;
  }
  .p-md-20 {
    padding: 10rem !important;
  }
  .p-md-21 {
    padding: 12.5rem !important;
  }
  .p-md-22 {
    padding: 15rem !important;
  }
  .p-md-23 {
    padding: 17.5rem !important;
  }
  .p-md-24 {
    padding: 20rem !important;
  }
  .p-md-25 {
    padding: 22.5rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 0.75rem !important;
    padding-left: 0.75rem !important;
  }
  .px-md-4 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-5 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important;
  }
  .px-md-6 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-7 {
    padding-right: 1.75rem !important;
    padding-left: 1.75rem !important;
  }
  .px-md-8 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-md-9 {
    padding-right: 2.25rem !important;
    padding-left: 2.25rem !important;
  }
  .px-md-10 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-md-11 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-md-12 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-md-13 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-md-14 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-md-15 {
    padding-right: 5rem !important;
    padding-left: 5rem !important;
  }
  .px-md-16 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-md-17 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-md-18 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-md-19 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-md-20 {
    padding-right: 10rem !important;
    padding-left: 10rem !important;
  }
  .px-md-21 {
    padding-right: 12.5rem !important;
    padding-left: 12.5rem !important;
  }
  .px-md-22 {
    padding-right: 15rem !important;
    padding-left: 15rem !important;
  }
  .px-md-23 {
    padding-right: 17.5rem !important;
    padding-left: 17.5rem !important;
  }
  .px-md-24 {
    padding-right: 20rem !important;
    padding-left: 20rem !important;
  }
  .px-md-25 {
    padding-right: 22.5rem !important;
    padding-left: 22.5rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 0.75rem !important;
    padding-bottom: 0.75rem !important;
  }
  .py-md-4 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-5 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .py-md-6 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-7 {
    padding-top: 1.75rem !important;
    padding-bottom: 1.75rem !important;
  }
  .py-md-8 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-md-9 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important;
  }
  .py-md-10 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-md-11 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-md-12 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-md-13 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-md-14 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-md-15 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important;
  }
  .py-md-16 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-md-17 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-md-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-md-19 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-md-20 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }
  .py-md-21 {
    padding-top: 12.5rem !important;
    padding-bottom: 12.5rem !important;
  }
  .py-md-22 {
    padding-top: 15rem !important;
    padding-bottom: 15rem !important;
  }
  .py-md-23 {
    padding-top: 17.5rem !important;
    padding-bottom: 17.5rem !important;
  }
  .py-md-24 {
    padding-top: 20rem !important;
    padding-bottom: 20rem !important;
  }
  .py-md-25 {
    padding-top: 22.5rem !important;
    padding-bottom: 22.5rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 0.75rem !important;
  }
  .pt-md-4 {
    padding-top: 1rem !important;
  }
  .pt-md-5 {
    padding-top: 1.25rem !important;
  }
  .pt-md-6 {
    padding-top: 1.5rem !important;
  }
  .pt-md-7 {
    padding-top: 1.75rem !important;
  }
  .pt-md-8 {
    padding-top: 2rem !important;
  }
  .pt-md-9 {
    padding-top: 2.25rem !important;
  }
  .pt-md-10 {
    padding-top: 2.5rem !important;
  }
  .pt-md-11 {
    padding-top: 3rem !important;
  }
  .pt-md-12 {
    padding-top: 3.5rem !important;
  }
  .pt-md-13 {
    padding-top: 4rem !important;
  }
  .pt-md-14 {
    padding-top: 4.5rem !important;
  }
  .pt-md-15 {
    padding-top: 5rem !important;
  }
  .pt-md-16 {
    padding-top: 6rem !important;
  }
  .pt-md-17 {
    padding-top: 7rem !important;
  }
  .pt-md-18 {
    padding-top: 8rem !important;
  }
  .pt-md-19 {
    padding-top: 9rem !important;
  }
  .pt-md-20 {
    padding-top: 10rem !important;
  }
  .pt-md-21 {
    padding-top: 12.5rem !important;
  }
  .pt-md-22 {
    padding-top: 15rem !important;
  }
  .pt-md-23 {
    padding-top: 17.5rem !important;
  }
  .pt-md-24 {
    padding-top: 20rem !important;
  }
  .pt-md-25 {
    padding-top: 22.5rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 0.75rem !important;
  }
  .pe-md-4 {
    padding-right: 1rem !important;
  }
  .pe-md-5 {
    padding-right: 1.25rem !important;
  }
  .pe-md-6 {
    padding-right: 1.5rem !important;
  }
  .pe-md-7 {
    padding-right: 1.75rem !important;
  }
  .pe-md-8 {
    padding-right: 2rem !important;
  }
  .pe-md-9 {
    padding-right: 2.25rem !important;
  }
  .pe-md-10 {
    padding-right: 2.5rem !important;
  }
  .pe-md-11 {
    padding-right: 3rem !important;
  }
  .pe-md-12 {
    padding-right: 3.5rem !important;
  }
  .pe-md-13 {
    padding-right: 4rem !important;
  }
  .pe-md-14 {
    padding-right: 4.5rem !important;
  }
  .pe-md-15 {
    padding-right: 5rem !important;
  }
  .pe-md-16 {
    padding-right: 6rem !important;
  }
  .pe-md-17 {
    padding-right: 7rem !important;
  }
  .pe-md-18 {
    padding-right: 8rem !important;
  }
  .pe-md-19 {
    padding-right: 9rem !important;
  }
  .pe-md-20 {
    padding-right: 10rem !important;
  }
  .pe-md-21 {
    padding-right: 12.5rem !important;
  }
  .pe-md-22 {
    padding-right: 15rem !important;
  }
  .pe-md-23 {
    padding-right: 17.5rem !important;
  }
  .pe-md-24 {
    padding-right: 20rem !important;
  }
  .pe-md-25 {
    padding-right: 22.5rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 0.75rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1rem !important;
  }
  .pb-md-5 {
    padding-bottom: 1.25rem !important;
  }
  .pb-md-6 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-7 {
    padding-bottom: 1.75rem !important;
  }
  .pb-md-8 {
    padding-bottom: 2rem !important;
  }
  .pb-md-9 {
    padding-bottom: 2.25rem !important;
  }
  .pb-md-10 {
    padding-bottom: 2.5rem !important;
  }
  .pb-md-11 {
    padding-bottom: 3rem !important;
  }
  .pb-md-12 {
    padding-bottom: 3.5rem !important;
  }
  .pb-md-13 {
    padding-bottom: 4rem !important;
  }
  .pb-md-14 {
    padding-bottom: 4.5rem !important;
  }
  .pb-md-15 {
    padding-bottom: 5rem !important;
  }
  .pb-md-16 {
    padding-bottom: 6rem !important;
  }
  .pb-md-17 {
    padding-bottom: 7rem !important;
  }
  .pb-md-18 {
    padding-bottom: 8rem !important;
  }
  .pb-md-19 {
    padding-bottom: 9rem !important;
  }
  .pb-md-20 {
    padding-bottom: 10rem !important;
  }
  .pb-md-21 {
    padding-bottom: 12.5rem !important;
  }
  .pb-md-22 {
    padding-bottom: 15rem !important;
  }
  .pb-md-23 {
    padding-bottom: 17.5rem !important;
  }
  .pb-md-24 {
    padding-bottom: 20rem !important;
  }
  .pb-md-25 {
    padding-bottom: 22.5rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 0.75rem !important;
  }
  .ps-md-4 {
    padding-left: 1rem !important;
  }
  .ps-md-5 {
    padding-left: 1.25rem !important;
  }
  .ps-md-6 {
    padding-left: 1.5rem !important;
  }
  .ps-md-7 {
    padding-left: 1.75rem !important;
  }
  .ps-md-8 {
    padding-left: 2rem !important;
  }
  .ps-md-9 {
    padding-left: 2.25rem !important;
  }
  .ps-md-10 {
    padding-left: 2.5rem !important;
  }
  .ps-md-11 {
    padding-left: 3rem !important;
  }
  .ps-md-12 {
    padding-left: 3.5rem !important;
  }
  .ps-md-13 {
    padding-left: 4rem !important;
  }
  .ps-md-14 {
    padding-left: 4.5rem !important;
  }
  .ps-md-15 {
    padding-left: 5rem !important;
  }
  .ps-md-16 {
    padding-left: 6rem !important;
  }
  .ps-md-17 {
    padding-left: 7rem !important;
  }
  .ps-md-18 {
    padding-left: 8rem !important;
  }
  .ps-md-19 {
    padding-left: 9rem !important;
  }
  .ps-md-20 {
    padding-left: 10rem !important;
  }
  .ps-md-21 {
    padding-left: 12.5rem !important;
  }
  .ps-md-22 {
    padding-left: 15rem !important;
  }
  .ps-md-23 {
    padding-left: 17.5rem !important;
  }
  .ps-md-24 {
    padding-left: 20rem !important;
  }
  .ps-md-25 {
    padding-left: 22.5rem !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 0.75rem !important;
  }
  .gap-md-4 {
    gap: 1rem !important;
  }
  .gap-md-5 {
    gap: 1.25rem !important;
  }
  .gap-md-6 {
    gap: 1.5rem !important;
  }
  .gap-md-7 {
    gap: 1.75rem !important;
  }
  .gap-md-8 {
    gap: 2rem !important;
  }
  .gap-md-9 {
    gap: 2.25rem !important;
  }
  .gap-md-10 {
    gap: 2.5rem !important;
  }
  .gap-md-11 {
    gap: 3rem !important;
  }
  .gap-md-12 {
    gap: 3.5rem !important;
  }
  .gap-md-13 {
    gap: 4rem !important;
  }
  .gap-md-14 {
    gap: 4.5rem !important;
  }
  .gap-md-15 {
    gap: 5rem !important;
  }
  .gap-md-16 {
    gap: 6rem !important;
  }
  .gap-md-17 {
    gap: 7rem !important;
  }
  .gap-md-18 {
    gap: 8rem !important;
  }
  .gap-md-19 {
    gap: 9rem !important;
  }
  .gap-md-20 {
    gap: 10rem !important;
  }
  .gap-md-21 {
    gap: 12.5rem !important;
  }
  .gap-md-22 {
    gap: 15rem !important;
  }
  .gap-md-23 {
    gap: 17.5rem !important;
  }
  .gap-md-24 {
    gap: 20rem !important;
  }
  .gap-md-25 {
    gap: 22.5rem !important;
  }
  .row-gap-md-0 {
    row-gap: 0 !important;
  }
  .row-gap-md-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-md-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-md-3 {
    row-gap: 0.75rem !important;
  }
  .row-gap-md-4 {
    row-gap: 1rem !important;
  }
  .row-gap-md-5 {
    row-gap: 1.25rem !important;
  }
  .row-gap-md-6 {
    row-gap: 1.5rem !important;
  }
  .row-gap-md-7 {
    row-gap: 1.75rem !important;
  }
  .row-gap-md-8 {
    row-gap: 2rem !important;
  }
  .row-gap-md-9 {
    row-gap: 2.25rem !important;
  }
  .row-gap-md-10 {
    row-gap: 2.5rem !important;
  }
  .row-gap-md-11 {
    row-gap: 3rem !important;
  }
  .row-gap-md-12 {
    row-gap: 3.5rem !important;
  }
  .row-gap-md-13 {
    row-gap: 4rem !important;
  }
  .row-gap-md-14 {
    row-gap: 4.5rem !important;
  }
  .row-gap-md-15 {
    row-gap: 5rem !important;
  }
  .row-gap-md-16 {
    row-gap: 6rem !important;
  }
  .row-gap-md-17 {
    row-gap: 7rem !important;
  }
  .row-gap-md-18 {
    row-gap: 8rem !important;
  }
  .row-gap-md-19 {
    row-gap: 9rem !important;
  }
  .row-gap-md-20 {
    row-gap: 10rem !important;
  }
  .row-gap-md-21 {
    row-gap: 12.5rem !important;
  }
  .row-gap-md-22 {
    row-gap: 15rem !important;
  }
  .row-gap-md-23 {
    row-gap: 17.5rem !important;
  }
  .row-gap-md-24 {
    row-gap: 20rem !important;
  }
  .row-gap-md-25 {
    row-gap: 22.5rem !important;
  }
  .column-gap-md-0 {
    -moz-column-gap: 0 !important;
    column-gap: 0 !important;
  }
  .column-gap-md-1 {
    -moz-column-gap: 0.25rem !important;
    column-gap: 0.25rem !important;
  }
  .column-gap-md-2 {
    -moz-column-gap: 0.5rem !important;
    column-gap: 0.5rem !important;
  }
  .column-gap-md-3 {
    -moz-column-gap: 0.75rem !important;
    column-gap: 0.75rem !important;
  }
  .column-gap-md-4 {
    -moz-column-gap: 1rem !important;
    column-gap: 1rem !important;
  }
  .column-gap-md-5 {
    -moz-column-gap: 1.25rem !important;
    column-gap: 1.25rem !important;
  }
  .column-gap-md-6 {
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important;
  }
  .column-gap-md-7 {
    -moz-column-gap: 1.75rem !important;
    column-gap: 1.75rem !important;
  }
  .column-gap-md-8 {
    -moz-column-gap: 2rem !important;
    column-gap: 2rem !important;
  }
  .column-gap-md-9 {
    -moz-column-gap: 2.25rem !important;
    column-gap: 2.25rem !important;
  }
  .column-gap-md-10 {
    -moz-column-gap: 2.5rem !important;
    column-gap: 2.5rem !important;
  }
  .column-gap-md-11 {
    -moz-column-gap: 3rem !important;
    column-gap: 3rem !important;
  }
  .column-gap-md-12 {
    -moz-column-gap: 3.5rem !important;
    column-gap: 3.5rem !important;
  }
  .column-gap-md-13 {
    -moz-column-gap: 4rem !important;
    column-gap: 4rem !important;
  }
  .column-gap-md-14 {
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important;
  }
  .column-gap-md-15 {
    -moz-column-gap: 5rem !important;
    column-gap: 5rem !important;
  }
  .column-gap-md-16 {
    -moz-column-gap: 6rem !important;
    column-gap: 6rem !important;
  }
  .column-gap-md-17 {
    -moz-column-gap: 7rem !important;
    column-gap: 7rem !important;
  }
  .column-gap-md-18 {
    -moz-column-gap: 8rem !important;
    column-gap: 8rem !important;
  }
  .column-gap-md-19 {
    -moz-column-gap: 9rem !important;
    column-gap: 9rem !important;
  }
  .column-gap-md-20 {
    -moz-column-gap: 10rem !important;
    column-gap: 10rem !important;
  }
  .column-gap-md-21 {
    -moz-column-gap: 12.5rem !important;
    column-gap: 12.5rem !important;
  }
  .column-gap-md-22 {
    -moz-column-gap: 15rem !important;
    column-gap: 15rem !important;
  }
  .column-gap-md-23 {
    -moz-column-gap: 17.5rem !important;
    column-gap: 17.5rem !important;
  }
  .column-gap-md-24 {
    -moz-column-gap: 20rem !important;
    column-gap: 20rem !important;
  }
  .column-gap-md-25 {
    -moz-column-gap: 22.5rem !important;
    column-gap: 22.5rem !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}
@media (min-width: 992px) {
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .object-fit-lg-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important;
  }
  .object-fit-lg-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important;
  }
  .object-fit-lg-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important;
  }
  .object-fit-lg-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important;
  }
  .object-fit-lg-none {
    -o-object-fit: none !important;
    object-fit: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-inline-grid {
    display: inline-grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .flex-lg-fill {
    flex: 1 1 auto !important;
  }
  .flex-lg-row {
    flex-direction: row !important;
  }
  .flex-lg-column {
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-lg-start {
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    justify-content: center !important;
  }
  .justify-content-lg-between {
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    align-items: center !important;
  }
  .align-items-lg-baseline {
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    align-items: stretch !important;
  }
  .align-content-lg-start {
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    align-content: center !important;
  }
  .align-content-lg-between {
    align-content: space-between !important;
  }
  .align-content-lg-around {
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    align-self: auto !important;
  }
  .align-self-lg-start {
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    align-self: center !important;
  }
  .align-self-lg-baseline {
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    align-self: stretch !important;
  }
  .order-lg-first {
    order: -1 !important;
  }
  .order-lg-0 {
    order: 0 !important;
  }
  .order-lg-1 {
    order: 1 !important;
  }
  .order-lg-2 {
    order: 2 !important;
  }
  .order-lg-3 {
    order: 3 !important;
  }
  .order-lg-4 {
    order: 4 !important;
  }
  .order-lg-5 {
    order: 5 !important;
  }
  .order-lg-last {
    order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 0.75rem !important;
  }
  .m-lg-4 {
    margin: 1rem !important;
  }
  .m-lg-5 {
    margin: 1.25rem !important;
  }
  .m-lg-6 {
    margin: 1.5rem !important;
  }
  .m-lg-7 {
    margin: 1.75rem !important;
  }
  .m-lg-8 {
    margin: 2rem !important;
  }
  .m-lg-9 {
    margin: 2.25rem !important;
  }
  .m-lg-10 {
    margin: 2.5rem !important;
  }
  .m-lg-11 {
    margin: 3rem !important;
  }
  .m-lg-12 {
    margin: 3.5rem !important;
  }
  .m-lg-13 {
    margin: 4rem !important;
  }
  .m-lg-14 {
    margin: 4.5rem !important;
  }
  .m-lg-15 {
    margin: 5rem !important;
  }
  .m-lg-16 {
    margin: 6rem !important;
  }
  .m-lg-17 {
    margin: 7rem !important;
  }
  .m-lg-18 {
    margin: 8rem !important;
  }
  .m-lg-19 {
    margin: 9rem !important;
  }
  .m-lg-20 {
    margin: 10rem !important;
  }
  .m-lg-21 {
    margin: 12.5rem !important;
  }
  .m-lg-22 {
    margin: 15rem !important;
  }
  .m-lg-23 {
    margin: 17.5rem !important;
  }
  .m-lg-24 {
    margin: 20rem !important;
  }
  .m-lg-25 {
    margin: 22.5rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 0.75rem !important;
    margin-left: 0.75rem !important;
  }
  .mx-lg-4 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-5 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important;
  }
  .mx-lg-6 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-7 {
    margin-right: 1.75rem !important;
    margin-left: 1.75rem !important;
  }
  .mx-lg-8 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-lg-9 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important;
  }
  .mx-lg-10 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-lg-11 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-12 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-lg-13 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-lg-14 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-lg-15 {
    margin-right: 5rem !important;
    margin-left: 5rem !important;
  }
  .mx-lg-16 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-lg-17 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-lg-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-lg-19 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-lg-20 {
    margin-right: 10rem !important;
    margin-left: 10rem !important;
  }
  .mx-lg-21 {
    margin-right: 12.5rem !important;
    margin-left: 12.5rem !important;
  }
  .mx-lg-22 {
    margin-right: 15rem !important;
    margin-left: 15rem !important;
  }
  .mx-lg-23 {
    margin-right: 17.5rem !important;
    margin-left: 17.5rem !important;
  }
  .mx-lg-24 {
    margin-right: 20rem !important;
    margin-left: 20rem !important;
  }
  .mx-lg-25 {
    margin-right: 22.5rem !important;
    margin-left: 22.5rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 0.75rem !important;
    margin-bottom: 0.75rem !important;
  }
  .my-lg-4 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-5 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important;
  }
  .my-lg-6 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-7 {
    margin-top: 1.75rem !important;
    margin-bottom: 1.75rem !important;
  }
  .my-lg-8 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-lg-9 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important;
  }
  .my-lg-10 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-lg-11 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-12 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-lg-13 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-lg-14 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-lg-15 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important;
  }
  .my-lg-16 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-lg-17 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-lg-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-lg-19 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-lg-20 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }
  .my-lg-21 {
    margin-top: 12.5rem !important;
    margin-bottom: 12.5rem !important;
  }
  .my-lg-22 {
    margin-top: 15rem !important;
    margin-bottom: 15rem !important;
  }
  .my-lg-23 {
    margin-top: 17.5rem !important;
    margin-bottom: 17.5rem !important;
  }
  .my-lg-24 {
    margin-top: 20rem !important;
    margin-bottom: 20rem !important;
  }
  .my-lg-25 {
    margin-top: 22.5rem !important;
    margin-bottom: 22.5rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 0.75rem !important;
  }
  .mt-lg-4 {
    margin-top: 1rem !important;
  }
  .mt-lg-5 {
    margin-top: 1.25rem !important;
  }
  .mt-lg-6 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-7 {
    margin-top: 1.75rem !important;
  }
  .mt-lg-8 {
    margin-top: 2rem !important;
  }
  .mt-lg-9 {
    margin-top: 2.25rem !important;
  }
  .mt-lg-10 {
    margin-top: 2.5rem !important;
  }
  .mt-lg-11 {
    margin-top: 3rem !important;
  }
  .mt-lg-12 {
    margin-top: 3.5rem !important;
  }
  .mt-lg-13 {
    margin-top: 4rem !important;
  }
  .mt-lg-14 {
    margin-top: 4.5rem !important;
  }
  .mt-lg-15 {
    margin-top: 5rem !important;
  }
  .mt-lg-16 {
    margin-top: 6rem !important;
  }
  .mt-lg-17 {
    margin-top: 7rem !important;
  }
  .mt-lg-18 {
    margin-top: 8rem !important;
  }
  .mt-lg-19 {
    margin-top: 9rem !important;
  }
  .mt-lg-20 {
    margin-top: 10rem !important;
  }
  .mt-lg-21 {
    margin-top: 12.5rem !important;
  }
  .mt-lg-22 {
    margin-top: 15rem !important;
  }
  .mt-lg-23 {
    margin-top: 17.5rem !important;
  }
  .mt-lg-24 {
    margin-top: 20rem !important;
  }
  .mt-lg-25 {
    margin-top: 22.5rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 0.75rem !important;
  }
  .me-lg-4 {
    margin-right: 1rem !important;
  }
  .me-lg-5 {
    margin-right: 1.25rem !important;
  }
  .me-lg-6 {
    margin-right: 1.5rem !important;
  }
  .me-lg-7 {
    margin-right: 1.75rem !important;
  }
  .me-lg-8 {
    margin-right: 2rem !important;
  }
  .me-lg-9 {
    margin-right: 2.25rem !important;
  }
  .me-lg-10 {
    margin-right: 2.5rem !important;
  }
  .me-lg-11 {
    margin-right: 3rem !important;
  }
  .me-lg-12 {
    margin-right: 3.5rem !important;
  }
  .me-lg-13 {
    margin-right: 4rem !important;
  }
  .me-lg-14 {
    margin-right: 4.5rem !important;
  }
  .me-lg-15 {
    margin-right: 5rem !important;
  }
  .me-lg-16 {
    margin-right: 6rem !important;
  }
  .me-lg-17 {
    margin-right: 7rem !important;
  }
  .me-lg-18 {
    margin-right: 8rem !important;
  }
  .me-lg-19 {
    margin-right: 9rem !important;
  }
  .me-lg-20 {
    margin-right: 10rem !important;
  }
  .me-lg-21 {
    margin-right: 12.5rem !important;
  }
  .me-lg-22 {
    margin-right: 15rem !important;
  }
  .me-lg-23 {
    margin-right: 17.5rem !important;
  }
  .me-lg-24 {
    margin-right: 20rem !important;
  }
  .me-lg-25 {
    margin-right: 22.5rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 0.75rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 1.25rem !important;
  }
  .mb-lg-6 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-7 {
    margin-bottom: 1.75rem !important;
  }
  .mb-lg-8 {
    margin-bottom: 2rem !important;
  }
  .mb-lg-9 {
    margin-bottom: 2.25rem !important;
  }
  .mb-lg-10 {
    margin-bottom: 2.5rem !important;
  }
  .mb-lg-11 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-12 {
    margin-bottom: 3.5rem !important;
  }
  .mb-lg-13 {
    margin-bottom: 4rem !important;
  }
  .mb-lg-14 {
    margin-bottom: 4.5rem !important;
  }
  .mb-lg-15 {
    margin-bottom: 5rem !important;
  }
  .mb-lg-16 {
    margin-bottom: 6rem !important;
  }
  .mb-lg-17 {
    margin-bottom: 7rem !important;
  }
  .mb-lg-18 {
    margin-bottom: 8rem !important;
  }
  .mb-lg-19 {
    margin-bottom: 9rem !important;
  }
  .mb-lg-20 {
    margin-bottom: 10rem !important;
  }
  .mb-lg-21 {
    margin-bottom: 12.5rem !important;
  }
  .mb-lg-22 {
    margin-bottom: 15rem !important;
  }
  .mb-lg-23 {
    margin-bottom: 17.5rem !important;
  }
  .mb-lg-24 {
    margin-bottom: 20rem !important;
  }
  .mb-lg-25 {
    margin-bottom: 22.5rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 0.75rem !important;
  }
  .ms-lg-4 {
    margin-left: 1rem !important;
  }
  .ms-lg-5 {
    margin-left: 1.25rem !important;
  }
  .ms-lg-6 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-7 {
    margin-left: 1.75rem !important;
  }
  .ms-lg-8 {
    margin-left: 2rem !important;
  }
  .ms-lg-9 {
    margin-left: 2.25rem !important;
  }
  .ms-lg-10 {
    margin-left: 2.5rem !important;
  }
  .ms-lg-11 {
    margin-left: 3rem !important;
  }
  .ms-lg-12 {
    margin-left: 3.5rem !important;
  }
  .ms-lg-13 {
    margin-left: 4rem !important;
  }
  .ms-lg-14 {
    margin-left: 4.5rem !important;
  }
  .ms-lg-15 {
    margin-left: 5rem !important;
  }
  .ms-lg-16 {
    margin-left: 6rem !important;
  }
  .ms-lg-17 {
    margin-left: 7rem !important;
  }
  .ms-lg-18 {
    margin-left: 8rem !important;
  }
  .ms-lg-19 {
    margin-left: 9rem !important;
  }
  .ms-lg-20 {
    margin-left: 10rem !important;
  }
  .ms-lg-21 {
    margin-left: 12.5rem !important;
  }
  .ms-lg-22 {
    margin-left: 15rem !important;
  }
  .ms-lg-23 {
    margin-left: 17.5rem !important;
  }
  .ms-lg-24 {
    margin-left: 20rem !important;
  }
  .ms-lg-25 {
    margin-left: 22.5rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -0.75rem !important;
  }
  .m-lg-n4 {
    margin: -1rem !important;
  }
  .m-lg-n5 {
    margin: -1.25rem !important;
  }
  .m-lg-n6 {
    margin: -1.5rem !important;
  }
  .m-lg-n7 {
    margin: -1.75rem !important;
  }
  .m-lg-n8 {
    margin: -2rem !important;
  }
  .m-lg-n9 {
    margin: -2.25rem !important;
  }
  .m-lg-n10 {
    margin: -2.5rem !important;
  }
  .m-lg-n11 {
    margin: -3rem !important;
  }
  .m-lg-n12 {
    margin: -3.5rem !important;
  }
  .m-lg-n13 {
    margin: -4rem !important;
  }
  .m-lg-n14 {
    margin: -4.5rem !important;
  }
  .m-lg-n15 {
    margin: -5rem !important;
  }
  .m-lg-n16 {
    margin: -6rem !important;
  }
  .m-lg-n17 {
    margin: -7rem !important;
  }
  .m-lg-n18 {
    margin: -8rem !important;
  }
  .m-lg-n19 {
    margin: -9rem !important;
  }
  .m-lg-n20 {
    margin: -10rem !important;
  }
  .m-lg-n21 {
    margin: -12.5rem !important;
  }
  .m-lg-n22 {
    margin: -15rem !important;
  }
  .m-lg-n23 {
    margin: -17.5rem !important;
  }
  .m-lg-n24 {
    margin: -20rem !important;
  }
  .m-lg-n25 {
    margin: -22.5rem !important;
  }
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-lg-n3 {
    margin-right: -0.75rem !important;
    margin-left: -0.75rem !important;
  }
  .mx-lg-n4 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-lg-n5 {
    margin-right: -1.25rem !important;
    margin-left: -1.25rem !important;
  }
  .mx-lg-n6 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-lg-n7 {
    margin-right: -1.75rem !important;
    margin-left: -1.75rem !important;
  }
  .mx-lg-n8 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-lg-n9 {
    margin-right: -2.25rem !important;
    margin-left: -2.25rem !important;
  }
  .mx-lg-n10 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-lg-n11 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-lg-n12 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-lg-n13 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-lg-n14 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-lg-n15 {
    margin-right: -5rem !important;
    margin-left: -5rem !important;
  }
  .mx-lg-n16 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-lg-n17 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-lg-n18 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-lg-n19 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-lg-n20 {
    margin-right: -10rem !important;
    margin-left: -10rem !important;
  }
  .mx-lg-n21 {
    margin-right: -12.5rem !important;
    margin-left: -12.5rem !important;
  }
  .mx-lg-n22 {
    margin-right: -15rem !important;
    margin-left: -15rem !important;
  }
  .mx-lg-n23 {
    margin-right: -17.5rem !important;
    margin-left: -17.5rem !important;
  }
  .mx-lg-n24 {
    margin-right: -20rem !important;
    margin-left: -20rem !important;
  }
  .mx-lg-n25 {
    margin-right: -22.5rem !important;
    margin-left: -22.5rem !important;
  }
  .my-lg-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-lg-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-lg-n3 {
    margin-top: -0.75rem !important;
    margin-bottom: -0.75rem !important;
  }
  .my-lg-n4 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-lg-n5 {
    margin-top: -1.25rem !important;
    margin-bottom: -1.25rem !important;
  }
  .my-lg-n6 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-lg-n7 {
    margin-top: -1.75rem !important;
    margin-bottom: -1.75rem !important;
  }
  .my-lg-n8 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-lg-n9 {
    margin-top: -2.25rem !important;
    margin-bottom: -2.25rem !important;
  }
  .my-lg-n10 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-lg-n11 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-lg-n12 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-lg-n13 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-lg-n14 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-lg-n15 {
    margin-top: -5rem !important;
    margin-bottom: -5rem !important;
  }
  .my-lg-n16 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-lg-n17 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-lg-n18 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-lg-n19 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-lg-n20 {
    margin-top: -10rem !important;
    margin-bottom: -10rem !important;
  }
  .my-lg-n21 {
    margin-top: -12.5rem !important;
    margin-bottom: -12.5rem !important;
  }
  .my-lg-n22 {
    margin-top: -15rem !important;
    margin-bottom: -15rem !important;
  }
  .my-lg-n23 {
    margin-top: -17.5rem !important;
    margin-bottom: -17.5rem !important;
  }
  .my-lg-n24 {
    margin-top: -20rem !important;
    margin-bottom: -20rem !important;
  }
  .my-lg-n25 {
    margin-top: -22.5rem !important;
    margin-bottom: -22.5rem !important;
  }
  .mt-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-lg-n3 {
    margin-top: -0.75rem !important;
  }
  .mt-lg-n4 {
    margin-top: -1rem !important;
  }
  .mt-lg-n5 {
    margin-top: -1.25rem !important;
  }
  .mt-lg-n6 {
    margin-top: -1.5rem !important;
  }
  .mt-lg-n7 {
    margin-top: -1.75rem !important;
  }
  .mt-lg-n8 {
    margin-top: -2rem !important;
  }
  .mt-lg-n9 {
    margin-top: -2.25rem !important;
  }
  .mt-lg-n10 {
    margin-top: -2.5rem !important;
  }
  .mt-lg-n11 {
    margin-top: -3rem !important;
  }
  .mt-lg-n12 {
    margin-top: -3.5rem !important;
  }
  .mt-lg-n13 {
    margin-top: -4rem !important;
  }
  .mt-lg-n14 {
    margin-top: -4.5rem !important;
  }
  .mt-lg-n15 {
    margin-top: -5rem !important;
  }
  .mt-lg-n16 {
    margin-top: -6rem !important;
  }
  .mt-lg-n17 {
    margin-top: -7rem !important;
  }
  .mt-lg-n18 {
    margin-top: -8rem !important;
  }
  .mt-lg-n19 {
    margin-top: -9rem !important;
  }
  .mt-lg-n20 {
    margin-top: -10rem !important;
  }
  .mt-lg-n21 {
    margin-top: -12.5rem !important;
  }
  .mt-lg-n22 {
    margin-top: -15rem !important;
  }
  .mt-lg-n23 {
    margin-top: -17.5rem !important;
  }
  .mt-lg-n24 {
    margin-top: -20rem !important;
  }
  .mt-lg-n25 {
    margin-top: -22.5rem !important;
  }
  .me-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .me-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .me-lg-n3 {
    margin-right: -0.75rem !important;
  }
  .me-lg-n4 {
    margin-right: -1rem !important;
  }
  .me-lg-n5 {
    margin-right: -1.25rem !important;
  }
  .me-lg-n6 {
    margin-right: -1.5rem !important;
  }
  .me-lg-n7 {
    margin-right: -1.75rem !important;
  }
  .me-lg-n8 {
    margin-right: -2rem !important;
  }
  .me-lg-n9 {
    margin-right: -2.25rem !important;
  }
  .me-lg-n10 {
    margin-right: -2.5rem !important;
  }
  .me-lg-n11 {
    margin-right: -3rem !important;
  }
  .me-lg-n12 {
    margin-right: -3.5rem !important;
  }
  .me-lg-n13 {
    margin-right: -4rem !important;
  }
  .me-lg-n14 {
    margin-right: -4.5rem !important;
  }
  .me-lg-n15 {
    margin-right: -5rem !important;
  }
  .me-lg-n16 {
    margin-right: -6rem !important;
  }
  .me-lg-n17 {
    margin-right: -7rem !important;
  }
  .me-lg-n18 {
    margin-right: -8rem !important;
  }
  .me-lg-n19 {
    margin-right: -9rem !important;
  }
  .me-lg-n20 {
    margin-right: -10rem !important;
  }
  .me-lg-n21 {
    margin-right: -12.5rem !important;
  }
  .me-lg-n22 {
    margin-right: -15rem !important;
  }
  .me-lg-n23 {
    margin-right: -17.5rem !important;
  }
  .me-lg-n24 {
    margin-right: -20rem !important;
  }
  .me-lg-n25 {
    margin-right: -22.5rem !important;
  }
  .mb-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-lg-n3 {
    margin-bottom: -0.75rem !important;
  }
  .mb-lg-n4 {
    margin-bottom: -1rem !important;
  }
  .mb-lg-n5 {
    margin-bottom: -1.25rem !important;
  }
  .mb-lg-n6 {
    margin-bottom: -1.5rem !important;
  }
  .mb-lg-n7 {
    margin-bottom: -1.75rem !important;
  }
  .mb-lg-n8 {
    margin-bottom: -2rem !important;
  }
  .mb-lg-n9 {
    margin-bottom: -2.25rem !important;
  }
  .mb-lg-n10 {
    margin-bottom: -2.5rem !important;
  }
  .mb-lg-n11 {
    margin-bottom: -3rem !important;
  }
  .mb-lg-n12 {
    margin-bottom: -3.5rem !important;
  }
  .mb-lg-n13 {
    margin-bottom: -4rem !important;
  }
  .mb-lg-n14 {
    margin-bottom: -4.5rem !important;
  }
  .mb-lg-n15 {
    margin-bottom: -5rem !important;
  }
  .mb-lg-n16 {
    margin-bottom: -6rem !important;
  }
  .mb-lg-n17 {
    margin-bottom: -7rem !important;
  }
  .mb-lg-n18 {
    margin-bottom: -8rem !important;
  }
  .mb-lg-n19 {
    margin-bottom: -9rem !important;
  }
  .mb-lg-n20 {
    margin-bottom: -10rem !important;
  }
  .mb-lg-n21 {
    margin-bottom: -12.5rem !important;
  }
  .mb-lg-n22 {
    margin-bottom: -15rem !important;
  }
  .mb-lg-n23 {
    margin-bottom: -17.5rem !important;
  }
  .mb-lg-n24 {
    margin-bottom: -20rem !important;
  }
  .mb-lg-n25 {
    margin-bottom: -22.5rem !important;
  }
  .ms-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-lg-n3 {
    margin-left: -0.75rem !important;
  }
  .ms-lg-n4 {
    margin-left: -1rem !important;
  }
  .ms-lg-n5 {
    margin-left: -1.25rem !important;
  }
  .ms-lg-n6 {
    margin-left: -1.5rem !important;
  }
  .ms-lg-n7 {
    margin-left: -1.75rem !important;
  }
  .ms-lg-n8 {
    margin-left: -2rem !important;
  }
  .ms-lg-n9 {
    margin-left: -2.25rem !important;
  }
  .ms-lg-n10 {
    margin-left: -2.5rem !important;
  }
  .ms-lg-n11 {
    margin-left: -3rem !important;
  }
  .ms-lg-n12 {
    margin-left: -3.5rem !important;
  }
  .ms-lg-n13 {
    margin-left: -4rem !important;
  }
  .ms-lg-n14 {
    margin-left: -4.5rem !important;
  }
  .ms-lg-n15 {
    margin-left: -5rem !important;
  }
  .ms-lg-n16 {
    margin-left: -6rem !important;
  }
  .ms-lg-n17 {
    margin-left: -7rem !important;
  }
  .ms-lg-n18 {
    margin-left: -8rem !important;
  }
  .ms-lg-n19 {
    margin-left: -9rem !important;
  }
  .ms-lg-n20 {
    margin-left: -10rem !important;
  }
  .ms-lg-n21 {
    margin-left: -12.5rem !important;
  }
  .ms-lg-n22 {
    margin-left: -15rem !important;
  }
  .ms-lg-n23 {
    margin-left: -17.5rem !important;
  }
  .ms-lg-n24 {
    margin-left: -20rem !important;
  }
  .ms-lg-n25 {
    margin-left: -22.5rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 0.75rem !important;
  }
  .p-lg-4 {
    padding: 1rem !important;
  }
  .p-lg-5 {
    padding: 1.25rem !important;
  }
  .p-lg-6 {
    padding: 1.5rem !important;
  }
  .p-lg-7 {
    padding: 1.75rem !important;
  }
  .p-lg-8 {
    padding: 2rem !important;
  }
  .p-lg-9 {
    padding: 2.25rem !important;
  }
  .p-lg-10 {
    padding: 2.5rem !important;
  }
  .p-lg-11 {
    padding: 3rem !important;
  }
  .p-lg-12 {
    padding: 3.5rem !important;
  }
  .p-lg-13 {
    padding: 4rem !important;
  }
  .p-lg-14 {
    padding: 4.5rem !important;
  }
  .p-lg-15 {
    padding: 5rem !important;
  }
  .p-lg-16 {
    padding: 6rem !important;
  }
  .p-lg-17 {
    padding: 7rem !important;
  }
  .p-lg-18 {
    padding: 8rem !important;
  }
  .p-lg-19 {
    padding: 9rem !important;
  }
  .p-lg-20 {
    padding: 10rem !important;
  }
  .p-lg-21 {
    padding: 12.5rem !important;
  }
  .p-lg-22 {
    padding: 15rem !important;
  }
  .p-lg-23 {
    padding: 17.5rem !important;
  }
  .p-lg-24 {
    padding: 20rem !important;
  }
  .p-lg-25 {
    padding: 22.5rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 0.75rem !important;
    padding-left: 0.75rem !important;
  }
  .px-lg-4 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-5 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important;
  }
  .px-lg-6 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-7 {
    padding-right: 1.75rem !important;
    padding-left: 1.75rem !important;
  }
  .px-lg-8 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-lg-9 {
    padding-right: 2.25rem !important;
    padding-left: 2.25rem !important;
  }
  .px-lg-10 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-lg-11 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-lg-12 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-lg-13 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-lg-14 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-lg-15 {
    padding-right: 5rem !important;
    padding-left: 5rem !important;
  }
  .px-lg-16 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-lg-17 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-lg-18 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-lg-19 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-lg-20 {
    padding-right: 10rem !important;
    padding-left: 10rem !important;
  }
  .px-lg-21 {
    padding-right: 12.5rem !important;
    padding-left: 12.5rem !important;
  }
  .px-lg-22 {
    padding-right: 15rem !important;
    padding-left: 15rem !important;
  }
  .px-lg-23 {
    padding-right: 17.5rem !important;
    padding-left: 17.5rem !important;
  }
  .px-lg-24 {
    padding-right: 20rem !important;
    padding-left: 20rem !important;
  }
  .px-lg-25 {
    padding-right: 22.5rem !important;
    padding-left: 22.5rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 0.75rem !important;
    padding-bottom: 0.75rem !important;
  }
  .py-lg-4 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-5 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .py-lg-6 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-7 {
    padding-top: 1.75rem !important;
    padding-bottom: 1.75rem !important;
  }
  .py-lg-8 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-lg-9 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important;
  }
  .py-lg-10 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-lg-11 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-lg-12 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-lg-13 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-lg-14 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-lg-15 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important;
  }
  .py-lg-16 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-lg-17 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-lg-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-lg-19 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-lg-20 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }
  .py-lg-21 {
    padding-top: 12.5rem !important;
    padding-bottom: 12.5rem !important;
  }
  .py-lg-22 {
    padding-top: 15rem !important;
    padding-bottom: 15rem !important;
  }
  .py-lg-23 {
    padding-top: 17.5rem !important;
    padding-bottom: 17.5rem !important;
  }
  .py-lg-24 {
    padding-top: 20rem !important;
    padding-bottom: 20rem !important;
  }
  .py-lg-25 {
    padding-top: 22.5rem !important;
    padding-bottom: 22.5rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 0.75rem !important;
  }
  .pt-lg-4 {
    padding-top: 1rem !important;
  }
  .pt-lg-5 {
    padding-top: 1.25rem !important;
  }
  .pt-lg-6 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-7 {
    padding-top: 1.75rem !important;
  }
  .pt-lg-8 {
    padding-top: 2rem !important;
  }
  .pt-lg-9 {
    padding-top: 2.25rem !important;
  }
  .pt-lg-10 {
    padding-top: 2.5rem !important;
  }
  .pt-lg-11 {
    padding-top: 3rem !important;
  }
  .pt-lg-12 {
    padding-top: 3.5rem !important;
  }
  .pt-lg-13 {
    padding-top: 4rem !important;
  }
  .pt-lg-14 {
    padding-top: 4.5rem !important;
  }
  .pt-lg-15 {
    padding-top: 5rem !important;
  }
  .pt-lg-16 {
    padding-top: 6rem !important;
  }
  .pt-lg-17 {
    padding-top: 7rem !important;
  }
  .pt-lg-18 {
    padding-top: 8rem !important;
  }
  .pt-lg-19 {
    padding-top: 9rem !important;
  }
  .pt-lg-20 {
    padding-top: 10rem !important;
  }
  .pt-lg-21 {
    padding-top: 12.5rem !important;
  }
  .pt-lg-22 {
    padding-top: 15rem !important;
  }
  .pt-lg-23 {
    padding-top: 17.5rem !important;
  }
  .pt-lg-24 {
    padding-top: 20rem !important;
  }
  .pt-lg-25 {
    padding-top: 22.5rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 0.75rem !important;
  }
  .pe-lg-4 {
    padding-right: 1rem !important;
  }
  .pe-lg-5 {
    padding-right: 1.25rem !important;
  }
  .pe-lg-6 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-7 {
    padding-right: 1.75rem !important;
  }
  .pe-lg-8 {
    padding-right: 2rem !important;
  }
  .pe-lg-9 {
    padding-right: 2.25rem !important;
  }
  .pe-lg-10 {
    padding-right: 2.5rem !important;
  }
  .pe-lg-11 {
    padding-right: 3rem !important;
  }
  .pe-lg-12 {
    padding-right: 3.5rem !important;
  }
  .pe-lg-13 {
    padding-right: 4rem !important;
  }
  .pe-lg-14 {
    padding-right: 4.5rem !important;
  }
  .pe-lg-15 {
    padding-right: 5rem !important;
  }
  .pe-lg-16 {
    padding-right: 6rem !important;
  }
  .pe-lg-17 {
    padding-right: 7rem !important;
  }
  .pe-lg-18 {
    padding-right: 8rem !important;
  }
  .pe-lg-19 {
    padding-right: 9rem !important;
  }
  .pe-lg-20 {
    padding-right: 10rem !important;
  }
  .pe-lg-21 {
    padding-right: 12.5rem !important;
  }
  .pe-lg-22 {
    padding-right: 15rem !important;
  }
  .pe-lg-23 {
    padding-right: 17.5rem !important;
  }
  .pe-lg-24 {
    padding-right: 20rem !important;
  }
  .pe-lg-25 {
    padding-right: 22.5rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 0.75rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 1.25rem !important;
  }
  .pb-lg-6 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-7 {
    padding-bottom: 1.75rem !important;
  }
  .pb-lg-8 {
    padding-bottom: 2rem !important;
  }
  .pb-lg-9 {
    padding-bottom: 2.25rem !important;
  }
  .pb-lg-10 {
    padding-bottom: 2.5rem !important;
  }
  .pb-lg-11 {
    padding-bottom: 3rem !important;
  }
  .pb-lg-12 {
    padding-bottom: 3.5rem !important;
  }
  .pb-lg-13 {
    padding-bottom: 4rem !important;
  }
  .pb-lg-14 {
    padding-bottom: 4.5rem !important;
  }
  .pb-lg-15 {
    padding-bottom: 5rem !important;
  }
  .pb-lg-16 {
    padding-bottom: 6rem !important;
  }
  .pb-lg-17 {
    padding-bottom: 7rem !important;
  }
  .pb-lg-18 {
    padding-bottom: 8rem !important;
  }
  .pb-lg-19 {
    padding-bottom: 9rem !important;
  }
  .pb-lg-20 {
    padding-bottom: 10rem !important;
  }
  .pb-lg-21 {
    padding-bottom: 12.5rem !important;
  }
  .pb-lg-22 {
    padding-bottom: 15rem !important;
  }
  .pb-lg-23 {
    padding-bottom: 17.5rem !important;
  }
  .pb-lg-24 {
    padding-bottom: 20rem !important;
  }
  .pb-lg-25 {
    padding-bottom: 22.5rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 0.75rem !important;
  }
  .ps-lg-4 {
    padding-left: 1rem !important;
  }
  .ps-lg-5 {
    padding-left: 1.25rem !important;
  }
  .ps-lg-6 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-7 {
    padding-left: 1.75rem !important;
  }
  .ps-lg-8 {
    padding-left: 2rem !important;
  }
  .ps-lg-9 {
    padding-left: 2.25rem !important;
  }
  .ps-lg-10 {
    padding-left: 2.5rem !important;
  }
  .ps-lg-11 {
    padding-left: 3rem !important;
  }
  .ps-lg-12 {
    padding-left: 3.5rem !important;
  }
  .ps-lg-13 {
    padding-left: 4rem !important;
  }
  .ps-lg-14 {
    padding-left: 4.5rem !important;
  }
  .ps-lg-15 {
    padding-left: 5rem !important;
  }
  .ps-lg-16 {
    padding-left: 6rem !important;
  }
  .ps-lg-17 {
    padding-left: 7rem !important;
  }
  .ps-lg-18 {
    padding-left: 8rem !important;
  }
  .ps-lg-19 {
    padding-left: 9rem !important;
  }
  .ps-lg-20 {
    padding-left: 10rem !important;
  }
  .ps-lg-21 {
    padding-left: 12.5rem !important;
  }
  .ps-lg-22 {
    padding-left: 15rem !important;
  }
  .ps-lg-23 {
    padding-left: 17.5rem !important;
  }
  .ps-lg-24 {
    padding-left: 20rem !important;
  }
  .ps-lg-25 {
    padding-left: 22.5rem !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 0.75rem !important;
  }
  .gap-lg-4 {
    gap: 1rem !important;
  }
  .gap-lg-5 {
    gap: 1.25rem !important;
  }
  .gap-lg-6 {
    gap: 1.5rem !important;
  }
  .gap-lg-7 {
    gap: 1.75rem !important;
  }
  .gap-lg-8 {
    gap: 2rem !important;
  }
  .gap-lg-9 {
    gap: 2.25rem !important;
  }
  .gap-lg-10 {
    gap: 2.5rem !important;
  }
  .gap-lg-11 {
    gap: 3rem !important;
  }
  .gap-lg-12 {
    gap: 3.5rem !important;
  }
  .gap-lg-13 {
    gap: 4rem !important;
  }
  .gap-lg-14 {
    gap: 4.5rem !important;
  }
  .gap-lg-15 {
    gap: 5rem !important;
  }
  .gap-lg-16 {
    gap: 6rem !important;
  }
  .gap-lg-17 {
    gap: 7rem !important;
  }
  .gap-lg-18 {
    gap: 8rem !important;
  }
  .gap-lg-19 {
    gap: 9rem !important;
  }
  .gap-lg-20 {
    gap: 10rem !important;
  }
  .gap-lg-21 {
    gap: 12.5rem !important;
  }
  .gap-lg-22 {
    gap: 15rem !important;
  }
  .gap-lg-23 {
    gap: 17.5rem !important;
  }
  .gap-lg-24 {
    gap: 20rem !important;
  }
  .gap-lg-25 {
    gap: 22.5rem !important;
  }
  .row-gap-lg-0 {
    row-gap: 0 !important;
  }
  .row-gap-lg-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-lg-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-lg-3 {
    row-gap: 0.75rem !important;
  }
  .row-gap-lg-4 {
    row-gap: 1rem !important;
  }
  .row-gap-lg-5 {
    row-gap: 1.25rem !important;
  }
  .row-gap-lg-6 {
    row-gap: 1.5rem !important;
  }
  .row-gap-lg-7 {
    row-gap: 1.75rem !important;
  }
  .row-gap-lg-8 {
    row-gap: 2rem !important;
  }
  .row-gap-lg-9 {
    row-gap: 2.25rem !important;
  }
  .row-gap-lg-10 {
    row-gap: 2.5rem !important;
  }
  .row-gap-lg-11 {
    row-gap: 3rem !important;
  }
  .row-gap-lg-12 {
    row-gap: 3.5rem !important;
  }
  .row-gap-lg-13 {
    row-gap: 4rem !important;
  }
  .row-gap-lg-14 {
    row-gap: 4.5rem !important;
  }
  .row-gap-lg-15 {
    row-gap: 5rem !important;
  }
  .row-gap-lg-16 {
    row-gap: 6rem !important;
  }
  .row-gap-lg-17 {
    row-gap: 7rem !important;
  }
  .row-gap-lg-18 {
    row-gap: 8rem !important;
  }
  .row-gap-lg-19 {
    row-gap: 9rem !important;
  }
  .row-gap-lg-20 {
    row-gap: 10rem !important;
  }
  .row-gap-lg-21 {
    row-gap: 12.5rem !important;
  }
  .row-gap-lg-22 {
    row-gap: 15rem !important;
  }
  .row-gap-lg-23 {
    row-gap: 17.5rem !important;
  }
  .row-gap-lg-24 {
    row-gap: 20rem !important;
  }
  .row-gap-lg-25 {
    row-gap: 22.5rem !important;
  }
  .column-gap-lg-0 {
    -moz-column-gap: 0 !important;
    column-gap: 0 !important;
  }
  .column-gap-lg-1 {
    -moz-column-gap: 0.25rem !important;
    column-gap: 0.25rem !important;
  }
  .column-gap-lg-2 {
    -moz-column-gap: 0.5rem !important;
    column-gap: 0.5rem !important;
  }
  .column-gap-lg-3 {
    -moz-column-gap: 0.75rem !important;
    column-gap: 0.75rem !important;
  }
  .column-gap-lg-4 {
    -moz-column-gap: 1rem !important;
    column-gap: 1rem !important;
  }
  .column-gap-lg-5 {
    -moz-column-gap: 1.25rem !important;
    column-gap: 1.25rem !important;
  }
  .column-gap-lg-6 {
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important;
  }
  .column-gap-lg-7 {
    -moz-column-gap: 1.75rem !important;
    column-gap: 1.75rem !important;
  }
  .column-gap-lg-8 {
    -moz-column-gap: 2rem !important;
    column-gap: 2rem !important;
  }
  .column-gap-lg-9 {
    -moz-column-gap: 2.25rem !important;
    column-gap: 2.25rem !important;
  }
  .column-gap-lg-10 {
    -moz-column-gap: 2.5rem !important;
    column-gap: 2.5rem !important;
  }
  .column-gap-lg-11 {
    -moz-column-gap: 3rem !important;
    column-gap: 3rem !important;
  }
  .column-gap-lg-12 {
    -moz-column-gap: 3.5rem !important;
    column-gap: 3.5rem !important;
  }
  .column-gap-lg-13 {
    -moz-column-gap: 4rem !important;
    column-gap: 4rem !important;
  }
  .column-gap-lg-14 {
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important;
  }
  .column-gap-lg-15 {
    -moz-column-gap: 5rem !important;
    column-gap: 5rem !important;
  }
  .column-gap-lg-16 {
    -moz-column-gap: 6rem !important;
    column-gap: 6rem !important;
  }
  .column-gap-lg-17 {
    -moz-column-gap: 7rem !important;
    column-gap: 7rem !important;
  }
  .column-gap-lg-18 {
    -moz-column-gap: 8rem !important;
    column-gap: 8rem !important;
  }
  .column-gap-lg-19 {
    -moz-column-gap: 9rem !important;
    column-gap: 9rem !important;
  }
  .column-gap-lg-20 {
    -moz-column-gap: 10rem !important;
    column-gap: 10rem !important;
  }
  .column-gap-lg-21 {
    -moz-column-gap: 12.5rem !important;
    column-gap: 12.5rem !important;
  }
  .column-gap-lg-22 {
    -moz-column-gap: 15rem !important;
    column-gap: 15rem !important;
  }
  .column-gap-lg-23 {
    -moz-column-gap: 17.5rem !important;
    column-gap: 17.5rem !important;
  }
  .column-gap-lg-24 {
    -moz-column-gap: 20rem !important;
    column-gap: 20rem !important;
  }
  .column-gap-lg-25 {
    -moz-column-gap: 22.5rem !important;
    column-gap: 22.5rem !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}
@media (min-width: 1200px) {
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .object-fit-xl-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important;
  }
  .object-fit-xl-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important;
  }
  .object-fit-xl-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important;
  }
  .object-fit-xl-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important;
  }
  .object-fit-xl-none {
    -o-object-fit: none !important;
    object-fit: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-inline-grid {
    display: inline-grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .flex-xl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xl-row {
    flex-direction: row !important;
  }
  .flex-xl-column {
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    justify-content: center !important;
  }
  .justify-content-xl-between {
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    align-items: center !important;
  }
  .align-items-xl-baseline {
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    align-items: stretch !important;
  }
  .align-content-xl-start {
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    align-content: center !important;
  }
  .align-content-xl-between {
    align-content: space-between !important;
  }
  .align-content-xl-around {
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    align-self: auto !important;
  }
  .align-self-xl-start {
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    align-self: center !important;
  }
  .align-self-xl-baseline {
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    align-self: stretch !important;
  }
  .order-xl-first {
    order: -1 !important;
  }
  .order-xl-0 {
    order: 0 !important;
  }
  .order-xl-1 {
    order: 1 !important;
  }
  .order-xl-2 {
    order: 2 !important;
  }
  .order-xl-3 {
    order: 3 !important;
  }
  .order-xl-4 {
    order: 4 !important;
  }
  .order-xl-5 {
    order: 5 !important;
  }
  .order-xl-last {
    order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 0.75rem !important;
  }
  .m-xl-4 {
    margin: 1rem !important;
  }
  .m-xl-5 {
    margin: 1.25rem !important;
  }
  .m-xl-6 {
    margin: 1.5rem !important;
  }
  .m-xl-7 {
    margin: 1.75rem !important;
  }
  .m-xl-8 {
    margin: 2rem !important;
  }
  .m-xl-9 {
    margin: 2.25rem !important;
  }
  .m-xl-10 {
    margin: 2.5rem !important;
  }
  .m-xl-11 {
    margin: 3rem !important;
  }
  .m-xl-12 {
    margin: 3.5rem !important;
  }
  .m-xl-13 {
    margin: 4rem !important;
  }
  .m-xl-14 {
    margin: 4.5rem !important;
  }
  .m-xl-15 {
    margin: 5rem !important;
  }
  .m-xl-16 {
    margin: 6rem !important;
  }
  .m-xl-17 {
    margin: 7rem !important;
  }
  .m-xl-18 {
    margin: 8rem !important;
  }
  .m-xl-19 {
    margin: 9rem !important;
  }
  .m-xl-20 {
    margin: 10rem !important;
  }
  .m-xl-21 {
    margin: 12.5rem !important;
  }
  .m-xl-22 {
    margin: 15rem !important;
  }
  .m-xl-23 {
    margin: 17.5rem !important;
  }
  .m-xl-24 {
    margin: 20rem !important;
  }
  .m-xl-25 {
    margin: 22.5rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 0.75rem !important;
    margin-left: 0.75rem !important;
  }
  .mx-xl-4 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-5 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important;
  }
  .mx-xl-6 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-7 {
    margin-right: 1.75rem !important;
    margin-left: 1.75rem !important;
  }
  .mx-xl-8 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-xl-9 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important;
  }
  .mx-xl-10 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-xl-11 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-12 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-xl-13 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-xl-14 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-xl-15 {
    margin-right: 5rem !important;
    margin-left: 5rem !important;
  }
  .mx-xl-16 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-xl-17 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-xl-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-xl-19 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-xl-20 {
    margin-right: 10rem !important;
    margin-left: 10rem !important;
  }
  .mx-xl-21 {
    margin-right: 12.5rem !important;
    margin-left: 12.5rem !important;
  }
  .mx-xl-22 {
    margin-right: 15rem !important;
    margin-left: 15rem !important;
  }
  .mx-xl-23 {
    margin-right: 17.5rem !important;
    margin-left: 17.5rem !important;
  }
  .mx-xl-24 {
    margin-right: 20rem !important;
    margin-left: 20rem !important;
  }
  .mx-xl-25 {
    margin-right: 22.5rem !important;
    margin-left: 22.5rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 0.75rem !important;
    margin-bottom: 0.75rem !important;
  }
  .my-xl-4 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-5 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important;
  }
  .my-xl-6 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-7 {
    margin-top: 1.75rem !important;
    margin-bottom: 1.75rem !important;
  }
  .my-xl-8 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-xl-9 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important;
  }
  .my-xl-10 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-xl-11 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-12 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-xl-13 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-xl-14 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-xl-15 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important;
  }
  .my-xl-16 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-xl-17 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-xl-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-xl-19 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-xl-20 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }
  .my-xl-21 {
    margin-top: 12.5rem !important;
    margin-bottom: 12.5rem !important;
  }
  .my-xl-22 {
    margin-top: 15rem !important;
    margin-bottom: 15rem !important;
  }
  .my-xl-23 {
    margin-top: 17.5rem !important;
    margin-bottom: 17.5rem !important;
  }
  .my-xl-24 {
    margin-top: 20rem !important;
    margin-bottom: 20rem !important;
  }
  .my-xl-25 {
    margin-top: 22.5rem !important;
    margin-bottom: 22.5rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 0.75rem !important;
  }
  .mt-xl-4 {
    margin-top: 1rem !important;
  }
  .mt-xl-5 {
    margin-top: 1.25rem !important;
  }
  .mt-xl-6 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-7 {
    margin-top: 1.75rem !important;
  }
  .mt-xl-8 {
    margin-top: 2rem !important;
  }
  .mt-xl-9 {
    margin-top: 2.25rem !important;
  }
  .mt-xl-10 {
    margin-top: 2.5rem !important;
  }
  .mt-xl-11 {
    margin-top: 3rem !important;
  }
  .mt-xl-12 {
    margin-top: 3.5rem !important;
  }
  .mt-xl-13 {
    margin-top: 4rem !important;
  }
  .mt-xl-14 {
    margin-top: 4.5rem !important;
  }
  .mt-xl-15 {
    margin-top: 5rem !important;
  }
  .mt-xl-16 {
    margin-top: 6rem !important;
  }
  .mt-xl-17 {
    margin-top: 7rem !important;
  }
  .mt-xl-18 {
    margin-top: 8rem !important;
  }
  .mt-xl-19 {
    margin-top: 9rem !important;
  }
  .mt-xl-20 {
    margin-top: 10rem !important;
  }
  .mt-xl-21 {
    margin-top: 12.5rem !important;
  }
  .mt-xl-22 {
    margin-top: 15rem !important;
  }
  .mt-xl-23 {
    margin-top: 17.5rem !important;
  }
  .mt-xl-24 {
    margin-top: 20rem !important;
  }
  .mt-xl-25 {
    margin-top: 22.5rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 0.75rem !important;
  }
  .me-xl-4 {
    margin-right: 1rem !important;
  }
  .me-xl-5 {
    margin-right: 1.25rem !important;
  }
  .me-xl-6 {
    margin-right: 1.5rem !important;
  }
  .me-xl-7 {
    margin-right: 1.75rem !important;
  }
  .me-xl-8 {
    margin-right: 2rem !important;
  }
  .me-xl-9 {
    margin-right: 2.25rem !important;
  }
  .me-xl-10 {
    margin-right: 2.5rem !important;
  }
  .me-xl-11 {
    margin-right: 3rem !important;
  }
  .me-xl-12 {
    margin-right: 3.5rem !important;
  }
  .me-xl-13 {
    margin-right: 4rem !important;
  }
  .me-xl-14 {
    margin-right: 4.5rem !important;
  }
  .me-xl-15 {
    margin-right: 5rem !important;
  }
  .me-xl-16 {
    margin-right: 6rem !important;
  }
  .me-xl-17 {
    margin-right: 7rem !important;
  }
  .me-xl-18 {
    margin-right: 8rem !important;
  }
  .me-xl-19 {
    margin-right: 9rem !important;
  }
  .me-xl-20 {
    margin-right: 10rem !important;
  }
  .me-xl-21 {
    margin-right: 12.5rem !important;
  }
  .me-xl-22 {
    margin-right: 15rem !important;
  }
  .me-xl-23 {
    margin-right: 17.5rem !important;
  }
  .me-xl-24 {
    margin-right: 20rem !important;
  }
  .me-xl-25 {
    margin-right: 22.5rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 0.75rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 1.25rem !important;
  }
  .mb-xl-6 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-7 {
    margin-bottom: 1.75rem !important;
  }
  .mb-xl-8 {
    margin-bottom: 2rem !important;
  }
  .mb-xl-9 {
    margin-bottom: 2.25rem !important;
  }
  .mb-xl-10 {
    margin-bottom: 2.5rem !important;
  }
  .mb-xl-11 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-12 {
    margin-bottom: 3.5rem !important;
  }
  .mb-xl-13 {
    margin-bottom: 4rem !important;
  }
  .mb-xl-14 {
    margin-bottom: 4.5rem !important;
  }
  .mb-xl-15 {
    margin-bottom: 5rem !important;
  }
  .mb-xl-16 {
    margin-bottom: 6rem !important;
  }
  .mb-xl-17 {
    margin-bottom: 7rem !important;
  }
  .mb-xl-18 {
    margin-bottom: 8rem !important;
  }
  .mb-xl-19 {
    margin-bottom: 9rem !important;
  }
  .mb-xl-20 {
    margin-bottom: 10rem !important;
  }
  .mb-xl-21 {
    margin-bottom: 12.5rem !important;
  }
  .mb-xl-22 {
    margin-bottom: 15rem !important;
  }
  .mb-xl-23 {
    margin-bottom: 17.5rem !important;
  }
  .mb-xl-24 {
    margin-bottom: 20rem !important;
  }
  .mb-xl-25 {
    margin-bottom: 22.5rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 0.75rem !important;
  }
  .ms-xl-4 {
    margin-left: 1rem !important;
  }
  .ms-xl-5 {
    margin-left: 1.25rem !important;
  }
  .ms-xl-6 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-7 {
    margin-left: 1.75rem !important;
  }
  .ms-xl-8 {
    margin-left: 2rem !important;
  }
  .ms-xl-9 {
    margin-left: 2.25rem !important;
  }
  .ms-xl-10 {
    margin-left: 2.5rem !important;
  }
  .ms-xl-11 {
    margin-left: 3rem !important;
  }
  .ms-xl-12 {
    margin-left: 3.5rem !important;
  }
  .ms-xl-13 {
    margin-left: 4rem !important;
  }
  .ms-xl-14 {
    margin-left: 4.5rem !important;
  }
  .ms-xl-15 {
    margin-left: 5rem !important;
  }
  .ms-xl-16 {
    margin-left: 6rem !important;
  }
  .ms-xl-17 {
    margin-left: 7rem !important;
  }
  .ms-xl-18 {
    margin-left: 8rem !important;
  }
  .ms-xl-19 {
    margin-left: 9rem !important;
  }
  .ms-xl-20 {
    margin-left: 10rem !important;
  }
  .ms-xl-21 {
    margin-left: 12.5rem !important;
  }
  .ms-xl-22 {
    margin-left: 15rem !important;
  }
  .ms-xl-23 {
    margin-left: 17.5rem !important;
  }
  .ms-xl-24 {
    margin-left: 20rem !important;
  }
  .ms-xl-25 {
    margin-left: 22.5rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -0.75rem !important;
  }
  .m-xl-n4 {
    margin: -1rem !important;
  }
  .m-xl-n5 {
    margin: -1.25rem !important;
  }
  .m-xl-n6 {
    margin: -1.5rem !important;
  }
  .m-xl-n7 {
    margin: -1.75rem !important;
  }
  .m-xl-n8 {
    margin: -2rem !important;
  }
  .m-xl-n9 {
    margin: -2.25rem !important;
  }
  .m-xl-n10 {
    margin: -2.5rem !important;
  }
  .m-xl-n11 {
    margin: -3rem !important;
  }
  .m-xl-n12 {
    margin: -3.5rem !important;
  }
  .m-xl-n13 {
    margin: -4rem !important;
  }
  .m-xl-n14 {
    margin: -4.5rem !important;
  }
  .m-xl-n15 {
    margin: -5rem !important;
  }
  .m-xl-n16 {
    margin: -6rem !important;
  }
  .m-xl-n17 {
    margin: -7rem !important;
  }
  .m-xl-n18 {
    margin: -8rem !important;
  }
  .m-xl-n19 {
    margin: -9rem !important;
  }
  .m-xl-n20 {
    margin: -10rem !important;
  }
  .m-xl-n21 {
    margin: -12.5rem !important;
  }
  .m-xl-n22 {
    margin: -15rem !important;
  }
  .m-xl-n23 {
    margin: -17.5rem !important;
  }
  .m-xl-n24 {
    margin: -20rem !important;
  }
  .m-xl-n25 {
    margin: -22.5rem !important;
  }
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xl-n3 {
    margin-right: -0.75rem !important;
    margin-left: -0.75rem !important;
  }
  .mx-xl-n4 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xl-n5 {
    margin-right: -1.25rem !important;
    margin-left: -1.25rem !important;
  }
  .mx-xl-n6 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xl-n7 {
    margin-right: -1.75rem !important;
    margin-left: -1.75rem !important;
  }
  .mx-xl-n8 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-xl-n9 {
    margin-right: -2.25rem !important;
    margin-left: -2.25rem !important;
  }
  .mx-xl-n10 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-xl-n11 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-xl-n12 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-xl-n13 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-xl-n14 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-xl-n15 {
    margin-right: -5rem !important;
    margin-left: -5rem !important;
  }
  .mx-xl-n16 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-xl-n17 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-xl-n18 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-xl-n19 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-xl-n20 {
    margin-right: -10rem !important;
    margin-left: -10rem !important;
  }
  .mx-xl-n21 {
    margin-right: -12.5rem !important;
    margin-left: -12.5rem !important;
  }
  .mx-xl-n22 {
    margin-right: -15rem !important;
    margin-left: -15rem !important;
  }
  .mx-xl-n23 {
    margin-right: -17.5rem !important;
    margin-left: -17.5rem !important;
  }
  .mx-xl-n24 {
    margin-right: -20rem !important;
    margin-left: -20rem !important;
  }
  .mx-xl-n25 {
    margin-right: -22.5rem !important;
    margin-left: -22.5rem !important;
  }
  .my-xl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xl-n3 {
    margin-top: -0.75rem !important;
    margin-bottom: -0.75rem !important;
  }
  .my-xl-n4 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xl-n5 {
    margin-top: -1.25rem !important;
    margin-bottom: -1.25rem !important;
  }
  .my-xl-n6 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xl-n7 {
    margin-top: -1.75rem !important;
    margin-bottom: -1.75rem !important;
  }
  .my-xl-n8 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-xl-n9 {
    margin-top: -2.25rem !important;
    margin-bottom: -2.25rem !important;
  }
  .my-xl-n10 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-xl-n11 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-xl-n12 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-xl-n13 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-xl-n14 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-xl-n15 {
    margin-top: -5rem !important;
    margin-bottom: -5rem !important;
  }
  .my-xl-n16 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-xl-n17 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-xl-n18 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-xl-n19 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-xl-n20 {
    margin-top: -10rem !important;
    margin-bottom: -10rem !important;
  }
  .my-xl-n21 {
    margin-top: -12.5rem !important;
    margin-bottom: -12.5rem !important;
  }
  .my-xl-n22 {
    margin-top: -15rem !important;
    margin-bottom: -15rem !important;
  }
  .my-xl-n23 {
    margin-top: -17.5rem !important;
    margin-bottom: -17.5rem !important;
  }
  .my-xl-n24 {
    margin-top: -20rem !important;
    margin-bottom: -20rem !important;
  }
  .my-xl-n25 {
    margin-top: -22.5rem !important;
    margin-bottom: -22.5rem !important;
  }
  .mt-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xl-n3 {
    margin-top: -0.75rem !important;
  }
  .mt-xl-n4 {
    margin-top: -1rem !important;
  }
  .mt-xl-n5 {
    margin-top: -1.25rem !important;
  }
  .mt-xl-n6 {
    margin-top: -1.5rem !important;
  }
  .mt-xl-n7 {
    margin-top: -1.75rem !important;
  }
  .mt-xl-n8 {
    margin-top: -2rem !important;
  }
  .mt-xl-n9 {
    margin-top: -2.25rem !important;
  }
  .mt-xl-n10 {
    margin-top: -2.5rem !important;
  }
  .mt-xl-n11 {
    margin-top: -3rem !important;
  }
  .mt-xl-n12 {
    margin-top: -3.5rem !important;
  }
  .mt-xl-n13 {
    margin-top: -4rem !important;
  }
  .mt-xl-n14 {
    margin-top: -4.5rem !important;
  }
  .mt-xl-n15 {
    margin-top: -5rem !important;
  }
  .mt-xl-n16 {
    margin-top: -6rem !important;
  }
  .mt-xl-n17 {
    margin-top: -7rem !important;
  }
  .mt-xl-n18 {
    margin-top: -8rem !important;
  }
  .mt-xl-n19 {
    margin-top: -9rem !important;
  }
  .mt-xl-n20 {
    margin-top: -10rem !important;
  }
  .mt-xl-n21 {
    margin-top: -12.5rem !important;
  }
  .mt-xl-n22 {
    margin-top: -15rem !important;
  }
  .mt-xl-n23 {
    margin-top: -17.5rem !important;
  }
  .mt-xl-n24 {
    margin-top: -20rem !important;
  }
  .mt-xl-n25 {
    margin-top: -22.5rem !important;
  }
  .me-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xl-n3 {
    margin-right: -0.75rem !important;
  }
  .me-xl-n4 {
    margin-right: -1rem !important;
  }
  .me-xl-n5 {
    margin-right: -1.25rem !important;
  }
  .me-xl-n6 {
    margin-right: -1.5rem !important;
  }
  .me-xl-n7 {
    margin-right: -1.75rem !important;
  }
  .me-xl-n8 {
    margin-right: -2rem !important;
  }
  .me-xl-n9 {
    margin-right: -2.25rem !important;
  }
  .me-xl-n10 {
    margin-right: -2.5rem !important;
  }
  .me-xl-n11 {
    margin-right: -3rem !important;
  }
  .me-xl-n12 {
    margin-right: -3.5rem !important;
  }
  .me-xl-n13 {
    margin-right: -4rem !important;
  }
  .me-xl-n14 {
    margin-right: -4.5rem !important;
  }
  .me-xl-n15 {
    margin-right: -5rem !important;
  }
  .me-xl-n16 {
    margin-right: -6rem !important;
  }
  .me-xl-n17 {
    margin-right: -7rem !important;
  }
  .me-xl-n18 {
    margin-right: -8rem !important;
  }
  .me-xl-n19 {
    margin-right: -9rem !important;
  }
  .me-xl-n20 {
    margin-right: -10rem !important;
  }
  .me-xl-n21 {
    margin-right: -12.5rem !important;
  }
  .me-xl-n22 {
    margin-right: -15rem !important;
  }
  .me-xl-n23 {
    margin-right: -17.5rem !important;
  }
  .me-xl-n24 {
    margin-right: -20rem !important;
  }
  .me-xl-n25 {
    margin-right: -22.5rem !important;
  }
  .mb-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xl-n3 {
    margin-bottom: -0.75rem !important;
  }
  .mb-xl-n4 {
    margin-bottom: -1rem !important;
  }
  .mb-xl-n5 {
    margin-bottom: -1.25rem !important;
  }
  .mb-xl-n6 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xl-n7 {
    margin-bottom: -1.75rem !important;
  }
  .mb-xl-n8 {
    margin-bottom: -2rem !important;
  }
  .mb-xl-n9 {
    margin-bottom: -2.25rem !important;
  }
  .mb-xl-n10 {
    margin-bottom: -2.5rem !important;
  }
  .mb-xl-n11 {
    margin-bottom: -3rem !important;
  }
  .mb-xl-n12 {
    margin-bottom: -3.5rem !important;
  }
  .mb-xl-n13 {
    margin-bottom: -4rem !important;
  }
  .mb-xl-n14 {
    margin-bottom: -4.5rem !important;
  }
  .mb-xl-n15 {
    margin-bottom: -5rem !important;
  }
  .mb-xl-n16 {
    margin-bottom: -6rem !important;
  }
  .mb-xl-n17 {
    margin-bottom: -7rem !important;
  }
  .mb-xl-n18 {
    margin-bottom: -8rem !important;
  }
  .mb-xl-n19 {
    margin-bottom: -9rem !important;
  }
  .mb-xl-n20 {
    margin-bottom: -10rem !important;
  }
  .mb-xl-n21 {
    margin-bottom: -12.5rem !important;
  }
  .mb-xl-n22 {
    margin-bottom: -15rem !important;
  }
  .mb-xl-n23 {
    margin-bottom: -17.5rem !important;
  }
  .mb-xl-n24 {
    margin-bottom: -20rem !important;
  }
  .mb-xl-n25 {
    margin-bottom: -22.5rem !important;
  }
  .ms-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xl-n3 {
    margin-left: -0.75rem !important;
  }
  .ms-xl-n4 {
    margin-left: -1rem !important;
  }
  .ms-xl-n5 {
    margin-left: -1.25rem !important;
  }
  .ms-xl-n6 {
    margin-left: -1.5rem !important;
  }
  .ms-xl-n7 {
    margin-left: -1.75rem !important;
  }
  .ms-xl-n8 {
    margin-left: -2rem !important;
  }
  .ms-xl-n9 {
    margin-left: -2.25rem !important;
  }
  .ms-xl-n10 {
    margin-left: -2.5rem !important;
  }
  .ms-xl-n11 {
    margin-left: -3rem !important;
  }
  .ms-xl-n12 {
    margin-left: -3.5rem !important;
  }
  .ms-xl-n13 {
    margin-left: -4rem !important;
  }
  .ms-xl-n14 {
    margin-left: -4.5rem !important;
  }
  .ms-xl-n15 {
    margin-left: -5rem !important;
  }
  .ms-xl-n16 {
    margin-left: -6rem !important;
  }
  .ms-xl-n17 {
    margin-left: -7rem !important;
  }
  .ms-xl-n18 {
    margin-left: -8rem !important;
  }
  .ms-xl-n19 {
    margin-left: -9rem !important;
  }
  .ms-xl-n20 {
    margin-left: -10rem !important;
  }
  .ms-xl-n21 {
    margin-left: -12.5rem !important;
  }
  .ms-xl-n22 {
    margin-left: -15rem !important;
  }
  .ms-xl-n23 {
    margin-left: -17.5rem !important;
  }
  .ms-xl-n24 {
    margin-left: -20rem !important;
  }
  .ms-xl-n25 {
    margin-left: -22.5rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 0.75rem !important;
  }
  .p-xl-4 {
    padding: 1rem !important;
  }
  .p-xl-5 {
    padding: 1.25rem !important;
  }
  .p-xl-6 {
    padding: 1.5rem !important;
  }
  .p-xl-7 {
    padding: 1.75rem !important;
  }
  .p-xl-8 {
    padding: 2rem !important;
  }
  .p-xl-9 {
    padding: 2.25rem !important;
  }
  .p-xl-10 {
    padding: 2.5rem !important;
  }
  .p-xl-11 {
    padding: 3rem !important;
  }
  .p-xl-12 {
    padding: 3.5rem !important;
  }
  .p-xl-13 {
    padding: 4rem !important;
  }
  .p-xl-14 {
    padding: 4.5rem !important;
  }
  .p-xl-15 {
    padding: 5rem !important;
  }
  .p-xl-16 {
    padding: 6rem !important;
  }
  .p-xl-17 {
    padding: 7rem !important;
  }
  .p-xl-18 {
    padding: 8rem !important;
  }
  .p-xl-19 {
    padding: 9rem !important;
  }
  .p-xl-20 {
    padding: 10rem !important;
  }
  .p-xl-21 {
    padding: 12.5rem !important;
  }
  .p-xl-22 {
    padding: 15rem !important;
  }
  .p-xl-23 {
    padding: 17.5rem !important;
  }
  .p-xl-24 {
    padding: 20rem !important;
  }
  .p-xl-25 {
    padding: 22.5rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 0.75rem !important;
    padding-left: 0.75rem !important;
  }
  .px-xl-4 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-5 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important;
  }
  .px-xl-6 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-7 {
    padding-right: 1.75rem !important;
    padding-left: 1.75rem !important;
  }
  .px-xl-8 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-xl-9 {
    padding-right: 2.25rem !important;
    padding-left: 2.25rem !important;
  }
  .px-xl-10 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-xl-11 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-xl-12 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-xl-13 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-xl-14 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-xl-15 {
    padding-right: 5rem !important;
    padding-left: 5rem !important;
  }
  .px-xl-16 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-xl-17 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-xl-18 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-xl-19 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-xl-20 {
    padding-right: 10rem !important;
    padding-left: 10rem !important;
  }
  .px-xl-21 {
    padding-right: 12.5rem !important;
    padding-left: 12.5rem !important;
  }
  .px-xl-22 {
    padding-right: 15rem !important;
    padding-left: 15rem !important;
  }
  .px-xl-23 {
    padding-right: 17.5rem !important;
    padding-left: 17.5rem !important;
  }
  .px-xl-24 {
    padding-right: 20rem !important;
    padding-left: 20rem !important;
  }
  .px-xl-25 {
    padding-right: 22.5rem !important;
    padding-left: 22.5rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 0.75rem !important;
    padding-bottom: 0.75rem !important;
  }
  .py-xl-4 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-5 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .py-xl-6 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-7 {
    padding-top: 1.75rem !important;
    padding-bottom: 1.75rem !important;
  }
  .py-xl-8 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-xl-9 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important;
  }
  .py-xl-10 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-xl-11 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-xl-12 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-xl-13 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-xl-14 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-xl-15 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important;
  }
  .py-xl-16 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-xl-17 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-xl-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-xl-19 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-xl-20 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }
  .py-xl-21 {
    padding-top: 12.5rem !important;
    padding-bottom: 12.5rem !important;
  }
  .py-xl-22 {
    padding-top: 15rem !important;
    padding-bottom: 15rem !important;
  }
  .py-xl-23 {
    padding-top: 17.5rem !important;
    padding-bottom: 17.5rem !important;
  }
  .py-xl-24 {
    padding-top: 20rem !important;
    padding-bottom: 20rem !important;
  }
  .py-xl-25 {
    padding-top: 22.5rem !important;
    padding-bottom: 22.5rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 0.75rem !important;
  }
  .pt-xl-4 {
    padding-top: 1rem !important;
  }
  .pt-xl-5 {
    padding-top: 1.25rem !important;
  }
  .pt-xl-6 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-7 {
    padding-top: 1.75rem !important;
  }
  .pt-xl-8 {
    padding-top: 2rem !important;
  }
  .pt-xl-9 {
    padding-top: 2.25rem !important;
  }
  .pt-xl-10 {
    padding-top: 2.5rem !important;
  }
  .pt-xl-11 {
    padding-top: 3rem !important;
  }
  .pt-xl-12 {
    padding-top: 3.5rem !important;
  }
  .pt-xl-13 {
    padding-top: 4rem !important;
  }
  .pt-xl-14 {
    padding-top: 4.5rem !important;
  }
  .pt-xl-15 {
    padding-top: 5rem !important;
  }
  .pt-xl-16 {
    padding-top: 6rem !important;
  }
  .pt-xl-17 {
    padding-top: 7rem !important;
  }
  .pt-xl-18 {
    padding-top: 8rem !important;
  }
  .pt-xl-19 {
    padding-top: 9rem !important;
  }
  .pt-xl-20 {
    padding-top: 10rem !important;
  }
  .pt-xl-21 {
    padding-top: 12.5rem !important;
  }
  .pt-xl-22 {
    padding-top: 15rem !important;
  }
  .pt-xl-23 {
    padding-top: 17.5rem !important;
  }
  .pt-xl-24 {
    padding-top: 20rem !important;
  }
  .pt-xl-25 {
    padding-top: 22.5rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 0.75rem !important;
  }
  .pe-xl-4 {
    padding-right: 1rem !important;
  }
  .pe-xl-5 {
    padding-right: 1.25rem !important;
  }
  .pe-xl-6 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-7 {
    padding-right: 1.75rem !important;
  }
  .pe-xl-8 {
    padding-right: 2rem !important;
  }
  .pe-xl-9 {
    padding-right: 2.25rem !important;
  }
  .pe-xl-10 {
    padding-right: 2.5rem !important;
  }
  .pe-xl-11 {
    padding-right: 3rem !important;
  }
  .pe-xl-12 {
    padding-right: 3.5rem !important;
  }
  .pe-xl-13 {
    padding-right: 4rem !important;
  }
  .pe-xl-14 {
    padding-right: 4.5rem !important;
  }
  .pe-xl-15 {
    padding-right: 5rem !important;
  }
  .pe-xl-16 {
    padding-right: 6rem !important;
  }
  .pe-xl-17 {
    padding-right: 7rem !important;
  }
  .pe-xl-18 {
    padding-right: 8rem !important;
  }
  .pe-xl-19 {
    padding-right: 9rem !important;
  }
  .pe-xl-20 {
    padding-right: 10rem !important;
  }
  .pe-xl-21 {
    padding-right: 12.5rem !important;
  }
  .pe-xl-22 {
    padding-right: 15rem !important;
  }
  .pe-xl-23 {
    padding-right: 17.5rem !important;
  }
  .pe-xl-24 {
    padding-right: 20rem !important;
  }
  .pe-xl-25 {
    padding-right: 22.5rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 0.75rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 1.25rem !important;
  }
  .pb-xl-6 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-7 {
    padding-bottom: 1.75rem !important;
  }
  .pb-xl-8 {
    padding-bottom: 2rem !important;
  }
  .pb-xl-9 {
    padding-bottom: 2.25rem !important;
  }
  .pb-xl-10 {
    padding-bottom: 2.5rem !important;
  }
  .pb-xl-11 {
    padding-bottom: 3rem !important;
  }
  .pb-xl-12 {
    padding-bottom: 3.5rem !important;
  }
  .pb-xl-13 {
    padding-bottom: 4rem !important;
  }
  .pb-xl-14 {
    padding-bottom: 4.5rem !important;
  }
  .pb-xl-15 {
    padding-bottom: 5rem !important;
  }
  .pb-xl-16 {
    padding-bottom: 6rem !important;
  }
  .pb-xl-17 {
    padding-bottom: 7rem !important;
  }
  .pb-xl-18 {
    padding-bottom: 8rem !important;
  }
  .pb-xl-19 {
    padding-bottom: 9rem !important;
  }
  .pb-xl-20 {
    padding-bottom: 10rem !important;
  }
  .pb-xl-21 {
    padding-bottom: 12.5rem !important;
  }
  .pb-xl-22 {
    padding-bottom: 15rem !important;
  }
  .pb-xl-23 {
    padding-bottom: 17.5rem !important;
  }
  .pb-xl-24 {
    padding-bottom: 20rem !important;
  }
  .pb-xl-25 {
    padding-bottom: 22.5rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 0.75rem !important;
  }
  .ps-xl-4 {
    padding-left: 1rem !important;
  }
  .ps-xl-5 {
    padding-left: 1.25rem !important;
  }
  .ps-xl-6 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-7 {
    padding-left: 1.75rem !important;
  }
  .ps-xl-8 {
    padding-left: 2rem !important;
  }
  .ps-xl-9 {
    padding-left: 2.25rem !important;
  }
  .ps-xl-10 {
    padding-left: 2.5rem !important;
  }
  .ps-xl-11 {
    padding-left: 3rem !important;
  }
  .ps-xl-12 {
    padding-left: 3.5rem !important;
  }
  .ps-xl-13 {
    padding-left: 4rem !important;
  }
  .ps-xl-14 {
    padding-left: 4.5rem !important;
  }
  .ps-xl-15 {
    padding-left: 5rem !important;
  }
  .ps-xl-16 {
    padding-left: 6rem !important;
  }
  .ps-xl-17 {
    padding-left: 7rem !important;
  }
  .ps-xl-18 {
    padding-left: 8rem !important;
  }
  .ps-xl-19 {
    padding-left: 9rem !important;
  }
  .ps-xl-20 {
    padding-left: 10rem !important;
  }
  .ps-xl-21 {
    padding-left: 12.5rem !important;
  }
  .ps-xl-22 {
    padding-left: 15rem !important;
  }
  .ps-xl-23 {
    padding-left: 17.5rem !important;
  }
  .ps-xl-24 {
    padding-left: 20rem !important;
  }
  .ps-xl-25 {
    padding-left: 22.5rem !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 0.75rem !important;
  }
  .gap-xl-4 {
    gap: 1rem !important;
  }
  .gap-xl-5 {
    gap: 1.25rem !important;
  }
  .gap-xl-6 {
    gap: 1.5rem !important;
  }
  .gap-xl-7 {
    gap: 1.75rem !important;
  }
  .gap-xl-8 {
    gap: 2rem !important;
  }
  .gap-xl-9 {
    gap: 2.25rem !important;
  }
  .gap-xl-10 {
    gap: 2.5rem !important;
  }
  .gap-xl-11 {
    gap: 3rem !important;
  }
  .gap-xl-12 {
    gap: 3.5rem !important;
  }
  .gap-xl-13 {
    gap: 4rem !important;
  }
  .gap-xl-14 {
    gap: 4.5rem !important;
  }
  .gap-xl-15 {
    gap: 5rem !important;
  }
  .gap-xl-16 {
    gap: 6rem !important;
  }
  .gap-xl-17 {
    gap: 7rem !important;
  }
  .gap-xl-18 {
    gap: 8rem !important;
  }
  .gap-xl-19 {
    gap: 9rem !important;
  }
  .gap-xl-20 {
    gap: 10rem !important;
  }
  .gap-xl-21 {
    gap: 12.5rem !important;
  }
  .gap-xl-22 {
    gap: 15rem !important;
  }
  .gap-xl-23 {
    gap: 17.5rem !important;
  }
  .gap-xl-24 {
    gap: 20rem !important;
  }
  .gap-xl-25 {
    gap: 22.5rem !important;
  }
  .row-gap-xl-0 {
    row-gap: 0 !important;
  }
  .row-gap-xl-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-xl-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-xl-3 {
    row-gap: 0.75rem !important;
  }
  .row-gap-xl-4 {
    row-gap: 1rem !important;
  }
  .row-gap-xl-5 {
    row-gap: 1.25rem !important;
  }
  .row-gap-xl-6 {
    row-gap: 1.5rem !important;
  }
  .row-gap-xl-7 {
    row-gap: 1.75rem !important;
  }
  .row-gap-xl-8 {
    row-gap: 2rem !important;
  }
  .row-gap-xl-9 {
    row-gap: 2.25rem !important;
  }
  .row-gap-xl-10 {
    row-gap: 2.5rem !important;
  }
  .row-gap-xl-11 {
    row-gap: 3rem !important;
  }
  .row-gap-xl-12 {
    row-gap: 3.5rem !important;
  }
  .row-gap-xl-13 {
    row-gap: 4rem !important;
  }
  .row-gap-xl-14 {
    row-gap: 4.5rem !important;
  }
  .row-gap-xl-15 {
    row-gap: 5rem !important;
  }
  .row-gap-xl-16 {
    row-gap: 6rem !important;
  }
  .row-gap-xl-17 {
    row-gap: 7rem !important;
  }
  .row-gap-xl-18 {
    row-gap: 8rem !important;
  }
  .row-gap-xl-19 {
    row-gap: 9rem !important;
  }
  .row-gap-xl-20 {
    row-gap: 10rem !important;
  }
  .row-gap-xl-21 {
    row-gap: 12.5rem !important;
  }
  .row-gap-xl-22 {
    row-gap: 15rem !important;
  }
  .row-gap-xl-23 {
    row-gap: 17.5rem !important;
  }
  .row-gap-xl-24 {
    row-gap: 20rem !important;
  }
  .row-gap-xl-25 {
    row-gap: 22.5rem !important;
  }
  .column-gap-xl-0 {
    -moz-column-gap: 0 !important;
    column-gap: 0 !important;
  }
  .column-gap-xl-1 {
    -moz-column-gap: 0.25rem !important;
    column-gap: 0.25rem !important;
  }
  .column-gap-xl-2 {
    -moz-column-gap: 0.5rem !important;
    column-gap: 0.5rem !important;
  }
  .column-gap-xl-3 {
    -moz-column-gap: 0.75rem !important;
    column-gap: 0.75rem !important;
  }
  .column-gap-xl-4 {
    -moz-column-gap: 1rem !important;
    column-gap: 1rem !important;
  }
  .column-gap-xl-5 {
    -moz-column-gap: 1.25rem !important;
    column-gap: 1.25rem !important;
  }
  .column-gap-xl-6 {
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important;
  }
  .column-gap-xl-7 {
    -moz-column-gap: 1.75rem !important;
    column-gap: 1.75rem !important;
  }
  .column-gap-xl-8 {
    -moz-column-gap: 2rem !important;
    column-gap: 2rem !important;
  }
  .column-gap-xl-9 {
    -moz-column-gap: 2.25rem !important;
    column-gap: 2.25rem !important;
  }
  .column-gap-xl-10 {
    -moz-column-gap: 2.5rem !important;
    column-gap: 2.5rem !important;
  }
  .column-gap-xl-11 {
    -moz-column-gap: 3rem !important;
    column-gap: 3rem !important;
  }
  .column-gap-xl-12 {
    -moz-column-gap: 3.5rem !important;
    column-gap: 3.5rem !important;
  }
  .column-gap-xl-13 {
    -moz-column-gap: 4rem !important;
    column-gap: 4rem !important;
  }
  .column-gap-xl-14 {
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important;
  }
  .column-gap-xl-15 {
    -moz-column-gap: 5rem !important;
    column-gap: 5rem !important;
  }
  .column-gap-xl-16 {
    -moz-column-gap: 6rem !important;
    column-gap: 6rem !important;
  }
  .column-gap-xl-17 {
    -moz-column-gap: 7rem !important;
    column-gap: 7rem !important;
  }
  .column-gap-xl-18 {
    -moz-column-gap: 8rem !important;
    column-gap: 8rem !important;
  }
  .column-gap-xl-19 {
    -moz-column-gap: 9rem !important;
    column-gap: 9rem !important;
  }
  .column-gap-xl-20 {
    -moz-column-gap: 10rem !important;
    column-gap: 10rem !important;
  }
  .column-gap-xl-21 {
    -moz-column-gap: 12.5rem !important;
    column-gap: 12.5rem !important;
  }
  .column-gap-xl-22 {
    -moz-column-gap: 15rem !important;
    column-gap: 15rem !important;
  }
  .column-gap-xl-23 {
    -moz-column-gap: 17.5rem !important;
    column-gap: 17.5rem !important;
  }
  .column-gap-xl-24 {
    -moz-column-gap: 20rem !important;
    column-gap: 20rem !important;
  }
  .column-gap-xl-25 {
    -moz-column-gap: 22.5rem !important;
    column-gap: 22.5rem !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}
@media (min-width: 1400px) {
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .object-fit-xxl-contain {
    -o-object-fit: contain !important;
    object-fit: contain !important;
  }
  .object-fit-xxl-cover {
    -o-object-fit: cover !important;
    object-fit: cover !important;
  }
  .object-fit-xxl-fill {
    -o-object-fit: fill !important;
    object-fit: fill !important;
  }
  .object-fit-xxl-scale {
    -o-object-fit: scale-down !important;
    object-fit: scale-down !important;
  }
  .object-fit-xxl-none {
    -o-object-fit: none !important;
    object-fit: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-inline-grid {
    display: inline-grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .flex-xxl-fill {
    flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    flex-direction: row !important;
  }
  .flex-xxl-column {
    flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    flex-wrap: wrap-reverse !important;
  }
  .justify-content-xxl-start {
    justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    justify-content: center !important;
  }
  .justify-content-xxl-between {
    justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    align-items: flex-start !important;
  }
  .align-items-xxl-end {
    align-items: flex-end !important;
  }
  .align-items-xxl-center {
    align-items: center !important;
  }
  .align-items-xxl-baseline {
    align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    align-items: stretch !important;
  }
  .align-content-xxl-start {
    align-content: flex-start !important;
  }
  .align-content-xxl-end {
    align-content: flex-end !important;
  }
  .align-content-xxl-center {
    align-content: center !important;
  }
  .align-content-xxl-between {
    align-content: space-between !important;
  }
  .align-content-xxl-around {
    align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    align-content: stretch !important;
  }
  .align-self-xxl-auto {
    align-self: auto !important;
  }
  .align-self-xxl-start {
    align-self: flex-start !important;
  }
  .align-self-xxl-end {
    align-self: flex-end !important;
  }
  .align-self-xxl-center {
    align-self: center !important;
  }
  .align-self-xxl-baseline {
    align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    align-self: stretch !important;
  }
  .order-xxl-first {
    order: -1 !important;
  }
  .order-xxl-0 {
    order: 0 !important;
  }
  .order-xxl-1 {
    order: 1 !important;
  }
  .order-xxl-2 {
    order: 2 !important;
  }
  .order-xxl-3 {
    order: 3 !important;
  }
  .order-xxl-4 {
    order: 4 !important;
  }
  .order-xxl-5 {
    order: 5 !important;
  }
  .order-xxl-last {
    order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 0.75rem !important;
  }
  .m-xxl-4 {
    margin: 1rem !important;
  }
  .m-xxl-5 {
    margin: 1.25rem !important;
  }
  .m-xxl-6 {
    margin: 1.5rem !important;
  }
  .m-xxl-7 {
    margin: 1.75rem !important;
  }
  .m-xxl-8 {
    margin: 2rem !important;
  }
  .m-xxl-9 {
    margin: 2.25rem !important;
  }
  .m-xxl-10 {
    margin: 2.5rem !important;
  }
  .m-xxl-11 {
    margin: 3rem !important;
  }
  .m-xxl-12 {
    margin: 3.5rem !important;
  }
  .m-xxl-13 {
    margin: 4rem !important;
  }
  .m-xxl-14 {
    margin: 4.5rem !important;
  }
  .m-xxl-15 {
    margin: 5rem !important;
  }
  .m-xxl-16 {
    margin: 6rem !important;
  }
  .m-xxl-17 {
    margin: 7rem !important;
  }
  .m-xxl-18 {
    margin: 8rem !important;
  }
  .m-xxl-19 {
    margin: 9rem !important;
  }
  .m-xxl-20 {
    margin: 10rem !important;
  }
  .m-xxl-21 {
    margin: 12.5rem !important;
  }
  .m-xxl-22 {
    margin: 15rem !important;
  }
  .m-xxl-23 {
    margin: 17.5rem !important;
  }
  .m-xxl-24 {
    margin: 20rem !important;
  }
  .m-xxl-25 {
    margin: 22.5rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 0.75rem !important;
    margin-left: 0.75rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-5 {
    margin-right: 1.25rem !important;
    margin-left: 1.25rem !important;
  }
  .mx-xxl-6 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-7 {
    margin-right: 1.75rem !important;
    margin-left: 1.75rem !important;
  }
  .mx-xxl-8 {
    margin-right: 2rem !important;
    margin-left: 2rem !important;
  }
  .mx-xxl-9 {
    margin-right: 2.25rem !important;
    margin-left: 2.25rem !important;
  }
  .mx-xxl-10 {
    margin-right: 2.5rem !important;
    margin-left: 2.5rem !important;
  }
  .mx-xxl-11 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-12 {
    margin-right: 3.5rem !important;
    margin-left: 3.5rem !important;
  }
  .mx-xxl-13 {
    margin-right: 4rem !important;
    margin-left: 4rem !important;
  }
  .mx-xxl-14 {
    margin-right: 4.5rem !important;
    margin-left: 4.5rem !important;
  }
  .mx-xxl-15 {
    margin-right: 5rem !important;
    margin-left: 5rem !important;
  }
  .mx-xxl-16 {
    margin-right: 6rem !important;
    margin-left: 6rem !important;
  }
  .mx-xxl-17 {
    margin-right: 7rem !important;
    margin-left: 7rem !important;
  }
  .mx-xxl-18 {
    margin-right: 8rem !important;
    margin-left: 8rem !important;
  }
  .mx-xxl-19 {
    margin-right: 9rem !important;
    margin-left: 9rem !important;
  }
  .mx-xxl-20 {
    margin-right: 10rem !important;
    margin-left: 10rem !important;
  }
  .mx-xxl-21 {
    margin-right: 12.5rem !important;
    margin-left: 12.5rem !important;
  }
  .mx-xxl-22 {
    margin-right: 15rem !important;
    margin-left: 15rem !important;
  }
  .mx-xxl-23 {
    margin-right: 17.5rem !important;
    margin-left: 17.5rem !important;
  }
  .mx-xxl-24 {
    margin-right: 20rem !important;
    margin-left: 20rem !important;
  }
  .mx-xxl-25 {
    margin-right: 22.5rem !important;
    margin-left: 22.5rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 0.75rem !important;
    margin-bottom: 0.75rem !important;
  }
  .my-xxl-4 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-5 {
    margin-top: 1.25rem !important;
    margin-bottom: 1.25rem !important;
  }
  .my-xxl-6 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-7 {
    margin-top: 1.75rem !important;
    margin-bottom: 1.75rem !important;
  }
  .my-xxl-8 {
    margin-top: 2rem !important;
    margin-bottom: 2rem !important;
  }
  .my-xxl-9 {
    margin-top: 2.25rem !important;
    margin-bottom: 2.25rem !important;
  }
  .my-xxl-10 {
    margin-top: 2.5rem !important;
    margin-bottom: 2.5rem !important;
  }
  .my-xxl-11 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-12 {
    margin-top: 3.5rem !important;
    margin-bottom: 3.5rem !important;
  }
  .my-xxl-13 {
    margin-top: 4rem !important;
    margin-bottom: 4rem !important;
  }
  .my-xxl-14 {
    margin-top: 4.5rem !important;
    margin-bottom: 4.5rem !important;
  }
  .my-xxl-15 {
    margin-top: 5rem !important;
    margin-bottom: 5rem !important;
  }
  .my-xxl-16 {
    margin-top: 6rem !important;
    margin-bottom: 6rem !important;
  }
  .my-xxl-17 {
    margin-top: 7rem !important;
    margin-bottom: 7rem !important;
  }
  .my-xxl-18 {
    margin-top: 8rem !important;
    margin-bottom: 8rem !important;
  }
  .my-xxl-19 {
    margin-top: 9rem !important;
    margin-bottom: 9rem !important;
  }
  .my-xxl-20 {
    margin-top: 10rem !important;
    margin-bottom: 10rem !important;
  }
  .my-xxl-21 {
    margin-top: 12.5rem !important;
    margin-bottom: 12.5rem !important;
  }
  .my-xxl-22 {
    margin-top: 15rem !important;
    margin-bottom: 15rem !important;
  }
  .my-xxl-23 {
    margin-top: 17.5rem !important;
    margin-bottom: 17.5rem !important;
  }
  .my-xxl-24 {
    margin-top: 20rem !important;
    margin-bottom: 20rem !important;
  }
  .my-xxl-25 {
    margin-top: 22.5rem !important;
    margin-bottom: 22.5rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 0.75rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1rem !important;
  }
  .mt-xxl-5 {
    margin-top: 1.25rem !important;
  }
  .mt-xxl-6 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-7 {
    margin-top: 1.75rem !important;
  }
  .mt-xxl-8 {
    margin-top: 2rem !important;
  }
  .mt-xxl-9 {
    margin-top: 2.25rem !important;
  }
  .mt-xxl-10 {
    margin-top: 2.5rem !important;
  }
  .mt-xxl-11 {
    margin-top: 3rem !important;
  }
  .mt-xxl-12 {
    margin-top: 3.5rem !important;
  }
  .mt-xxl-13 {
    margin-top: 4rem !important;
  }
  .mt-xxl-14 {
    margin-top: 4.5rem !important;
  }
  .mt-xxl-15 {
    margin-top: 5rem !important;
  }
  .mt-xxl-16 {
    margin-top: 6rem !important;
  }
  .mt-xxl-17 {
    margin-top: 7rem !important;
  }
  .mt-xxl-18 {
    margin-top: 8rem !important;
  }
  .mt-xxl-19 {
    margin-top: 9rem !important;
  }
  .mt-xxl-20 {
    margin-top: 10rem !important;
  }
  .mt-xxl-21 {
    margin-top: 12.5rem !important;
  }
  .mt-xxl-22 {
    margin-top: 15rem !important;
  }
  .mt-xxl-23 {
    margin-top: 17.5rem !important;
  }
  .mt-xxl-24 {
    margin-top: 20rem !important;
  }
  .mt-xxl-25 {
    margin-top: 22.5rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 0.75rem !important;
  }
  .me-xxl-4 {
    margin-right: 1rem !important;
  }
  .me-xxl-5 {
    margin-right: 1.25rem !important;
  }
  .me-xxl-6 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-7 {
    margin-right: 1.75rem !important;
  }
  .me-xxl-8 {
    margin-right: 2rem !important;
  }
  .me-xxl-9 {
    margin-right: 2.25rem !important;
  }
  .me-xxl-10 {
    margin-right: 2.5rem !important;
  }
  .me-xxl-11 {
    margin-right: 3rem !important;
  }
  .me-xxl-12 {
    margin-right: 3.5rem !important;
  }
  .me-xxl-13 {
    margin-right: 4rem !important;
  }
  .me-xxl-14 {
    margin-right: 4.5rem !important;
  }
  .me-xxl-15 {
    margin-right: 5rem !important;
  }
  .me-xxl-16 {
    margin-right: 6rem !important;
  }
  .me-xxl-17 {
    margin-right: 7rem !important;
  }
  .me-xxl-18 {
    margin-right: 8rem !important;
  }
  .me-xxl-19 {
    margin-right: 9rem !important;
  }
  .me-xxl-20 {
    margin-right: 10rem !important;
  }
  .me-xxl-21 {
    margin-right: 12.5rem !important;
  }
  .me-xxl-22 {
    margin-right: 15rem !important;
  }
  .me-xxl-23 {
    margin-right: 17.5rem !important;
  }
  .me-xxl-24 {
    margin-right: 20rem !important;
  }
  .me-xxl-25 {
    margin-right: 22.5rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 0.75rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 1.25rem !important;
  }
  .mb-xxl-6 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-7 {
    margin-bottom: 1.75rem !important;
  }
  .mb-xxl-8 {
    margin-bottom: 2rem !important;
  }
  .mb-xxl-9 {
    margin-bottom: 2.25rem !important;
  }
  .mb-xxl-10 {
    margin-bottom: 2.5rem !important;
  }
  .mb-xxl-11 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-12 {
    margin-bottom: 3.5rem !important;
  }
  .mb-xxl-13 {
    margin-bottom: 4rem !important;
  }
  .mb-xxl-14 {
    margin-bottom: 4.5rem !important;
  }
  .mb-xxl-15 {
    margin-bottom: 5rem !important;
  }
  .mb-xxl-16 {
    margin-bottom: 6rem !important;
  }
  .mb-xxl-17 {
    margin-bottom: 7rem !important;
  }
  .mb-xxl-18 {
    margin-bottom: 8rem !important;
  }
  .mb-xxl-19 {
    margin-bottom: 9rem !important;
  }
  .mb-xxl-20 {
    margin-bottom: 10rem !important;
  }
  .mb-xxl-21 {
    margin-bottom: 12.5rem !important;
  }
  .mb-xxl-22 {
    margin-bottom: 15rem !important;
  }
  .mb-xxl-23 {
    margin-bottom: 17.5rem !important;
  }
  .mb-xxl-24 {
    margin-bottom: 20rem !important;
  }
  .mb-xxl-25 {
    margin-bottom: 22.5rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 0.75rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1rem !important;
  }
  .ms-xxl-5 {
    margin-left: 1.25rem !important;
  }
  .ms-xxl-6 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-7 {
    margin-left: 1.75rem !important;
  }
  .ms-xxl-8 {
    margin-left: 2rem !important;
  }
  .ms-xxl-9 {
    margin-left: 2.25rem !important;
  }
  .ms-xxl-10 {
    margin-left: 2.5rem !important;
  }
  .ms-xxl-11 {
    margin-left: 3rem !important;
  }
  .ms-xxl-12 {
    margin-left: 3.5rem !important;
  }
  .ms-xxl-13 {
    margin-left: 4rem !important;
  }
  .ms-xxl-14 {
    margin-left: 4.5rem !important;
  }
  .ms-xxl-15 {
    margin-left: 5rem !important;
  }
  .ms-xxl-16 {
    margin-left: 6rem !important;
  }
  .ms-xxl-17 {
    margin-left: 7rem !important;
  }
  .ms-xxl-18 {
    margin-left: 8rem !important;
  }
  .ms-xxl-19 {
    margin-left: 9rem !important;
  }
  .ms-xxl-20 {
    margin-left: 10rem !important;
  }
  .ms-xxl-21 {
    margin-left: 12.5rem !important;
  }
  .ms-xxl-22 {
    margin-left: 15rem !important;
  }
  .ms-xxl-23 {
    margin-left: 17.5rem !important;
  }
  .ms-xxl-24 {
    margin-left: 20rem !important;
  }
  .ms-xxl-25 {
    margin-left: 22.5rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .m-xxl-n1 {
    margin: -0.25rem !important;
  }
  .m-xxl-n2 {
    margin: -0.5rem !important;
  }
  .m-xxl-n3 {
    margin: -0.75rem !important;
  }
  .m-xxl-n4 {
    margin: -1rem !important;
  }
  .m-xxl-n5 {
    margin: -1.25rem !important;
  }
  .m-xxl-n6 {
    margin: -1.5rem !important;
  }
  .m-xxl-n7 {
    margin: -1.75rem !important;
  }
  .m-xxl-n8 {
    margin: -2rem !important;
  }
  .m-xxl-n9 {
    margin: -2.25rem !important;
  }
  .m-xxl-n10 {
    margin: -2.5rem !important;
  }
  .m-xxl-n11 {
    margin: -3rem !important;
  }
  .m-xxl-n12 {
    margin: -3.5rem !important;
  }
  .m-xxl-n13 {
    margin: -4rem !important;
  }
  .m-xxl-n14 {
    margin: -4.5rem !important;
  }
  .m-xxl-n15 {
    margin: -5rem !important;
  }
  .m-xxl-n16 {
    margin: -6rem !important;
  }
  .m-xxl-n17 {
    margin: -7rem !important;
  }
  .m-xxl-n18 {
    margin: -8rem !important;
  }
  .m-xxl-n19 {
    margin: -9rem !important;
  }
  .m-xxl-n20 {
    margin: -10rem !important;
  }
  .m-xxl-n21 {
    margin: -12.5rem !important;
  }
  .m-xxl-n22 {
    margin: -15rem !important;
  }
  .m-xxl-n23 {
    margin: -17.5rem !important;
  }
  .m-xxl-n24 {
    margin: -20rem !important;
  }
  .m-xxl-n25 {
    margin: -22.5rem !important;
  }
  .mx-xxl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xxl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xxl-n3 {
    margin-right: -0.75rem !important;
    margin-left: -0.75rem !important;
  }
  .mx-xxl-n4 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xxl-n5 {
    margin-right: -1.25rem !important;
    margin-left: -1.25rem !important;
  }
  .mx-xxl-n6 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xxl-n7 {
    margin-right: -1.75rem !important;
    margin-left: -1.75rem !important;
  }
  .mx-xxl-n8 {
    margin-right: -2rem !important;
    margin-left: -2rem !important;
  }
  .mx-xxl-n9 {
    margin-right: -2.25rem !important;
    margin-left: -2.25rem !important;
  }
  .mx-xxl-n10 {
    margin-right: -2.5rem !important;
    margin-left: -2.5rem !important;
  }
  .mx-xxl-n11 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .mx-xxl-n12 {
    margin-right: -3.5rem !important;
    margin-left: -3.5rem !important;
  }
  .mx-xxl-n13 {
    margin-right: -4rem !important;
    margin-left: -4rem !important;
  }
  .mx-xxl-n14 {
    margin-right: -4.5rem !important;
    margin-left: -4.5rem !important;
  }
  .mx-xxl-n15 {
    margin-right: -5rem !important;
    margin-left: -5rem !important;
  }
  .mx-xxl-n16 {
    margin-right: -6rem !important;
    margin-left: -6rem !important;
  }
  .mx-xxl-n17 {
    margin-right: -7rem !important;
    margin-left: -7rem !important;
  }
  .mx-xxl-n18 {
    margin-right: -8rem !important;
    margin-left: -8rem !important;
  }
  .mx-xxl-n19 {
    margin-right: -9rem !important;
    margin-left: -9rem !important;
  }
  .mx-xxl-n20 {
    margin-right: -10rem !important;
    margin-left: -10rem !important;
  }
  .mx-xxl-n21 {
    margin-right: -12.5rem !important;
    margin-left: -12.5rem !important;
  }
  .mx-xxl-n22 {
    margin-right: -15rem !important;
    margin-left: -15rem !important;
  }
  .mx-xxl-n23 {
    margin-right: -17.5rem !important;
    margin-left: -17.5rem !important;
  }
  .mx-xxl-n24 {
    margin-right: -20rem !important;
    margin-left: -20rem !important;
  }
  .mx-xxl-n25 {
    margin-right: -22.5rem !important;
    margin-left: -22.5rem !important;
  }
  .my-xxl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xxl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xxl-n3 {
    margin-top: -0.75rem !important;
    margin-bottom: -0.75rem !important;
  }
  .my-xxl-n4 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xxl-n5 {
    margin-top: -1.25rem !important;
    margin-bottom: -1.25rem !important;
  }
  .my-xxl-n6 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xxl-n7 {
    margin-top: -1.75rem !important;
    margin-bottom: -1.75rem !important;
  }
  .my-xxl-n8 {
    margin-top: -2rem !important;
    margin-bottom: -2rem !important;
  }
  .my-xxl-n9 {
    margin-top: -2.25rem !important;
    margin-bottom: -2.25rem !important;
  }
  .my-xxl-n10 {
    margin-top: -2.5rem !important;
    margin-bottom: -2.5rem !important;
  }
  .my-xxl-n11 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .my-xxl-n12 {
    margin-top: -3.5rem !important;
    margin-bottom: -3.5rem !important;
  }
  .my-xxl-n13 {
    margin-top: -4rem !important;
    margin-bottom: -4rem !important;
  }
  .my-xxl-n14 {
    margin-top: -4.5rem !important;
    margin-bottom: -4.5rem !important;
  }
  .my-xxl-n15 {
    margin-top: -5rem !important;
    margin-bottom: -5rem !important;
  }
  .my-xxl-n16 {
    margin-top: -6rem !important;
    margin-bottom: -6rem !important;
  }
  .my-xxl-n17 {
    margin-top: -7rem !important;
    margin-bottom: -7rem !important;
  }
  .my-xxl-n18 {
    margin-top: -8rem !important;
    margin-bottom: -8rem !important;
  }
  .my-xxl-n19 {
    margin-top: -9rem !important;
    margin-bottom: -9rem !important;
  }
  .my-xxl-n20 {
    margin-top: -10rem !important;
    margin-bottom: -10rem !important;
  }
  .my-xxl-n21 {
    margin-top: -12.5rem !important;
    margin-bottom: -12.5rem !important;
  }
  .my-xxl-n22 {
    margin-top: -15rem !important;
    margin-bottom: -15rem !important;
  }
  .my-xxl-n23 {
    margin-top: -17.5rem !important;
    margin-bottom: -17.5rem !important;
  }
  .my-xxl-n24 {
    margin-top: -20rem !important;
    margin-bottom: -20rem !important;
  }
  .my-xxl-n25 {
    margin-top: -22.5rem !important;
    margin-bottom: -22.5rem !important;
  }
  .mt-xxl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xxl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xxl-n3 {
    margin-top: -0.75rem !important;
  }
  .mt-xxl-n4 {
    margin-top: -1rem !important;
  }
  .mt-xxl-n5 {
    margin-top: -1.25rem !important;
  }
  .mt-xxl-n6 {
    margin-top: -1.5rem !important;
  }
  .mt-xxl-n7 {
    margin-top: -1.75rem !important;
  }
  .mt-xxl-n8 {
    margin-top: -2rem !important;
  }
  .mt-xxl-n9 {
    margin-top: -2.25rem !important;
  }
  .mt-xxl-n10 {
    margin-top: -2.5rem !important;
  }
  .mt-xxl-n11 {
    margin-top: -3rem !important;
  }
  .mt-xxl-n12 {
    margin-top: -3.5rem !important;
  }
  .mt-xxl-n13 {
    margin-top: -4rem !important;
  }
  .mt-xxl-n14 {
    margin-top: -4.5rem !important;
  }
  .mt-xxl-n15 {
    margin-top: -5rem !important;
  }
  .mt-xxl-n16 {
    margin-top: -6rem !important;
  }
  .mt-xxl-n17 {
    margin-top: -7rem !important;
  }
  .mt-xxl-n18 {
    margin-top: -8rem !important;
  }
  .mt-xxl-n19 {
    margin-top: -9rem !important;
  }
  .mt-xxl-n20 {
    margin-top: -10rem !important;
  }
  .mt-xxl-n21 {
    margin-top: -12.5rem !important;
  }
  .mt-xxl-n22 {
    margin-top: -15rem !important;
  }
  .mt-xxl-n23 {
    margin-top: -17.5rem !important;
  }
  .mt-xxl-n24 {
    margin-top: -20rem !important;
  }
  .mt-xxl-n25 {
    margin-top: -22.5rem !important;
  }
  .me-xxl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xxl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xxl-n3 {
    margin-right: -0.75rem !important;
  }
  .me-xxl-n4 {
    margin-right: -1rem !important;
  }
  .me-xxl-n5 {
    margin-right: -1.25rem !important;
  }
  .me-xxl-n6 {
    margin-right: -1.5rem !important;
  }
  .me-xxl-n7 {
    margin-right: -1.75rem !important;
  }
  .me-xxl-n8 {
    margin-right: -2rem !important;
  }
  .me-xxl-n9 {
    margin-right: -2.25rem !important;
  }
  .me-xxl-n10 {
    margin-right: -2.5rem !important;
  }
  .me-xxl-n11 {
    margin-right: -3rem !important;
  }
  .me-xxl-n12 {
    margin-right: -3.5rem !important;
  }
  .me-xxl-n13 {
    margin-right: -4rem !important;
  }
  .me-xxl-n14 {
    margin-right: -4.5rem !important;
  }
  .me-xxl-n15 {
    margin-right: -5rem !important;
  }
  .me-xxl-n16 {
    margin-right: -6rem !important;
  }
  .me-xxl-n17 {
    margin-right: -7rem !important;
  }
  .me-xxl-n18 {
    margin-right: -8rem !important;
  }
  .me-xxl-n19 {
    margin-right: -9rem !important;
  }
  .me-xxl-n20 {
    margin-right: -10rem !important;
  }
  .me-xxl-n21 {
    margin-right: -12.5rem !important;
  }
  .me-xxl-n22 {
    margin-right: -15rem !important;
  }
  .me-xxl-n23 {
    margin-right: -17.5rem !important;
  }
  .me-xxl-n24 {
    margin-right: -20rem !important;
  }
  .me-xxl-n25 {
    margin-right: -22.5rem !important;
  }
  .mb-xxl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xxl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xxl-n3 {
    margin-bottom: -0.75rem !important;
  }
  .mb-xxl-n4 {
    margin-bottom: -1rem !important;
  }
  .mb-xxl-n5 {
    margin-bottom: -1.25rem !important;
  }
  .mb-xxl-n6 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xxl-n7 {
    margin-bottom: -1.75rem !important;
  }
  .mb-xxl-n8 {
    margin-bottom: -2rem !important;
  }
  .mb-xxl-n9 {
    margin-bottom: -2.25rem !important;
  }
  .mb-xxl-n10 {
    margin-bottom: -2.5rem !important;
  }
  .mb-xxl-n11 {
    margin-bottom: -3rem !important;
  }
  .mb-xxl-n12 {
    margin-bottom: -3.5rem !important;
  }
  .mb-xxl-n13 {
    margin-bottom: -4rem !important;
  }
  .mb-xxl-n14 {
    margin-bottom: -4.5rem !important;
  }
  .mb-xxl-n15 {
    margin-bottom: -5rem !important;
  }
  .mb-xxl-n16 {
    margin-bottom: -6rem !important;
  }
  .mb-xxl-n17 {
    margin-bottom: -7rem !important;
  }
  .mb-xxl-n18 {
    margin-bottom: -8rem !important;
  }
  .mb-xxl-n19 {
    margin-bottom: -9rem !important;
  }
  .mb-xxl-n20 {
    margin-bottom: -10rem !important;
  }
  .mb-xxl-n21 {
    margin-bottom: -12.5rem !important;
  }
  .mb-xxl-n22 {
    margin-bottom: -15rem !important;
  }
  .mb-xxl-n23 {
    margin-bottom: -17.5rem !important;
  }
  .mb-xxl-n24 {
    margin-bottom: -20rem !important;
  }
  .mb-xxl-n25 {
    margin-bottom: -22.5rem !important;
  }
  .ms-xxl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xxl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xxl-n3 {
    margin-left: -0.75rem !important;
  }
  .ms-xxl-n4 {
    margin-left: -1rem !important;
  }
  .ms-xxl-n5 {
    margin-left: -1.25rem !important;
  }
  .ms-xxl-n6 {
    margin-left: -1.5rem !important;
  }
  .ms-xxl-n7 {
    margin-left: -1.75rem !important;
  }
  .ms-xxl-n8 {
    margin-left: -2rem !important;
  }
  .ms-xxl-n9 {
    margin-left: -2.25rem !important;
  }
  .ms-xxl-n10 {
    margin-left: -2.5rem !important;
  }
  .ms-xxl-n11 {
    margin-left: -3rem !important;
  }
  .ms-xxl-n12 {
    margin-left: -3.5rem !important;
  }
  .ms-xxl-n13 {
    margin-left: -4rem !important;
  }
  .ms-xxl-n14 {
    margin-left: -4.5rem !important;
  }
  .ms-xxl-n15 {
    margin-left: -5rem !important;
  }
  .ms-xxl-n16 {
    margin-left: -6rem !important;
  }
  .ms-xxl-n17 {
    margin-left: -7rem !important;
  }
  .ms-xxl-n18 {
    margin-left: -8rem !important;
  }
  .ms-xxl-n19 {
    margin-left: -9rem !important;
  }
  .ms-xxl-n20 {
    margin-left: -10rem !important;
  }
  .ms-xxl-n21 {
    margin-left: -12.5rem !important;
  }
  .ms-xxl-n22 {
    margin-left: -15rem !important;
  }
  .ms-xxl-n23 {
    margin-left: -17.5rem !important;
  }
  .ms-xxl-n24 {
    margin-left: -20rem !important;
  }
  .ms-xxl-n25 {
    margin-left: -22.5rem !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 0.75rem !important;
  }
  .p-xxl-4 {
    padding: 1rem !important;
  }
  .p-xxl-5 {
    padding: 1.25rem !important;
  }
  .p-xxl-6 {
    padding: 1.5rem !important;
  }
  .p-xxl-7 {
    padding: 1.75rem !important;
  }
  .p-xxl-8 {
    padding: 2rem !important;
  }
  .p-xxl-9 {
    padding: 2.25rem !important;
  }
  .p-xxl-10 {
    padding: 2.5rem !important;
  }
  .p-xxl-11 {
    padding: 3rem !important;
  }
  .p-xxl-12 {
    padding: 3.5rem !important;
  }
  .p-xxl-13 {
    padding: 4rem !important;
  }
  .p-xxl-14 {
    padding: 4.5rem !important;
  }
  .p-xxl-15 {
    padding: 5rem !important;
  }
  .p-xxl-16 {
    padding: 6rem !important;
  }
  .p-xxl-17 {
    padding: 7rem !important;
  }
  .p-xxl-18 {
    padding: 8rem !important;
  }
  .p-xxl-19 {
    padding: 9rem !important;
  }
  .p-xxl-20 {
    padding: 10rem !important;
  }
  .p-xxl-21 {
    padding: 12.5rem !important;
  }
  .p-xxl-22 {
    padding: 15rem !important;
  }
  .p-xxl-23 {
    padding: 17.5rem !important;
  }
  .p-xxl-24 {
    padding: 20rem !important;
  }
  .p-xxl-25 {
    padding: 22.5rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 0.75rem !important;
    padding-left: 0.75rem !important;
  }
  .px-xxl-4 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-5 {
    padding-right: 1.25rem !important;
    padding-left: 1.25rem !important;
  }
  .px-xxl-6 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-7 {
    padding-right: 1.75rem !important;
    padding-left: 1.75rem !important;
  }
  .px-xxl-8 {
    padding-right: 2rem !important;
    padding-left: 2rem !important;
  }
  .px-xxl-9 {
    padding-right: 2.25rem !important;
    padding-left: 2.25rem !important;
  }
  .px-xxl-10 {
    padding-right: 2.5rem !important;
    padding-left: 2.5rem !important;
  }
  .px-xxl-11 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .px-xxl-12 {
    padding-right: 3.5rem !important;
    padding-left: 3.5rem !important;
  }
  .px-xxl-13 {
    padding-right: 4rem !important;
    padding-left: 4rem !important;
  }
  .px-xxl-14 {
    padding-right: 4.5rem !important;
    padding-left: 4.5rem !important;
  }
  .px-xxl-15 {
    padding-right: 5rem !important;
    padding-left: 5rem !important;
  }
  .px-xxl-16 {
    padding-right: 6rem !important;
    padding-left: 6rem !important;
  }
  .px-xxl-17 {
    padding-right: 7rem !important;
    padding-left: 7rem !important;
  }
  .px-xxl-18 {
    padding-right: 8rem !important;
    padding-left: 8rem !important;
  }
  .px-xxl-19 {
    padding-right: 9rem !important;
    padding-left: 9rem !important;
  }
  .px-xxl-20 {
    padding-right: 10rem !important;
    padding-left: 10rem !important;
  }
  .px-xxl-21 {
    padding-right: 12.5rem !important;
    padding-left: 12.5rem !important;
  }
  .px-xxl-22 {
    padding-right: 15rem !important;
    padding-left: 15rem !important;
  }
  .px-xxl-23 {
    padding-right: 17.5rem !important;
    padding-left: 17.5rem !important;
  }
  .px-xxl-24 {
    padding-right: 20rem !important;
    padding-left: 20rem !important;
  }
  .px-xxl-25 {
    padding-right: 22.5rem !important;
    padding-left: 22.5rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 0.75rem !important;
    padding-bottom: 0.75rem !important;
  }
  .py-xxl-4 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-5 {
    padding-top: 1.25rem !important;
    padding-bottom: 1.25rem !important;
  }
  .py-xxl-6 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-7 {
    padding-top: 1.75rem !important;
    padding-bottom: 1.75rem !important;
  }
  .py-xxl-8 {
    padding-top: 2rem !important;
    padding-bottom: 2rem !important;
  }
  .py-xxl-9 {
    padding-top: 2.25rem !important;
    padding-bottom: 2.25rem !important;
  }
  .py-xxl-10 {
    padding-top: 2.5rem !important;
    padding-bottom: 2.5rem !important;
  }
  .py-xxl-11 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .py-xxl-12 {
    padding-top: 3.5rem !important;
    padding-bottom: 3.5rem !important;
  }
  .py-xxl-13 {
    padding-top: 4rem !important;
    padding-bottom: 4rem !important;
  }
  .py-xxl-14 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
  .py-xxl-15 {
    padding-top: 5rem !important;
    padding-bottom: 5rem !important;
  }
  .py-xxl-16 {
    padding-top: 6rem !important;
    padding-bottom: 6rem !important;
  }
  .py-xxl-17 {
    padding-top: 7rem !important;
    padding-bottom: 7rem !important;
  }
  .py-xxl-18 {
    padding-top: 8rem !important;
    padding-bottom: 8rem !important;
  }
  .py-xxl-19 {
    padding-top: 9rem !important;
    padding-bottom: 9rem !important;
  }
  .py-xxl-20 {
    padding-top: 10rem !important;
    padding-bottom: 10rem !important;
  }
  .py-xxl-21 {
    padding-top: 12.5rem !important;
    padding-bottom: 12.5rem !important;
  }
  .py-xxl-22 {
    padding-top: 15rem !important;
    padding-bottom: 15rem !important;
  }
  .py-xxl-23 {
    padding-top: 17.5rem !important;
    padding-bottom: 17.5rem !important;
  }
  .py-xxl-24 {
    padding-top: 20rem !important;
    padding-bottom: 20rem !important;
  }
  .py-xxl-25 {
    padding-top: 22.5rem !important;
    padding-bottom: 22.5rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 0.75rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1rem !important;
  }
  .pt-xxl-5 {
    padding-top: 1.25rem !important;
  }
  .pt-xxl-6 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-7 {
    padding-top: 1.75rem !important;
  }
  .pt-xxl-8 {
    padding-top: 2rem !important;
  }
  .pt-xxl-9 {
    padding-top: 2.25rem !important;
  }
  .pt-xxl-10 {
    padding-top: 2.5rem !important;
  }
  .pt-xxl-11 {
    padding-top: 3rem !important;
  }
  .pt-xxl-12 {
    padding-top: 3.5rem !important;
  }
  .pt-xxl-13 {
    padding-top: 4rem !important;
  }
  .pt-xxl-14 {
    padding-top: 4.5rem !important;
  }
  .pt-xxl-15 {
    padding-top: 5rem !important;
  }
  .pt-xxl-16 {
    padding-top: 6rem !important;
  }
  .pt-xxl-17 {
    padding-top: 7rem !important;
  }
  .pt-xxl-18 {
    padding-top: 8rem !important;
  }
  .pt-xxl-19 {
    padding-top: 9rem !important;
  }
  .pt-xxl-20 {
    padding-top: 10rem !important;
  }
  .pt-xxl-21 {
    padding-top: 12.5rem !important;
  }
  .pt-xxl-22 {
    padding-top: 15rem !important;
  }
  .pt-xxl-23 {
    padding-top: 17.5rem !important;
  }
  .pt-xxl-24 {
    padding-top: 20rem !important;
  }
  .pt-xxl-25 {
    padding-top: 22.5rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 0.75rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1rem !important;
  }
  .pe-xxl-5 {
    padding-right: 1.25rem !important;
  }
  .pe-xxl-6 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-7 {
    padding-right: 1.75rem !important;
  }
  .pe-xxl-8 {
    padding-right: 2rem !important;
  }
  .pe-xxl-9 {
    padding-right: 2.25rem !important;
  }
  .pe-xxl-10 {
    padding-right: 2.5rem !important;
  }
  .pe-xxl-11 {
    padding-right: 3rem !important;
  }
  .pe-xxl-12 {
    padding-right: 3.5rem !important;
  }
  .pe-xxl-13 {
    padding-right: 4rem !important;
  }
  .pe-xxl-14 {
    padding-right: 4.5rem !important;
  }
  .pe-xxl-15 {
    padding-right: 5rem !important;
  }
  .pe-xxl-16 {
    padding-right: 6rem !important;
  }
  .pe-xxl-17 {
    padding-right: 7rem !important;
  }
  .pe-xxl-18 {
    padding-right: 8rem !important;
  }
  .pe-xxl-19 {
    padding-right: 9rem !important;
  }
  .pe-xxl-20 {
    padding-right: 10rem !important;
  }
  .pe-xxl-21 {
    padding-right: 12.5rem !important;
  }
  .pe-xxl-22 {
    padding-right: 15rem !important;
  }
  .pe-xxl-23 {
    padding-right: 17.5rem !important;
  }
  .pe-xxl-24 {
    padding-right: 20rem !important;
  }
  .pe-xxl-25 {
    padding-right: 22.5rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 0.75rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 1.25rem !important;
  }
  .pb-xxl-6 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-7 {
    padding-bottom: 1.75rem !important;
  }
  .pb-xxl-8 {
    padding-bottom: 2rem !important;
  }
  .pb-xxl-9 {
    padding-bottom: 2.25rem !important;
  }
  .pb-xxl-10 {
    padding-bottom: 2.5rem !important;
  }
  .pb-xxl-11 {
    padding-bottom: 3rem !important;
  }
  .pb-xxl-12 {
    padding-bottom: 3.5rem !important;
  }
  .pb-xxl-13 {
    padding-bottom: 4rem !important;
  }
  .pb-xxl-14 {
    padding-bottom: 4.5rem !important;
  }
  .pb-xxl-15 {
    padding-bottom: 5rem !important;
  }
  .pb-xxl-16 {
    padding-bottom: 6rem !important;
  }
  .pb-xxl-17 {
    padding-bottom: 7rem !important;
  }
  .pb-xxl-18 {
    padding-bottom: 8rem !important;
  }
  .pb-xxl-19 {
    padding-bottom: 9rem !important;
  }
  .pb-xxl-20 {
    padding-bottom: 10rem !important;
  }
  .pb-xxl-21 {
    padding-bottom: 12.5rem !important;
  }
  .pb-xxl-22 {
    padding-bottom: 15rem !important;
  }
  .pb-xxl-23 {
    padding-bottom: 17.5rem !important;
  }
  .pb-xxl-24 {
    padding-bottom: 20rem !important;
  }
  .pb-xxl-25 {
    padding-bottom: 22.5rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 0.75rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1rem !important;
  }
  .ps-xxl-5 {
    padding-left: 1.25rem !important;
  }
  .ps-xxl-6 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-7 {
    padding-left: 1.75rem !important;
  }
  .ps-xxl-8 {
    padding-left: 2rem !important;
  }
  .ps-xxl-9 {
    padding-left: 2.25rem !important;
  }
  .ps-xxl-10 {
    padding-left: 2.5rem !important;
  }
  .ps-xxl-11 {
    padding-left: 3rem !important;
  }
  .ps-xxl-12 {
    padding-left: 3.5rem !important;
  }
  .ps-xxl-13 {
    padding-left: 4rem !important;
  }
  .ps-xxl-14 {
    padding-left: 4.5rem !important;
  }
  .ps-xxl-15 {
    padding-left: 5rem !important;
  }
  .ps-xxl-16 {
    padding-left: 6rem !important;
  }
  .ps-xxl-17 {
    padding-left: 7rem !important;
  }
  .ps-xxl-18 {
    padding-left: 8rem !important;
  }
  .ps-xxl-19 {
    padding-left: 9rem !important;
  }
  .ps-xxl-20 {
    padding-left: 10rem !important;
  }
  .ps-xxl-21 {
    padding-left: 12.5rem !important;
  }
  .ps-xxl-22 {
    padding-left: 15rem !important;
  }
  .ps-xxl-23 {
    padding-left: 17.5rem !important;
  }
  .ps-xxl-24 {
    padding-left: 20rem !important;
  }
  .ps-xxl-25 {
    padding-left: 22.5rem !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 0.75rem !important;
  }
  .gap-xxl-4 {
    gap: 1rem !important;
  }
  .gap-xxl-5 {
    gap: 1.25rem !important;
  }
  .gap-xxl-6 {
    gap: 1.5rem !important;
  }
  .gap-xxl-7 {
    gap: 1.75rem !important;
  }
  .gap-xxl-8 {
    gap: 2rem !important;
  }
  .gap-xxl-9 {
    gap: 2.25rem !important;
  }
  .gap-xxl-10 {
    gap: 2.5rem !important;
  }
  .gap-xxl-11 {
    gap: 3rem !important;
  }
  .gap-xxl-12 {
    gap: 3.5rem !important;
  }
  .gap-xxl-13 {
    gap: 4rem !important;
  }
  .gap-xxl-14 {
    gap: 4.5rem !important;
  }
  .gap-xxl-15 {
    gap: 5rem !important;
  }
  .gap-xxl-16 {
    gap: 6rem !important;
  }
  .gap-xxl-17 {
    gap: 7rem !important;
  }
  .gap-xxl-18 {
    gap: 8rem !important;
  }
  .gap-xxl-19 {
    gap: 9rem !important;
  }
  .gap-xxl-20 {
    gap: 10rem !important;
  }
  .gap-xxl-21 {
    gap: 12.5rem !important;
  }
  .gap-xxl-22 {
    gap: 15rem !important;
  }
  .gap-xxl-23 {
    gap: 17.5rem !important;
  }
  .gap-xxl-24 {
    gap: 20rem !important;
  }
  .gap-xxl-25 {
    gap: 22.5rem !important;
  }
  .row-gap-xxl-0 {
    row-gap: 0 !important;
  }
  .row-gap-xxl-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-xxl-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-xxl-3 {
    row-gap: 0.75rem !important;
  }
  .row-gap-xxl-4 {
    row-gap: 1rem !important;
  }
  .row-gap-xxl-5 {
    row-gap: 1.25rem !important;
  }
  .row-gap-xxl-6 {
    row-gap: 1.5rem !important;
  }
  .row-gap-xxl-7 {
    row-gap: 1.75rem !important;
  }
  .row-gap-xxl-8 {
    row-gap: 2rem !important;
  }
  .row-gap-xxl-9 {
    row-gap: 2.25rem !important;
  }
  .row-gap-xxl-10 {
    row-gap: 2.5rem !important;
  }
  .row-gap-xxl-11 {
    row-gap: 3rem !important;
  }
  .row-gap-xxl-12 {
    row-gap: 3.5rem !important;
  }
  .row-gap-xxl-13 {
    row-gap: 4rem !important;
  }
  .row-gap-xxl-14 {
    row-gap: 4.5rem !important;
  }
  .row-gap-xxl-15 {
    row-gap: 5rem !important;
  }
  .row-gap-xxl-16 {
    row-gap: 6rem !important;
  }
  .row-gap-xxl-17 {
    row-gap: 7rem !important;
  }
  .row-gap-xxl-18 {
    row-gap: 8rem !important;
  }
  .row-gap-xxl-19 {
    row-gap: 9rem !important;
  }
  .row-gap-xxl-20 {
    row-gap: 10rem !important;
  }
  .row-gap-xxl-21 {
    row-gap: 12.5rem !important;
  }
  .row-gap-xxl-22 {
    row-gap: 15rem !important;
  }
  .row-gap-xxl-23 {
    row-gap: 17.5rem !important;
  }
  .row-gap-xxl-24 {
    row-gap: 20rem !important;
  }
  .row-gap-xxl-25 {
    row-gap: 22.5rem !important;
  }
  .column-gap-xxl-0 {
    -moz-column-gap: 0 !important;
    column-gap: 0 !important;
  }
  .column-gap-xxl-1 {
    -moz-column-gap: 0.25rem !important;
    column-gap: 0.25rem !important;
  }
  .column-gap-xxl-2 {
    -moz-column-gap: 0.5rem !important;
    column-gap: 0.5rem !important;
  }
  .column-gap-xxl-3 {
    -moz-column-gap: 0.75rem !important;
    column-gap: 0.75rem !important;
  }
  .column-gap-xxl-4 {
    -moz-column-gap: 1rem !important;
    column-gap: 1rem !important;
  }
  .column-gap-xxl-5 {
    -moz-column-gap: 1.25rem !important;
    column-gap: 1.25rem !important;
  }
  .column-gap-xxl-6 {
    -moz-column-gap: 1.5rem !important;
    column-gap: 1.5rem !important;
  }
  .column-gap-xxl-7 {
    -moz-column-gap: 1.75rem !important;
    column-gap: 1.75rem !important;
  }
  .column-gap-xxl-8 {
    -moz-column-gap: 2rem !important;
    column-gap: 2rem !important;
  }
  .column-gap-xxl-9 {
    -moz-column-gap: 2.25rem !important;
    column-gap: 2.25rem !important;
  }
  .column-gap-xxl-10 {
    -moz-column-gap: 2.5rem !important;
    column-gap: 2.5rem !important;
  }
  .column-gap-xxl-11 {
    -moz-column-gap: 3rem !important;
    column-gap: 3rem !important;
  }
  .column-gap-xxl-12 {
    -moz-column-gap: 3.5rem !important;
    column-gap: 3.5rem !important;
  }
  .column-gap-xxl-13 {
    -moz-column-gap: 4rem !important;
    column-gap: 4rem !important;
  }
  .column-gap-xxl-14 {
    -moz-column-gap: 4.5rem !important;
    column-gap: 4.5rem !important;
  }
  .column-gap-xxl-15 {
    -moz-column-gap: 5rem !important;
    column-gap: 5rem !important;
  }
  .column-gap-xxl-16 {
    -moz-column-gap: 6rem !important;
    column-gap: 6rem !important;
  }
  .column-gap-xxl-17 {
    -moz-column-gap: 7rem !important;
    column-gap: 7rem !important;
  }
  .column-gap-xxl-18 {
    -moz-column-gap: 8rem !important;
    column-gap: 8rem !important;
  }
  .column-gap-xxl-19 {
    -moz-column-gap: 9rem !important;
    column-gap: 9rem !important;
  }
  .column-gap-xxl-20 {
    -moz-column-gap: 10rem !important;
    column-gap: 10rem !important;
  }
  .column-gap-xxl-21 {
    -moz-column-gap: 12.5rem !important;
    column-gap: 12.5rem !important;
  }
  .column-gap-xxl-22 {
    -moz-column-gap: 15rem !important;
    column-gap: 15rem !important;
  }
  .column-gap-xxl-23 {
    -moz-column-gap: 17.5rem !important;
    column-gap: 17.5rem !important;
  }
  .column-gap-xxl-24 {
    -moz-column-gap: 20rem !important;
    column-gap: 20rem !important;
  }
  .column-gap-xxl-25 {
    -moz-column-gap: 22.5rem !important;
    column-gap: 22.5rem !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-inline-grid {
    display: inline-grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: flex !important;
  }
  .d-print-inline-flex {
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}
body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  word-spacing: 0.05rem;
  overflow-x: hidden !important;
}
hr.dark {
  color: rgba(164, 174, 198, 0.25);
}
::-moz-selection {
  background: rgba(var(--bs-primary-rgb), 0.7);
  color: var(--bs-white);
}
::selection {
  background: rgba(var(--bs-primary-rgb), 0.7);
  color: var(--bs-white);
}
a {
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  a {
    transition: none;
  }
}
a:focus {
  outline: 0;
}
a[href^=tel] {
  color: inherit;
  text-decoration: inherit;
}
a.hover {
  position: relative;
}
a.hover::before {
  position: absolute;
  width: 100%;
  height: 1px;
  background: currentColor;
  top: 100%;
  left: 0;
  pointer-events: none;
}
a.hover::before {
  content: "";
  transform-origin: 100% 50%;
  transform: scale3d(0, 1, 1);
  transition: transform 0.3s cubic-bezier(0.7, 0, 0.2, 1);
}
a.hover:hover:before {
  transform-origin: 0% 50%;
  transform: scale3d(1, 1, 1);
  transition-timing-function: cubic-bezier(0.4, 1, 0.8, 1);
}
a.hover-2 {
  position: relative;
  z-index: 1;
  padding: 0 0.2rem 0.05rem;
}
a.hover-2::before {
  position: absolute;
  width: 100%;
  height: 100%;
  background: var(--bs-pale-primary);
  top: 0;
  left: 0;
  pointer-events: none;
  z-index: -1;
}
a.hover-2::before {
  content: "";
  transform-origin: 100% 50%;
  transform: scale3d(0, 1, 1);
  transition: transform 0.5s cubic-bezier(0.7, 0, 0.2, 1);
}
a.hover-2:hover.link-body {
  color: inherit;
}
a.hover-2:hover:before {
  transform-origin: 0% 50%;
  transform: scale3d(1, 1, 1);
  transition-timing-function: cubic-bezier(0.4, 1, 0.8, 1);
}
a.hover-3 {
  position: relative;
  padding: 0 0.2rem 0.05rem;
  transition: color ease 0.3s;
  z-index: 1;
}
a.hover-3:before {
  content: "";
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 3px;
  left: 0;
  bottom: -3px;
  background-color: var(--bs-pale-primary);
  transition: all 0.3s ease-in-out;
}
a.hover-3:hover.link-body {
  color: inherit;
}
a.hover-3:hover:before {
  height: calc(100% + 6px);
}
a.hover-3.more:before {
  bottom: -1px;
}
a.hover-3.more:hover:before {
  height: calc(100% + 3px);
}
a.hover-2.link-blue:before {
  background: var(--bs-blue);
}
a.hover-2.link-sky:before {
  background: var(--bs-sky);
}
a.hover-2.link-purple:before {
  background: var(--bs-purple);
}
a.hover-2.link-grape:before {
  background: var(--bs-grape);
}
a.hover-2.link-violet:before {
  background: var(--bs-violet);
}
a.hover-2.link-pink:before {
  background: var(--bs-pink);
}
a.hover-2.link-fuchsia:before {
  background: var(--bs-fuchsia);
}
a.hover-2.link-red:before {
  background: var(--bs-red);
}
a.hover-2.link-orange:before {
  background: var(--bs-orange);
}
a.hover-2.link-yellow:before {
  background: var(--bs-yellow);
}
a.hover-2.link-green:before {
  background: var(--bs-green);
}
a.hover-2.link-leaf:before {
  background: var(--bs-leaf);
}
a.hover-2.link-aqua:before {
  background: var(--bs-aqua);
}
a.hover-2.link-navy:before {
  background: var(--bs-navy);
}
a.hover-2.link-ash:before {
  background: var(--bs-ash);
}
a.hover-2.link-white:before {
  background: var(--bs-white);
}
a.hover-2.link-light:before {
  background: var(--bs-light);
}
a.hover-2.link-gray:before {
  background: var(--bs-gray);
}
a.hover-2.link-dark:before {
  background: var(--bs-dark);
}
a.hover-2.link-primary:before {
  background: var(--bs-primary);
}
a.hover-3.link-primary:before {
  background-color: var(--bs-pale-primary);
}
a.hover-3.link-blue:before {
  background-color: var(--bs-pale-blue);
}
a.hover-3.link-sky:before {
  background-color: var(--bs-pale-sky);
}
a.hover-3.link-purple:before {
  background-color: var(--bs-pale-purple);
}
a.hover-3.link-grape:before {
  background-color: var(--bs-pale-grape);
}
a.hover-3.link-violet:before {
  background-color: var(--bs-pale-violet);
}
a.hover-3.link-pink:before {
  background-color: var(--bs-pale-pink);
}
a.hover-3.link-fuchsia:before {
  background-color: var(--bs-pale-fuchsia);
}
a.hover-3.link-red:before {
  background-color: var(--bs-pale-red);
}
a.hover-3.link-orange:before {
  background-color: var(--bs-pale-orange);
}
a.hover-3.link-yellow:before {
  background-color: var(--bs-pale-yellow);
}
a.hover-3.link-green:before {
  background-color: var(--bs-pale-green);
}
a.hover-3.link-leaf:before {
  background-color: var(--bs-pale-leaf);
}
a.hover-3.link-aqua:before {
  background-color: var(--bs-pale-aqua);
}
a.hover-3.link-navy:before {
  background-color: var(--bs-pale-navy);
}
a.hover-3.link-dark:before {
  background-color: var(--bs-pale-dark);
}
a.hover-3.link-ash:before {
  background-color: var(--bs-pale-ash);
}
.text-reset a {
  color: inherit !important;
}
.link-dark:hover,
a.text-reset:hover,
.text-reset a:hover {
  color: var(--bs-primary) !important;
}
[class*=text-] .text-reset:hover {
  color: inherit !important;
}
.link-body {
  color: #60697b;
}
.link-inverse {
  color: #cacaca;
}
.text-inverse,
.link-inverse,
.text-inverse a:not(.btn) {
  color: var(--bs-white);
}
.bg-dark.text-inverse,
.bg-dark.link-inverse,
.bg-dark.text-inverse a:not(.btn):not([class*=link-]),
.bg-navy.text-inverse,
.bg-navy.link-inverse,
.bg-navy.text-inverse a:not(.btn):not([class*=link-]),
[class*=offcanvas-].text-inverse a:not(.btn):not([class*=link-]),
.bg-navy.text-inverse .post-meta,
.bg-dark.text-inverse .post-meta {
  color: #cacaca;
}
.text-inverse a:not(.btn):hover,
.bg-dark.text-inverse a:not(.btn):not([class*=link-]):hover,
.bg-navy.text-inverse a:not(.btn):not([class*=link-]):hover,
[class*=offcanvas-].text-inverse a:not(.btn):not([class*=link-]):hover {
  color: var(--bs-primary);
}
.text-inverse a:not(.btn):hover {
  border-color: var(--bs-primary);
}
.badge.bg-light {
  background: rgba(164, 174, 198, 0.2) !important;
}
.more {
  font-weight: 700;
  letter-spacing: -0.01rem;
  display: inline-block;
}
.more:after {
  line-height: 1;
  font-family: "Unicons";
  content: "\e94c";
  padding-left: 0.05rem;
  font-size: 0.9rem;
  font-weight: normal;
  vertical-align: -3px;
  margin-right: -0.25rem;
  display: inline-block;
}
hr.double {
  background: none;
  border-style: double;
  border-color: rgba(164, 174, 198, 0.2);
  border-top: 0;
}
_:default:not(:root:root),
hr.double {
  border-bottom-width: 3px;
}
.divider-icon {
  border: 0;
  position: relative;
  margin: 4.5rem 0;
}
.divider-icon i {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 1.2rem;
  color: rgba(164, 174, 198, 0.2);
}
.divider-icon:before,
.divider-icon:after {
  position: absolute;
  top: 50%;
  content: "";
  border-top: 1px solid rgba(164, 174, 198, 0.2);
  width: calc(50% - 1.5rem);
}
.divider-icon:before {
  left: 0;
}
.divider-icon:after {
  right: 0;
}
.divider:after {
  content: "";
  width: 100%;
  height: 5px;
  background: currentColor;
  display: block;
  margin-top: -5px;
}
.divider.divider-alt:after {
  margin-top: 0;
  margin-bottom: -5px;
}
[class*=divider-v-] {
  position: relative;
  width: auto;
  height: 100%;
  overflow: hidden;
}
[class*=divider-v-]>svg {
  height: 100%;
  width: auto;
  transform: scale(1.2);
  position: absolute;
}
[class*=divider-v-]:after {
  display: none;
}
[class*=divider-v-].divider-v-start>svg {
  top: 0;
  left: 0;
}
[class*=divider-v-].divider-v-end>svg {
  top: 0;
  right: 0;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-weight: 700;
  color: #343f52;
  word-spacing: 0.1rem;
  letter-spacing: -0.01rem;
}
h1.text-uppercase,
h2.text-uppercase,
h3.text-uppercase,
h4.text-uppercase,
h5.text-uppercase,
h6.text-uppercase,
.text-uppercase.h1,
.text-uppercase.h2,
.text-uppercase.h3,
.text-uppercase.h4,
.text-uppercase.h5,
.text-uppercase.h6 {
  letter-spacing: 0.02rem;
}
h1,
.h1 {
  line-height: 1.3;
}
h2,
.h2 {
  line-height: 1.35;
}
h3,
.h3 {
  line-height: 1.4;
}
h4,
.h4 {
  line-height: 1.45;
}
h5,
.h5 {
  line-height: 1.5;
}
h6,
.h6 {
  line-height: 1.55;
}
.display-1 {
  line-height: 1.2;
}
.display-2,
.display-3 {
  line-height: 1.25;
}
.display-4,
.display-5 {
  line-height: 1.3;
}
.display-6 {
  line-height: 1.35;
}
.ls-xs {
  letter-spacing: -0.035em !important;
}
.ls-sm {
  letter-spacing: -0.03em !important;
}
.ls-md {
  letter-spacing: -0.01rem !important;
}
.ls-lg {
  letter-spacing: 0.02rem !important;
}
.ls-xl {
  letter-spacing: 0.05rem !important;
}
.ls-normal {
  letter-spacing: normal;
}
.lead {
  line-height: 1.65;
}
.lead.fs-lg {
  font-size: 1.05rem !important;
  line-height: 1.6;
}
.text-line {
  position: relative;
  vertical-align: top;
  padding-left: 1.4rem;
}
.text-line:not(.text-gradient) {
  display: inline-flex;
}
.text-line:before {
  content: "";
  position: absolute;
  display: inline-block;
  top: 50%;
  transform: translateY(-60%);
  left: 0;
  width: 0.75rem;
  height: 0.05rem;
  background: var(--bs-primary);
}
.text-line.text-blue:before {
  background-color: #3f78e0;
}
.text-line.text-sky:before {
  background-color: #5eb9f0;
}
.text-line.text-purple:before {
  background-color: #747ed1;
}
.text-line.text-grape:before {
  background-color: #605dba;
}
.text-line.text-violet:before {
  background-color: #a07cc5;
}
.text-line.text-pink:before {
  background-color: #d16b86;
}
.text-line.text-fuchsia:before {
  background-color: #e668b3;
}
.text-line.text-red:before {
  background-color: #e2626b;
}
.text-line.text-orange:before {
  background-color: #f78b77;
}
.text-line.text-yellow:before {
  background-color: #fab758;
}
.text-line.text-green:before {
  background-color: #45c4a0;
}
.text-line.text-leaf:before {
  background-color: #7cb798;
}
.text-line.text-aqua:before {
  background-color: #54a8c7;
}
.text-line.text-navy:before {
  background-color: #343f52;
}
.text-line.text-ash:before {
  background-color: #9499a3;
}
.text-line.text-white:before {
  background-color: #fff;
}
.text-line.text-light:before {
  background-color: #fefefe;
}
.text-line.text-gray:before {
  background-color: #f6f7f9;
}
.text-line.text-dark:before {
  background-color: #262b32;
}
.text-line.text-primary:before {
  background-color: #3f78e0;
}
.text-line.text-muted:before {
  background-color: #aab0bc;
}
.text-primary {
  color: var(--bs-primary) !important;
}
.underline {
  position: relative;
  z-index: 2;
  white-space: nowrap;
}
.underline:after {
  content: "";
  display: block;
  background: rgba(var(--bs-primary-rgb), 0.12);
  border-radius: 5rem;
  position: absolute;
  width: 102.5%;
  height: 30%;
  left: -1.5%;
  bottom: 9%;
  z-index: -1;
  margin-top: 0;
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .underline:after {
    transition: none;
  }
}
.underline.blue:after {
  background: rgba(63, 120, 224, 0.12);
}
.underline.sky:after {
  background: rgba(94, 185, 240, 0.12);
}
.underline.purple:after {
  background: rgba(116, 126, 209, 0.12);
}
.underline.grape:after {
  background: rgba(96, 93, 186, 0.12);
}
.underline.violet:after {
  background: rgba(160, 124, 197, 0.12);
}
.underline.pink:after {
  background: rgba(209, 107, 134, 0.12);
}
.underline.fuchsia:after {
  background: rgba(230, 104, 179, 0.12);
}
.underline.red:after {
  background: rgba(226, 98, 107, 0.12);
}
.underline.orange:after {
  background: rgba(247, 139, 119, 0.12);
}
.underline.yellow:after {
  background: rgba(250, 183, 88, 0.12);
}
.underline.green:after {
  background: rgba(69, 196, 160, 0.12);
}
.underline.leaf:after {
  background: rgba(124, 183, 152, 0.12);
}
.underline.aqua:after {
  background: rgba(84, 168, 199, 0.12);
}
.underline.navy:after {
  background: rgba(52, 63, 82, 0.12);
}
.underline.ash:after {
  background: rgba(148, 153, 163, 0.12);
}
.underline.white:after {
  background: rgba(255, 255, 255, 0.12);
}
.underline.light:after {
  background: rgba(254, 254, 254, 0.12);
}
.underline.gray:after {
  background: rgba(246, 247, 249, 0.12);
}
.underline.dark:after {
  background: rgba(38, 43, 50, 0.12);
}
.underline.primary:after {
  background: rgba(63, 120, 224, 0.12);
}
.underline-2 {
  position: relative;
  z-index: 2;
  white-space: nowrap;
}
.underline-2:after {
  content: "";
  display: block;
  background: var(--bs-primary);
  border-radius: 5rem;
  position: absolute;
  width: 102.5%;
  height: 10%;
  left: -1.5%;
  bottom: 4%;
  z-index: -1;
  margin-top: 0;
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .underline-2:after {
    transition: none;
  }
}
.underline-2.blue:after {
  background: var(--bs-blue);
}
.underline-2.sky:after {
  background: var(--bs-sky);
}
.underline-2.purple:after {
  background: var(--bs-purple);
}
.underline-2.grape:after {
  background: var(--bs-grape);
}
.underline-2.violet:after {
  background: var(--bs-violet);
}
.underline-2.pink:after {
  background: var(--bs-pink);
}
.underline-2.fuchsia:after {
  background: var(--bs-fuchsia);
}
.underline-2.red:after {
  background: var(--bs-red);
}
.underline-2.orange:after {
  background: var(--bs-orange);
}
.underline-2.yellow:after {
  background: var(--bs-yellow);
}
.underline-2.green:after {
  background: var(--bs-green);
}
.underline-2.leaf:after {
  background: var(--bs-leaf);
}
.underline-2.aqua:after {
  background: var(--bs-aqua);
}
.underline-2.navy:after {
  background: var(--bs-navy);
}
.underline-2.ash:after {
  background: var(--bs-ash);
}
.underline-2.white:after {
  background: var(--bs-white);
}
.underline-2.light:after {
  background: var(--bs-light);
}
.underline-2.gray:after {
  background: var(--bs-gray);
}
.underline-2.dark:after {
  background: var(--bs-dark);
}
.underline-2.primary:after {
  background: var(--bs-primary);
}
.underline-gradient-1:after {
  background: linear-gradient(120deg, #f857a6 10%, #ef3f6e 100%);
}
.underline-gradient-2:after {
  background: linear-gradient(40deg, #f5b161 0.4%, #ec366e 100.2%);
}
.underline-gradient-3:after {
  background: linear-gradient(45deg, #FBDA61 0%, #FF5ACD 100%);
}
.underline-gradient-4:after {
  background: linear-gradient(125deg, #9040db, #ff72c2 50%, #ffd84f);
}
.underline-gradient-5:after {
  background: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
}
.underline-gradient-6:after {
  background: linear-gradient(45deg, #08AEEA 0%, #2AF598 100%);
}
.underline-gradient-7:after {
  background: linear-gradient(100deg, #605dba 20%, #3f78e0 85%);
}
.underline-gradient-8:after {
  background: linear-gradient(0deg, #2c46a7, #3757c4);
}
.underline-gradient-9:after {
  background: linear-gradient(45deg, #ffdee9, #b5fffc);
}
.underline-3 {
  position: relative;
  z-index: 1;
}
.underline-3:after {
  content: "";
  position: absolute;
  z-index: -1;
  display: block;
  background-size: 100% 100%;
  background-repeat: no-repeat;
  background-position: bottom;
  left: 50%;
  bottom: -0.1em;
  width: 110%;
  height: 0.3em;
  transform: translateX(-50%);
}
.underline-3.style-1:before,
.underline-3.style-1:after {
  content: "";
  z-index: -1;
  border: 3px solid var(--bs-primary);
  position: absolute;
  left: 50%;
  top: 52%;
  opacity: 1;
  border-radius: 80%;
}
.underline-3.style-1:before {
  transform: translate(-50%, -50%) rotate(-1deg);
  border-top-width: 0;
  width: 111%;
  height: 110%;
}
.underline-3.style-1:after {
  transform: translate(-50%, -50%) rotate(-2deg);
  border-left-width: 0;
  border-bottom-width: 0;
  width: 107%;
  height: 111%;
}
.underline-3.style-1.blue:before,
.underline-3.style-1.blue:after {
  border-color: var(--bs-blue);
}
.underline-3.style-1.sky:before,
.underline-3.style-1.sky:after {
  border-color: var(--bs-sky);
}
.underline-3.style-1.purple:before,
.underline-3.style-1.purple:after {
  border-color: var(--bs-purple);
}
.underline-3.style-1.grape:before,
.underline-3.style-1.grape:after {
  border-color: var(--bs-grape);
}
.underline-3.style-1.violet:before,
.underline-3.style-1.violet:after {
  border-color: var(--bs-violet);
}
.underline-3.style-1.pink:before,
.underline-3.style-1.pink:after {
  border-color: var(--bs-pink);
}
.underline-3.style-1.fuchsia:before,
.underline-3.style-1.fuchsia:after {
  border-color: var(--bs-fuchsia);
}
.underline-3.style-1.red:before,
.underline-3.style-1.red:after {
  border-color: var(--bs-red);
}
.underline-3.style-1.orange:before,
.underline-3.style-1.orange:after {
  border-color: var(--bs-orange);
}
.underline-3.style-1.yellow:before,
.underline-3.style-1.yellow:after {
  border-color: var(--bs-yellow);
}
.underline-3.style-1.green:before,
.underline-3.style-1.green:after {
  border-color: var(--bs-green);
}
.underline-3.style-1.leaf:before,
.underline-3.style-1.leaf:after {
  border-color: var(--bs-leaf);
}
.underline-3.style-1.aqua:before,
.underline-3.style-1.aqua:after {
  border-color: var(--bs-aqua);
}
.underline-3.style-1.navy:before,
.underline-3.style-1.navy:after {
  border-color: var(--bs-navy);
}
.underline-3.style-1.ash:before,
.underline-3.style-1.ash:after {
  border-color: var(--bs-ash);
}
.underline-3.style-1.white:before,
.underline-3.style-1.white:after {
  border-color: var(--bs-white);
}
.underline-3.style-1.light:before,
.underline-3.style-1.light:after {
  border-color: var(--bs-light);
}
.underline-3.style-1.gray:before,
.underline-3.style-1.gray:after {
  border-color: var(--bs-gray);
}
.underline-3.style-1.dark:before,
.underline-3.style-1.dark:after {
  border-color: var(--bs-dark);
}
.underline-3.style-1.primary:before,
.underline-3.style-1.primary:after {
  border-color: var(--bs-primary);
}
.underline-3.style-2:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%233f78e0' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.blue:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%233f78e0' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.sky:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%235eb9f0' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.purple:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23747ed1' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.grape:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23605dba' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.violet:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23a07cc5' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.pink:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23d16b86' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.fuchsia:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23e668b3' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.red:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23e2626b' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.orange:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23f78b77' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.yellow:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23fab758' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.green:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%2345c4a0' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.leaf:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%237cb798' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.aqua:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%2354a8c7' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.navy:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23343f52' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.ash:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%239499a3' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.white:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23fff' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.light:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23fefefe' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.gray:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23f6f7f9' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.dark:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%23262b32' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-2.primary:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 208.01 8.3'%3E%3Cpath fill='%233f78e0' d='M64.42,2.42Q42.78,1.46,21.19,0c-2.8-.19-4.09.89-3.87,2L3.92,1.87c-5.13-.05-5.28,3.87-.12,3.92l60.49.55c46.63,2.08,93.34,2.51,139.81,1.27,5-.13,5.39-3.87.13-3.92Z'/%3E%3C/svg%3E");
}
.underline-3.style-3:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%233f78e0' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.blue:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%233f78e0' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.sky:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%235eb9f0' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.purple:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23747ed1' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.grape:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23605dba' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.violet:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23a07cc5' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.pink:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23d16b86' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.fuchsia:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23e668b3' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.red:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23e2626b' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.orange:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23f78b77' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.yellow:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23fab758' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.green:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%2345c4a0' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.leaf:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%237cb798' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.aqua:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%2354a8c7' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.navy:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23343f52' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.ash:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%239499a3' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.white:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23fff' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.light:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23fefefe' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.gray:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23f6f7f9' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.dark:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%23262b32' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
.underline-3.style-3.primary:after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 205 9.37'%3E%3Cpath fill='%233f78e0' d='M202.47,9.37A1191.26,1191.26,0,0,0,1.79,7.48,1.67,1.67,0,0,1,0,5.92H0A1.76,1.76,0,0,1,1.63,4.21c67-5.71,133.83-5.43,200.8-.27A2.75,2.75,0,0,1,205,6.88h0A2.6,2.6,0,0,1,202.47,9.37Z'/%3E%3C/svg%3E");
}
@media (max-width: 1399.98px) {
  .underline-3.style-1:before,
  .underline-3.style-1:after {
    display: none;
  }
}
.mark,
mark {
  color: inherit;
  border-radius: 0.4rem;
}
.rounded img {
  border-radius: 0.4rem;
}
@media (min-width: 992px) {
  .map.rounded-lg-start iframe,
  .image-wrapper.rounded-lg-start {
    border-bottom-left-radius: 0.4rem !important;
    border-top-left-radius: 0.4rem !important;
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
  }
  .image-wrapper.rounded-4-lg-start {
    border-bottom-left-radius: 0.8rem !important;
    border-top-left-radius: 0.8rem !important;
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
  }
}
@media (max-width: 991.98px) {
  .map.rounded-top iframe,
  .image-wrapper.rounded-top {
    border-top-left-radius: 0.4rem !important;
    border-top-right-radius: 0.4rem !important;
  }
  .image-wrapper.rounded-4-top {
    border-top-left-radius: 0.8rem !important;
    border-top-right-radius: 0.8rem !important;
  }
}
.rounded-xl,
.rounded-xl>.plyr,
.rounded-xl img {
  border-radius: 0.8rem !important;
}
.page-frame section,
.page-frame footer {
  margin-top: 1.25rem;
}
@media (min-width: 768px) {
  .page-frame {
    padding: 1.25rem;
  }
  .page-frame section,
  .page-frame footer,
  .page-frame .video-wrapper,
  .page-frame .video-wrapper:after,
  .page-frame .video-wrapper video {
    border-radius: 1rem;
  }
  .page-frame section,
  .page-frame footer {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    border-radius: 1rem;
  }
}
@media (min-width: 768px) {
  .section-frame {
    margin-left: 1.5rem;
    margin-right: 1.5rem;
    border-radius: 1rem;
  }
  .section-frame.br-fix {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  .section-frame-wrapper {
    border-radius: 1rem;
  }
}
figure {
  margin: 0;
  padding: 0;
}
figure img {
  width: 100%;
  max-width: 100%;
  height: auto !important;
}
.img-mask img {
  -webkit-mask-position: center center;
  mask-position: center center;
  -webkit-mask-repeat: no-repeat;
  mask-repeat: no-repeat;
  height: auto;
  width: 100%;
  max-width: 100%;
  -webkit-mask-size: auto auto;
}
.img-mask.mask-1 img {
  -webkit-mask-image: url(../../assets/img/svg/blob.svg);
  mask-image: url(../../assets/img/svg/blob.svg);
}
.img-mask.mask-2 img {
  -webkit-mask-image: url(../../assets/img/svg/hex.svg);
  mask-image: url(../../assets/img/svg/hex.svg);
}
.img-mask.mask-3 img {
  -webkit-mask-image: url(../../assets/img/svg/blob2.svg);
  mask-image: url(../../assets/img/svg/blob2.svg);
}
.table:not(.table-borderless) tbody {
  border-top-width: 1px !important;
}
.map iframe {
  display: block;
}
.map.map-full {
  height: 100%;
  min-height: 15rem;
}
[class*=mt-n],
[class*=mb-n] {
  position: relative;
  z-index: 3;
}
.mb-n50p {
  transform: translateY(50%);
}
.mt-n50p {
  transform: translateY(-50%);
}
@media screen and (min-width: 576px) {
  .mb-sm-n50p {
    transform: translateY(50%);
  }
  .mt-sm-n50p {
    transform: translateY(-50%);
  }
}
@media screen and (min-width: 768px) {
  .mb-md-n50p {
    transform: translateY(50%);
  }
  .mt-md-n50p {
    transform: translateY(-50%);
  }
}
@media screen and (min-width: 992px) {
  .mb-lg-n50p {
    transform: translateY(50%);
  }
  .mt-lg-n50p {
    transform: translateY(-50%);
  }
}
@media screen and (min-width: 1200px) {
  .mb-xl-n50p {
    transform: translateY(50%);
  }
  .mt-xl-n50p {
    transform: translateY(-50%);
  }
}
@media screen and (min-width: 1400px) {
  .mb-xxl-n50p {
    transform: translateY(50%);
  }
  .mt-xxl-n50p {
    transform: translateY(-50%);
  }
}
@media (max-width: 1199.98px) {
  .border-radius-lg-top {
    border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
  }
}
@media (min-width: 992px) {
  .position-lg-absolute {
    position: absolute !important;
  }
  .position-lg-sticky {
    position: sticky;
  }
}
.scrollbar-hidden,
.offcanvas,
.mega-menu-scroll {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.scrollbar-hidden::-webkit-scrollbar,
.offcanvas::-webkit-scrollbar,
.mega-menu-scroll::-webkit-scrollbar {
  display: none;
}
@media (min-width: 992px) {
  .cc-2 {
    -moz-column-count: 2;
    column-count: 2;
  }
  .cc-2 li {
    display: inline-block;
    width: 100%;
  }
  .cc-3 {
    -moz-column-count: 3;
    column-count: 3;
  }
  .cc-3 li {
    display: inline-block;
    width: 100%;
  }
}
.border-soft-primary {
  border-color: var(--bs-border-soft-primary) !important;
}
.border-soft-blue {
  border-color: var(--bs-border-soft-blue) !important;
}
.border-soft-sky {
  border-color: var(--bs-border-soft-sky) !important;
}
.border-soft-purple {
  border-color: var(--bs-border-soft-purple) !important;
}
.border-soft-grape {
  border-color: var(--bs-border-soft-grape) !important;
}
.border-soft-violet {
  border-color: var(--bs-border-soft-violet) !important;
}
.border-soft-pink {
  border-color: var(--bs-border-soft-pink) !important;
}
.border-soft-fuchsia {
  border-color: var(--bs-border-soft-fuchsia) !important;
}
.border-soft-red {
  border-color: var(--bs-border-soft-red) !important;
}
.border-soft-orange {
  border-color: var(--bs-border-soft-orange) !important;
}
.border-soft-yellow {
  border-color: var(--bs-border-soft-yellow) !important;
}
.border-soft-green {
  border-color: var(--bs-border-soft-green) !important;
}
.border-soft-leaf {
  border-color: var(--bs-border-soft-leaf) !important;
}
.border-soft-aqua {
  border-color: var(--bs-border-soft-aqua) !important;
}
.border-soft-navy {
  border-color: var(--bs-border-soft-navy) !important;
}
.border-soft-ash {
  border-color: var(--bs-border-soft-ash) !important;
}
.zindex-n {
  z-index: -1;
}
.zindex-1 {
  z-index: 1;
}
.bg-soft-primary {
  background-color: var(--bs-soft-primary) !important;
}
.bg-soft-blue {
  background-color: var(--bs-soft-blue) !important;
}
.bg-soft-sky {
  background-color: var(--bs-soft-sky) !important;
}
.bg-soft-purple {
  background-color: var(--bs-soft-purple) !important;
}
.bg-soft-grape {
  background-color: var(--bs-soft-grape) !important;
}
.bg-soft-violet {
  background-color: var(--bs-soft-violet) !important;
}
.bg-soft-pink {
  background-color: var(--bs-soft-pink) !important;
}
.bg-soft-fuchsia {
  background-color: var(--bs-soft-fuchsia) !important;
}
.bg-soft-red {
  background-color: var(--bs-soft-red) !important;
}
.bg-soft-orange {
  background-color: var(--bs-soft-orange) !important;
}
.bg-soft-yellow {
  background-color: var(--bs-soft-yellow) !important;
}
.bg-soft-green {
  background-color: var(--bs-soft-green) !important;
}
.bg-soft-leaf {
  background-color: var(--bs-soft-leaf) !important;
}
.bg-soft-aqua {
  background-color: var(--bs-soft-aqua) !important;
}
.bg-soft-navy {
  background-color: var(--bs-soft-navy) !important;
}
.bg-soft-ash {
  background-color: var(--bs-soft-ash) !important;
}
.bg-soft-gray {
  background-color: var(--bs-soft-gray) !important;
}
.bg-pale-primary {
  background-color: var(--bs-pale-primary) !important;
}
.bg-pale-blue {
  background-color: var(--bs-pale-blue) !important;
}
.bg-pale-sky {
  background-color: var(--bs-pale-sky) !important;
}
.bg-pale-purple {
  background-color: var(--bs-pale-purple) !important;
}
.bg-pale-grape {
  background-color: var(--bs-pale-grape) !important;
}
.bg-pale-violet {
  background-color: var(--bs-pale-violet) !important;
}
.bg-pale-pink {
  background-color: var(--bs-pale-pink) !important;
}
.bg-pale-fuchsia {
  background-color: var(--bs-pale-fuchsia) !important;
}
.bg-pale-red {
  background-color: var(--bs-pale-red) !important;
}
.bg-pale-orange {
  background-color: var(--bs-pale-orange) !important;
}
.bg-pale-yellow {
  background-color: var(--bs-pale-yellow) !important;
}
.bg-pale-green {
  background-color: var(--bs-pale-green) !important;
}
.bg-pale-leaf {
  background-color: var(--bs-pale-leaf) !important;
}
.bg-pale-aqua {
  background-color: var(--bs-pale-aqua) !important;
}
.bg-pale-navy {
  background-color: var(--bs-pale-navy) !important;
}
.bg-pale-dark {
  background-color: var(--bs-pale-dark) !important;
}
.bg-pale-ash {
  background-color: var(--bs-pale-ash) !important;
}
.bg-gradient-primary {
  background: linear-gradient(180deg, var(--bs-soft-primary), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-primary {
  background: linear-gradient(0deg, var(--bs-soft-primary), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-blue {
  background: linear-gradient(180deg, var(--bs-soft-blue), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-blue {
  background: linear-gradient(0deg, var(--bs-soft-blue), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-sky {
  background: linear-gradient(180deg, var(--bs-soft-sky), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-sky {
  background: linear-gradient(0deg, var(--bs-soft-sky), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-purple {
  background: linear-gradient(180deg, var(--bs-soft-purple), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-purple {
  background: linear-gradient(0deg, var(--bs-soft-purple), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-grape {
  background: linear-gradient(180deg, var(--bs-soft-grape), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-grape {
  background: linear-gradient(0deg, var(--bs-soft-grape), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-violet {
  background: linear-gradient(180deg, var(--bs-soft-violet), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-violet {
  background: linear-gradient(0deg, var(--bs-soft-violet), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-pink {
  background: linear-gradient(180deg, var(--bs-soft-pink), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-pink {
  background: linear-gradient(0deg, var(--bs-soft-pink), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-fuchsia {
  background: linear-gradient(180deg, var(--bs-soft-fuchsia), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-fuchsia {
  background: linear-gradient(0deg, var(--bs-soft-fuchsia), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-red {
  background: linear-gradient(180deg, var(--bs-soft-red), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-red {
  background: linear-gradient(0deg, var(--bs-soft-red), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-orange {
  background: linear-gradient(180deg, var(--bs-soft-orange), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-orange {
  background: linear-gradient(0deg, var(--bs-soft-orange), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-yellow {
  background: linear-gradient(180deg, var(--bs-soft-yellow), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-yellow {
  background: linear-gradient(0deg, var(--bs-soft-yellow), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-green {
  background: linear-gradient(180deg, var(--bs-soft-green), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-green {
  background: linear-gradient(0deg, var(--bs-soft-green), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-leaf {
  background: linear-gradient(180deg, var(--bs-soft-leaf), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-leaf {
  background: linear-gradient(0deg, var(--bs-soft-leaf), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-aqua {
  background: linear-gradient(180deg, var(--bs-soft-aqua), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-aqua {
  background: linear-gradient(0deg, var(--bs-soft-aqua), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-navy {
  background: linear-gradient(180deg, var(--bs-soft-navy), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-navy {
  background: linear-gradient(0deg, var(--bs-soft-navy), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-ash {
  background: linear-gradient(180deg, var(--bs-soft-ash), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-ash {
  background: linear-gradient(0deg, var(--bs-soft-ash), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-gray {
  background: linear-gradient(180deg, var(--bs-soft-gray), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-reverse-gray {
  background: linear-gradient(0deg, var(--bs-soft-gray), rgba(var(--bs-white-rgb), 0) 100%);
}
.bg-gradient-blend {
  background: linear-gradient(160deg, #FFB7B7 9%, #727272 100%), radial-gradient(100% 100% at 30% 10%, #FFD1D1 0%, #260000 100%), linear-gradient(180deg, #00FFFF 0%, #FFFFFF 100%), radial-gradient(100% 100% at 70% 0%, #FF0000 0%, #00FFE0 100%), linear-gradient(280deg, #DBFF00 0%, #3300FF 100%);
  background-blend-mode: screen, overlay, color-burn, color-dodge, normal;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#00ffffff", endColorstr="#383838", GradientType=0);
  /* IE6-9 */
}
.bg-white-700 {
  background: rgba(var(--bs-white-rgb), 0.7) !important;
}
.bg-white-900 {
  background: rgba(var(--bs-white-rgb), 0.9) !important;
}
.bg-height {
  height: 30rem;
}
@media (max-width: 991.98px) {
  .bg-height {
    height: 20rem;
  }
}
@media (max-width: 767px) {
  .bg-height {
    height: 15rem;
  }
}
.link-blue {
  color: var(--bs-blue);
}
.link-blue:hover,
.link-blue:focus {
  color: var(--bs-blue);
}
.link-sky {
  color: var(--bs-sky);
}
.link-sky:hover,
.link-sky:focus {
  color: var(--bs-sky);
}
.link-purple {
  color: var(--bs-purple);
}
.link-purple:hover,
.link-purple:focus {
  color: var(--bs-purple);
}
.link-grape {
  color: var(--bs-grape);
}
.link-grape:hover,
.link-grape:focus {
  color: var(--bs-grape);
}
.link-violet {
  color: var(--bs-violet);
}
.link-violet:hover,
.link-violet:focus {
  color: var(--bs-violet);
}
.link-pink {
  color: var(--bs-pink);
}
.link-pink:hover,
.link-pink:focus {
  color: var(--bs-pink);
}
.link-fuchsia {
  color: var(--bs-fuchsia);
}
.link-fuchsia:hover,
.link-fuchsia:focus {
  color: var(--bs-fuchsia);
}
.link-red {
  color: var(--bs-red);
}
.link-red:hover,
.link-red:focus {
  color: var(--bs-red);
}
.link-orange {
  color: var(--bs-orange);
}
.link-orange:hover,
.link-orange:focus {
  color: var(--bs-orange);
}
.link-yellow {
  color: var(--bs-yellow);
}
.link-yellow:hover,
.link-yellow:focus {
  color: var(--bs-yellow);
}
.link-green {
  color: var(--bs-green);
}
.link-green:hover,
.link-green:focus {
  color: var(--bs-green);
}
.link-leaf {
  color: var(--bs-leaf);
}
.link-leaf:hover,
.link-leaf:focus {
  color: var(--bs-leaf);
}
.link-aqua {
  color: var(--bs-aqua);
}
.link-aqua:hover,
.link-aqua:focus {
  color: var(--bs-aqua);
}
.link-navy {
  color: var(--bs-navy);
}
.link-navy:hover,
.link-navy:focus {
  color: var(--bs-navy);
}
.link-ash {
  color: var(--bs-ash);
}
.link-ash:hover,
.link-ash:focus {
  color: var(--bs-ash);
}
.link-white {
  color: var(--bs-white);
}
.link-white:hover,
.link-white:focus {
  color: var(--bs-white);
}
.link-light {
  color: var(--bs-light);
}
.link-light:hover,
.link-light:focus {
  color: var(--bs-light);
}
.link-gray {
  color: var(--bs-gray);
}
.link-gray:hover,
.link-gray:focus {
  color: var(--bs-gray);
}
.link-primary {
  color: var(--bs-primary);
}
.link-primary:hover,
.link-primary:focus {
  color: var(--bs-primary);
}
.link-secondary {
  color: var(--bs-secondary);
}
.link-secondary:hover,
.link-secondary:focus {
  color: var(--bs-secondary);
}
.link-success {
  color: var(--bs-success);
}
.link-success:hover,
.link-success:focus {
  color: var(--bs-success);
}
.link-info {
  color: var(--bs-info);
}
.link-info:hover,
.link-info:focus {
  color: var(--bs-info);
}
.link-warning {
  color: var(--bs-warning);
}
.link-warning:hover,
.link-warning:focus {
  color: var(--bs-warning);
}
.link-danger {
  color: var(--bs-danger);
}
.link-danger:hover,
.link-danger:focus {
  color: var(--bs-danger);
}
.link-dark {
  color: #343f52;
}
blockquote {
  border-left: 0.15rem solid var(--bs-primary);
  padding-left: 1rem;
  font-size: 0.85rem;
  line-height: 1.7;
  font-weight: 500;
}
blockquote.border-0 {
  padding-left: 0;
}
blockquote.icon {
  position: relative;
  border: 0;
  padding: 0;
}
blockquote.icon:before {
  content: "\201d";
  position: absolute;
  top: -1.5rem;
  left: -0.9rem;
  color: rgba(52, 63, 82, 0.05);
  font-size: 10rem;
  line-height: 1;
  z-index: 1;
}
blockquote.icon-top {
  padding-top: 3.75rem;
  position: relative;
}
blockquote.icon-top:before {
  content: "\201c";
  color: #aab0bc;
  opacity: 0.3;
  font-size: 6.5rem;
  font-weight: normal;
  top: 0;
  left: -0.3rem;
}
blockquote.icon-top.text-white:before {
  color: var(--bs-white);
}
blockquote.text-center.icon-top:before {
  left: 50%;
  transform: translateX(-52%);
}
.blockquote-footer {
  font-weight: 700;
  margin-top: 0;
  text-transform: uppercase;
  letter-spacing: 0.02rem;
}
.blockquote-details {
  display: flex;
  align-items: center;
  text-align: left;
}
.blockquote-details p {
  font-size: 0.8rem;
}
.blockquote-details .info {
  padding-left: 1rem;
}
.blockquote-details .icon-img img {
  width: 3.5rem !important;
}
.dropcap {
  display: block;
  float: left;
  font-size: calc(1.375rem + 1.5vw);
  line-height: 1;
  font-weight: 500;
  padding: 0;
  margin: 0.2rem 0.6rem 0 0;
}
@media (min-width: 1200px) {
  .dropcap {
    font-size: 2.5rem;
  }
}
.dropcap.rounded-circle {
  font-size: calc(1.265rem + 0.18vw);
  height: 2.3rem;
  width: 2.3rem;
  margin: 0.25rem 0.5rem 0 0;
  padding-bottom: 0.15rem;
  display: flex;
  align-content: center;
  align-items: center;
  justify-content: center;
}
@media (min-width: 1200px) {
  .dropcap.rounded-circle {
    font-size: 1.4rem;
  }
}
.unordered-list {
  padding-left: 0;
  list-style: none;
}
.unordered-list li {
  position: relative;
  padding-left: 1rem;
}
.unordered-list>li:before {
  font-family: sans-serif;
  position: absolute;
  top: -0.15rem;
  left: 0;
  font-size: 1rem;
  content: "\2022";
}
.unordered-list.bullet-blue li:before {
  color: var(--bs-blue);
}
.unordered-list.bullet-sky li:before {
  color: var(--bs-sky);
}
.unordered-list.bullet-purple li:before {
  color: var(--bs-purple);
}
.unordered-list.bullet-grape li:before {
  color: var(--bs-grape);
}
.unordered-list.bullet-violet li:before {
  color: var(--bs-violet);
}
.unordered-list.bullet-pink li:before {
  color: var(--bs-pink);
}
.unordered-list.bullet-fuchsia li:before {
  color: var(--bs-fuchsia);
}
.unordered-list.bullet-red li:before {
  color: var(--bs-red);
}
.unordered-list.bullet-orange li:before {
  color: var(--bs-orange);
}
.unordered-list.bullet-yellow li:before {
  color: var(--bs-yellow);
}
.unordered-list.bullet-green li:before {
  color: var(--bs-green);
}
.unordered-list.bullet-leaf li:before {
  color: var(--bs-leaf);
}
.unordered-list.bullet-aqua li:before {
  color: var(--bs-aqua);
}
.unordered-list.bullet-navy li:before {
  color: var(--bs-navy);
}
.unordered-list.bullet-ash li:before {
  color: var(--bs-ash);
}
.unordered-list.bullet-white li:before {
  color: var(--bs-white);
}
.unordered-list.bullet-light li:before {
  color: var(--bs-light);
}
.unordered-list.bullet-gray li:before {
  color: var(--bs-gray);
}
.unordered-list.bullet-dark li:before {
  color: var(--bs-dark);
}
.unordered-list.bullet-primary li:before {
  color: var(--bs-primary);
}
.icon-list {
  padding-left: 0;
  list-style: none;
}
.icon-list li {
  position: relative;
  padding-left: 1.25rem;
}
.icon-list.bullet-bg li {
  padding-left: 1.5rem;
}
.icon-list.bullet-soft-primary i {
  color: var(--bs-primary);
}
.icon-list.bullet-soft-primary.bullet-bg i {
  background-color: var(--bs-bullet-soft-primary);
}
.icon-list.bullet-bg i[class*=bullet-soft-primary] {
  background-color: var(--bs-bullet-soft-primary) !important;
  color: var(--bs-primary) !important;
}
.icon-list.bullet-soft-blue i {
  color: var(--bs-blue);
}
.icon-list.bullet-soft-blue.bullet-bg i {
  background-color: var(--bs-bullet-soft-blue);
}
.icon-list.bullet-bg i[class*=bullet-soft-blue] {
  background-color: var(--bs-bullet-soft-blue) !important;
  color: var(--bs-blue) !important;
}
.icon-list.bullet-soft-sky i {
  color: var(--bs-sky);
}
.icon-list.bullet-soft-sky.bullet-bg i {
  background-color: var(--bs-bullet-soft-sky);
}
.icon-list.bullet-bg i[class*=bullet-soft-sky] {
  background-color: var(--bs-bullet-soft-sky) !important;
  color: var(--bs-sky) !important;
}
.icon-list.bullet-soft-purple i {
  color: var(--bs-purple);
}
.icon-list.bullet-soft-purple.bullet-bg i {
  background-color: var(--bs-bullet-soft-purple);
}
.icon-list.bullet-bg i[class*=bullet-soft-purple] {
  background-color: var(--bs-bullet-soft-purple) !important;
  color: var(--bs-purple) !important;
}
.icon-list.bullet-soft-grape i {
  color: var(--bs-grape);
}
.icon-list.bullet-soft-grape.bullet-bg i {
  background-color: var(--bs-bullet-soft-grape);
}
.icon-list.bullet-bg i[class*=bullet-soft-grape] {
  background-color: var(--bs-bullet-soft-grape) !important;
  color: var(--bs-grape) !important;
}
.icon-list.bullet-soft-violet i {
  color: var(--bs-violet);
}
.icon-list.bullet-soft-violet.bullet-bg i {
  background-color: var(--bs-bullet-soft-violet);
}
.icon-list.bullet-bg i[class*=bullet-soft-violet] {
  background-color: var(--bs-bullet-soft-violet) !important;
  color: var(--bs-violet) !important;
}
.icon-list.bullet-soft-pink i {
  color: var(--bs-pink);
}
.icon-list.bullet-soft-pink.bullet-bg i {
  background-color: var(--bs-bullet-soft-pink);
}
.icon-list.bullet-bg i[class*=bullet-soft-pink] {
  background-color: var(--bs-bullet-soft-pink) !important;
  color: var(--bs-pink) !important;
}
.icon-list.bullet-soft-fuchsia i {
  color: var(--bs-fuchsia);
}
.icon-list.bullet-soft-fuchsia.bullet-bg i {
  background-color: var(--bs-bullet-soft-fuchsia);
}
.icon-list.bullet-bg i[class*=bullet-soft-fuchsia] {
  background-color: var(--bs-bullet-soft-fuchsia) !important;
  color: var(--bs-fuchsia) !important;
}
.icon-list.bullet-soft-red i {
  color: var(--bs-red);
}
.icon-list.bullet-soft-red.bullet-bg i {
  background-color: var(--bs-bullet-soft-red);
}
.icon-list.bullet-bg i[class*=bullet-soft-red] {
  background-color: var(--bs-bullet-soft-red) !important;
  color: var(--bs-red) !important;
}
.icon-list.bullet-soft-orange i {
  color: var(--bs-orange);
}
.icon-list.bullet-soft-orange.bullet-bg i {
  background-color: var(--bs-bullet-soft-orange);
}
.icon-list.bullet-bg i[class*=bullet-soft-orange] {
  background-color: var(--bs-bullet-soft-orange) !important;
  color: var(--bs-orange) !important;
}
.icon-list.bullet-soft-yellow i {
  color: var(--bs-yellow);
}
.icon-list.bullet-soft-yellow.bullet-bg i {
  background-color: var(--bs-bullet-soft-yellow);
}
.icon-list.bullet-bg i[class*=bullet-soft-yellow] {
  background-color: var(--bs-bullet-soft-yellow) !important;
  color: var(--bs-yellow) !important;
}
.icon-list.bullet-soft-green i {
  color: var(--bs-green);
}
.icon-list.bullet-soft-green.bullet-bg i {
  background-color: var(--bs-bullet-soft-green);
}
.icon-list.bullet-bg i[class*=bullet-soft-green] {
  background-color: var(--bs-bullet-soft-green) !important;
  color: var(--bs-green) !important;
}
.icon-list.bullet-soft-leaf i {
  color: var(--bs-leaf);
}
.icon-list.bullet-soft-leaf.bullet-bg i {
  background-color: var(--bs-bullet-soft-leaf);
}
.icon-list.bullet-bg i[class*=bullet-soft-leaf] {
  background-color: var(--bs-bullet-soft-leaf) !important;
  color: var(--bs-leaf) !important;
}
.icon-list.bullet-soft-aqua i {
  color: var(--bs-aqua);
}
.icon-list.bullet-soft-aqua.bullet-bg i {
  background-color: var(--bs-bullet-soft-aqua);
}
.icon-list.bullet-bg i[class*=bullet-soft-aqua] {
  background-color: var(--bs-bullet-soft-aqua) !important;
  color: var(--bs-aqua) !important;
}
.icon-list.bullet-soft-navy i {
  color: var(--bs-navy);
}
.icon-list.bullet-soft-navy.bullet-bg i {
  background-color: var(--bs-bullet-soft-navy);
}
.icon-list.bullet-bg i[class*=bullet-soft-navy] {
  background-color: var(--bs-bullet-soft-navy) !important;
  color: var(--bs-navy) !important;
}
.icon-list.bullet-soft-ash i {
  color: var(--bs-ash);
}
.icon-list.bullet-soft-ash.bullet-bg i {
  background-color: var(--bs-bullet-soft-ash);
}
.icon-list.bullet-bg i[class*=bullet-soft-ash] {
  background-color: var(--bs-bullet-soft-ash) !important;
  color: var(--bs-ash) !important;
}
.icon-list.bullet-blue i {
  color: var(--bs-blue);
}
.icon-list.bullet-blue.bullet-bg i {
  background-color: var(--bs-blue);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-blue] {
  background-color: var(--bs-blue) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-sky i {
  color: var(--bs-sky);
}
.icon-list.bullet-sky.bullet-bg i {
  background-color: var(--bs-sky);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-sky] {
  background-color: var(--bs-sky) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-purple i {
  color: var(--bs-purple);
}
.icon-list.bullet-purple.bullet-bg i {
  background-color: var(--bs-purple);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-purple] {
  background-color: var(--bs-purple) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-grape i {
  color: var(--bs-grape);
}
.icon-list.bullet-grape.bullet-bg i {
  background-color: var(--bs-grape);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-grape] {
  background-color: var(--bs-grape) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-violet i {
  color: var(--bs-violet);
}
.icon-list.bullet-violet.bullet-bg i {
  background-color: var(--bs-violet);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-violet] {
  background-color: var(--bs-violet) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-pink i {
  color: var(--bs-pink);
}
.icon-list.bullet-pink.bullet-bg i {
  background-color: var(--bs-pink);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-pink] {
  background-color: var(--bs-pink) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-fuchsia i {
  color: var(--bs-fuchsia);
}
.icon-list.bullet-fuchsia.bullet-bg i {
  background-color: var(--bs-fuchsia);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-fuchsia] {
  background-color: var(--bs-fuchsia) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-red i {
  color: var(--bs-red);
}
.icon-list.bullet-red.bullet-bg i {
  background-color: var(--bs-red);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-red] {
  background-color: var(--bs-red) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-orange i {
  color: var(--bs-orange);
}
.icon-list.bullet-orange.bullet-bg i {
  background-color: var(--bs-orange);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-orange] {
  background-color: var(--bs-orange) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-yellow i {
  color: var(--bs-yellow);
}
.icon-list.bullet-yellow.bullet-bg i {
  background-color: var(--bs-yellow);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-yellow] {
  background-color: var(--bs-yellow) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-green i {
  color: var(--bs-green);
}
.icon-list.bullet-green.bullet-bg i {
  background-color: var(--bs-green);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-green] {
  background-color: var(--bs-green) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-leaf i {
  color: var(--bs-leaf);
}
.icon-list.bullet-leaf.bullet-bg i {
  background-color: var(--bs-leaf);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-leaf] {
  background-color: var(--bs-leaf) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-aqua i {
  color: var(--bs-aqua);
}
.icon-list.bullet-aqua.bullet-bg i {
  background-color: var(--bs-aqua);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-aqua] {
  background-color: var(--bs-aqua) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-navy i {
  color: var(--bs-navy);
}
.icon-list.bullet-navy.bullet-bg i {
  background-color: var(--bs-navy);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-navy] {
  background-color: var(--bs-navy) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-ash i {
  color: var(--bs-ash);
}
.icon-list.bullet-ash.bullet-bg i {
  background-color: var(--bs-ash);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-ash] {
  background-color: var(--bs-ash) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-white i {
  color: var(--bs-white);
}
.icon-list.bullet-white.bullet-bg i {
  background-color: var(--bs-white);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-white] {
  background-color: var(--bs-white) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-light i {
  color: var(--bs-light);
}
.icon-list.bullet-light.bullet-bg i {
  background-color: var(--bs-light);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-light] {
  background-color: var(--bs-light) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-gray i {
  color: var(--bs-gray);
}
.icon-list.bullet-gray.bullet-bg i {
  background-color: var(--bs-gray);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-gray] {
  background-color: var(--bs-gray) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-dark i {
  color: var(--bs-dark);
}
.icon-list.bullet-dark.bullet-bg i {
  background-color: var(--bs-dark);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-dark] {
  background-color: var(--bs-dark) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-primary i {
  color: var(--bs-primary);
}
.icon-list.bullet-primary.bullet-bg i {
  background-color: var(--bs-primary);
  color: var(--bs-white);
}
.icon-list.bullet-bg i[class*=bullet-primary] {
  background-color: var(--bs-primary) !important;
  color: var(--bs-white) !important;
}
.icon-list.bullet-white i,
.icon-list.bullet-bg i.bullet-white {
  color: var(--bs-primary) !important;
}
.icon-list i {
  position: absolute;
  top: -0.2rem;
  left: 0;
  font-size: 1rem;
}
.icon-list.bullet-bg i {
  border-radius: 100%;
  width: 1rem;
  height: 1rem;
  top: 0.2rem;
  font-size: 0.8rem;
  line-height: 1;
  letter-spacing: normal;
  text-align: center;
  display: table;
}
.icon-list.bullet-bg i:before {
  vertical-align: middle;
  display: table-cell;
}
.widget .list-unstyled:not(.tag-list) li+li,
.unordered-list li+li,
.icon-list:not(.row) li+li {
  margin-top: 0.35rem;
}
.list-unstyled li a.active {
  color: var(--bs-primary) !important;
}
.filter:not(.basic-filter) p {
  margin: 0 1rem 0 0;
  display: inline;
}
.filter:not(.basic-filter) ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: inline;
}
.filter:not(.basic-filter) ul li {
  display: inline;
}
.filter:not(.basic-filter) ul li+li:before {
  content: "";
  display: inline-block;
  width: 0.2rem;
  height: 0.2rem;
  border-radius: 100%;
  margin: 0 0.8rem 0 0.5rem;
  vertical-align: 0.15rem;
  background: rgba(30, 34, 40, 0.2);
}
.filter:not(.basic-filter) ul li a {
  cursor: pointer;
}
.filter:not(.basic-filter) ul li a.active,
.filter:not(.basic-filter) ul li a:hover {
  color: var(--bs-primary);
}
.filter:not(.basic-filter).dark-filter ul li+li:before {
  background: rgba(var(--bs-white-rgb), 0.2);
}
.filter:not(.basic-filter).dark-filter ul li a.active,
.filter:not(.basic-filter).dark-filter ul li a:hover {
  color: var(--bs-white);
}
.isotope-filter {
  position: relative;
  z-index: 5;
}
.filter.basic-filter p {
  margin: 0 1rem 0 0;
  display: inline;
  color: #343f52;
  font-weight: 700;
}
.filter.basic-filter ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: inline;
}
.filter.basic-filter ul li {
  display: inline;
  margin-right: 1rem;
}
.filter.basic-filter ul li a {
  cursor: pointer;
  color: #60697b;
}
.filter.basic-filter ul li a.active,
.filter.basic-filter ul li a:hover {
  color: var(--bs-primary);
}
.filter.basic-filter.dark-filter ul li a.active,
.filter.basic-filter.dark-filter ul li a:hover {
  color: var(--bs-white);
}
.image-list {
  padding: 0;
  margin: 0;
}
.image-list p,
.image-list .meta {
  margin: 0;
}
.image-list:after {
  content: "";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}
.image-list>li {
  clear: both;
  display: block;
  overflow: hidden;
}
.image-list>li+li {
  margin-top: 1rem;
}
.image-list figure {
  float: left;
  width: 3.5rem;
  height: 3.5rem;
}
.image-list .post-content {
  margin-left: 4.25rem;
  margin-bottom: 0;
}
.tag-list li {
  display: inline-block;
  margin-right: 0.2rem;
  margin-bottom: 0.1rem;
}
.tag-list li a:before {
  font-style: normal;
  content: "#";
  font-weight: normal;
  padding-right: 0.2rem;
}
.widget .tag-list li,
.blog.single .post .tag-list li {
  margin-top: 0;
  margin-bottom: 0.45rem;
}
.widget .tag-list li a {
  display: flex;
  align-items: center;
}
.meta,
.post-category,
.filter:not(.basic-filter),
.filter:not(.basic-filter) ul li a {
  text-transform: uppercase;
  letter-spacing: 0.02rem;
  font-size: 0.7rem;
  font-weight: 700;
  color: #aab0bc;
}
.meta {
  font-size: 0.65rem;
}
.post-category {
  margin-bottom: 0.4rem;
}
.post-meta {
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 0.7rem;
  color: #aab0bc;
}
.post-meta li {
  display: inline-block;
}
.post-meta li a {
  color: #aab0bc;
}
.post-meta li a:hover {
  color: var(--bs-primary);
  border-color: var(--bs-primary);
}
.post-meta li:before {
  content: "";
  display: inline-block;
  width: 0.2rem;
  height: 0.2rem;
  border-radius: 100%;
  margin: 0 0.6rem 0;
  vertical-align: 0.15rem;
  background: #aab0bc;
  opacity: 0.5;
}
.post-meta li i {
  padding-right: 0.2rem;
  vertical-align: -0.05rem;
}
.post-meta.text-white li:before {
  background: var(--bs-white);
}
.post-header .post-meta {
  font-size: 0.8rem;
}
.post-header .post-meta li:before {
  margin: 0 0.6rem 0 0.4rem;
}
.post-meta li:first-child:before,
article .post-meta li.ms-auto:before {
  display: none;
}
@media (max-width: 767px) {
  .card-footer .post-meta li.post-author,
  .card-footer .post-meta li.post-comments span {
    display: none;
  }
  .post-header .post-meta li.post-author,
  .post-header .post-meta li.post-comments span,
  .post-header .post-meta li.post-likes span {
    display: none;
  }
}
.glyphs {
  padding: 0;
}
.glyphs li {
  display: block;
}
.glyphs li svg {
  margin-bottom: 0.3rem;
  display: inline-block;
}
.glyphs li i:before {
  margin: 0;
  padding: 0;
  color: #343f52;
  font-size: calc(1.285rem + 0.42vw);
}
@media (min-width: 1200px) {
  .glyphs li i:before {
    font-size: 1.6rem;
  }
}
.glyphs li span {
  margin: 0;
  display: block;
  color: #aab0bc;
  font-size: 0.7rem;
}
.glyphs li .card-body {
  padding: 0.5rem 0.2rem 1rem;
}
.glyphs li .card-footer {
  padding: 0.5rem 0.2rem;
  cursor: pointer;
  font-size: 0.7rem;
}
.glyphs-svg li .card-body {
  padding-top: 1rem;
}
.code-wrapper {
  margin-bottom: 0;
  position: relative;
}
.code-wrapper .btn-clipboard {
  font-family: "Manrope", sans-serif;
  position: absolute;
  top: 0.5rem;
  right: 0.5rem;
  cursor: pointer;
  transform: none;
  font-size: 0.6rem;
  padding: 0.1rem 0.45rem 0.1rem;
  z-index: 3;
}
.code-wrapper pre {
  margin-bottom: 0;
}
pre[class*=language-] {
  position: relative;
  padding-top: 2rem;
}
pre[class*=language-]:focus {
  outline: none;
}
:not(pre)>code[class*=language-],
pre[class*=language-],
pre {
  margin: 0;
  background: none;
  padding: 2rem;
  font-size: 0.7rem;
}
.external,
.internal,
.code,
.terminal,
.kbd,
.folder,
.file,
mark.doc,
.doc.mark {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  position: relative;
  display: inline-flex;
  align-items: center;
  margin: 0.275rem 0.1rem;
  vertical-align: 2px;
  padding: 0.05rem 0.4rem 0.05rem 1.4rem;
  font-size: 0.65rem;
  border-radius: 0.2rem;
  background: rgba(164, 174, 198, 0.15);
  box-shadow: none;
  border: 0;
  -webkit-font-smoothing: auto;
  -moz-osx-font-smoothing: auto;
}
mark.doc,
.doc.mark {
  padding: 0.05rem 0.4rem 0.2rem;
  padding-bottom: 0.05rem;
}
.external:after,
.internal:after,
.code:before,
.terminal:before,
.kbd:before,
.folder:before,
.file:before {
  position: absolute;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 1.6rem;
  padding-top: 0.05rem;
  margin-right: 0.4rem;
  text-align: center;
  color: inherit;
  font-family: "Unicons";
  font-size: 0.7rem;
  border-radius: 0.2rem;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.external,
.internal {
  color: #60697b;
  padding: 0.05rem 1.6rem 0.05rem 0.4rem;
}
.external:after,
.internal:after {
  color: #60697b;
  font-size: 0.65rem;
  left: auto;
  right: 0;
  margin-right: 0;
  margin-left: 0.4rem;
}
.external.text-white:after,
.internal.text-white:after {
  color: var(--bs-white);
}
.external:not(.text-white):hover,
.external:not(.text-white):hover:after,
.internal:not(.text-white):hover,
.internal:not(.text-white):hover:after {
  color: var(--bs-primary);
}
.external {
  padding-right: 1.4rem;
}
.external.my-0:after {
  padding-top: 0;
}
.external:after {
  font-family: "Custom";
  content: "\e906";
  font-size: 0.7rem;
}
.internal {
  padding-right: 1.4rem;
}
.internal:after {
  content: "\e94c";
  font-size: 0.8rem;
}
.code:before {
  font-size: 0.85rem;
  content: "\e952";
}
.terminal:before {
  font-family: "Custom";
  content: "\e905";
  font-size: 0.8rem;
}
.folder:before {
  content: "\eb34";
}
.file:before {
  content: "\eaed";
}
.kbd:before {
  content: "\eba9";
  font-size: 0.8rem;
}
.text-soft-primary {
  color: var(--bs-soft-primary) !important;
}
.text-soft-blue {
  color: var(--bs-soft-blue) !important;
}
.text-soft-sky {
  color: var(--bs-soft-sky) !important;
}
.text-soft-purple {
  color: var(--bs-soft-purple) !important;
}
.text-soft-grape {
  color: var(--bs-soft-grape) !important;
}
.text-soft-violet {
  color: var(--bs-soft-violet) !important;
}
.text-soft-pink {
  color: var(--bs-soft-pink) !important;
}
.text-soft-fuchsia {
  color: var(--bs-soft-fuchsia) !important;
}
.text-soft-red {
  color: var(--bs-soft-red) !important;
}
.text-soft-orange {
  color: var(--bs-soft-orange) !important;
}
.text-soft-yellow {
  color: var(--bs-soft-yellow) !important;
}
.text-soft-green {
  color: var(--bs-soft-green) !important;
}
.text-soft-leaf {
  color: var(--bs-soft-leaf) !important;
}
.text-soft-aqua {
  color: var(--bs-soft-aqua) !important;
}
.text-soft-navy {
  color: var(--bs-soft-navy) !important;
}
.text-soft-ash {
  color: var(--bs-soft-ash) !important;
}
.text-soft-gray {
  color: var(--bs-soft-gray) !important;
}
.text-pale-primary {
  color: var(--bs-pale-primary) !important;
}
.text-pale-blue {
  color: var(--bs-pale-blue) !important;
}
.text-pale-sky {
  color: var(--bs-pale-sky) !important;
}
.text-pale-purple {
  color: var(--bs-pale-purple) !important;
}
.text-pale-grape {
  color: var(--bs-pale-grape) !important;
}
.text-pale-violet {
  color: var(--bs-pale-violet) !important;
}
.text-pale-pink {
  color: var(--bs-pale-pink) !important;
}
.text-pale-fuchsia {
  color: var(--bs-pale-fuchsia) !important;
}
.text-pale-red {
  color: var(--bs-pale-red) !important;
}
.text-pale-orange {
  color: var(--bs-pale-orange) !important;
}
.text-pale-yellow {
  color: var(--bs-pale-yellow) !important;
}
.text-pale-green {
  color: var(--bs-pale-green) !important;
}
.text-pale-leaf {
  color: var(--bs-pale-leaf) !important;
}
.text-pale-aqua {
  color: var(--bs-pale-aqua) !important;
}
.text-pale-navy {
  color: var(--bs-pale-navy) !important;
}
.text-pale-dark {
  color: var(--bs-pale-dark) !important;
}
.text-pale-ash {
  color: var(--bs-pale-ash) !important;
}
.text-gradient {
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
}
.text-gradient em {
  letter-spacing: normal;
  padding-left: 0.05em;
  padding-right: 0.05em;
}
.text-gradient.text-line.gradient-1:before {
  background: #f857a6;
}
.text-gradient.text-line.gradient-2:before {
  background: #f5b161;
}
.text-gradient.text-line.gradient-3:before {
  background: #FBDA61;
}
.text-gradient.text-line.gradient-4:before {
  background: #9040db;
}
.text-gradient.text-line.gradient-5:before {
  background: #4158D0;
}
.text-gradient.text-line.gradient-6:before {
  background: #08AEEA;
}
.text-gradient.text-line.gradient-7:before {
  background: #0093e9;
}
.fs-sm {
  font-size: 0.7rem !important;
}
.fs-lg {
  font-size: 1rem !important;
}
.fs-1 {
  font-size: 0.05rem !important;
}
.fs-2 {
  font-size: 0.1rem !important;
}
.fs-3 {
  font-size: 0.15rem !important;
}
.fs-4 {
  font-size: 0.2rem !important;
}
.fs-5 {
  font-size: 0.25rem !important;
}
.fs-6 {
  font-size: 0.3rem !important;
}
.fs-7 {
  font-size: 0.35rem !important;
}
.fs-8 {
  font-size: 0.4rem !important;
}
.fs-9 {
  font-size: 0.45rem !important;
}
.fs-10 {
  font-size: 0.5rem !important;
}
.fs-11 {
  font-size: 0.55rem !important;
}
.fs-12 {
  font-size: 0.6rem !important;
}
.fs-13 {
  font-size: 0.65rem !important;
}
.fs-14 {
  font-size: 0.7rem !important;
}
.fs-15 {
  font-size: 0.75rem !important;
}
.fs-16 {
  font-size: 0.8rem !important;
}
.fs-17 {
  font-size: 0.85rem !important;
}
.fs-18 {
  font-size: 0.9rem !important;
}
.fs-19 {
  font-size: 0.95rem !important;
}
.fs-20 {
  font-size: 1rem !important;
}
.fs-21 {
  font-size: 1.05rem !important;
}
.fs-22 {
  font-size: 1.1rem !important;
}
.fs-23 {
  font-size: 1.15rem !important;
}
.fs-24 {
  font-size: 1.2rem !important;
}
.fs-25 {
  font-size: 1.25rem !important;
}
.fs-26 {
  font-size: calc(1.255rem + 0.06vw) !important;
}
@media (min-width: 1200px) {
  .fs-26 {
    font-size: 1.3rem !important;
  }
}
.fs-27 {
  font-size: calc(1.26rem + 0.12vw) !important;
}
@media (min-width: 1200px) {
  .fs-27 {
    font-size: 1.35rem !important;
  }
}
.fs-28 {
  font-size: calc(1.265rem + 0.18vw) !important;
}
@media (min-width: 1200px) {
  .fs-28 {
    font-size: 1.4rem !important;
  }
}
.fs-29 {
  font-size: calc(1.27rem + 0.24vw) !important;
}
@media (min-width: 1200px) {
  .fs-29 {
    font-size: 1.45rem !important;
  }
}
.fs-30 {
  font-size: calc(1.275rem + 0.3vw) !important;
}
@media (min-width: 1200px) {
  .fs-30 {
    font-size: 1.5rem !important;
  }
}
.fs-31 {
  font-size: calc(1.28rem + 0.36vw) !important;
}
@media (min-width: 1200px) {
  .fs-31 {
    font-size: 1.55rem !important;
  }
}
.fs-32 {
  font-size: calc(1.285rem + 0.42vw) !important;
}
@media (min-width: 1200px) {
  .fs-32 {
    font-size: 1.6rem !important;
  }
}
.fs-33 {
  font-size: calc(1.29rem + 0.48vw) !important;
}
@media (min-width: 1200px) {
  .fs-33 {
    font-size: 1.65rem !important;
  }
}
.fs-34 {
  font-size: calc(1.295rem + 0.54vw) !important;
}
@media (min-width: 1200px) {
  .fs-34 {
    font-size: 1.7rem !important;
  }
}
.fs-35 {
  font-size: calc(1.3rem + 0.6vw) !important;
}
@media (min-width: 1200px) {
  .fs-35 {
    font-size: 1.75rem !important;
  }
}
.fs-36 {
  font-size: calc(1.305rem + 0.66vw) !important;
}
@media (min-width: 1200px) {
  .fs-36 {
    font-size: 1.8rem !important;
  }
}
.fs-37 {
  font-size: calc(1.31rem + 0.72vw) !important;
}
@media (min-width: 1200px) {
  .fs-37 {
    font-size: 1.85rem !important;
  }
}
.fs-38 {
  font-size: calc(1.315rem + 0.78vw) !important;
}
@media (min-width: 1200px) {
  .fs-38 {
    font-size: 1.9rem !important;
  }
}
.fs-39 {
  font-size: calc(1.32rem + 0.84vw) !important;
}
@media (min-width: 1200px) {
  .fs-39 {
    font-size: 1.95rem !important;
  }
}
.fs-40 {
  font-size: calc(1.325rem + 0.9vw) !important;
}
@media (min-width: 1200px) {
  .fs-40 {
    font-size: 2rem !important;
  }
}
.fs-41 {
  font-size: calc(1.33rem + 0.96vw) !important;
}
@media (min-width: 1200px) {
  .fs-41 {
    font-size: 2.05rem !important;
  }
}
.fs-42 {
  font-size: calc(1.335rem + 1.02vw) !important;
}
@media (min-width: 1200px) {
  .fs-42 {
    font-size: 2.1rem !important;
  }
}
.fs-43 {
  font-size: calc(1.34rem + 1.08vw) !important;
}
@media (min-width: 1200px) {
  .fs-43 {
    font-size: 2.15rem !important;
  }
}
.fs-44 {
  font-size: calc(1.345rem + 1.14vw) !important;
}
@media (min-width: 1200px) {
  .fs-44 {
    font-size: 2.2rem !important;
  }
}
.fs-45 {
  font-size: calc(1.35rem + 1.2vw) !important;
}
@media (min-width: 1200px) {
  .fs-45 {
    font-size: 2.25rem !important;
  }
}
.fs-46 {
  font-size: calc(1.355rem + 1.26vw) !important;
}
@media (min-width: 1200px) {
  .fs-46 {
    font-size: 2.3rem !important;
  }
}
.fs-47 {
  font-size: calc(1.36rem + 1.32vw) !important;
}
@media (min-width: 1200px) {
  .fs-47 {
    font-size: 2.35rem !important;
  }
}
.fs-48 {
  font-size: calc(1.365rem + 1.38vw) !important;
}
@media (min-width: 1200px) {
  .fs-48 {
    font-size: 2.4rem !important;
  }
}
.fs-49 {
  font-size: calc(1.37rem + 1.44vw) !important;
}
@media (min-width: 1200px) {
  .fs-49 {
    font-size: 2.45rem !important;
  }
}
.fs-50 {
  font-size: calc(1.375rem + 1.5vw) !important;
}
@media (min-width: 1200px) {
  .fs-50 {
    font-size: 2.5rem !important;
  }
}
.fs-51 {
  font-size: calc(1.38rem + 1.56vw) !important;
}
@media (min-width: 1200px) {
  .fs-51 {
    font-size: 2.55rem !important;
  }
}
.fs-52 {
  font-size: calc(1.385rem + 1.62vw) !important;
}
@media (min-width: 1200px) {
  .fs-52 {
    font-size: 2.6rem !important;
  }
}
.fs-53 {
  font-size: calc(1.39rem + 1.68vw) !important;
}
@media (min-width: 1200px) {
  .fs-53 {
    font-size: 2.65rem !important;
  }
}
.fs-54 {
  font-size: calc(1.395rem + 1.74vw) !important;
}
@media (min-width: 1200px) {
  .fs-54 {
    font-size: 2.7rem !important;
  }
}
.fs-55 {
  font-size: calc(1.4rem + 1.8vw) !important;
}
@media (min-width: 1200px) {
  .fs-55 {
    font-size: 2.75rem !important;
  }
}
.fs-56 {
  font-size: calc(1.405rem + 1.86vw) !important;
}
@media (min-width: 1200px) {
  .fs-56 {
    font-size: 2.8rem !important;
  }
}
.fs-57 {
  font-size: calc(1.41rem + 1.92vw) !important;
}
@media (min-width: 1200px) {
  .fs-57 {
    font-size: 2.85rem !important;
  }
}
.fs-58 {
  font-size: calc(1.415rem + 1.98vw) !important;
}
@media (min-width: 1200px) {
  .fs-58 {
    font-size: 2.9rem !important;
  }
}
.fs-59 {
  font-size: calc(1.42rem + 2.04vw) !important;
}
@media (min-width: 1200px) {
  .fs-59 {
    font-size: 2.95rem !important;
  }
}
.fs-60 {
  font-size: calc(1.425rem + 2.1vw) !important;
}
@media (min-width: 1200px) {
  .fs-60 {
    font-size: 3rem !important;
  }
}
.fs-61 {
  font-size: calc(1.43rem + 2.16vw) !important;
}
@media (min-width: 1200px) {
  .fs-61 {
    font-size: 3.05rem !important;
  }
}
.fs-62 {
  font-size: calc(1.435rem + 2.22vw) !important;
}
@media (min-width: 1200px) {
  .fs-62 {
    font-size: 3.1rem !important;
  }
}
.fs-63 {
  font-size: calc(1.44rem + 2.28vw) !important;
}
@media (min-width: 1200px) {
  .fs-63 {
    font-size: 3.15rem !important;
  }
}
.fs-64 {
  font-size: calc(1.445rem + 2.34vw) !important;
}
@media (min-width: 1200px) {
  .fs-64 {
    font-size: 3.2rem !important;
  }
}
.fs-65 {
  font-size: calc(1.45rem + 2.4vw) !important;
}
@media (min-width: 1200px) {
  .fs-65 {
    font-size: 3.25rem !important;
  }
}
.fs-66 {
  font-size: calc(1.455rem + 2.46vw) !important;
}
@media (min-width: 1200px) {
  .fs-66 {
    font-size: 3.3rem !important;
  }
}
.fs-67 {
  font-size: calc(1.46rem + 2.52vw) !important;
}
@media (min-width: 1200px) {
  .fs-67 {
    font-size: 3.35rem !important;
  }
}
.fs-68 {
  font-size: calc(1.465rem + 2.58vw) !important;
}
@media (min-width: 1200px) {
  .fs-68 {
    font-size: 3.4rem !important;
  }
}
.fs-69 {
  font-size: calc(1.47rem + 2.64vw) !important;
}
@media (min-width: 1200px) {
  .fs-69 {
    font-size: 3.45rem !important;
  }
}
.fs-70 {
  font-size: calc(1.475rem + 2.7vw) !important;
}
@media (min-width: 1200px) {
  .fs-70 {
    font-size: 3.5rem !important;
  }
}
.fs-71 {
  font-size: calc(1.48rem + 2.76vw) !important;
}
@media (min-width: 1200px) {
  .fs-71 {
    font-size: 3.55rem !important;
  }
}
.fs-72 {
  font-size: calc(1.485rem + 2.82vw) !important;
}
@media (min-width: 1200px) {
  .fs-72 {
    font-size: 3.6rem !important;
  }
}
.fs-73 {
  font-size: calc(1.49rem + 2.88vw) !important;
}
@media (min-width: 1200px) {
  .fs-73 {
    font-size: 3.65rem !important;
  }
}
.fs-74 {
  font-size: calc(1.495rem + 2.94vw) !important;
}
@media (min-width: 1200px) {
  .fs-74 {
    font-size: 3.7rem !important;
  }
}
.fs-75 {
  font-size: calc(1.5rem + 3vw) !important;
}
@media (min-width: 1200px) {
  .fs-75 {
    font-size: 3.75rem !important;
  }
}
.fs-76 {
  font-size: calc(1.505rem + 3.06vw) !important;
}
@media (min-width: 1200px) {
  .fs-76 {
    font-size: 3.8rem !important;
  }
}
.fs-77 {
  font-size: calc(1.51rem + 3.12vw) !important;
}
@media (min-width: 1200px) {
  .fs-77 {
    font-size: 3.85rem !important;
  }
}
.fs-78 {
  font-size: calc(1.515rem + 3.18vw) !important;
}
@media (min-width: 1200px) {
  .fs-78 {
    font-size: 3.9rem !important;
  }
}
.fs-79 {
  font-size: calc(1.52rem + 3.24vw) !important;
}
@media (min-width: 1200px) {
  .fs-79 {
    font-size: 3.95rem !important;
  }
}
.fs-80 {
  font-size: calc(1.525rem + 3.3vw) !important;
}
@media (min-width: 1200px) {
  .fs-80 {
    font-size: 4rem !important;
  }
}
.fs-81 {
  font-size: calc(1.53rem + 3.36vw) !important;
}
@media (min-width: 1200px) {
  .fs-81 {
    font-size: 4.05rem !important;
  }
}
.fs-82 {
  font-size: calc(1.535rem + 3.42vw) !important;
}
@media (min-width: 1200px) {
  .fs-82 {
    font-size: 4.1rem !important;
  }
}
.fs-83 {
  font-size: calc(1.54rem + 3.48vw) !important;
}
@media (min-width: 1200px) {
  .fs-83 {
    font-size: 4.15rem !important;
  }
}
.fs-84 {
  font-size: calc(1.545rem + 3.54vw) !important;
}
@media (min-width: 1200px) {
  .fs-84 {
    font-size: 4.2rem !important;
  }
}
.fs-85 {
  font-size: calc(1.55rem + 3.6vw) !important;
}
@media (min-width: 1200px) {
  .fs-85 {
    font-size: 4.25rem !important;
  }
}
.fs-86 {
  font-size: calc(1.555rem + 3.66vw) !important;
}
@media (min-width: 1200px) {
  .fs-86 {
    font-size: 4.3rem !important;
  }
}
.fs-87 {
  font-size: calc(1.56rem + 3.72vw) !important;
}
@media (min-width: 1200px) {
  .fs-87 {
    font-size: 4.35rem !important;
  }
}
.fs-88 {
  font-size: calc(1.565rem + 3.78vw) !important;
}
@media (min-width: 1200px) {
  .fs-88 {
    font-size: 4.4rem !important;
  }
}
.fs-89 {
  font-size: calc(1.57rem + 3.84vw) !important;
}
@media (min-width: 1200px) {
  .fs-89 {
    font-size: 4.45rem !important;
  }
}
.fs-90 {
  font-size: calc(1.575rem + 3.9vw) !important;
}
@media (min-width: 1200px) {
  .fs-90 {
    font-size: 4.5rem !important;
  }
}
.fs-91 {
  font-size: calc(1.58rem + 3.96vw) !important;
}
@media (min-width: 1200px) {
  .fs-91 {
    font-size: 4.55rem !important;
  }
}
.fs-92 {
  font-size: calc(1.585rem + 4.02vw) !important;
}
@media (min-width: 1200px) {
  .fs-92 {
    font-size: 4.6rem !important;
  }
}
.fs-93 {
  font-size: calc(1.59rem + 4.08vw) !important;
}
@media (min-width: 1200px) {
  .fs-93 {
    font-size: 4.65rem !important;
  }
}
.fs-94 {
  font-size: calc(1.595rem + 4.14vw) !important;
}
@media (min-width: 1200px) {
  .fs-94 {
    font-size: 4.7rem !important;
  }
}
.fs-95 {
  font-size: calc(1.6rem + 4.2vw) !important;
}
@media (min-width: 1200px) {
  .fs-95 {
    font-size: 4.75rem !important;
  }
}
.fs-96 {
  font-size: calc(1.605rem + 4.26vw) !important;
}
@media (min-width: 1200px) {
  .fs-96 {
    font-size: 4.8rem !important;
  }
}
.fs-97 {
  font-size: calc(1.61rem + 4.32vw) !important;
}
@media (min-width: 1200px) {
  .fs-97 {
    font-size: 4.85rem !important;
  }
}
.fs-98 {
  font-size: calc(1.615rem + 4.38vw) !important;
}
@media (min-width: 1200px) {
  .fs-98 {
    font-size: 4.9rem !important;
  }
}
.fs-99 {
  font-size: calc(1.62rem + 4.44vw) !important;
}
@media (min-width: 1200px) {
  .fs-99 {
    font-size: 4.95rem !important;
  }
}
.fs-100 {
  font-size: calc(1.625rem + 4.5vw) !important;
}
@media (min-width: 1200px) {
  .fs-100 {
    font-size: 5rem !important;
  }
}
.fs-101 {
  font-size: calc(1.63rem + 4.56vw) !important;
}
@media (min-width: 1200px) {
  .fs-101 {
    font-size: 5.05rem !important;
  }
}
.fs-102 {
  font-size: calc(1.635rem + 4.62vw) !important;
}
@media (min-width: 1200px) {
  .fs-102 {
    font-size: 5.1rem !important;
  }
}
.fs-103 {
  font-size: calc(1.64rem + 4.68vw) !important;
}
@media (min-width: 1200px) {
  .fs-103 {
    font-size: 5.15rem !important;
  }
}
.fs-104 {
  font-size: calc(1.645rem + 4.74vw) !important;
}
@media (min-width: 1200px) {
  .fs-104 {
    font-size: 5.2rem !important;
  }
}
.fs-105 {
  font-size: calc(1.65rem + 4.8vw) !important;
}
@media (min-width: 1200px) {
  .fs-105 {
    font-size: 5.25rem !important;
  }
}
.fs-106 {
  font-size: calc(1.655rem + 4.86vw) !important;
}
@media (min-width: 1200px) {
  .fs-106 {
    font-size: 5.3rem !important;
  }
}
.fs-107 {
  font-size: calc(1.66rem + 4.92vw) !important;
}
@media (min-width: 1200px) {
  .fs-107 {
    font-size: 5.35rem !important;
  }
}
.fs-108 {
  font-size: calc(1.665rem + 4.98vw) !important;
}
@media (min-width: 1200px) {
  .fs-108 {
    font-size: 5.4rem !important;
  }
}
.fs-109 {
  font-size: calc(1.67rem + 5.04vw) !important;
}
@media (min-width: 1200px) {
  .fs-109 {
    font-size: 5.45rem !important;
  }
}
.fs-110 {
  font-size: calc(1.675rem + 5.1vw) !important;
}
@media (min-width: 1200px) {
  .fs-110 {
    font-size: 5.5rem !important;
  }
}
.fs-111 {
  font-size: calc(1.68rem + 5.16vw) !important;
}
@media (min-width: 1200px) {
  .fs-111 {
    font-size: 5.55rem !important;
  }
}
.fs-112 {
  font-size: calc(1.685rem + 5.22vw) !important;
}
@media (min-width: 1200px) {
  .fs-112 {
    font-size: 5.6rem !important;
  }
}
.fs-113 {
  font-size: calc(1.69rem + 5.28vw) !important;
}
@media (min-width: 1200px) {
  .fs-113 {
    font-size: 5.65rem !important;
  }
}
.fs-114 {
  font-size: calc(1.695rem + 5.34vw) !important;
}
@media (min-width: 1200px) {
  .fs-114 {
    font-size: 5.7rem !important;
  }
}
.fs-115 {
  font-size: calc(1.7rem + 5.4vw) !important;
}
@media (min-width: 1200px) {
  .fs-115 {
    font-size: 5.75rem !important;
  }
}
.fs-116 {
  font-size: calc(1.705rem + 5.46vw) !important;
}
@media (min-width: 1200px) {
  .fs-116 {
    font-size: 5.8rem !important;
  }
}
.fs-117 {
  font-size: calc(1.71rem + 5.52vw) !important;
}
@media (min-width: 1200px) {
  .fs-117 {
    font-size: 5.85rem !important;
  }
}
.fs-118 {
  font-size: calc(1.715rem + 5.58vw) !important;
}
@media (min-width: 1200px) {
  .fs-118 {
    font-size: 5.9rem !important;
  }
}
.fs-119 {
  font-size: calc(1.72rem + 5.64vw) !important;
}
@media (min-width: 1200px) {
  .fs-119 {
    font-size: 5.95rem !important;
  }
}
.fs-120 {
  font-size: calc(1.725rem + 5.7vw) !important;
}
@media (min-width: 1200px) {
  .fs-120 {
    font-size: 6rem !important;
  }
}
.fs-121 {
  font-size: calc(1.73rem + 5.76vw) !important;
}
@media (min-width: 1200px) {
  .fs-121 {
    font-size: 6.05rem !important;
  }
}
.fs-122 {
  font-size: calc(1.735rem + 5.82vw) !important;
}
@media (min-width: 1200px) {
  .fs-122 {
    font-size: 6.1rem !important;
  }
}
.fs-123 {
  font-size: calc(1.74rem + 5.88vw) !important;
}
@media (min-width: 1200px) {
  .fs-123 {
    font-size: 6.15rem !important;
  }
}
.fs-124 {
  font-size: calc(1.745rem + 5.94vw) !important;
}
@media (min-width: 1200px) {
  .fs-124 {
    font-size: 6.2rem !important;
  }
}
.fs-125 {
  font-size: calc(1.75rem + 6vw) !important;
}
@media (min-width: 1200px) {
  .fs-125 {
    font-size: 6.25rem !important;
  }
}
.fs-126 {
  font-size: calc(1.755rem + 6.06vw) !important;
}
@media (min-width: 1200px) {
  .fs-126 {
    font-size: 6.3rem !important;
  }
}
.fs-127 {
  font-size: calc(1.76rem + 6.12vw) !important;
}
@media (min-width: 1200px) {
  .fs-127 {
    font-size: 6.35rem !important;
  }
}
.fs-128 {
  font-size: calc(1.765rem + 6.18vw) !important;
}
@media (min-width: 1200px) {
  .fs-128 {
    font-size: 6.4rem !important;
  }
}
.fs-129 {
  font-size: calc(1.77rem + 6.24vw) !important;
}
@media (min-width: 1200px) {
  .fs-129 {
    font-size: 6.45rem !important;
  }
}
.fs-130 {
  font-size: calc(1.775rem + 6.3vw) !important;
}
@media (min-width: 1200px) {
  .fs-130 {
    font-size: 6.5rem !important;
  }
}
.fs-131 {
  font-size: calc(1.78rem + 6.36vw) !important;
}
@media (min-width: 1200px) {
  .fs-131 {
    font-size: 6.55rem !important;
  }
}
.fs-132 {
  font-size: calc(1.785rem + 6.42vw) !important;
}
@media (min-width: 1200px) {
  .fs-132 {
    font-size: 6.6rem !important;
  }
}
.fs-133 {
  font-size: calc(1.79rem + 6.48vw) !important;
}
@media (min-width: 1200px) {
  .fs-133 {
    font-size: 6.65rem !important;
  }
}
.fs-134 {
  font-size: calc(1.795rem + 6.54vw) !important;
}
@media (min-width: 1200px) {
  .fs-134 {
    font-size: 6.7rem !important;
  }
}
.fs-135 {
  font-size: calc(1.8rem + 6.6vw) !important;
}
@media (min-width: 1200px) {
  .fs-135 {
    font-size: 6.75rem !important;
  }
}
.fs-136 {
  font-size: calc(1.805rem + 6.66vw) !important;
}
@media (min-width: 1200px) {
  .fs-136 {
    font-size: 6.8rem !important;
  }
}
.fs-137 {
  font-size: calc(1.81rem + 6.72vw) !important;
}
@media (min-width: 1200px) {
  .fs-137 {
    font-size: 6.85rem !important;
  }
}
.fs-138 {
  font-size: calc(1.815rem + 6.78vw) !important;
}
@media (min-width: 1200px) {
  .fs-138 {
    font-size: 6.9rem !important;
  }
}
.fs-139 {
  font-size: calc(1.82rem + 6.84vw) !important;
}
@media (min-width: 1200px) {
  .fs-139 {
    font-size: 6.95rem !important;
  }
}
.fs-140 {
  font-size: calc(1.825rem + 6.9vw) !important;
}
@media (min-width: 1200px) {
  .fs-140 {
    font-size: 7rem !important;
  }
}
.fs-141 {
  font-size: calc(1.83rem + 6.96vw) !important;
}
@media (min-width: 1200px) {
  .fs-141 {
    font-size: 7.05rem !important;
  }
}
.fs-142 {
  font-size: calc(1.835rem + 7.02vw) !important;
}
@media (min-width: 1200px) {
  .fs-142 {
    font-size: 7.1rem !important;
  }
}
.fs-143 {
  font-size: calc(1.84rem + 7.08vw) !important;
}
@media (min-width: 1200px) {
  .fs-143 {
    font-size: 7.15rem !important;
  }
}
.fs-144 {
  font-size: calc(1.845rem + 7.14vw) !important;
}
@media (min-width: 1200px) {
  .fs-144 {
    font-size: 7.2rem !important;
  }
}
.fs-145 {
  font-size: calc(1.85rem + 7.2vw) !important;
}
@media (min-width: 1200px) {
  .fs-145 {
    font-size: 7.25rem !important;
  }
}
.fs-146 {
  font-size: calc(1.855rem + 7.26vw) !important;
}
@media (min-width: 1200px) {
  .fs-146 {
    font-size: 7.3rem !important;
  }
}
.fs-147 {
  font-size: calc(1.86rem + 7.32vw) !important;
}
@media (min-width: 1200px) {
  .fs-147 {
    font-size: 7.35rem !important;
  }
}
.fs-148 {
  font-size: calc(1.865rem + 7.38vw) !important;
}
@media (min-width: 1200px) {
  .fs-148 {
    font-size: 7.4rem !important;
  }
}
.fs-149 {
  font-size: calc(1.87rem + 7.44vw) !important;
}
@media (min-width: 1200px) {
  .fs-149 {
    font-size: 7.45rem !important;
  }
}
.fs-150 {
  font-size: calc(1.875rem + 7.5vw) !important;
}
@media (min-width: 1200px) {
  .fs-150 {
    font-size: 7.5rem !important;
  }
}
.fs-151 {
  font-size: calc(1.88rem + 7.56vw) !important;
}
@media (min-width: 1200px) {
  .fs-151 {
    font-size: 7.55rem !important;
  }
}
.fs-152 {
  font-size: calc(1.885rem + 7.62vw) !important;
}
@media (min-width: 1200px) {
  .fs-152 {
    font-size: 7.6rem !important;
  }
}
.fs-153 {
  font-size: calc(1.89rem + 7.68vw) !important;
}
@media (min-width: 1200px) {
  .fs-153 {
    font-size: 7.65rem !important;
  }
}
.fs-154 {
  font-size: calc(1.895rem + 7.74vw) !important;
}
@media (min-width: 1200px) {
  .fs-154 {
    font-size: 7.7rem !important;
  }
}
.fs-155 {
  font-size: calc(1.9rem + 7.8vw) !important;
}
@media (min-width: 1200px) {
  .fs-155 {
    font-size: 7.75rem !important;
  }
}
.fs-156 {
  font-size: calc(1.905rem + 7.86vw) !important;
}
@media (min-width: 1200px) {
  .fs-156 {
    font-size: 7.8rem !important;
  }
}
.fs-157 {
  font-size: calc(1.91rem + 7.92vw) !important;
}
@media (min-width: 1200px) {
  .fs-157 {
    font-size: 7.85rem !important;
  }
}
.fs-158 {
  font-size: calc(1.915rem + 7.98vw) !important;
}
@media (min-width: 1200px) {
  .fs-158 {
    font-size: 7.9rem !important;
  }
}
.fs-159 {
  font-size: calc(1.92rem + 8.04vw) !important;
}
@media (min-width: 1200px) {
  .fs-159 {
    font-size: 7.95rem !important;
  }
}
.fs-160 {
  font-size: calc(1.925rem + 8.1vw) !important;
}
@media (min-width: 1200px) {
  .fs-160 {
    font-size: 8rem !important;
  }
}
.fs-161 {
  font-size: calc(1.93rem + 8.16vw) !important;
}
@media (min-width: 1200px) {
  .fs-161 {
    font-size: 8.05rem !important;
  }
}
.fs-162 {
  font-size: calc(1.935rem + 8.22vw) !important;
}
@media (min-width: 1200px) {
  .fs-162 {
    font-size: 8.1rem !important;
  }
}
.fs-163 {
  font-size: calc(1.94rem + 8.28vw) !important;
}
@media (min-width: 1200px) {
  .fs-163 {
    font-size: 8.15rem !important;
  }
}
.fs-164 {
  font-size: calc(1.945rem + 8.34vw) !important;
}
@media (min-width: 1200px) {
  .fs-164 {
    font-size: 8.2rem !important;
  }
}
.fs-165 {
  font-size: calc(1.95rem + 8.4vw) !important;
}
@media (min-width: 1200px) {
  .fs-165 {
    font-size: 8.25rem !important;
  }
}
.fs-166 {
  font-size: calc(1.955rem + 8.46vw) !important;
}
@media (min-width: 1200px) {
  .fs-166 {
    font-size: 8.3rem !important;
  }
}
.fs-167 {
  font-size: calc(1.96rem + 8.52vw) !important;
}
@media (min-width: 1200px) {
  .fs-167 {
    font-size: 8.35rem !important;
  }
}
.fs-168 {
  font-size: calc(1.965rem + 8.58vw) !important;
}
@media (min-width: 1200px) {
  .fs-168 {
    font-size: 8.4rem !important;
  }
}
.fs-169 {
  font-size: calc(1.97rem + 8.64vw) !important;
}
@media (min-width: 1200px) {
  .fs-169 {
    font-size: 8.45rem !important;
  }
}
.fs-170 {
  font-size: calc(1.975rem + 8.7vw) !important;
}
@media (min-width: 1200px) {
  .fs-170 {
    font-size: 8.5rem !important;
  }
}
.fs-171 {
  font-size: calc(1.98rem + 8.76vw) !important;
}
@media (min-width: 1200px) {
  .fs-171 {
    font-size: 8.55rem !important;
  }
}
.fs-172 {
  font-size: calc(1.985rem + 8.82vw) !important;
}
@media (min-width: 1200px) {
  .fs-172 {
    font-size: 8.6rem !important;
  }
}
.fs-173 {
  font-size: calc(1.99rem + 8.88vw) !important;
}
@media (min-width: 1200px) {
  .fs-173 {
    font-size: 8.65rem !important;
  }
}
.fs-174 {
  font-size: calc(1.995rem + 8.94vw) !important;
}
@media (min-width: 1200px) {
  .fs-174 {
    font-size: 8.7rem !important;
  }
}
.fs-175 {
  font-size: calc(2rem + 9vw) !important;
}
@media (min-width: 1200px) {
  .fs-175 {
    font-size: 8.75rem !important;
  }
}
.fs-176 {
  font-size: calc(2.005rem + 9.06vw) !important;
}
@media (min-width: 1200px) {
  .fs-176 {
    font-size: 8.8rem !important;
  }
}
.fs-177 {
  font-size: calc(2.01rem + 9.12vw) !important;
}
@media (min-width: 1200px) {
  .fs-177 {
    font-size: 8.85rem !important;
  }
}
.fs-178 {
  font-size: calc(2.015rem + 9.18vw) !important;
}
@media (min-width: 1200px) {
  .fs-178 {
    font-size: 8.9rem !important;
  }
}
.fs-179 {
  font-size: calc(2.02rem + 9.24vw) !important;
}
@media (min-width: 1200px) {
  .fs-179 {
    font-size: 8.95rem !important;
  }
}
.fs-180 {
  font-size: calc(2.025rem + 9.3vw) !important;
}
@media (min-width: 1200px) {
  .fs-180 {
    font-size: 9rem !important;
  }
}
.fs-181 {
  font-size: calc(2.03rem + 9.36vw) !important;
}
@media (min-width: 1200px) {
  .fs-181 {
    font-size: 9.05rem !important;
  }
}
.fs-182 {
  font-size: calc(2.035rem + 9.42vw) !important;
}
@media (min-width: 1200px) {
  .fs-182 {
    font-size: 9.1rem !important;
  }
}
.fs-183 {
  font-size: calc(2.04rem + 9.48vw) !important;
}
@media (min-width: 1200px) {
  .fs-183 {
    font-size: 9.15rem !important;
  }
}
.fs-184 {
  font-size: calc(2.045rem + 9.54vw) !important;
}
@media (min-width: 1200px) {
  .fs-184 {
    font-size: 9.2rem !important;
  }
}
.fs-185 {
  font-size: calc(2.05rem + 9.6vw) !important;
}
@media (min-width: 1200px) {
  .fs-185 {
    font-size: 9.25rem !important;
  }
}
.fs-186 {
  font-size: calc(2.055rem + 9.66vw) !important;
}
@media (min-width: 1200px) {
  .fs-186 {
    font-size: 9.3rem !important;
  }
}
.fs-187 {
  font-size: calc(2.06rem + 9.72vw) !important;
}
@media (min-width: 1200px) {
  .fs-187 {
    font-size: 9.35rem !important;
  }
}
.fs-188 {
  font-size: calc(2.065rem + 9.78vw) !important;
}
@media (min-width: 1200px) {
  .fs-188 {
    font-size: 9.4rem !important;
  }
}
.fs-189 {
  font-size: calc(2.07rem + 9.84vw) !important;
}
@media (min-width: 1200px) {
  .fs-189 {
    font-size: 9.45rem !important;
  }
}
.fs-190 {
  font-size: calc(2.075rem + 9.9vw) !important;
}
@media (min-width: 1200px) {
  .fs-190 {
    font-size: 9.5rem !important;
  }
}
.fs-191 {
  font-size: calc(2.08rem + 9.96vw) !important;
}
@media (min-width: 1200px) {
  .fs-191 {
    font-size: 9.55rem !important;
  }
}
.fs-192 {
  font-size: calc(2.085rem + 10.02vw) !important;
}
@media (min-width: 1200px) {
  .fs-192 {
    font-size: 9.6rem !important;
  }
}
.fs-193 {
  font-size: calc(2.09rem + 10.08vw) !important;
}
@media (min-width: 1200px) {
  .fs-193 {
    font-size: 9.65rem !important;
  }
}
.fs-194 {
  font-size: calc(2.095rem + 10.14vw) !important;
}
@media (min-width: 1200px) {
  .fs-194 {
    font-size: 9.7rem !important;
  }
}
.fs-195 {
  font-size: calc(2.1rem + 10.2vw) !important;
}
@media (min-width: 1200px) {
  .fs-195 {
    font-size: 9.75rem !important;
  }
}
.fs-196 {
  font-size: calc(2.105rem + 10.26vw) !important;
}
@media (min-width: 1200px) {
  .fs-196 {
    font-size: 9.8rem !important;
  }
}
.fs-197 {
  font-size: calc(2.11rem + 10.32vw) !important;
}
@media (min-width: 1200px) {
  .fs-197 {
    font-size: 9.85rem !important;
  }
}
.fs-198 {
  font-size: calc(2.115rem + 10.38vw) !important;
}
@media (min-width: 1200px) {
  .fs-198 {
    font-size: 9.9rem !important;
  }
}
.fs-199 {
  font-size: calc(2.12rem + 10.44vw) !important;
}
@media (min-width: 1200px) {
  .fs-199 {
    font-size: 9.95rem !important;
  }
}
.fs-200 {
  font-size: calc(2.125rem + 10.5vw) !important;
}
@media (min-width: 1200px) {
  .fs-200 {
    font-size: 10rem !important;
  }
}
input,
textarea,
select {
  -webkit-appearance: none !important;
}
.form-floating:not(.form-control:disabled)::before {
  background: none;
}
.form-floating>label {
  color: #959ca9;
  font-size: 0.75rem;
}
.form-floating.input-group label {
  margin-left: 0.05rem !important;
}
.form-floating>textarea.form-control:not(:-moz-placeholder-shown) {
  padding-top: 1.3rem;
}
.form-floating>textarea.form-control:focus,
.form-floating>textarea.form-control:not(:placeholder-shown) {
  padding-top: 1.3rem;
}
.form-floating>textarea.form-control:-webkit-autofill {
  padding-top: 1.3rem;
}
.form-floating>.form-control:not(:-moz-placeholder-shown)~label {
  color: #959ca9;
}
.form-floating>.form-control:focus~label,
.form-floating>.form-control:not(:placeholder-shown)~label,
.form-floating>.form-control-plaintext~label,
.form-floating>.form-select~label {
  color: #959ca9;
}
.form-floating>.form-control:not(:-moz-placeholder-shown)~label::after {
  background-color: transparent;
}
.form-floating>.form-control:focus~label::after,
.form-floating>.form-control:not(:placeholder-shown)~label::after,
.form-floating>.form-control-plaintext~label::after,
.form-floating>.form-select~label::after {
  background-color: transparent;
}
.search-form {
  position: relative;
}
.search-form .form-control {
  margin: 0;
  padding-right: 2.25rem !important;
}
.search-form:before {
  content: "\eca5";
  font-family: "Unicons";
  display: block;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 0.75rem;
  font-size: 0.9rem;
  color: #959ca9;
  z-index: 1;
}
.password-toggle {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 0.75rem;
  cursor: pointer;
  font-size: 0.9rem;
  color: #959ca9;
}
.form-check-input {
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  margin-top: 0.2rem;
}
.form-select {
  background-clip: padding-box;
}
.form-select.form-select-sm {
  width: auto;
  min-width: 2.5rem;
  padding: 0.2rem 0.5rem;
  background-position: right 0.4rem center;
}
.mc-field-group {
  text-align: left !important;
}
.input-group>.form-control:focus,
.input-group>.form-select:focus {
  z-index: 0;
}
.input-group>.btn {
  max-height: 2.6rem;
}
form.dark-fields .form-control {
  background: rgba(var(--bs-white-rgb), 0.03);
  border-color: rgba(var(--bs-white-rgb), 0.1);
  color: #cacaca;
}
form.dark-fields .form-control:focus {
  border-color: rgba(var(--bs-primary-rgb), 0.5);
}
.picker {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 1.5rem;
}
.picker label {
  position: relative;
  inline-size: 2rem;
  block-size: 2rem;
  margin-right: 0.5rem;
  isolation: isolate;
  display: grid;
  place-items: center;
  cursor: pointer;
}
.picker label>span {
  position: absolute;
  inset: 0;
  block-size: 100%;
  inline-size: 100%;
}
.picker label[for*=size]>span {
  font-size: 0.7rem;
  line-height: 1;
  display: grid;
  place-items: center;
  padding: 0.5rem;
  background: rgba(164, 174, 198, 0.2);
  border-radius: 0.4rem;
}
.picker label[for*=size]>input:checked~span {
  background-color: var(--bs-primary);
  color: var(--bs-white);
}
.picker label[for*=color] {
  inline-size: 1.5rem;
  block-size: 1.5rem;
}
.picker label[for*=color]>span {
  font-size: 1px;
  display: grid;
  place-items: center;
  background: var(--color, rgba(164, 174, 198, 0.2));
  border-radius: 100%;
  color: transparent;
}
.picker label[for*=color]>input:checked~span {
  box-shadow: 0 0 0 2px #fff, 0 0 0 4px var(--color);
}
.btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transform: translateY(0);
  letter-spacing: -0.01rem;
  position: relative;
}
.btn:not(.btn-link):hover {
  transform: translateY(-0.15rem);
  box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.15);
}
.btn.btn-white:hover,
.btn[class*=btn-soft-]:hover {
  box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.05);
}
.btn.btn-block {
  padding: 0;
  width: 2.2rem;
  height: 2.2rem;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  line-height: 1;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.btn.btn-block.btn-sm,
.btn-group-sm>.btn.btn-block {
  width: 1.8rem;
  height: 1.8rem;
  font-size: 1rem;
}
.btn.btn-block.btn-lg,
.btn-group-lg>.btn.btn-block {
  width: 3rem;
  height: 3rem;
  font-size: calc(1.265rem + 0.18vw);
}
@media (min-width: 1200px) {
  .btn.btn-block.btn-lg,
  .btn-group-lg>.btn.btn-block {
    font-size: 1.4rem;
  }
}
.btn.btn-block.btn-play {
  width: 3.5rem;
  height: 3.5rem;
  font-size: 1.2rem;
}
.btn.btn-block.btn-play i {
  margin-left: 0.15rem;
}
.btn.btn-block .number {
  display: table-cell;
  text-align: center;
  margin: 0 auto;
  vertical-align: middle;
  font-size: 1.1rem;
  font-weight: 700;
}
.btn.btn-circle {
  padding: 0;
  border-radius: 100% !important;
  width: 2.2rem;
  height: 2.2rem;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  line-height: 1;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.btn.btn-circle.btn-sm,
.btn-group-sm>.btn.btn-circle {
  width: 1.8rem;
  height: 1.8rem;
  font-size: 0.8rem;
}
.btn.btn-circle.btn-sm i,
.btn-group-sm>.btn.btn-circle i {
  font-size: 0.85rem;
}
.btn.btn-circle.btn-lg,
.btn-group-lg>.btn.btn-circle {
  width: 3rem;
  height: 3rem;
  font-size: calc(1.255rem + 0.06vw);
}
@media (min-width: 1200px) {
  .btn.btn-circle.btn-lg,
  .btn-group-lg>.btn.btn-circle {
    font-size: 1.3rem;
  }
}
.btn.btn-circle.btn-play {
  width: 3.5rem;
  height: 3.5rem;
  font-size: calc(1.355rem + 1.26vw);
}
@media (min-width: 1200px) {
  .btn.btn-circle.btn-play {
    font-size: 2.3rem;
  }
}
.btn.btn-circle.btn-play i {
  margin-left: 0.15rem;
}
.btn.btn-circle.btn-play:hover {
  transform: translateY(0);
}
.btn.btn-circle.counter {
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
}
.btn.btn-circle .number {
  display: table-cell;
  text-align: center;
  margin: 0 auto;
  vertical-align: middle;
  font-size: 1.1rem;
  font-weight: 700;
}
.btn.btn-expand {
  background: none;
  border: 0;
  padding-left: 0;
  padding-top: 0.55rem;
  padding-bottom: 0.55rem;
  max-height: 2.5rem;
  font-size: 0.85rem;
}
.btn.btn-expand span {
  position: relative;
  z-index: 2;
  padding-left: 2.95rem;
}
.btn.btn-expand i {
  position: absolute;
  z-index: 2;
  width: 2.5rem;
  height: 2.5rem;
  top: 0;
  left: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--bs-white);
  font-size: calc(1.26rem + 0.12vw);
  transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
}
@media (min-width: 1200px) {
  .btn.btn-expand i {
    font-size: 1.35rem;
  }
}
.btn.btn-expand:before {
  content: "";
  transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
  width: auto;
  height: 2.5rem;
  position: absolute;
  top: 0;
  left: 0;
  width: 2.5rem;
  border-radius: 50rem;
  z-index: 0;
}
.btn.btn-expand:hover {
  background: none;
  transform: translateY(0);
  color: var(--bs-white);
  box-shadow: none;
}
.btn.btn-expand:hover i {
  left: 0.25rem;
}
.btn.btn-expand:hover:before {
  width: 100%;
}
.btn.btn-expand.btn-sm,
.btn-group-sm>.btn.btn-expand {
  padding-top: 0.45rem;
  padding-bottom: 0.45rem;
  font-size: 0.75rem;
}
.btn.btn-expand.btn-sm i,
.btn-group-sm>.btn.btn-expand i {
  width: 2.15rem;
  height: 2.15rem;
  font-size: 1.1rem;
}
.btn.btn-expand.btn-sm span,
.btn-group-sm>.btn.btn-expand span {
  padding-left: 2.65rem;
}
.btn.btn-expand.btn-sm:before,
.btn-group-sm>.btn.btn-expand:before {
  width: 2.15rem;
}
.btn.btn-expand.btn-sm:hover:before,
.btn-group-sm>.btn.btn-expand:hover:before {
  width: 100%;
}
.btn.btn-expand.btn-lg,
.btn-group-lg>.btn.btn-expand {
  padding-top: 0.7rem;
  padding-bottom: 0.7rem;
  font-size: 0.9rem;
}
.btn.btn-expand.btn-lg i,
.btn-group-lg>.btn.btn-expand i {
  width: 2.9rem;
  height: 2.9rem;
  font-size: calc(1.26rem + 0.12vw);
}
@media (min-width: 1200px) {
  .btn.btn-expand.btn-lg i,
  .btn-group-lg>.btn.btn-expand i {
    font-size: 1.35rem;
  }
}
.btn.btn-expand.btn-lg span,
.btn-group-lg>.btn.btn-expand span {
  padding-left: 3.4rem;
}
.btn.btn-expand.btn-lg:before,
.btn-group-lg>.btn.btn-expand:before {
  width: 2.9rem;
}
.btn.btn-expand.btn-lg:hover:before,
.btn-group-lg>.btn.btn-expand:hover:before {
  width: 100%;
}
.input-group .btn:hover {
  transform: none;
}
button:focus {
  outline: 0;
}
.btn-blue {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-blue.btn-expand {
  color: var(--bs-blue);
}
.btn-blue.btn-expand:before {
  background-color: var(--bs-blue);
}
.btn-sky {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-sky.btn-expand {
  color: var(--bs-sky);
}
.btn-sky.btn-expand:before {
  background-color: var(--bs-sky);
}
.btn-purple {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-purple.btn-expand {
  color: var(--bs-purple);
}
.btn-purple.btn-expand:before {
  background-color: var(--bs-purple);
}
.btn-grape {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-grape.btn-expand {
  color: var(--bs-grape);
}
.btn-grape.btn-expand:before {
  background-color: var(--bs-grape);
}
.btn-violet {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-violet.btn-expand {
  color: var(--bs-violet);
}
.btn-violet.btn-expand:before {
  background-color: var(--bs-violet);
}
.btn-pink {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-pink.btn-expand {
  color: var(--bs-pink);
}
.btn-pink.btn-expand:before {
  background-color: var(--bs-pink);
}
.btn-fuchsia {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-fuchsia.btn-expand {
  color: var(--bs-fuchsia);
}
.btn-fuchsia.btn-expand:before {
  background-color: var(--bs-fuchsia);
}
.btn-red {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-red.btn-expand {
  color: var(--bs-red);
}
.btn-red.btn-expand:before {
  background-color: var(--bs-red);
}
.btn-orange {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-orange.btn-expand {
  color: var(--bs-orange);
}
.btn-orange.btn-expand:before {
  background-color: var(--bs-orange);
}
.btn-yellow {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-yellow.btn-expand {
  color: var(--bs-yellow);
}
.btn-yellow.btn-expand:before {
  background-color: var(--bs-yellow);
}
.btn-green {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-green.btn-expand {
  color: var(--bs-green);
}
.btn-green.btn-expand:before {
  background-color: var(--bs-green);
}
.btn-leaf {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-leaf.btn-expand {
  color: var(--bs-leaf);
}
.btn-leaf.btn-expand:before {
  background-color: var(--bs-leaf);
}
.btn-aqua {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-aqua.btn-expand {
  color: var(--bs-aqua);
}
.btn-aqua.btn-expand:before {
  background-color: var(--bs-aqua);
}
.btn-navy {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-navy.btn-expand {
  color: var(--bs-navy);
}
.btn-navy.btn-expand:before {
  background-color: var(--bs-navy);
}
.btn-ash {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-ash.btn-expand {
  color: var(--bs-ash);
}
.btn-ash.btn-expand:before {
  background-color: var(--bs-ash);
}
.btn-white {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-white.btn-expand {
  color: var(--bs-white);
}
.btn-white.btn-expand:before {
  background-color: var(--bs-white);
}
.btn-light {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-light.btn-expand {
  color: var(--bs-light);
}
.btn-light.btn-expand:before {
  background-color: var(--bs-light);
}
.btn-gray {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-gray.btn-expand {
  color: var(--bs-gray);
}
.btn-gray.btn-expand:before {
  background-color: var(--bs-gray);
}
.btn-dark {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-dark.btn-expand {
  color: var(--bs-dark);
}
.btn-dark.btn-expand:before {
  background-color: var(--bs-dark);
}
.btn-primary {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-active-color: var(--bs-white);
}
.btn-primary.btn-expand {
  color: var(--bs-primary);
}
.btn-primary.btn-expand:before {
  background-color: var(--bs-primary);
}
.btn-soft-blue {
  --bs-btn-color: var(--bs-blue);
  --bs-btn-hover-color: var(--bs-blue);
  --bs-btn-bg: var(--bs-pale-blue);
  --bs-btn-border-color: var(--bs-pale-blue);
  --bs-btn-hover-bg: var(--bs-pale-blue);
  --bs-btn-hover-border-color: var(--bs-pale-blue);
  --bs-btn-active-color: var(--bs-blue);
  --bs-btn-active-bg: var(--bs-pale-blue);
  --bs-btn-active-border-color: var(--bs-pale-blue);
}
.btn-soft-blue.btn-expand {
  color: var(--bs-blue);
}
.btn-soft-blue.btn-expand i,
.btn-soft-blue.btn-expand:before,
.btn-soft-blue.btn-expand:hover,
.btn-soft-blue.btn-expand:hover:before {
  color: var(--bs-blue);
}
.btn-soft-blue.btn-expand:before {
  background-color: var(--bs-pale-blue);
}
.btn-soft-sky {
  --bs-btn-color: var(--bs-sky);
  --bs-btn-hover-color: var(--bs-sky);
  --bs-btn-bg: var(--bs-pale-sky);
  --bs-btn-border-color: var(--bs-pale-sky);
  --bs-btn-hover-bg: var(--bs-pale-sky);
  --bs-btn-hover-border-color: var(--bs-pale-sky);
  --bs-btn-active-color: var(--bs-sky);
  --bs-btn-active-bg: var(--bs-pale-sky);
  --bs-btn-active-border-color: var(--bs-pale-sky);
}
.btn-soft-sky.btn-expand {
  color: var(--bs-sky);
}
.btn-soft-sky.btn-expand i,
.btn-soft-sky.btn-expand:before,
.btn-soft-sky.btn-expand:hover,
.btn-soft-sky.btn-expand:hover:before {
  color: var(--bs-sky);
}
.btn-soft-sky.btn-expand:before {
  background-color: var(--bs-pale-sky);
}
.btn-soft-purple {
  --bs-btn-color: var(--bs-purple);
  --bs-btn-hover-color: var(--bs-purple);
  --bs-btn-bg: var(--bs-pale-purple);
  --bs-btn-border-color: var(--bs-pale-purple);
  --bs-btn-hover-bg: var(--bs-pale-purple);
  --bs-btn-hover-border-color: var(--bs-pale-purple);
  --bs-btn-active-color: var(--bs-purple);
  --bs-btn-active-bg: var(--bs-pale-purple);
  --bs-btn-active-border-color: var(--bs-pale-purple);
}
.btn-soft-purple.btn-expand {
  color: var(--bs-purple);
}
.btn-soft-purple.btn-expand i,
.btn-soft-purple.btn-expand:before,
.btn-soft-purple.btn-expand:hover,
.btn-soft-purple.btn-expand:hover:before {
  color: var(--bs-purple);
}
.btn-soft-purple.btn-expand:before {
  background-color: var(--bs-pale-purple);
}
.btn-soft-grape {
  --bs-btn-color: var(--bs-grape);
  --bs-btn-hover-color: var(--bs-grape);
  --bs-btn-bg: var(--bs-pale-grape);
  --bs-btn-border-color: var(--bs-pale-grape);
  --bs-btn-hover-bg: var(--bs-pale-grape);
  --bs-btn-hover-border-color: var(--bs-pale-grape);
  --bs-btn-active-color: var(--bs-grape);
  --bs-btn-active-bg: var(--bs-pale-grape);
  --bs-btn-active-border-color: var(--bs-pale-grape);
}
.btn-soft-grape.btn-expand {
  color: var(--bs-grape);
}
.btn-soft-grape.btn-expand i,
.btn-soft-grape.btn-expand:before,
.btn-soft-grape.btn-expand:hover,
.btn-soft-grape.btn-expand:hover:before {
  color: var(--bs-grape);
}
.btn-soft-grape.btn-expand:before {
  background-color: var(--bs-pale-grape);
}
.btn-soft-violet {
  --bs-btn-color: var(--bs-violet);
  --bs-btn-hover-color: var(--bs-violet);
  --bs-btn-bg: var(--bs-pale-violet);
  --bs-btn-border-color: var(--bs-pale-violet);
  --bs-btn-hover-bg: var(--bs-pale-violet);
  --bs-btn-hover-border-color: var(--bs-pale-violet);
  --bs-btn-active-color: var(--bs-violet);
  --bs-btn-active-bg: var(--bs-pale-violet);
  --bs-btn-active-border-color: var(--bs-pale-violet);
}
.btn-soft-violet.btn-expand {
  color: var(--bs-violet);
}
.btn-soft-violet.btn-expand i,
.btn-soft-violet.btn-expand:before,
.btn-soft-violet.btn-expand:hover,
.btn-soft-violet.btn-expand:hover:before {
  color: var(--bs-violet);
}
.btn-soft-violet.btn-expand:before {
  background-color: var(--bs-pale-violet);
}
.btn-soft-pink {
  --bs-btn-color: var(--bs-pink);
  --bs-btn-hover-color: var(--bs-pink);
  --bs-btn-bg: var(--bs-pale-pink);
  --bs-btn-border-color: var(--bs-pale-pink);
  --bs-btn-hover-bg: var(--bs-pale-pink);
  --bs-btn-hover-border-color: var(--bs-pale-pink);
  --bs-btn-active-color: var(--bs-pink);
  --bs-btn-active-bg: var(--bs-pale-pink);
  --bs-btn-active-border-color: var(--bs-pale-pink);
}
.btn-soft-pink.btn-expand {
  color: var(--bs-pink);
}
.btn-soft-pink.btn-expand i,
.btn-soft-pink.btn-expand:before,
.btn-soft-pink.btn-expand:hover,
.btn-soft-pink.btn-expand:hover:before {
  color: var(--bs-pink);
}
.btn-soft-pink.btn-expand:before {
  background-color: var(--bs-pale-pink);
}
.btn-soft-fuchsia {
  --bs-btn-color: var(--bs-fuchsia);
  --bs-btn-hover-color: var(--bs-fuchsia);
  --bs-btn-bg: var(--bs-pale-fuchsia);
  --bs-btn-border-color: var(--bs-pale-fuchsia);
  --bs-btn-hover-bg: var(--bs-pale-fuchsia);
  --bs-btn-hover-border-color: var(--bs-pale-fuchsia);
  --bs-btn-active-color: var(--bs-fuchsia);
  --bs-btn-active-bg: var(--bs-pale-fuchsia);
  --bs-btn-active-border-color: var(--bs-pale-fuchsia);
}
.btn-soft-fuchsia.btn-expand {
  color: var(--bs-fuchsia);
}
.btn-soft-fuchsia.btn-expand i,
.btn-soft-fuchsia.btn-expand:before,
.btn-soft-fuchsia.btn-expand:hover,
.btn-soft-fuchsia.btn-expand:hover:before {
  color: var(--bs-fuchsia);
}
.btn-soft-fuchsia.btn-expand:before {
  background-color: var(--bs-pale-fuchsia);
}
.btn-soft-red {
  --bs-btn-color: var(--bs-red);
  --bs-btn-hover-color: var(--bs-red);
  --bs-btn-bg: var(--bs-pale-red);
  --bs-btn-border-color: var(--bs-pale-red);
  --bs-btn-hover-bg: var(--bs-pale-red);
  --bs-btn-hover-border-color: var(--bs-pale-red);
  --bs-btn-active-color: var(--bs-red);
  --bs-btn-active-bg: var(--bs-pale-red);
  --bs-btn-active-border-color: var(--bs-pale-red);
}
.btn-soft-red.btn-expand {
  color: var(--bs-red);
}
.btn-soft-red.btn-expand i,
.btn-soft-red.btn-expand:before,
.btn-soft-red.btn-expand:hover,
.btn-soft-red.btn-expand:hover:before {
  color: var(--bs-red);
}
.btn-soft-red.btn-expand:before {
  background-color: var(--bs-pale-red);
}
.btn-soft-orange {
  --bs-btn-color: var(--bs-orange);
  --bs-btn-hover-color: var(--bs-orange);
  --bs-btn-bg: var(--bs-pale-orange);
  --bs-btn-border-color: var(--bs-pale-orange);
  --bs-btn-hover-bg: var(--bs-pale-orange);
  --bs-btn-hover-border-color: var(--bs-pale-orange);
  --bs-btn-active-color: var(--bs-orange);
  --bs-btn-active-bg: var(--bs-pale-orange);
  --bs-btn-active-border-color: var(--bs-pale-orange);
}
.btn-soft-orange.btn-expand {
  color: var(--bs-orange);
}
.btn-soft-orange.btn-expand i,
.btn-soft-orange.btn-expand:before,
.btn-soft-orange.btn-expand:hover,
.btn-soft-orange.btn-expand:hover:before {
  color: var(--bs-orange);
}
.btn-soft-orange.btn-expand:before {
  background-color: var(--bs-pale-orange);
}
.btn-soft-yellow {
  --bs-btn-color: var(--bs-yellow);
  --bs-btn-hover-color: var(--bs-yellow);
  --bs-btn-bg: var(--bs-pale-yellow);
  --bs-btn-border-color: var(--bs-pale-yellow);
  --bs-btn-hover-bg: var(--bs-pale-yellow);
  --bs-btn-hover-border-color: var(--bs-pale-yellow);
  --bs-btn-active-color: var(--bs-yellow);
  --bs-btn-active-bg: var(--bs-pale-yellow);
  --bs-btn-active-border-color: var(--bs-pale-yellow);
}
.btn-soft-yellow.btn-expand {
  color: var(--bs-yellow);
}
.btn-soft-yellow.btn-expand i,
.btn-soft-yellow.btn-expand:before,
.btn-soft-yellow.btn-expand:hover,
.btn-soft-yellow.btn-expand:hover:before {
  color: var(--bs-yellow);
}
.btn-soft-yellow.btn-expand:before {
  background-color: var(--bs-pale-yellow);
}
.btn-soft-green {
  --bs-btn-color: var(--bs-green);
  --bs-btn-hover-color: var(--bs-green);
  --bs-btn-bg: var(--bs-pale-green);
  --bs-btn-border-color: var(--bs-pale-green);
  --bs-btn-hover-bg: var(--bs-pale-green);
  --bs-btn-hover-border-color: var(--bs-pale-green);
  --bs-btn-active-color: var(--bs-green);
  --bs-btn-active-bg: var(--bs-pale-green);
  --bs-btn-active-border-color: var(--bs-pale-green);
}
.btn-soft-green.btn-expand {
  color: var(--bs-green);
}
.btn-soft-green.btn-expand i,
.btn-soft-green.btn-expand:before,
.btn-soft-green.btn-expand:hover,
.btn-soft-green.btn-expand:hover:before {
  color: var(--bs-green);
}
.btn-soft-green.btn-expand:before {
  background-color: var(--bs-pale-green);
}
.btn-soft-leaf {
  --bs-btn-color: var(--bs-leaf);
  --bs-btn-hover-color: var(--bs-leaf);
  --bs-btn-bg: var(--bs-pale-leaf);
  --bs-btn-border-color: var(--bs-pale-leaf);
  --bs-btn-hover-bg: var(--bs-pale-leaf);
  --bs-btn-hover-border-color: var(--bs-pale-leaf);
  --bs-btn-active-color: var(--bs-leaf);
  --bs-btn-active-bg: var(--bs-pale-leaf);
  --bs-btn-active-border-color: var(--bs-pale-leaf);
}
.btn-soft-leaf.btn-expand {
  color: var(--bs-leaf);
}
.btn-soft-leaf.btn-expand i,
.btn-soft-leaf.btn-expand:before,
.btn-soft-leaf.btn-expand:hover,
.btn-soft-leaf.btn-expand:hover:before {
  color: var(--bs-leaf);
}
.btn-soft-leaf.btn-expand:before {
  background-color: var(--bs-pale-leaf);
}
.btn-soft-aqua {
  --bs-btn-color: var(--bs-aqua);
  --bs-btn-hover-color: var(--bs-aqua);
  --bs-btn-bg: var(--bs-pale-aqua);
  --bs-btn-border-color: var(--bs-pale-aqua);
  --bs-btn-hover-bg: var(--bs-pale-aqua);
  --bs-btn-hover-border-color: var(--bs-pale-aqua);
  --bs-btn-active-color: var(--bs-aqua);
  --bs-btn-active-bg: var(--bs-pale-aqua);
  --bs-btn-active-border-color: var(--bs-pale-aqua);
}
.btn-soft-aqua.btn-expand {
  color: var(--bs-aqua);
}
.btn-soft-aqua.btn-expand i,
.btn-soft-aqua.btn-expand:before,
.btn-soft-aqua.btn-expand:hover,
.btn-soft-aqua.btn-expand:hover:before {
  color: var(--bs-aqua);
}
.btn-soft-aqua.btn-expand:before {
  background-color: var(--bs-pale-aqua);
}
.btn-soft-navy {
  --bs-btn-color: var(--bs-navy);
  --bs-btn-hover-color: var(--bs-navy);
  --bs-btn-bg: var(--bs-pale-navy);
  --bs-btn-border-color: var(--bs-pale-navy);
  --bs-btn-hover-bg: var(--bs-pale-navy);
  --bs-btn-hover-border-color: var(--bs-pale-navy);
  --bs-btn-active-color: var(--bs-navy);
  --bs-btn-active-bg: var(--bs-pale-navy);
  --bs-btn-active-border-color: var(--bs-pale-navy);
}
.btn-soft-navy.btn-expand {
  color: var(--bs-navy);
}
.btn-soft-navy.btn-expand i,
.btn-soft-navy.btn-expand:before,
.btn-soft-navy.btn-expand:hover,
.btn-soft-navy.btn-expand:hover:before {
  color: var(--bs-navy);
}
.btn-soft-navy.btn-expand:before {
  background-color: var(--bs-pale-navy);
}
.btn-soft-ash {
  --bs-btn-color: var(--bs-ash);
  --bs-btn-hover-color: var(--bs-ash);
  --bs-btn-bg: var(--bs-pale-ash);
  --bs-btn-border-color: var(--bs-pale-ash);
  --bs-btn-hover-bg: var(--bs-pale-ash);
  --bs-btn-hover-border-color: var(--bs-pale-ash);
  --bs-btn-active-color: var(--bs-ash);
  --bs-btn-active-bg: var(--bs-pale-ash);
  --bs-btn-active-border-color: var(--bs-pale-ash);
}
.btn-soft-ash.btn-expand {
  color: var(--bs-ash);
}
.btn-soft-ash.btn-expand i,
.btn-soft-ash.btn-expand:before,
.btn-soft-ash.btn-expand:hover,
.btn-soft-ash.btn-expand:hover:before {
  color: var(--bs-ash);
}
.btn-soft-ash.btn-expand:before {
  background-color: var(--bs-pale-ash);
}
.btn-soft-white {
  --bs-btn-color: var(--bs-white);
  --bs-btn-hover-color: var(--bs-white);
  --bs-btn-bg: var(--bs-pale-white);
  --bs-btn-border-color: var(--bs-pale-white);
  --bs-btn-hover-bg: var(--bs-pale-white);
  --bs-btn-hover-border-color: var(--bs-pale-white);
  --bs-btn-active-color: var(--bs-white);
  --bs-btn-active-bg: var(--bs-pale-white);
  --bs-btn-active-border-color: var(--bs-pale-white);
}
.btn-soft-white.btn-expand {
  color: var(--bs-white);
}
.btn-soft-white.btn-expand i,
.btn-soft-white.btn-expand:before,
.btn-soft-white.btn-expand:hover,
.btn-soft-white.btn-expand:hover:before {
  color: var(--bs-white);
}
.btn-soft-white.btn-expand:before {
  background-color: var(--bs-pale-white);
}
.btn-soft-light {
  --bs-btn-color: var(--bs-light);
  --bs-btn-hover-color: var(--bs-light);
  --bs-btn-bg: var(--bs-pale-light);
  --bs-btn-border-color: var(--bs-pale-light);
  --bs-btn-hover-bg: var(--bs-pale-light);
  --bs-btn-hover-border-color: var(--bs-pale-light);
  --bs-btn-active-color: var(--bs-light);
  --bs-btn-active-bg: var(--bs-pale-light);
  --bs-btn-active-border-color: var(--bs-pale-light);
}
.btn-soft-light.btn-expand {
  color: var(--bs-light);
}
.btn-soft-light.btn-expand i,
.btn-soft-light.btn-expand:before,
.btn-soft-light.btn-expand:hover,
.btn-soft-light.btn-expand:hover:before {
  color: var(--bs-light);
}
.btn-soft-light.btn-expand:before {
  background-color: var(--bs-pale-light);
}
.btn-soft-gray {
  --bs-btn-color: var(--bs-gray);
  --bs-btn-hover-color: var(--bs-gray);
  --bs-btn-bg: var(--bs-pale-gray);
  --bs-btn-border-color: var(--bs-pale-gray);
  --bs-btn-hover-bg: var(--bs-pale-gray);
  --bs-btn-hover-border-color: var(--bs-pale-gray);
  --bs-btn-active-color: var(--bs-gray);
  --bs-btn-active-bg: var(--bs-pale-gray);
  --bs-btn-active-border-color: var(--bs-pale-gray);
}
.btn-soft-gray.btn-expand {
  color: var(--bs-gray);
}
.btn-soft-gray.btn-expand i,
.btn-soft-gray.btn-expand:before,
.btn-soft-gray.btn-expand:hover,
.btn-soft-gray.btn-expand:hover:before {
  color: var(--bs-gray);
}
.btn-soft-gray.btn-expand:before {
  background-color: var(--bs-pale-gray);
}
.btn-soft-dark {
  --bs-btn-color: var(--bs-dark);
  --bs-btn-hover-color: var(--bs-dark);
  --bs-btn-bg: var(--bs-pale-dark);
  --bs-btn-border-color: var(--bs-pale-dark);
  --bs-btn-hover-bg: var(--bs-pale-dark);
  --bs-btn-hover-border-color: var(--bs-pale-dark);
  --bs-btn-active-color: var(--bs-dark);
  --bs-btn-active-bg: var(--bs-pale-dark);
  --bs-btn-active-border-color: var(--bs-pale-dark);
}
.btn-soft-dark.btn-expand {
  color: var(--bs-dark);
}
.btn-soft-dark.btn-expand i,
.btn-soft-dark.btn-expand:before,
.btn-soft-dark.btn-expand:hover,
.btn-soft-dark.btn-expand:hover:before {
  color: var(--bs-dark);
}
.btn-soft-dark.btn-expand:before {
  background-color: var(--bs-pale-dark);
}
.btn-soft-primary {
  --bs-btn-color: var(--bs-primary);
  --bs-btn-hover-color: var(--bs-primary);
  --bs-btn-bg: var(--bs-pale-primary);
  --bs-btn-border-color: var(--bs-pale-primary);
  --bs-btn-hover-bg: var(--bs-pale-primary);
  --bs-btn-hover-border-color: var(--bs-pale-primary);
  --bs-btn-active-color: var(--bs-primary);
  --bs-btn-active-bg: var(--bs-pale-primary);
  --bs-btn-active-border-color: var(--bs-pale-primary);
}
.btn-soft-primary.btn-expand {
  color: var(--bs-primary);
}
.btn-soft-primary.btn-expand i,
.btn-soft-primary.btn-expand:before,
.btn-soft-primary.btn-expand:hover,
.btn-soft-primary.btn-expand:hover:before {
  color: var(--bs-primary);
}
.btn-soft-primary.btn-expand:before {
  background-color: var(--bs-pale-primary);
}
.btn-white,
.btn-soft-ash {
  --bs-btn-color: var(--bs-dark);
  --bs-btn-hover-color: var(--bs-dark);
  --bs-btn-active-color: var(--bs-dark);
}
.btn-white.btn-expand,
.btn-soft-ash.btn-expand {
  color: var(--bs-dark);
}
.btn-white.btn-expand i,
.btn-soft-ash.btn-expand i {
  color: var(--bs-dark);
}
.btn-white.btn-expand:before,
.btn-soft-ash.btn-expand:before {
  background-color: var(--bs-dark);
}
.btn-white.btn-play:hover,
.btn-soft-ash.btn-play:hover {
  color: var(--bs-dark);
}
.btn-soft-ash {
  --bs-btn-border-color: transparent !important;
  --bs-btn-hover-border-color: transparent !important;
  --bs-btn-active-border-color: transparent !important;
  --bs-btn-disabled-border-color: transparent !important;
}
.btn-primary {
  --bs-btn-bg: var(--bs-primary);
  --bs-btn-border-color: var(--bs-primary);
  --bs-btn-hover-bg: var(--bs-primary);
  --bs-btn-hover-border-color: var(--bs-primary);
  --bs-btn-active-bg: var(--bs-primary);
  --bs-btn-active-border-color: var(--bs-primary);
}
.btn-outline-primary {
  --bs-btn-color: var(--bs-primary);
  --bs-btn-border-color: var(--bs-primary);
  --bs-btn-hover-bg: var(--bs-primary);
  --bs-btn-hover-border-color: var(--bs-primary);
  --bs-btn-active-bg: var(--bs-primary);
  --bs-btn-active-border-color: var(--bs-primary);
  --bs-btn-disabled-color: var(--bs-primary);
  --bs-btn-disabled-border-color: var(--bs-primary);
}
.btn-gradient {
  color: var(--bs-white) !important;
  border: 0;
  padding-top: 0.6rem;
  padding-bottom: 0.6rem;
}
.btn-gradient.btn-sm,
.btn-group-sm>.btn-gradient.btn {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}
.btn-gradient.btn-lg,
.btn-group-lg>.btn-gradient.btn {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
}
.gradient-1 {
  background-image: linear-gradient(120deg, #f857a6 10%, #ef3f6e 100%);
}
.gradient-1.btn-outline-gradient,
.gradient-1.btn-outline-gradient span {
  background-image: linear-gradient(rgba(var(--bs-white-rgb), 0), rgba(var(--bs-white-rgb), 0)), linear-gradient(120deg, #f857a6 10%, #ef3f6e 100%);
}
.gradient-2 {
  background-image: linear-gradient(40deg, #f5b161 0.4%, #ec366e 100.2%);
}
.gradient-2.btn-outline-gradient,
.gradient-2.btn-outline-gradient span {
  background-image: linear-gradient(rgba(var(--bs-white-rgb), 0), rgba(var(--bs-white-rgb), 0)), linear-gradient(40deg, #f5b161 0.4%, #ec366e 100.2%);
}
.gradient-3 {
  background-image: linear-gradient(45deg, #FBDA61 0%, #FF5ACD 100%);
}
.gradient-3.btn-outline-gradient,
.gradient-3.btn-outline-gradient span {
  background-image: linear-gradient(rgba(var(--bs-white-rgb), 0), rgba(var(--bs-white-rgb), 0)), linear-gradient(45deg, #FBDA61 0%, #FF5ACD 100%);
}
.gradient-4 {
  background-image: linear-gradient(125deg, #9040db, #ff72c2 50%, #ffd84f);
}
.gradient-4.btn-outline-gradient,
.gradient-4.btn-outline-gradient span {
  background-image: linear-gradient(rgba(var(--bs-white-rgb), 0), rgba(var(--bs-white-rgb), 0)), linear-gradient(125deg, #9040db, #ff72c2 50%, #ffd84f);
}
.gradient-5 {
  background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
}
.gradient-5.btn-outline-gradient,
.gradient-5.btn-outline-gradient span {
  background-image: linear-gradient(rgba(var(--bs-white-rgb), 0), rgba(var(--bs-white-rgb), 0)), linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
}
.gradient-6 {
  background-image: linear-gradient(45deg, #08AEEA 0%, #2AF598 100%);
}
.gradient-6.btn-outline-gradient,
.gradient-6.btn-outline-gradient span {
  background-image: linear-gradient(rgba(var(--bs-white-rgb), 0), rgba(var(--bs-white-rgb), 0)), linear-gradient(45deg, #08AEEA 0%, #2AF598 100%);
}
.gradient-7 {
  background-image: linear-gradient(100deg, #605dba 20%, #3f78e0 85%);
}
.gradient-7.btn-outline-gradient,
.gradient-7.btn-outline-gradient span {
  background-image: linear-gradient(rgba(var(--bs-white-rgb), 0), rgba(var(--bs-white-rgb), 0)), linear-gradient(100deg, #605dba 20%, #3f78e0 85%);
}
.gradient-8 {
  background-image: linear-gradient(0deg, #2c46a7, #3757c4);
}
.gradient-8.btn-outline-gradient,
.gradient-8.btn-outline-gradient span {
  background-image: linear-gradient(rgba(var(--bs-white-rgb), 0), rgba(var(--bs-white-rgb), 0)), linear-gradient(0deg, #2c46a7, #3757c4);
}
.gradient-9 {
  background-image: linear-gradient(45deg, #ffdee9, #b5fffc);
}
.gradient-9.btn-outline-gradient,
.gradient-9.btn-outline-gradient span {
  background-image: linear-gradient(rgba(var(--bs-white-rgb), 0), rgba(var(--bs-white-rgb), 0)), linear-gradient(45deg, #ffdee9, #b5fffc);
}
.gradient-6,
.gradient-7 {
  background-size: 130% auto;
}
.btn-outline-gradient,
.btn-outline-gradient:disabled,
.btn-outline-gradient.disabled {
  --bs-btn-active-border-color: transparent;
  --bs-btn-active-color: var(--bs-white);
  border: 2px solid transparent;
  background-origin: border-box;
  background-clip: content-box, border-box;
  box-shadow: 2px 1000px 1px var(--bs-white) inset;
  padding: 0.5rem 1.1rem;
}
.btn-outline-gradient.btn-sm:not(.btn-circle),
.btn-group-sm>.btn-outline-gradient.btn:not(.btn-circle),
.btn-outline-gradient:disabled.btn-sm:not(.btn-circle),
.btn-outline-gradient.disabled.btn-sm:not(.btn-circle) {
  padding: 0.4rem 0.9rem;
}
.btn-outline-gradient.btn-lg,
.btn-group-lg>.btn-outline-gradient.btn,
.btn-outline-gradient:disabled.btn-lg,
.btn-outline-gradient.disabled.btn-lg {
  padding: 0.65rem 1.3rem;
}
.btn-outline-gradient span,
.btn-outline-gradient:disabled span,
.btn-outline-gradient.disabled span {
  color: #343f52 !important;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.btn-outline-gradient:hover span,
.btn-outline-gradient:focus-visible span,
.btn-outline-gradient:active span,
.btn-outline-gradient:disabled:hover span,
.btn-outline-gradient:disabled:focus-visible span,
.btn-outline-gradient:disabled:active span,
.btn-outline-gradient.disabled:hover span,
.btn-outline-gradient.disabled:focus-visible span,
.btn-outline-gradient.disabled:active span {
  color: var(--bs-white) !important;
  background: none;
  -webkit-background-clip: unset;
  -webkit-text-fill-color: unset;
}
.btn-lg,
.btn-group-lg>.btn {
  --bs-btn-padding-y: 0.65rem;
  --bs-btn-padding-x: 1.4rem;
  --bs-btn-font-size: 0.85rem;
  --bs-btn-border-radius: 0.4rem;
}
.btn-sm,
.btn-group-sm>.btn {
  --bs-btn-padding-y: 0.4rem;
  --bs-btn-padding-x: 1rem;
  --bs-btn-font-size: 0.7rem;
  --bs-btn-border-radius: 0.4rem;
}
.btn-icon.btn-sm,
.btn-group-sm>.btn-icon.btn {
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;
}
.btn-icon.btn-sm i,
.btn-group-sm>.btn-icon.btn i {
  font-size: 0.8rem;
}
.btn-icon.btn-icon-start i {
  margin-right: 0.3rem;
}
.btn-icon.btn-icon-end i {
  margin-left: 0.3rem;
}
.navigation .btn-icon i {
  font-size: 0.9rem;
}
.navigation .btn-icon.btn-icon-start i {
  margin-right: 0.2rem;
}
.navigation .btn-icon.btn-icon-end i {
  margin-left: 0.2rem;
}
.navbar .btn-sm,
.navbar .btn-group-sm>.btn {
  font-size: 0.8rem;
}
.social a:not(.btn-circle) {
  font-size: 1rem;
  transition: all 0.2s ease-in-out;
  transform: translateY(0);
}
@media (prefers-reduced-motion: reduce) {
  .social a:not(.btn-circle) {
    transition: none;
  }
}
.social a:not(.btn-circle):hover {
  transform: translateY(-0.15rem);
}
.social a:not(.btn-circle) i {
  font-size: 1rem;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=dropbox] {
  color: #007bdf;
}
.social a.btn-circle[class*=dropbox] {
  color: var(--bs-white);
  background-color: #007bdf;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=dribbble] {
  color: #e94d88;
}
.social a.btn-circle[class*=dribbble] {
  color: var(--bs-white);
  background-color: #e94d88;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=google-drive-alt] {
  color: #1b9f5e;
}
.social a.btn-circle[class*=google-drive-alt] {
  color: var(--bs-white);
  background-color: #1b9f5e;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=facebook-f] {
  color: #4470cf;
}
.social a.btn-circle[class*=facebook-f] {
  color: var(--bs-white);
  background-color: #4470cf;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=instagram] {
  color: #d53581;
}
.social a.btn-circle[class*=instagram] {
  color: var(--bs-white);
  background-color: #d53581;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=line] {
  color: #0fab10;
}
.social a.btn-circle[class*=line] {
  color: var(--bs-white);
  background-color: #0fab10;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=facebook-messenger] {
  color: #007ff8;
}
.social a.btn-circle[class*=facebook-messenger] {
  color: var(--bs-white);
  background-color: #007ff8;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=black-berry] {
  color: #272727;
}
.social a.btn-circle[class*=black-berry] {
  color: var(--bs-white);
  background-color: #272727;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=linkedin] {
  color: #3393c1;
}
.social a.btn-circle[class*=linkedin] {
  color: var(--bs-white);
  background-color: #3393c1;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=intercom] {
  color: #2e88f8;
}
.social a.btn-circle[class*=intercom] {
  color: var(--bs-white);
  background-color: #2e88f8;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=facebook] {
  color: #4470cf;
}
.social a.btn-circle[class*=facebook] {
  color: var(--bs-white);
  background-color: #4470cf;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=youtube] {
  color: #c8312b;
}
.social a.btn-circle[class*=youtube] {
  color: var(--bs-white);
  background-color: #c8312b;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=apple] {
  color: #1a1919;
}
.social a.btn-circle[class*=apple] {
  color: var(--bs-white);
  background-color: #1a1919;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=visual-studio] {
  color: #6b61be;
}
.social a.btn-circle[class*=visual-studio] {
  color: var(--bs-white);
  background-color: #6b61be;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=twitter] {
  color: #5daed5;
}
.social a.btn-circle[class*=twitter] {
  color: var(--bs-white);
  background-color: #5daed5;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=snapchat-ghost] {
  color: #f7c31a;
}
.social a.btn-circle[class*=snapchat-ghost] {
  color: var(--bs-white);
  background-color: #f7c31a;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=slack] {
  color: #d4135c;
}
.social a.btn-circle[class*=slack] {
  color: var(--bs-white);
  background-color: #d4135c;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=tumblr-square] {
  color: #5d82a4;
}
.social a.btn-circle[class*=tumblr-square] {
  color: var(--bs-white);
  background-color: #5d82a4;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=medium-m] {
  color: #00c364;
}
.social a.btn-circle[class*=medium-m] {
  color: var(--bs-white);
  background-color: #00c364;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=tumblr] {
  color: #5d82a4;
}
.social a.btn-circle[class*=tumblr] {
  color: var(--bs-white);
  background-color: #5d82a4;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=adobe] {
  color: #e61f26;
}
.social a.btn-circle[class*=adobe] {
  color: var(--bs-white);
  background-color: #e61f26;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=whatsapp] {
  color: #00a859;
}
.social a.btn-circle[class*=whatsapp] {
  color: var(--bs-white);
  background-color: #00a859;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*="500-px"] {
  color: #00a6df;
}
.social a.btn-circle[class*="500-px"] {
  color: var(--bs-white);
  background-color: #00a6df;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=snapchat-square] {
  color: #f7c31a;
}
.social a.btn-circle[class*=snapchat-square] {
  color: var(--bs-white);
  background-color: #f7c31a;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=behance] {
  color: #0057ff;
}
.social a.btn-circle[class*=behance] {
  color: var(--bs-white);
  background-color: #0057ff;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=instagram-alt] {
  color: #d53581;
}
.social a.btn-circle[class*=instagram-alt] {
  color: var(--bs-white);
  background-color: #d53581;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=github-alt] {
  color: #4073a6;
}
.social a.btn-circle[class*=github-alt] {
  color: var(--bs-white);
  background-color: #4073a6;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=linkedin-alt] {
  color: #3393c1;
}
.social a.btn-circle[class*=linkedin-alt] {
  color: var(--bs-white);
  background-color: #3393c1;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=slack-alt] {
  color: #d4135c;
}
.social a.btn-circle[class*=slack-alt] {
  color: var(--bs-white);
  background-color: #d4135c;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=google] {
  color: #e44134;
}
.social a.btn-circle[class*=google] {
  color: var(--bs-white);
  background-color: #e44134;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=google-play] {
  color: #e44134;
}
.social a.btn-circle[class*=google-play] {
  color: var(--bs-white);
  background-color: #e44134;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=google-drive] {
  color: #1b9f5e;
}
.social a.btn-circle[class*=google-drive] {
  color: var(--bs-white);
  background-color: #1b9f5e;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=vuejs-alt] {
  color: #3fb37f;
}
.social a.btn-circle[class*=vuejs-alt] {
  color: var(--bs-white);
  background-color: #3fb37f;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=google-hangouts] {
  color: #109956;
}
.social a.btn-circle[class*=google-hangouts] {
  color: var(--bs-white);
  background-color: #109956;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=vuejs] {
  color: #3fb37f;
}
.social a.btn-circle[class*=vuejs] {
  color: var(--bs-white);
  background-color: #3fb37f;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=java-script] {
  color: #f0d91d;
}
.social a.btn-circle[class*=java-script] {
  color: var(--bs-white);
  background-color: #f0d91d;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=paypal] {
  color: #0089cc;
}
.social a.btn-circle[class*=paypal] {
  color: var(--bs-white);
  background-color: #0089cc;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=reddit-alien-alt] {
  color: #f84300;
}
.social a.btn-circle[class*=reddit-alien-alt] {
  color: var(--bs-white);
  background-color: #f84300;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=android-alt] {
  color: #97c03d;
}
.social a.btn-circle[class*=android-alt] {
  color: var(--bs-white);
  background-color: #97c03d;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=github] {
  color: #4073a6;
}
.social a.btn-circle[class*=github] {
  color: var(--bs-white);
  background-color: #4073a6;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=android] {
  color: #97c03d;
}
.social a.btn-circle[class*=android] {
  color: var(--bs-white);
  background-color: #97c03d;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=amazon] {
  color: #f79400;
}
.social a.btn-circle[class*=amazon] {
  color: var(--bs-white);
  background-color: #f79400;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=adobe-alt] {
  color: #e61f26;
}
.social a.btn-circle[class*=adobe-alt] {
  color: var(--bs-white);
  background-color: #e61f26;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=master-card] {
  color: #f0931d;
}
.social a.btn-circle[class*=master-card] {
  color: var(--bs-white);
  background-color: #f0931d;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=opera-alt] {
  color: #e33737;
}
.social a.btn-circle[class*=opera-alt] {
  color: var(--bs-white);
  background-color: #e33737;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=css3-alt] {
  color: #006db6;
}
.social a.btn-circle[class*=css3-alt] {
  color: var(--bs-white);
  background-color: #006db6;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=opera] {
  color: #e33737;
}
.social a.btn-circle[class*=opera] {
  color: var(--bs-white);
  background-color: #e33737;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=css3] {
  color: #006db6;
}
.social a.btn-circle[class*=css3] {
  color: var(--bs-white);
  background-color: #006db6;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=twitter-alt] {
  color: #5daed5;
}
.social a.btn-circle[class*=twitter-alt] {
  color: var(--bs-white);
  background-color: #5daed5;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=intercom-alt] {
  color: #2e88f8;
}
.social a.btn-circle[class*=intercom-alt] {
  color: var(--bs-white);
  background-color: #2e88f8;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=swiggy] {
  color: #f88a2d;
}
.social a.btn-circle[class*=swiggy] {
  color: var(--bs-white);
  background-color: #f88a2d;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=snapchat-alt] {
  color: #f7c31a;
}
.social a.btn-circle[class*=snapchat-alt] {
  color: var(--bs-white);
  background-color: #f7c31a;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=tumblr-alt] {
  color: #5d82a4;
}
.social a.btn-circle[class*=tumblr-alt] {
  color: var(--bs-white);
  background-color: #5d82a4;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=facebook-messenger-alt] {
  color: #007ff8;
}
.social a.btn-circle[class*=facebook-messenger-alt] {
  color: var(--bs-white);
  background-color: #007ff8;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=bitcoin-alt] {
  color: #f38633;
}
.social a.btn-circle[class*=bitcoin-alt] {
  color: var(--bs-white);
  background-color: #f38633;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=google-hangouts-alt] {
  color: #109956;
}
.social a.btn-circle[class*=google-hangouts-alt] {
  color: var(--bs-white);
  background-color: #109956;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=blogger] {
  color: #e86733;
}
.social a.btn-circle[class*=blogger] {
  color: var(--bs-white);
  background-color: #e86733;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=blogger-alt] {
  color: #e86733;
}
.social a.btn-circle[class*=blogger-alt] {
  color: var(--bs-white);
  background-color: #e86733;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=bitcoin] {
  color: #f38633;
}
.social a.btn-circle[class*=bitcoin] {
  color: var(--bs-white);
  background-color: #f38633;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=behance-alt] {
  color: #0057ff;
}
.social a.btn-circle[class*=behance-alt] {
  color: var(--bs-white);
  background-color: #0057ff;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=apple-alt] {
  color: #1a1919;
}
.social a.btn-circle[class*=apple-alt] {
  color: var(--bs-white);
  background-color: #1a1919;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=react] {
  color: #00d1f7;
}
.social a.btn-circle[class*=react] {
  color: var(--bs-white);
  background-color: #00d1f7;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=telegram] {
  color: #2caef0;
}
.social a.btn-circle[class*=telegram] {
  color: var(--bs-white);
  background-color: #2caef0;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=vk-alt] {
  color: #4f7db3;
}
.social a.btn-circle[class*=vk-alt] {
  color: var(--bs-white);
  background-color: #4f7db3;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=vk] {
  color: #4f7db3;
}
.social a.btn-circle[class*=vk] {
  color: var(--bs-white);
  background-color: #4f7db3;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=skype] {
  color: #2ebbf0;
}
.social a.btn-circle[class*=skype] {
  color: var(--bs-white);
  background-color: #2ebbf0;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=skype-alt] {
  color: #2ebbf0;
}
.social a.btn-circle[class*=skype-alt] {
  color: var(--bs-white);
  background-color: #2ebbf0;
  border-color: transparent;
}
.social a:not([class*=link-]):not(.btn-circle) .uil[class*=telegram-alt] {
  color: #2caef0;
}
.social a.btn-circle[class*=telegram-alt] {
  color: var(--bs-white);
  background-color: #2caef0;
  border-color: transparent;
}
.social.social-muted a:not(.btn-circle):not([class*=link-]) i {
  color: #343f52 !important;
}
.social.social-white a i,
.social.social-white a:hover i,
.navbar-dark .social.social-muted a:not(.btn-circle):not([class*=link-]) i,
.navbar-dark .social.social-muted a:not(.btn-circle):not([class*=link-]):hover i {
  color: var(--bs-white) !important;
}
.social>a {
  margin: 0 0.7rem 0 0;
}
[class*=text-end] .social>a,
.social[class*=text-end]>a {
  margin: 0 0 0 0.7rem;
}
@media (min-width: 768px) {
  [class*=text-md-end] .social>a,
  .social[class*=text-md-end]>a {
    margin: 0 0 0 0.7rem;
  }
}
.text-center .social>a,
.social.text-center>a {
  margin: 0 0.35rem;
}
.badge-lg {
  font-size: 0.6rem;
  padding: 0.35rem 0.55rem;
}
.badge-cart {
  border-radius: 100%;
  width: 0.9rem;
  height: 0.9rem;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.55rem;
}
.avatar {
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  line-height: 1.7;
  letter-spacing: -0.01rem;
  border-radius: 100%;
  height: auto;
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fadeInDown {
  from {
    opacity: 0;
    transform: translate3d(0, -30%, 0);
  }
  to {
    opacity: 1;
    transform: none;
  }
}
@keyframes priceFade {
  0% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(80%);
  }
}
@keyframes priceShow {
  0% {
    opacity: 0;
    transform: translateY(-80%);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
@keyframes ripple-1 {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(1.5);
    opacity: 0;
  }
}
@keyframes ripple-2 {
  0% {
    transform: scale(1);
    opacity: 1;
  }
  100% {
    transform: scale(1.7);
    opacity: 0;
  }
}
@keyframes loader-scale {
  0% {
    transform: scale(0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}
.page-loader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #fefefe;
  z-index: 9999;
  transition: 0.5s all;
}
.page-loader.done {
  visibility: hidden;
  opacity: 0;
}
.page-loader:before,
.swiper-hero:before,
.gloader {
  position: absolute;
  content: "";
  top: 50%;
  left: 50%;
  width: 2.5rem;
  height: 2.5rem;
  margin-top: -1.25rem;
  margin-left: -1.25rem;
  background: none;
  border: 4px solid var(--bs-primary);
  box-shadow: none;
  border-radius: 50%;
  animation: loader-scale 1s ease-out infinite;
}
.bg-dark>.swiper-hero:before,
.gloader {
  border-color: var(--bs-white);
}
:root {
  --animate-delay: 0.5s;
}
.transition-none {
  transition: none;
}
.dropdown-menu {
  border: 0;
}
.dropdown-item {
  font-weight: 700;
  letter-spacing: -0.01rem;
}
.dropdown-item:hover,
.dropdown-item:focus {
  outline: 0;
}
.dropdown-header {
  padding-top: 0;
  text-transform: uppercase;
  letter-spacing: 0.02rem;
}
.navbar .dropdown-menu[data-bs-popper] {
  margin-top: 0;
}
@media (max-width: 575.98px) {
  .navbar-expand-sm .offcanvas-nav {
    overflow-x: hidden;
    overflow-y: auto;
    flex-direction: column;
  }
  .navbar-expand-sm .offcanvas-nav .offcanvas-header,
  .navbar-expand-sm .offcanvas-nav .offcanvas-body,
  .navbar-expand-sm .offcanvas-nav .offcanvas-footer {
    width: 100%;
  }
  .navbar-expand-sm .offcanvas-nav .offcanvas-body {
    overflow-y: unset;
    flex-grow: 0;
  }
  .navbar-expand-sm .navbar-collapse .dropdown-menu {
    padding: 0;
    margin-top: 0;
    background: none;
  }
  .navbar-expand-sm .navbar-collapse .dropdown-menu .dropdown-item {
    color: var(--bs-white);
    padding-left: 1rem;
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
  }
  .navbar-expand-sm .navbar-collapse .nav-link,
  .navbar-expand-sm .navbar-collapse .show>.nav-link,
  .navbar-expand-sm .navbar-collapse .nav-link.active,
  .navbar-expand-sm .navbar-collapse .nav-link:hover,
  .navbar-expand-sm .navbar-collapse .nav-link:focus {
    color: var(--bs-white) !important;
  }
  .navbar-expand-sm .navbar-collapse .nav-link {
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
  }
  .navbar-expand-sm .navbar-collapse .dropdown-toggle:after {
    position: absolute;
    margin-right: 0;
    right: -0.25rem;
    top: 0.35rem;
    font-size: 0.9rem;
  }
  .navbar-expand-sm .navbar-collapse .dropdown-submenu .dropdown-toggle:after {
    top: 0.3rem;
  }
  .navbar-expand-sm .dropdown-header {
    padding-left: 1rem;
    padding-right: 1rem;
    margin-top: 0.5rem;
  }
  .navbar-expand-sm .dropstart .dropdown-toggle:after,
  .navbar-expand-sm .dropend .dropdown-toggle:after {
    content: "\e92d" !important;
  }
  .navbar-expand-sm .dropstart .dropdown-menu[data-bs-popper] {
    margin-right: 0;
    margin-left: 0.75rem;
  }
  .navbar-expand-sm .dropdown-toggle:after {
    top: 0.25rem !important;
  }
  .navbar-expand-sm .language-select .dropdown-toggle:after {
    vertical-align: 0 !important;
  }
  .navbar-expand-sm .navbar-other .nav-item.language-select .nav-link {
    font-size: 1.05rem;
  }
  .navbar-expand-sm .navbar-other .nav-item .nav-link>i {
    font-size: calc(1.255rem + 0.06vw);
  }
}
@media (max-width: 575.98px) and (min-width: 1200px) {
  .navbar-expand-sm .navbar-other .nav-item .nav-link>i {
    font-size: 1.3rem;
  }
}
@media (max-width: 575.98px) {
  .navbar-expand-sm .navbar-brand {
    padding-top: 1.2rem;
    padding-bottom: 1.2rem;
  }
}
@media (max-width: 575.98px) {
  .navbar-expand-sm.fancy .navbar-collapse-wrapper {
    background: none !important;
    box-shadow: none !important;
  }
}
@media (max-width: 575.98px) {
  .navbar-expand-sm.center-logo.fixed .offcanvas-header .logo-light {
    display: inline-block;
  }
  .navbar-expand-sm.center-logo.fixed .offcanvas-header .logo-dark {
    display: none;
  }
}
@media (max-width: 575.98px) {
  .navbar-expand-sm .nav-item.parent-link .dropdown-toggle {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
}
@media (min-width: 576px) {
  .navbar-expand-sm.navbar-light .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
    color: var(--bs-primary);
  }
  .navbar-expand-sm .navbar-nav,
  .navbar-expand-sm .dropdown-mega {
    position: static !important;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu.dropdown-lg {
    padding: 1.6rem 0.25rem 1.3rem 0.25rem;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu.dropdown-lg .dropdown-lg-content {
    display: flex;
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu.dropdown-lg .dropdown-header {
    padding-top: 0;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu:before {
    position: absolute;
    top: -1rem;
    left: -1rem;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    z-index: -1;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu .dropdown-toggle:after {
    position: absolute;
    margin-right: 0;
    right: 1rem;
    top: 0.15rem;
    font-size: 0.85rem;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu.mega-menu {
    margin-left: 0.75rem !important;
    margin-right: 0.75rem !important;
  }
  .navbar-expand-sm:not(.hover-none) .navbar-nav .dropdown-menu {
    top: 120%;
    visibility: hidden;
    pointer-events: none;
    opacity: 0;
    display: block;
  }
  .navbar-expand-sm:not(.hover-none) .navbar-nav .dropdown:not(.dropdown-submenu):hover>.dropdown-menu {
    top: 100%;
    pointer-events: all;
    visibility: visible;
    opacity: 1;
    transition: all 0.25s ease-in-out;
  }
  .navbar-expand-sm:not(.hover-none) .navbar-nav .dropdown-submenu {
    position: relative;
  }
  .navbar-expand-sm:not(.hover-none) .navbar-nav .dropdown-submenu .dropdown-menu {
    top: 30%;
  }
  .navbar-expand-sm:not(.hover-none) .navbar-nav .dropdown-submenu.dropstart:before {
    position: absolute;
    left: -1rem;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    z-index: -1;
  }
  .navbar-expand-sm:not(.hover-none) .navbar-nav .dropdown-submenu:hover>.dropdown-menu {
    top: 0;
    pointer-events: all;
    visibility: visible;
    opacity: 1;
    transition: all 0.25s ease-in-out;
  }
  .navbar-expand-sm .dropend>.dropdown-menu {
    margin-left: 0.5rem;
  }
  .navbar-expand-sm .dropstart>.dropdown-menu {
    margin-right: 0.5rem;
  }
  .navbar-expand-sm .offcanvas-nav {
    position: unset;
    flex-direction: row;
  }
  .navbar-expand-sm .offcanvas-nav.offcanvas-start,
  .navbar-expand-sm .offcanvas-nav.offcanvas-end {
    width: 100%;
  }
  .navbar-expand-sm.fancy.navbar-bg-light:not(.fixed),
  .navbar-expand-sm.extended.navbar-bg-light:not(.fixed) {
    background: none !important;
  }
  .navbar-expand-sm.extended:not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.15rem;
    padding-bottom: 1.15rem;
  }
  .navbar-expand-sm.fancy:not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }
  .navbar-expand-sm[class*=navbar-bg-]:not(.fancy):not(.extended):not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.7rem;
    padding-bottom: 1.7rem;
  }
  .navbar-expand-sm.transparent:not(.fixed) {
    padding-top: 0.3rem;
  }
  .navbar-expand-sm.extended .navbar-collapse-wrapper,
  .navbar-expand-sm.fancy .navbar-collapse-wrapper {
    box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
    width: 100%;
    border-radius: 0.4rem;
  }
  .navbar-expand-sm.extended:not(.extended-alt):not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem 0 0.5rem;
  }
  .navbar-expand-sm.extended.extended-alt:not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem;
  }
  .navbar-expand-sm.fancy:not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem 0 1.5rem;
    margin-top: 2.25rem;
  }
  .navbar-expand-sm.extended:not(.extended-alt) .navbar-brand {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  .navbar-expand-sm.extended.extended-alt .navbar-brand {
    padding-top: 1.75rem;
    padding-bottom: 1.75rem;
  }
  .navbar-expand-sm.fixed .topbar {
    display: none !important;
  }
  .navbar-expand-sm.navbar-light:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
  .navbar-expand-sm.navbar-dark:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
  .navbar-expand-sm.transparent.fixed .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu {
    margin-top: 0.5rem;
  }
  .navbar-expand-sm .navbar-collapse .nav-link {
    white-space: nowrap;
  }
  .navbar-expand-sm .navbar-collapse .nav-item.parent-link {
    display: flex;
    flex-direction: row;
    align-items: center;
  }
  .navbar-expand-sm .navbar-collapse .nav-item.parent-link>.nav-link:first-child {
    padding-right: 0 !important;
  }
  .navbar-expand-sm .navbar-collapse .nav-item.parent-link .dropdown-toggle {
    padding-left: 0 !important;
  }
  .navbar-expand-sm .mega-menu-content>.row>[class*=col-]+[class*=col-],
  .navbar-expand-sm .dropdown-lg-content>div+div {
    border-left: 1px solid rgba(164, 174, 198, 0.2);
  }
  .navbar-expand-sm .mega-menu-content {
    padding: 0.6rem 0.25rem 0.2rem;
  }
  .navbar-expand-sm .mega-menu-dark {
    background: #2e353e;
  }
  .navbar-expand-sm .mega-menu-dark .img-svg {
    background: rgba(var(--bs-white-rgb), 0.05);
    transition: all 0.2s ease-in-out;
  }
  .navbar-expand-sm .mega-menu-dark .img-svg:hover {
    background: rgba(var(--bs-white-rgb), 0.09);
  }
  .navbar-expand-sm .mega-menu-dark .dropdown-item {
    color: var(--bs-white);
  }
  .navbar-expand-sm .mega-menu-dark .dropdown-item:hover,
  .navbar-expand-sm .mega-menu-dark .dropdown-item:focus {
    color: var(--bs-white);
  }
  .navbar-expand-sm .mega-menu-img {
    padding: 0 !important;
  }
  .navbar-expand-sm .mega-menu-img .mega-menu-content {
    padding: 0.2rem 2rem !important;
    margin: 1.8rem 0 !important;
  }
  .navbar-expand-sm .mega-menu-img .dropdown-item {
    padding-left: 0;
    padding-right: 0;
  }
  .navbar-expand-sm.caret-none .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
    display: none;
  }
}
@media (max-width: 767.98px) {
  .navbar-expand-md .offcanvas-nav {
    overflow-x: hidden;
    overflow-y: auto;
    flex-direction: column;
  }
  .navbar-expand-md .offcanvas-nav .offcanvas-header,
  .navbar-expand-md .offcanvas-nav .offcanvas-body,
  .navbar-expand-md .offcanvas-nav .offcanvas-footer {
    width: 100%;
  }
  .navbar-expand-md .offcanvas-nav .offcanvas-body {
    overflow-y: unset;
    flex-grow: 0;
  }
  .navbar-expand-md .navbar-collapse .dropdown-menu {
    padding: 0;
    margin-top: 0;
    background: none;
  }
  .navbar-expand-md .navbar-collapse .dropdown-menu .dropdown-item {
    color: var(--bs-white);
    padding-left: 1rem;
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
  }
  .navbar-expand-md .navbar-collapse .nav-link,
  .navbar-expand-md .navbar-collapse .show>.nav-link,
  .navbar-expand-md .navbar-collapse .nav-link.active,
  .navbar-expand-md .navbar-collapse .nav-link:hover,
  .navbar-expand-md .navbar-collapse .nav-link:focus {
    color: var(--bs-white) !important;
  }
  .navbar-expand-md .navbar-collapse .nav-link {
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
  }
  .navbar-expand-md .navbar-collapse .dropdown-toggle:after {
    position: absolute;
    margin-right: 0;
    right: -0.25rem;
    top: 0.35rem;
    font-size: 0.9rem;
  }
  .navbar-expand-md .navbar-collapse .dropdown-submenu .dropdown-toggle:after {
    top: 0.3rem;
  }
  .navbar-expand-md .dropdown-header {
    padding-left: 1rem;
    padding-right: 1rem;
    margin-top: 0.5rem;
  }
  .navbar-expand-md .dropstart .dropdown-toggle:after,
  .navbar-expand-md .dropend .dropdown-toggle:after {
    content: "\e92d" !important;
  }
  .navbar-expand-md .dropstart .dropdown-menu[data-bs-popper] {
    margin-right: 0;
    margin-left: 0.75rem;
  }
  .navbar-expand-md .dropdown-toggle:after {
    top: 0.25rem !important;
  }
  .navbar-expand-md .language-select .dropdown-toggle:after {
    vertical-align: 0 !important;
  }
  .navbar-expand-md .navbar-other .nav-item.language-select .nav-link {
    font-size: 1.05rem;
  }
  .navbar-expand-md .navbar-other .nav-item .nav-link>i {
    font-size: calc(1.255rem + 0.06vw);
  }
}
@media (max-width: 767.98px) and (min-width: 1200px) {
  .navbar-expand-md .navbar-other .nav-item .nav-link>i {
    font-size: 1.3rem;
  }
}
@media (max-width: 767.98px) {
  .navbar-expand-md .navbar-brand {
    padding-top: 1.2rem;
    padding-bottom: 1.2rem;
  }
}
@media (max-width: 767.98px) {
  .navbar-expand-md.fancy .navbar-collapse-wrapper {
    background: none !important;
    box-shadow: none !important;
  }
}
@media (max-width: 767.98px) {
  .navbar-expand-md.center-logo.fixed .offcanvas-header .logo-light {
    display: inline-block;
  }
  .navbar-expand-md.center-logo.fixed .offcanvas-header .logo-dark {
    display: none;
  }
}
@media (max-width: 767.98px) {
  .navbar-expand-md .nav-item.parent-link .dropdown-toggle {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md.navbar-light .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
    color: var(--bs-primary);
  }
  .navbar-expand-md .navbar-nav,
  .navbar-expand-md .dropdown-mega {
    position: static !important;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu.dropdown-lg {
    padding: 1.6rem 0.25rem 1.3rem 0.25rem;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu.dropdown-lg .dropdown-lg-content {
    display: flex;
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu.dropdown-lg .dropdown-header {
    padding-top: 0;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu:before {
    position: absolute;
    top: -1rem;
    left: -1rem;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    z-index: -1;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu .dropdown-toggle:after {
    position: absolute;
    margin-right: 0;
    right: 1rem;
    top: 0.15rem;
    font-size: 0.85rem;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu.mega-menu {
    margin-left: 0.75rem !important;
    margin-right: 0.75rem !important;
  }
  .navbar-expand-md:not(.hover-none) .navbar-nav .dropdown-menu {
    top: 120%;
    visibility: hidden;
    pointer-events: none;
    opacity: 0;
    display: block;
  }
  .navbar-expand-md:not(.hover-none) .navbar-nav .dropdown:not(.dropdown-submenu):hover>.dropdown-menu {
    top: 100%;
    pointer-events: all;
    visibility: visible;
    opacity: 1;
    transition: all 0.25s ease-in-out;
  }
  .navbar-expand-md:not(.hover-none) .navbar-nav .dropdown-submenu {
    position: relative;
  }
  .navbar-expand-md:not(.hover-none) .navbar-nav .dropdown-submenu .dropdown-menu {
    top: 30%;
  }
  .navbar-expand-md:not(.hover-none) .navbar-nav .dropdown-submenu.dropstart:before {
    position: absolute;
    left: -1rem;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    z-index: -1;
  }
  .navbar-expand-md:not(.hover-none) .navbar-nav .dropdown-submenu:hover>.dropdown-menu {
    top: 0;
    pointer-events: all;
    visibility: visible;
    opacity: 1;
    transition: all 0.25s ease-in-out;
  }
  .navbar-expand-md .dropend>.dropdown-menu {
    margin-left: 0.5rem;
  }
  .navbar-expand-md .dropstart>.dropdown-menu {
    margin-right: 0.5rem;
  }
  .navbar-expand-md .offcanvas-nav {
    position: unset;
    flex-direction: row;
  }
  .navbar-expand-md .offcanvas-nav.offcanvas-start,
  .navbar-expand-md .offcanvas-nav.offcanvas-end {
    width: 100%;
  }
  .navbar-expand-md.fancy.navbar-bg-light:not(.fixed),
  .navbar-expand-md.extended.navbar-bg-light:not(.fixed) {
    background: none !important;
  }
  .navbar-expand-md.extended:not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.15rem;
    padding-bottom: 1.15rem;
  }
  .navbar-expand-md.fancy:not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }
  .navbar-expand-md[class*=navbar-bg-]:not(.fancy):not(.extended):not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.7rem;
    padding-bottom: 1.7rem;
  }
  .navbar-expand-md.transparent:not(.fixed) {
    padding-top: 0.3rem;
  }
  .navbar-expand-md.extended .navbar-collapse-wrapper,
  .navbar-expand-md.fancy .navbar-collapse-wrapper {
    box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
    width: 100%;
    border-radius: 0.4rem;
  }
  .navbar-expand-md.extended:not(.extended-alt):not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem 0 0.5rem;
  }
  .navbar-expand-md.extended.extended-alt:not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem;
  }
  .navbar-expand-md.fancy:not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem 0 1.5rem;
    margin-top: 2.25rem;
  }
  .navbar-expand-md.extended:not(.extended-alt) .navbar-brand {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  .navbar-expand-md.extended.extended-alt .navbar-brand {
    padding-top: 1.75rem;
    padding-bottom: 1.75rem;
  }
  .navbar-expand-md.fixed .topbar {
    display: none !important;
  }
  .navbar-expand-md.navbar-light:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
  .navbar-expand-md.navbar-dark:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
  .navbar-expand-md.transparent.fixed .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu {
    margin-top: 0.5rem;
  }
  .navbar-expand-md .navbar-collapse .nav-link {
    white-space: nowrap;
  }
  .navbar-expand-md .navbar-collapse .nav-item.parent-link {
    display: flex;
    flex-direction: row;
    align-items: center;
  }
  .navbar-expand-md .navbar-collapse .nav-item.parent-link>.nav-link:first-child {
    padding-right: 0 !important;
  }
  .navbar-expand-md .navbar-collapse .nav-item.parent-link .dropdown-toggle {
    padding-left: 0 !important;
  }
  .navbar-expand-md .mega-menu-content>.row>[class*=col-]+[class*=col-],
  .navbar-expand-md .dropdown-lg-content>div+div {
    border-left: 1px solid rgba(164, 174, 198, 0.2);
  }
  .navbar-expand-md .mega-menu-content {
    padding: 0.6rem 0.25rem 0.2rem;
  }
  .navbar-expand-md .mega-menu-dark {
    background: #2e353e;
  }
  .navbar-expand-md .mega-menu-dark .img-svg {
    background: rgba(var(--bs-white-rgb), 0.05);
    transition: all 0.2s ease-in-out;
  }
  .navbar-expand-md .mega-menu-dark .img-svg:hover {
    background: rgba(var(--bs-white-rgb), 0.09);
  }
  .navbar-expand-md .mega-menu-dark .dropdown-item {
    color: var(--bs-white);
  }
  .navbar-expand-md .mega-menu-dark .dropdown-item:hover,
  .navbar-expand-md .mega-menu-dark .dropdown-item:focus {
    color: var(--bs-white);
  }
  .navbar-expand-md .mega-menu-img {
    padding: 0 !important;
  }
  .navbar-expand-md .mega-menu-img .mega-menu-content {
    padding: 0.2rem 2rem !important;
    margin: 1.8rem 0 !important;
  }
  .navbar-expand-md .mega-menu-img .dropdown-item {
    padding-left: 0;
    padding-right: 0;
  }
  .navbar-expand-md.caret-none .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
    display: none;
  }
}
@media (max-width: 991.98px) {
  .navbar-expand-lg .offcanvas-nav {
    overflow-x: hidden;
    overflow-y: auto;
    flex-direction: column;
  }
  .navbar-expand-lg .offcanvas-nav .offcanvas-header,
  .navbar-expand-lg .offcanvas-nav .offcanvas-body,
  .navbar-expand-lg .offcanvas-nav .offcanvas-footer {
    width: 100%;
  }
  .navbar-expand-lg .offcanvas-nav .offcanvas-body {
    overflow-y: unset;
    flex-grow: 0;
  }
  .navbar-expand-lg .navbar-collapse .dropdown-menu {
    padding: 0;
    margin-top: 0;
    background: none;
  }
  .navbar-expand-lg .navbar-collapse .dropdown-menu .dropdown-item {
    color: var(--bs-white);
    padding-left: 1rem;
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
  }
  .navbar-expand-lg .navbar-collapse .nav-link,
  .navbar-expand-lg .navbar-collapse .show>.nav-link,
  .navbar-expand-lg .navbar-collapse .nav-link.active,
  .navbar-expand-lg .navbar-collapse .nav-link:hover,
  .navbar-expand-lg .navbar-collapse .nav-link:focus {
    color: var(--bs-white) !important;
  }
  .navbar-expand-lg .navbar-collapse .nav-link {
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
  }
  .navbar-expand-lg .navbar-collapse .dropdown-toggle:after {
    position: absolute;
    margin-right: 0;
    right: -0.25rem;
    top: 0.35rem;
    font-size: 0.9rem;
  }
  .navbar-expand-lg .navbar-collapse .dropdown-submenu .dropdown-toggle:after {
    top: 0.3rem;
  }
  .navbar-expand-lg .dropdown-header {
    padding-left: 1rem;
    padding-right: 1rem;
    margin-top: 0.5rem;
  }
  .navbar-expand-lg .dropstart .dropdown-toggle:after,
  .navbar-expand-lg .dropend .dropdown-toggle:after {
    content: "\e92d" !important;
  }
  .navbar-expand-lg .dropstart .dropdown-menu[data-bs-popper] {
    margin-right: 0;
    margin-left: 0.75rem;
  }
  .navbar-expand-lg .dropdown-toggle:after {
    top: 0.25rem !important;
  }
  .navbar-expand-lg .language-select .dropdown-toggle:after {
    vertical-align: 0 !important;
  }
  .navbar-expand-lg .navbar-other .nav-item.language-select .nav-link {
    font-size: 1.05rem;
  }
  .navbar-expand-lg .navbar-other .nav-item .nav-link>i {
    font-size: calc(1.255rem + 0.06vw);
  }
}
@media (max-width: 991.98px) and (min-width: 1200px) {
  .navbar-expand-lg .navbar-other .nav-item .nav-link>i {
    font-size: 1.3rem;
  }
}
@media (max-width: 991.98px) {
  .navbar-expand-lg .navbar-brand {
    padding-top: 1.2rem;
    padding-bottom: 1.2rem;
  }
}
@media (max-width: 991.98px) {
  .navbar-expand-lg.fancy .navbar-collapse-wrapper {
    background: none !important;
    box-shadow: none !important;
  }
}
@media (max-width: 991.98px) {
  .navbar-expand-lg.center-logo.fixed .offcanvas-header .logo-light {
    display: inline-block;
  }
  .navbar-expand-lg.center-logo.fixed .offcanvas-header .logo-dark {
    display: none;
  }
}
@media (max-width: 991.98px) {
  .navbar-expand-lg .nav-item.parent-link .dropdown-toggle {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg.navbar-light .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
    color: var(--bs-primary);
  }
  .navbar-expand-lg .navbar-nav,
  .navbar-expand-lg .dropdown-mega {
    position: static !important;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu.dropdown-lg {
    padding: 1.6rem 0.25rem 1.3rem 0.25rem;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu.dropdown-lg .dropdown-lg-content {
    display: flex;
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu.dropdown-lg .dropdown-header {
    padding-top: 0;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu:before {
    position: absolute;
    top: -1rem;
    left: -1rem;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    z-index: -1;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu .dropdown-toggle:after {
    position: absolute;
    margin-right: 0;
    right: 1rem;
    top: 0.15rem;
    font-size: 0.85rem;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu.mega-menu {
    margin-left: 0.75rem !important;
    margin-right: 0.75rem !important;
  }
  .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown-menu {
    top: 120%;
    visibility: hidden;
    pointer-events: none;
    opacity: 0;
    display: block;
  }
  .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown:not(.dropdown-submenu):hover>.dropdown-menu {
    top: 100%;
    pointer-events: all;
    visibility: visible;
    opacity: 1;
    transition: all 0.25s ease-in-out;
  }
  .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown-submenu {
    position: relative;
  }
  .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown-submenu .dropdown-menu {
    top: 30%;
  }
  .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown-submenu.dropstart:before {
    position: absolute;
    left: -1rem;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    z-index: -1;
  }
  .navbar-expand-lg:not(.hover-none) .navbar-nav .dropdown-submenu:hover>.dropdown-menu {
    top: 0;
    pointer-events: all;
    visibility: visible;
    opacity: 1;
    transition: all 0.25s ease-in-out;
  }
  .navbar-expand-lg .dropend>.dropdown-menu {
    margin-left: 0.5rem;
  }
  .navbar-expand-lg .dropstart>.dropdown-menu {
    margin-right: 0.5rem;
  }
  .navbar-expand-lg .offcanvas-nav {
    position: unset;
    flex-direction: row;
  }
  .navbar-expand-lg .offcanvas-nav.offcanvas-start,
  .navbar-expand-lg .offcanvas-nav.offcanvas-end {
    width: 100%;
  }
  .navbar-expand-lg.fancy.navbar-bg-light:not(.fixed),
  .navbar-expand-lg.extended.navbar-bg-light:not(.fixed) {
    background: none !important;
  }
  .navbar-expand-lg.extended:not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.15rem;
    padding-bottom: 1.15rem;
  }
  .navbar-expand-lg.fancy:not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }
  .navbar-expand-lg[class*=navbar-bg-]:not(.fancy):not(.extended):not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.7rem;
    padding-bottom: 1.7rem;
  }
  .navbar-expand-lg.transparent:not(.fixed) {
    padding-top: 0.3rem;
  }
  .navbar-expand-lg.extended .navbar-collapse-wrapper,
  .navbar-expand-lg.fancy .navbar-collapse-wrapper {
    box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
    width: 100%;
    border-radius: 0.4rem;
  }
  .navbar-expand-lg.extended:not(.extended-alt):not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem 0 0.5rem;
  }
  .navbar-expand-lg.extended.extended-alt:not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem;
  }
  .navbar-expand-lg.fancy:not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem 0 1.5rem;
    margin-top: 2.25rem;
  }
  .navbar-expand-lg.extended:not(.extended-alt) .navbar-brand {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  .navbar-expand-lg.extended.extended-alt .navbar-brand {
    padding-top: 1.75rem;
    padding-bottom: 1.75rem;
  }
  .navbar-expand-lg.fixed .topbar {
    display: none !important;
  }
  .navbar-expand-lg.navbar-light:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
  .navbar-expand-lg.navbar-dark:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
  .navbar-expand-lg.transparent.fixed .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu {
    margin-top: 0.5rem;
  }
  .navbar-expand-lg .navbar-collapse .nav-link {
    white-space: nowrap;
  }
  .navbar-expand-lg .navbar-collapse .nav-item.parent-link {
    display: flex;
    flex-direction: row;
    align-items: center;
  }
  .navbar-expand-lg .navbar-collapse .nav-item.parent-link>.nav-link:first-child {
    padding-right: 0 !important;
  }
  .navbar-expand-lg .navbar-collapse .nav-item.parent-link .dropdown-toggle {
    padding-left: 0 !important;
  }
  .navbar-expand-lg .mega-menu-content>.row>[class*=col-]+[class*=col-],
  .navbar-expand-lg .dropdown-lg-content>div+div {
    border-left: 1px solid rgba(164, 174, 198, 0.2);
  }
  .navbar-expand-lg .mega-menu-content {
    padding: 0.6rem 0.25rem 0.2rem;
  }
  .navbar-expand-lg .mega-menu-dark {
    background: #2e353e;
  }
  .navbar-expand-lg .mega-menu-dark .img-svg {
    background: rgba(var(--bs-white-rgb), 0.05);
    transition: all 0.2s ease-in-out;
  }
  .navbar-expand-lg .mega-menu-dark .img-svg:hover {
    background: rgba(var(--bs-white-rgb), 0.09);
  }
  .navbar-expand-lg .mega-menu-dark .dropdown-item {
    color: var(--bs-white);
  }
  .navbar-expand-lg .mega-menu-dark .dropdown-item:hover,
  .navbar-expand-lg .mega-menu-dark .dropdown-item:focus {
    color: var(--bs-white);
  }
  .navbar-expand-lg .mega-menu-img {
    padding: 0 !important;
  }
  .navbar-expand-lg .mega-menu-img .mega-menu-content {
    padding: 0.2rem 2rem !important;
    margin: 1.8rem 0 !important;
  }
  .navbar-expand-lg .mega-menu-img .dropdown-item {
    padding-left: 0;
    padding-right: 0;
  }
  .navbar-expand-lg.caret-none .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
    display: none;
  }
}
@media (max-width: 1199.98px) {
  .navbar-expand-xl .offcanvas-nav {
    overflow-x: hidden;
    overflow-y: auto;
    flex-direction: column;
  }
  .navbar-expand-xl .offcanvas-nav .offcanvas-header,
  .navbar-expand-xl .offcanvas-nav .offcanvas-body,
  .navbar-expand-xl .offcanvas-nav .offcanvas-footer {
    width: 100%;
  }
  .navbar-expand-xl .offcanvas-nav .offcanvas-body {
    overflow-y: unset;
    flex-grow: 0;
  }
  .navbar-expand-xl .navbar-collapse .dropdown-menu {
    padding: 0;
    margin-top: 0;
    background: none;
  }
  .navbar-expand-xl .navbar-collapse .dropdown-menu .dropdown-item {
    color: var(--bs-white);
    padding-left: 1rem;
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
  }
  .navbar-expand-xl .navbar-collapse .nav-link,
  .navbar-expand-xl .navbar-collapse .show>.nav-link,
  .navbar-expand-xl .navbar-collapse .nav-link.active,
  .navbar-expand-xl .navbar-collapse .nav-link:hover,
  .navbar-expand-xl .navbar-collapse .nav-link:focus {
    color: var(--bs-white) !important;
  }
  .navbar-expand-xl .navbar-collapse .nav-link {
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
  }
  .navbar-expand-xl .navbar-collapse .dropdown-toggle:after {
    position: absolute;
    margin-right: 0;
    right: -0.25rem;
    top: 0.35rem;
    font-size: 0.9rem;
  }
  .navbar-expand-xl .navbar-collapse .dropdown-submenu .dropdown-toggle:after {
    top: 0.3rem;
  }
  .navbar-expand-xl .dropdown-header {
    padding-left: 1rem;
    padding-right: 1rem;
    margin-top: 0.5rem;
  }
  .navbar-expand-xl .dropstart .dropdown-toggle:after,
  .navbar-expand-xl .dropend .dropdown-toggle:after {
    content: "\e92d" !important;
  }
  .navbar-expand-xl .dropstart .dropdown-menu[data-bs-popper] {
    margin-right: 0;
    margin-left: 0.75rem;
  }
  .navbar-expand-xl .dropdown-toggle:after {
    top: 0.25rem !important;
  }
  .navbar-expand-xl .language-select .dropdown-toggle:after {
    vertical-align: 0 !important;
  }
  .navbar-expand-xl .navbar-other .nav-item.language-select .nav-link {
    font-size: 1.05rem;
  }
  .navbar-expand-xl .navbar-other .nav-item .nav-link>i {
    font-size: calc(1.255rem + 0.06vw);
  }
}
@media (max-width: 1199.98px) and (min-width: 1200px) {
  .navbar-expand-xl .navbar-other .nav-item .nav-link>i {
    font-size: 1.3rem;
  }
}
@media (max-width: 1199.98px) {
  .navbar-expand-xl .navbar-brand {
    padding-top: 1.2rem;
    padding-bottom: 1.2rem;
  }
}
@media (max-width: 1199.98px) {
  .navbar-expand-xl.fancy .navbar-collapse-wrapper {
    background: none !important;
    box-shadow: none !important;
  }
}
@media (max-width: 1199.98px) {
  .navbar-expand-xl.center-logo.fixed .offcanvas-header .logo-light {
    display: inline-block;
  }
  .navbar-expand-xl.center-logo.fixed .offcanvas-header .logo-dark {
    display: none;
  }
}
@media (max-width: 1199.98px) {
  .navbar-expand-xl .nav-item.parent-link .dropdown-toggle {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl.navbar-light .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
    color: var(--bs-primary);
  }
  .navbar-expand-xl .navbar-nav,
  .navbar-expand-xl .dropdown-mega {
    position: static !important;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu.dropdown-lg {
    padding: 1.6rem 0.25rem 1.3rem 0.25rem;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu.dropdown-lg .dropdown-lg-content {
    display: flex;
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu.dropdown-lg .dropdown-header {
    padding-top: 0;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu:before {
    position: absolute;
    top: -1rem;
    left: -1rem;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    z-index: -1;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu .dropdown-toggle:after {
    position: absolute;
    margin-right: 0;
    right: 1rem;
    top: 0.15rem;
    font-size: 0.85rem;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu.mega-menu {
    margin-left: 0.75rem !important;
    margin-right: 0.75rem !important;
  }
  .navbar-expand-xl:not(.hover-none) .navbar-nav .dropdown-menu {
    top: 120%;
    visibility: hidden;
    pointer-events: none;
    opacity: 0;
    display: block;
  }
  .navbar-expand-xl:not(.hover-none) .navbar-nav .dropdown:not(.dropdown-submenu):hover>.dropdown-menu {
    top: 100%;
    pointer-events: all;
    visibility: visible;
    opacity: 1;
    transition: all 0.25s ease-in-out;
  }
  .navbar-expand-xl:not(.hover-none) .navbar-nav .dropdown-submenu {
    position: relative;
  }
  .navbar-expand-xl:not(.hover-none) .navbar-nav .dropdown-submenu .dropdown-menu {
    top: 30%;
  }
  .navbar-expand-xl:not(.hover-none) .navbar-nav .dropdown-submenu.dropstart:before {
    position: absolute;
    left: -1rem;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    z-index: -1;
  }
  .navbar-expand-xl:not(.hover-none) .navbar-nav .dropdown-submenu:hover>.dropdown-menu {
    top: 0;
    pointer-events: all;
    visibility: visible;
    opacity: 1;
    transition: all 0.25s ease-in-out;
  }
  .navbar-expand-xl .dropend>.dropdown-menu {
    margin-left: 0.5rem;
  }
  .navbar-expand-xl .dropstart>.dropdown-menu {
    margin-right: 0.5rem;
  }
  .navbar-expand-xl .offcanvas-nav {
    position: unset;
    flex-direction: row;
  }
  .navbar-expand-xl .offcanvas-nav.offcanvas-start,
  .navbar-expand-xl .offcanvas-nav.offcanvas-end {
    width: 100%;
  }
  .navbar-expand-xl.fancy.navbar-bg-light:not(.fixed),
  .navbar-expand-xl.extended.navbar-bg-light:not(.fixed) {
    background: none !important;
  }
  .navbar-expand-xl.extended:not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.15rem;
    padding-bottom: 1.15rem;
  }
  .navbar-expand-xl.fancy:not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }
  .navbar-expand-xl[class*=navbar-bg-]:not(.fancy):not(.extended):not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.7rem;
    padding-bottom: 1.7rem;
  }
  .navbar-expand-xl.transparent:not(.fixed) {
    padding-top: 0.3rem;
  }
  .navbar-expand-xl.extended .navbar-collapse-wrapper,
  .navbar-expand-xl.fancy .navbar-collapse-wrapper {
    box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
    width: 100%;
    border-radius: 0.4rem;
  }
  .navbar-expand-xl.extended:not(.extended-alt):not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem 0 0.5rem;
  }
  .navbar-expand-xl.extended.extended-alt:not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem;
  }
  .navbar-expand-xl.fancy:not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem 0 1.5rem;
    margin-top: 2.25rem;
  }
  .navbar-expand-xl.extended:not(.extended-alt) .navbar-brand {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  .navbar-expand-xl.extended.extended-alt .navbar-brand {
    padding-top: 1.75rem;
    padding-bottom: 1.75rem;
  }
  .navbar-expand-xl.fixed .topbar {
    display: none !important;
  }
  .navbar-expand-xl.navbar-light:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
  .navbar-expand-xl.navbar-dark:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
  .navbar-expand-xl.transparent.fixed .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu {
    margin-top: 0.5rem;
  }
  .navbar-expand-xl .navbar-collapse .nav-link {
    white-space: nowrap;
  }
  .navbar-expand-xl .navbar-collapse .nav-item.parent-link {
    display: flex;
    flex-direction: row;
    align-items: center;
  }
  .navbar-expand-xl .navbar-collapse .nav-item.parent-link>.nav-link:first-child {
    padding-right: 0 !important;
  }
  .navbar-expand-xl .navbar-collapse .nav-item.parent-link .dropdown-toggle {
    padding-left: 0 !important;
  }
  .navbar-expand-xl .mega-menu-content>.row>[class*=col-]+[class*=col-],
  .navbar-expand-xl .dropdown-lg-content>div+div {
    border-left: 1px solid rgba(164, 174, 198, 0.2);
  }
  .navbar-expand-xl .mega-menu-content {
    padding: 0.6rem 0.25rem 0.2rem;
  }
  .navbar-expand-xl .mega-menu-dark {
    background: #2e353e;
  }
  .navbar-expand-xl .mega-menu-dark .img-svg {
    background: rgba(var(--bs-white-rgb), 0.05);
    transition: all 0.2s ease-in-out;
  }
  .navbar-expand-xl .mega-menu-dark .img-svg:hover {
    background: rgba(var(--bs-white-rgb), 0.09);
  }
  .navbar-expand-xl .mega-menu-dark .dropdown-item {
    color: var(--bs-white);
  }
  .navbar-expand-xl .mega-menu-dark .dropdown-item:hover,
  .navbar-expand-xl .mega-menu-dark .dropdown-item:focus {
    color: var(--bs-white);
  }
  .navbar-expand-xl .mega-menu-img {
    padding: 0 !important;
  }
  .navbar-expand-xl .mega-menu-img .mega-menu-content {
    padding: 0.2rem 2rem !important;
    margin: 1.8rem 0 !important;
  }
  .navbar-expand-xl .mega-menu-img .dropdown-item {
    padding-left: 0;
    padding-right: 0;
  }
  .navbar-expand-xl.caret-none .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
    display: none;
  }
}
@media (max-width: 1399.98px) {
  .navbar-expand-xxl .offcanvas-nav {
    overflow-x: hidden;
    overflow-y: auto;
    flex-direction: column;
  }
  .navbar-expand-xxl .offcanvas-nav .offcanvas-header,
  .navbar-expand-xxl .offcanvas-nav .offcanvas-body,
  .navbar-expand-xxl .offcanvas-nav .offcanvas-footer {
    width: 100%;
  }
  .navbar-expand-xxl .offcanvas-nav .offcanvas-body {
    overflow-y: unset;
    flex-grow: 0;
  }
  .navbar-expand-xxl .navbar-collapse .dropdown-menu {
    padding: 0;
    margin-top: 0;
    background: none;
  }
  .navbar-expand-xxl .navbar-collapse .dropdown-menu .dropdown-item {
    color: var(--bs-white);
    padding-left: 1rem;
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
  }
  .navbar-expand-xxl .navbar-collapse .nav-link,
  .navbar-expand-xxl .navbar-collapse .show>.nav-link,
  .navbar-expand-xxl .navbar-collapse .nav-link.active,
  .navbar-expand-xxl .navbar-collapse .nav-link:hover,
  .navbar-expand-xxl .navbar-collapse .nav-link:focus {
    color: var(--bs-white) !important;
  }
  .navbar-expand-xxl .navbar-collapse .nav-link {
    padding-top: 0.3rem;
    padding-bottom: 0.3rem;
  }
  .navbar-expand-xxl .navbar-collapse .dropdown-toggle:after {
    position: absolute;
    margin-right: 0;
    right: -0.25rem;
    top: 0.35rem;
    font-size: 0.9rem;
  }
  .navbar-expand-xxl .navbar-collapse .dropdown-submenu .dropdown-toggle:after {
    top: 0.3rem;
  }
  .navbar-expand-xxl .dropdown-header {
    padding-left: 1rem;
    padding-right: 1rem;
    margin-top: 0.5rem;
  }
  .navbar-expand-xxl .dropstart .dropdown-toggle:after,
  .navbar-expand-xxl .dropend .dropdown-toggle:after {
    content: "\e92d" !important;
  }
  .navbar-expand-xxl .dropstart .dropdown-menu[data-bs-popper] {
    margin-right: 0;
    margin-left: 0.75rem;
  }
  .navbar-expand-xxl .dropdown-toggle:after {
    top: 0.25rem !important;
  }
  .navbar-expand-xxl .language-select .dropdown-toggle:after {
    vertical-align: 0 !important;
  }
  .navbar-expand-xxl .navbar-other .nav-item.language-select .nav-link {
    font-size: 1.05rem;
  }
  .navbar-expand-xxl .navbar-other .nav-item .nav-link>i {
    font-size: calc(1.255rem + 0.06vw);
  }
}
@media (max-width: 1399.98px) and (min-width: 1200px) {
  .navbar-expand-xxl .navbar-other .nav-item .nav-link>i {
    font-size: 1.3rem;
  }
}
@media (max-width: 1399.98px) {
  .navbar-expand-xxl .navbar-brand {
    padding-top: 1.2rem;
    padding-bottom: 1.2rem;
  }
}
@media (max-width: 1399.98px) {
  .navbar-expand-xxl.fancy .navbar-collapse-wrapper {
    background: none !important;
    box-shadow: none !important;
  }
}
@media (max-width: 1399.98px) {
  .navbar-expand-xxl.center-logo.fixed .offcanvas-header .logo-light {
    display: inline-block;
  }
  .navbar-expand-xxl.center-logo.fixed .offcanvas-header .logo-dark {
    display: none;
  }
}
@media (max-width: 1399.98px) {
  .navbar-expand-xxl .nav-item.parent-link .dropdown-toggle {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl.navbar-light .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
    color: var(--bs-primary);
  }
  .navbar-expand-xxl .navbar-nav,
  .navbar-expand-xxl .dropdown-mega {
    position: static !important;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu.dropdown-lg {
    padding: 1.6rem 0.25rem 1.3rem 0.25rem;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu.dropdown-lg .dropdown-lg-content {
    display: flex;
    flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu.dropdown-lg .dropdown-header {
    padding-top: 0;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu:before {
    position: absolute;
    top: -1rem;
    left: -1rem;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    z-index: -1;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu .dropdown-toggle:after {
    position: absolute;
    margin-right: 0;
    right: 1rem;
    top: 0.15rem;
    font-size: 0.85rem;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu.mega-menu {
    margin-left: 0.75rem !important;
    margin-right: 0.75rem !important;
  }
  .navbar-expand-xxl:not(.hover-none) .navbar-nav .dropdown-menu {
    top: 120%;
    visibility: hidden;
    pointer-events: none;
    opacity: 0;
    display: block;
  }
  .navbar-expand-xxl:not(.hover-none) .navbar-nav .dropdown:not(.dropdown-submenu):hover>.dropdown-menu {
    top: 100%;
    pointer-events: all;
    visibility: visible;
    opacity: 1;
    transition: all 0.25s ease-in-out;
  }
  .navbar-expand-xxl:not(.hover-none) .navbar-nav .dropdown-submenu {
    position: relative;
  }
  .navbar-expand-xxl:not(.hover-none) .navbar-nav .dropdown-submenu .dropdown-menu {
    top: 30%;
  }
  .navbar-expand-xxl:not(.hover-none) .navbar-nav .dropdown-submenu.dropstart:before {
    position: absolute;
    left: -1rem;
    width: 100%;
    height: 100%;
    content: "";
    display: block;
    z-index: -1;
  }
  .navbar-expand-xxl:not(.hover-none) .navbar-nav .dropdown-submenu:hover>.dropdown-menu {
    top: 0;
    pointer-events: all;
    visibility: visible;
    opacity: 1;
    transition: all 0.25s ease-in-out;
  }
  .navbar-expand-xxl .dropend>.dropdown-menu {
    margin-left: 0.5rem;
  }
  .navbar-expand-xxl .dropstart>.dropdown-menu {
    margin-right: 0.5rem;
  }
  .navbar-expand-xxl .offcanvas-nav {
    position: unset;
    flex-direction: row;
  }
  .navbar-expand-xxl .offcanvas-nav.offcanvas-start,
  .navbar-expand-xxl .offcanvas-nav.offcanvas-end {
    width: 100%;
  }
  .navbar-expand-xxl.fancy.navbar-bg-light:not(.fixed),
  .navbar-expand-xxl.extended.navbar-bg-light:not(.fixed) {
    background: none !important;
  }
  .navbar-expand-xxl.extended:not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.15rem;
    padding-bottom: 1.15rem;
  }
  .navbar-expand-xxl.fancy:not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.25rem;
    padding-bottom: 1.25rem;
  }
  .navbar-expand-xxl[class*=navbar-bg-]:not(.fancy):not(.extended):not(.fixed) .navbar-collapse .nav-link {
    padding-top: 1.7rem;
    padding-bottom: 1.7rem;
  }
  .navbar-expand-xxl.transparent:not(.fixed) {
    padding-top: 0.3rem;
  }
  .navbar-expand-xxl.extended .navbar-collapse-wrapper,
  .navbar-expand-xxl.fancy .navbar-collapse-wrapper {
    box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
    width: 100%;
    border-radius: 0.4rem;
  }
  .navbar-expand-xxl.extended:not(.extended-alt):not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem 0 0.5rem;
  }
  .navbar-expand-xxl.extended.extended-alt:not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem;
  }
  .navbar-expand-xxl.fancy:not(.fixed) .navbar-collapse-wrapper {
    padding: 0 1.5rem 0 1.5rem;
    margin-top: 2.25rem;
  }
  .navbar-expand-xxl.extended:not(.extended-alt) .navbar-brand {
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
  }
  .navbar-expand-xxl.extended.extended-alt .navbar-brand {
    padding-top: 1.75rem;
    padding-bottom: 1.75rem;
  }
  .navbar-expand-xxl.fixed .topbar {
    display: none !important;
  }
  .navbar-expand-xxl.navbar-light:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
  .navbar-expand-xxl.navbar-dark:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
  .navbar-expand-xxl.transparent.fixed .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu {
    margin-top: 0.5rem;
  }
  .navbar-expand-xxl .navbar-collapse .nav-link {
    white-space: nowrap;
  }
  .navbar-expand-xxl .navbar-collapse .nav-item.parent-link {
    display: flex;
    flex-direction: row;
    align-items: center;
  }
  .navbar-expand-xxl .navbar-collapse .nav-item.parent-link>.nav-link:first-child {
    padding-right: 0 !important;
  }
  .navbar-expand-xxl .navbar-collapse .nav-item.parent-link .dropdown-toggle {
    padding-left: 0 !important;
  }
  .navbar-expand-xxl .mega-menu-content>.row>[class*=col-]+[class*=col-],
  .navbar-expand-xxl .dropdown-lg-content>div+div {
    border-left: 1px solid rgba(164, 174, 198, 0.2);
  }
  .navbar-expand-xxl .mega-menu-content {
    padding: 0.6rem 0.25rem 0.2rem;
  }
  .navbar-expand-xxl .mega-menu-dark {
    background: #2e353e;
  }
  .navbar-expand-xxl .mega-menu-dark .img-svg {
    background: rgba(var(--bs-white-rgb), 0.05);
    transition: all 0.2s ease-in-out;
  }
  .navbar-expand-xxl .mega-menu-dark .img-svg:hover {
    background: rgba(var(--bs-white-rgb), 0.09);
  }
  .navbar-expand-xxl .mega-menu-dark .dropdown-item {
    color: var(--bs-white);
  }
  .navbar-expand-xxl .mega-menu-dark .dropdown-item:hover,
  .navbar-expand-xxl .mega-menu-dark .dropdown-item:focus {
    color: var(--bs-white);
  }
  .navbar-expand-xxl .mega-menu-img {
    padding: 0 !important;
  }
  .navbar-expand-xxl .mega-menu-img .mega-menu-content {
    padding: 0.2rem 2rem !important;
    margin: 1.8rem 0 !important;
  }
  .navbar-expand-xxl .mega-menu-img .dropdown-item {
    padding-left: 0;
    padding-right: 0;
  }
  .navbar-expand-xxl.caret-none .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
    display: none;
  }
}
.navbar-expand .offcanvas-nav {
  overflow-x: hidden;
  overflow-y: auto;
  flex-direction: column;
}
.navbar-expand .offcanvas-nav .offcanvas-header,
.navbar-expand .offcanvas-nav .offcanvas-body,
.navbar-expand .offcanvas-nav .offcanvas-footer {
  width: 100%;
}
.navbar-expand .offcanvas-nav .offcanvas-body {
  overflow-y: unset;
  flex-grow: 0;
}
.navbar-expand .navbar-collapse .dropdown-menu {
  padding: 0;
  margin-top: 0;
  background: none;
}
.navbar-expand .navbar-collapse .dropdown-menu .dropdown-item {
  color: var(--bs-white);
  padding-left: 1rem;
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;
}
.navbar-expand .navbar-collapse .nav-link,
.navbar-expand .navbar-collapse .show>.nav-link,
.navbar-expand .navbar-collapse .nav-link.active,
.navbar-expand .navbar-collapse .nav-link:hover,
.navbar-expand .navbar-collapse .nav-link:focus {
  color: var(--bs-white) !important;
}
.navbar-expand .navbar-collapse .nav-link {
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;
}
.navbar-expand .navbar-collapse .dropdown-toggle:after {
  position: absolute;
  margin-right: 0;
  right: -0.25rem;
  top: 0.35rem;
  font-size: 0.9rem;
}
.navbar-expand .navbar-collapse .dropdown-submenu .dropdown-toggle:after {
  top: 0.3rem;
}
.navbar-expand .dropdown-header {
  padding-left: 1rem;
  padding-right: 1rem;
  margin-top: 0.5rem;
}
.navbar-expand .dropstart .dropdown-toggle:after,
.navbar-expand .dropend .dropdown-toggle:after {
  content: "\e92d" !important;
}
.navbar-expand .dropstart .dropdown-menu[data-bs-popper] {
  margin-right: 0;
  margin-left: 0.75rem;
}
.navbar-expand .dropdown-toggle:after {
  top: 0.25rem !important;
}
.navbar-expand .language-select .dropdown-toggle:after {
  vertical-align: 0 !important;
}
.navbar-expand .navbar-other .nav-item.language-select .nav-link {
  font-size: 1.05rem;
}
.navbar-expand .navbar-other .nav-item .nav-link>i {
  font-size: calc(1.255rem + 0.06vw);
}
@media (min-width: 1200px) {
  .navbar-expand .navbar-other .nav-item .nav-link>i {
    font-size: 1.3rem;
  }
}
.navbar-expand .navbar-brand {
  padding-top: 1.2rem;
  padding-bottom: 1.2rem;
}
.navbar-expand.fancy .navbar-collapse-wrapper {
  background: none !important;
  box-shadow: none !important;
}
.navbar-expand.center-logo.fixed .offcanvas-header .logo-light {
  display: inline-block;
}
.navbar-expand.center-logo.fixed .offcanvas-header .logo-dark {
  display: none;
}
.navbar-expand .nav-item.parent-link .dropdown-toggle {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}
.navbar-expand.navbar-light .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
  color: var(--bs-primary);
}
.navbar-expand .navbar-nav,
.navbar-expand .dropdown-mega {
  position: static !important;
}
.navbar-expand .navbar-nav .dropdown-menu.dropdown-lg {
  padding: 1.6rem 0.25rem 1.3rem 0.25rem;
}
.navbar-expand .navbar-nav .dropdown-menu.dropdown-lg .dropdown-lg-content {
  display: flex;
  flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu.dropdown-lg .dropdown-header {
  padding-top: 0;
}
.navbar-expand .navbar-nav .dropdown-menu:before {
  position: absolute;
  top: -1rem;
  left: -1rem;
  width: 100%;
  height: 100%;
  content: "";
  display: block;
  z-index: -1;
}
.navbar-expand .navbar-nav .dropdown-menu .dropdown-toggle:after {
  position: absolute;
  margin-right: 0;
  right: 1rem;
  top: 0.15rem;
  font-size: 0.85rem;
}
.navbar-expand .navbar-nav .dropdown-menu.mega-menu {
  margin-left: 0.75rem !important;
  margin-right: 0.75rem !important;
}
.navbar-expand:not(.hover-none) .navbar-nav .dropdown-menu {
  top: 120%;
  visibility: hidden;
  pointer-events: none;
  opacity: 0;
  display: block;
}
.navbar-expand:not(.hover-none) .navbar-nav .dropdown:not(.dropdown-submenu):hover>.dropdown-menu {
  top: 100%;
  pointer-events: all;
  visibility: visible;
  opacity: 1;
  transition: all 0.25s ease-in-out;
}
.navbar-expand:not(.hover-none) .navbar-nav .dropdown-submenu {
  position: relative;
}
.navbar-expand:not(.hover-none) .navbar-nav .dropdown-submenu .dropdown-menu {
  top: 30%;
}
.navbar-expand:not(.hover-none) .navbar-nav .dropdown-submenu.dropstart:before {
  position: absolute;
  left: -1rem;
  width: 100%;
  height: 100%;
  content: "";
  display: block;
  z-index: -1;
}
.navbar-expand:not(.hover-none) .navbar-nav .dropdown-submenu:hover>.dropdown-menu {
  top: 0;
  pointer-events: all;
  visibility: visible;
  opacity: 1;
  transition: all 0.25s ease-in-out;
}
.navbar-expand .dropend>.dropdown-menu {
  margin-left: 0.5rem;
}
.navbar-expand .dropstart>.dropdown-menu {
  margin-right: 0.5rem;
}
.navbar-expand .offcanvas-nav {
  position: unset;
  flex-direction: row;
}
.navbar-expand .offcanvas-nav.offcanvas-start,
.navbar-expand .offcanvas-nav.offcanvas-end {
  width: 100%;
}
.navbar-expand.fancy.navbar-bg-light:not(.fixed),
.navbar-expand.extended.navbar-bg-light:not(.fixed) {
  background: none !important;
}
.navbar-expand.extended:not(.fixed) .navbar-collapse .nav-link {
  padding-top: 1.15rem;
  padding-bottom: 1.15rem;
}
.navbar-expand.fancy:not(.fixed) .navbar-collapse .nav-link {
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
}
.navbar-expand[class*=navbar-bg-]:not(.fancy):not(.extended):not(.fixed) .navbar-collapse .nav-link {
  padding-top: 1.7rem;
  padding-bottom: 1.7rem;
}
.navbar-expand.transparent:not(.fixed) {
  padding-top: 0.3rem;
}
.navbar-expand.extended .navbar-collapse-wrapper,
.navbar-expand.fancy .navbar-collapse-wrapper {
  box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
  width: 100%;
  border-radius: 0.4rem;
}
.navbar-expand.extended:not(.extended-alt):not(.fixed) .navbar-collapse-wrapper {
  padding: 0 1.5rem 0 0.5rem;
}
.navbar-expand.extended.extended-alt:not(.fixed) .navbar-collapse-wrapper {
  padding: 0 1.5rem;
}
.navbar-expand.fancy:not(.fixed) .navbar-collapse-wrapper {
  padding: 0 1.5rem 0 1.5rem;
  margin-top: 2.25rem;
}
.navbar-expand.extended:not(.extended-alt) .navbar-brand {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
}
.navbar-expand.extended.extended-alt .navbar-brand {
  padding-top: 1.75rem;
  padding-bottom: 1.75rem;
}
.navbar-expand.fixed .topbar {
  display: none !important;
}
.navbar-expand.navbar-light:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
.navbar-expand.navbar-dark:not(.transparent) .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu,
.navbar-expand.transparent.fixed .navbar-nav .dropdown:not(.dropdown-submenu):not(.language-select)>.dropdown-menu {
  margin-top: 0.5rem;
}
.navbar-expand .navbar-collapse .nav-link {
  white-space: nowrap;
}
.navbar-expand .navbar-collapse .nav-item.parent-link {
  display: flex;
  flex-direction: row;
  align-items: center;
}
.navbar-expand .navbar-collapse .nav-item.parent-link>.nav-link:first-child {
  padding-right: 0 !important;
}
.navbar-expand .navbar-collapse .nav-item.parent-link .dropdown-toggle {
  padding-left: 0 !important;
}
.navbar-expand .mega-menu-content>.row>[class*=col-]+[class*=col-],
.navbar-expand .dropdown-lg-content>div+div {
  border-left: 1px solid rgba(164, 174, 198, 0.2);
}
.navbar-expand .mega-menu-content {
  padding: 0.6rem 0.25rem 0.2rem;
}
.navbar-expand .mega-menu-dark {
  background: #2e353e;
}
.navbar-expand .mega-menu-dark .img-svg {
  background: rgba(var(--bs-white-rgb), 0.05);
  transition: all 0.2s ease-in-out;
}
.navbar-expand .mega-menu-dark .img-svg:hover {
  background: rgba(var(--bs-white-rgb), 0.09);
}
.navbar-expand .mega-menu-dark .dropdown-item {
  color: var(--bs-white);
}
.navbar-expand .mega-menu-dark .dropdown-item:hover,
.navbar-expand .mega-menu-dark .dropdown-item:focus {
  color: var(--bs-white);
}
.navbar-expand .mega-menu-img {
  padding: 0 !important;
}
.navbar-expand .mega-menu-img .mega-menu-content {
  padding: 0.2rem 2rem !important;
  margin: 1.8rem 0 !important;
}
.navbar-expand .mega-menu-img .dropdown-item {
  padding-left: 0;
  padding-right: 0;
}
.navbar-expand.caret-none .dropdown:not(.dropdown-submenu)>.dropdown-toggle:after {
  display: none;
}
.dropdown-mega .dropdown-menu {
  left: 0 !important;
  right: 0 !important;
  width: auto !important;
  max-width: none !important;
}
@media (min-width: 992px) {
  .mega-menu-scroll {
    overflow-y: scroll;
  }
  .mega-menu-scroll>span {
    font-size: 0.7rem;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: auto;
    position: absolute;
    bottom: 0.3rem;
    left: 0;
    text-align: center;
    color: #cacaca;
  }
  .mega-menu-scroll>span i {
    font-size: 1rem;
  }
}
@media (min-width: 1400px) {
  .mega-menu-scroll {
    height: 30.6rem;
  }
}
@media (min-width: 1200px) and (max-width: 1399.98px) {
  .mega-menu-scroll {
    height: 26.2rem;
  }
}
@media (min-width: 992px) and (max-width: 1199.98px) {
  .mega-menu-scroll {
    height: 21.8rem;
  }
}
.dropend>.dropdown-menu {
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0;
}
.dropstart>.dropdown-menu {
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0;
}
.language-select .dropdown-toggle:after {
  position: unset !important;
  margin-left: 0 !important;
  margin-right: -0.25rem !important;
  vertical-align: -1px !important;
}
.language-select .dropdown-menu {
  left: 50% !important;
  transform: translateX(-50%) !important;
  top: 100% !important;
  margin-top: 0.5rem !important;
  padding: 0.65rem 0;
  position: absolute;
  min-width: 4rem;
}
.share-dropdown .dropdown-menu {
  min-width: 6.25rem;
  margin-top: 1rem !important;
  padding-top: 0.65rem !important;
  padding-bottom: 0.65rem !important;
}
.share-dropdown .dropdown-menu[data-popper-placement^=top] {
  margin-top: 0 !important;
  margin-bottom: 1rem !important;
}
.share-dropdown .dropdown-menu .dropdown-item {
  padding: 0.25rem 1.15rem;
  font-size: 0.7rem;
}
.share-dropdown .dropdown-menu .dropdown-item i {
  padding-right: 0.4rem;
  vertical-align: -0.1rem;
  width: 1rem;
  font-size: 0.8rem;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-toggle:after {
  font-size: 0.85rem;
  margin-right: -0.25rem;
}
.navbar-light .language-select .dropdown-toggle:after {
  color: var(--bs-primary);
}
.share-dropdown .dropdown-toggle:after {
  display: none;
}
.navbar-nav .dropdown.dropstart>.dropdown-toggle:after {
  border: 0;
  content: "\e931";
}
.nav-link {
  --bs-nav-link-font-weight: 700;
  letter-spacing: -0.01rem;
}
.nav-link p {
  font-size: 0.8rem;
}
.sidebar .nav-link {
  letter-spacing: normal;
}
.navbar-other .nav-link {
  cursor: pointer;
}
@media (min-width: 992px) and (max-width: 1199.98px) {
  .navbar .navbar-collapse .nav-link {
    padding-right: 0.6rem;
    padding-left: 0.6rem;
  }
}
.nav-tabs .nav-link {
  background: var(--bs-white);
  transition: all 0.2s ease-in-out;
  font-size: 0.85rem;
  padding: 0.6rem 1.3rem;
}
.nav-tabs .nav-link i {
  font-size: 1rem;
}
.nav-tabs.nav-tabs-basic {
  border-color: transparent;
}
.nav-tabs.nav-tabs-basic .nav-link {
  border: 0;
  border-radius: 0;
  border-color: transparent;
  background: transparent;
  font-size: 0.85rem;
  padding: 0.6rem 0;
  margin-right: 1rem;
  border-bottom: 2px solid rgba(164, 174, 198, 0.25);
}
.nav-tabs.nav-tabs-basic .nav-link:hover,
.nav-tabs.nav-tabs-basic .nav-link:focus {
  border-color: var(--bs-primary);
}
.nav-tabs.nav-tabs-basic .nav-link.active,
.nav-tabs.nav-tabs-basic .nav-item.show .nav-link {
  color: var(--bs-primary);
  border-color: var(--bs-primary);
}
.nav-tabs.nav-pills {
  border-color: transparent;
}
.nav-tabs.nav-pills .nav-link {
  border-color: transparent;
  box-shadow: 0 0 0 0.05rem rgba(8, 60, 130, 0.06), 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  margin-right: 0.5rem;
  padding: 0.55rem 1.25rem;
  display: flex;
  align-items: center;
}
@media (max-width: 991.98px) {
  .nav-tabs.d-flex:not(.nav-pills) {
    justify-content: flex-start !important;
  }
}
@media (max-width: 767px) {
  .nav-tabs.nav-tabs-basic,
  .nav-tabs.nav-pills {
    flex-direction: column;
  }
  .nav-tabs.nav-tabs-basic .nav-item,
  .nav-tabs.nav-pills .nav-item {
    margin-bottom: 1rem;
  }
  .nav-tabs.nav-tabs-basic .nav-link,
  .nav-tabs.nav-pills .nav-link {
    margin-right: 0;
  }
}
.nav-tabs.nav-tabs-bg {
  border-color: transparent;
}
.nav-tabs.nav-tabs-bg .nav-link {
  padding: 1.4rem 1.2rem;
  border-radius: 0.4rem;
  border: 1px solid transparent;
  line-height: 1.25rem;
  box-shadow: none;
  background: transparent;
}
.nav-tabs.nav-tabs-bg .nav-link:first-child {
  margin-left: 0;
}
.nav-tabs.nav-tabs-bg .nav-link:last-child {
  margin-right: 0;
}
.nav-tabs.nav-tabs-bg .nav-link:hover,
.nav-tabs.nav-tabs-bg .nav-link.active {
  color: #343f52;
  border-color: transparent;
  background: var(--bs-white);
  box-shadow: 0 0 0 0.05rem rgba(8, 60, 130, 0.06), 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
}
.nav-tabs.nav-tabs-bg .nav-link p {
  margin: 0;
  font-weight: 500;
  color: #60697b;
}
.nav-tabs.nav-tabs-bg.nav-tabs-shadow-lg .nav-link:hover,
.nav-tabs.nav-tabs-bg.nav-tabs-shadow-lg .nav-link.active {
  box-shadow: 0rem 0.25rem 1.75rem rgba(30, 34, 40, 0.07);
}
.nav-tabs.flex-column.nav-tabs-bg .nav-item {
  margin-bottom: 1rem;
}
.nav-tabs.nav-justified .nav-item {
  text-align: left;
}
@media (min-width: 992px) {
  .nav-tabs.nav-justified .nav-item {
    margin-left: 0.75rem;
    margin-right: 0.75rem;
  }
  .nav-tabs.nav-justified .nav-item:first-child {
    margin-left: 0;
  }
  .nav-tabs.nav-justified .nav-item:last-child {
    margin-right: 0;
  }
}
.tab-content {
  margin-top: 1.25rem;
}
header {
  position: relative;
}
.navbar {
  width: 100%;
  z-index: 1020;
}
.navbar .container {
  position: relative;
}
.navbar .navbar-collapse {
  align-items: center;
}
.navbar.transparent .logo-dark {
  display: none;
}
.navbar.transparent.fixed .logo-light {
  display: none;
}
.navbar.transparent.fixed .logo-dark {
  display: inline-block;
}
.navbar.navbar-dark .logo-dark {
  display: none;
}
.navbar.navbar-light.fixed .logo-light {
  display: none;
}
.navbar.navbar-light.fixed .logo-dark {
  display: inline-block;
}
.navbar.navbar-light.fixed .btn:not(.btn-expand):not(.btn-gradient) {
  background: var(--bs-primary);
  border-color: var(--bs-primary);
  color: var(--bs-white);
}
.navbar.navbar-bg-light {
  background: var(--bs-white);
  box-shadow: none;
}
.navbar.navbar-bg-dark {
  background: #21262c;
}
.navbar .navbar-other .nav-item .nav-link {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}
.navbar .navbar-other .nav-item .nav-link>i {
  font-size: 1.1rem;
}
.navbar .navbar-other .navbar-nav>.nav-item .nav-link {
  padding-left: 0;
  padding-right: 0;
}
.navbar .navbar-other .navbar-nav>.nav-item+.nav-item {
  margin-left: 0.8rem;
}
.navbar.fixed:not(.extended) .topbar {
  display: none !important;
}
.navbar.fixed .navbar-collapse-wrapper {
  background: none !important;
  box-shadow: none !important;
}
.navbar-clone {
  position: fixed !important;
  z-index: 1008;
  top: 0;
  left: 0;
  transform: translateY(-100%);
  transition: all 300ms ease-in-out, padding-right 0ms;
}
@media (prefers-reduced-motion: reduce) {
  .navbar-clone {
    transition: none;
  }
}
.navbar-stick {
  transform: translateY(0%);
}
.navbar-stick:not(.navbar-dark) {
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.06);
  background: rgba(var(--bs-white-rgb), 0.97);
}
button.hamburger {
  cursor: pointer;
  background: none;
  border: 0;
  padding: 0;
  margin: 0 0 0 0.2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  color: #343f52;
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  button.hamburger {
    transition: none;
  }
}
button.hamburger::-moz-focus-inner {
  padding: 0;
  border: 0;
}
button.hamburger:focus {
  outline: 0;
}
button.hamburger:before,
button.hamburger:after {
  content: "";
}
button.hamburger:before,
button.hamburger span,
button.hamburger:after {
  width: 1.2rem;
  height: 0.15rem;
  transition: all 0.2s ease-in-out;
  background: currentColor;
  border-radius: 2rem;
}
@media (prefers-reduced-motion: reduce) {
  button.hamburger:before,
  button.hamburger span,
  button.hamburger:after {
    transition: none;
  }
}
button.hamburger:before,
button.hamburger span {
  margin: 0 0 0.25rem;
}
.navbar.position-absolute:not(.fixed):not(.navbar-light) button.hamburger,
.navbar.navbar-bg-dark button.hamburger,
.navbar.navbar-dark button.hamburger {
  color: var(--bs-white);
}
.card {
  box-shadow: 0 0 0 0.05rem rgba(8, 60, 130, 0.06), 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  border: 0;
  color: inherit;
}
.card[class*=bg-] {
  box-shadow: none !important;
}
.card-img-top img {
  border-top-left-radius: 0.4rem;
  border-top-right-radius: 0.4rem;
}
.card-img-top .plyr {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
@media (max-width: 991.98px) {
  .card-md-none {
    background: none;
    border-radius: 0;
  }
  .card-md-none .card-body {
    padding: 0;
  }
}
[class*=card-border-] {
  position: relative;
}
[class*=card-border-]:after {
  content: "";
  position: absolute;
}
.card-border-top:after {
  top: 0;
  right: 0;
  left: 0;
  border-top-width: 4px;
  border-bottom-width: calc(0.4rem - 4px);
  border-top-style: solid;
  border-bottom-style: solid;
  border-top-color: inherit;
  border-bottom-color: transparent;
  border-top-left-radius: 0.4rem;
  border-top-right-radius: 0.4rem;
}
.card-border-top[class*=border-soft-]:after {
  border-top-width: 6px;
  border-bottom-width: calc(0.4rem - 6px);
}
.card-border-bottom:after {
  bottom: 0;
  right: 0;
  left: 0;
  border-bottom-width: 4px;
  border-top-width: calc(0.4rem - 4px);
  border-bottom-style: solid;
  border-top-style: solid;
  border-bottom-color: inherit;
  border-top-color: transparent;
  border-bottom-left-radius: 0.4rem;
  border-bottom-right-radius: 0.4rem;
}
.card-border-bottom[class*=border-soft-]:after {
  border-bottom-width: 6px;
  border-top-width: calc(0.4rem - 6px);
}
.card-border-start:after {
  top: 0;
  left: 0;
  bottom: 0;
  border-left-width: 4px;
  border-right-width: calc(0.4rem - 4px);
  border-left-style: solid;
  border-right-style: solid;
  border-left-color: inherit;
  border-right-color: transparent;
  border-top-left-radius: 0.4rem;
  border-bottom-left-radius: 0.4rem;
}
.card-border-start[class*=border-soft-]:after {
  border-left-width: 6px;
  border-right-width: calc(0.4rem - 6px);
}
.card-border-end:after {
  top: 0;
  right: 0;
  bottom: 0;
  border-right-width: 4px;
  border-left-width: calc(0.4rem - 4px);
  border-right-style: solid;
  border-left-style: solid;
  border-right-color: inherit;
  border-left-color: transparent;
  border-top-right-radius: 0.4rem;
  border-bottom-right-radius: 0.4rem;
}
.card-border-end[class*=border-soft-]:after {
  border-right-width: 6px;
  border-left-width: calc(0.4rem - 6px);
}
.container-card>.card,
.container-card>.card.image-wrapper:before {
  border-radius: 0 !important;
}
@media (min-width: 1480px) {
  .container-card {
    max-width: 1470px;
    margin: 0 auto;
  }
  .container-card>.card,
  .container-card>.card.image-wrapper:before {
    border-radius: 0.8rem !important;
  }
}
.accordion-wrapper .card {
  margin-bottom: 1.25rem;
}
.accordion-wrapper .card.plain {
  background: none;
  border: 0;
  margin-bottom: 0;
  box-shadow: none;
}
.accordion-wrapper .card.plain .card-body {
  padding: 0 0 0 1.1rem;
}
.accordion-wrapper .card.plain .card-header {
  padding: 0 0 0.8rem 0;
}
.accordion-wrapper .card.plain .card-header button {
  padding: 0 0 0 1.1rem;
}
.accordion-wrapper .card.plain .card-header button:before {
  left: 0;
}
.accordion-wrapper .card-header {
  margin-bottom: 0;
  background: none;
  border: 0;
  padding: 0.9rem 1.3rem 0.85rem;
}
.accordion-wrapper .card-header button {
  cursor: pointer;
  width: 100%;
  padding: 0 0 0 1rem;
  text-align: left;
  margin: 0;
  border: 0;
  font-size: 0.85rem;
  font-weight: 700;
  color: var(--bs-primary);
  transition: all 150ms ease-in-out;
  background: none;
}
@media (prefers-reduced-motion: reduce) {
  .accordion-wrapper .card-header button {
    transition: none;
  }
}
.accordion-wrapper .card-header button:before {
  font-family: "Unicons";
  position: absolute;
  left: 1.3rem;
  content: "\e932";
  font-size: 1.15rem;
  font-weight: normal;
  width: 1rem;
  margin-top: -0.25rem;
  margin-left: -0.3rem;
  display: inline-block;
  color: var(--bs-primary);
}
.accordion-wrapper .card-header button.collapsed {
  color: #343f52;
}
.accordion-wrapper .card-header button.collapsed:before {
  content: "\e92d";
}
.accordion-wrapper .card-header button:hover {
  color: var(--bs-primary);
}
.accordion-item .card-body {
  padding: 0 1.25rem 0.25rem 2.35rem;
}
.accordion-item.icon .card-body {
  padding: 0 1.25rem 0.25rem 2.8rem;
}
.accordion-item.icon button {
  padding: 0 0 0 1.5rem;
  display: flex;
  align-items: center;
}
.accordion-item.icon button:before {
  display: none;
}
.accordion-item.icon button>span {
  position: absolute;
  left: 1.3rem;
}
.accordion-item.icon button>span i {
  font-size: 1rem;
}
.collapse-link {
  font-size: 0.85rem;
  font-weight: 700;
  color: var(--bs-primary);
}
.collapse-link:before {
  font-family: "Unicons";
  content: "\e932";
  font-size: 1.15rem;
  font-weight: normal;
  width: 1rem;
  margin-left: -0.3rem;
  margin-right: 0.4rem;
  display: inline-block;
  vertical-align: -4px;
}
.collapse-link.collapsed {
  color: #343f52;
}
.collapse-link.collapsed:before {
  content: "\e92d";
}
.collapse-link:hover {
  color: var(--bs-primary);
}
.accordion-collapse>.card-footer {
  background: #273444;
  padding: 0;
}
.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0 0;
  margin-bottom: 1rem;
  list-style: none;
  background-color: none;
  border-radius: 0;
}
.breadcrumb-item {
  display: flex;
  color: #60697b;
}
.breadcrumb-item a {
  color: inherit;
}
.breadcrumb-item a:hover {
  color: var(--bs-primary);
}
.breadcrumb-item+.breadcrumb-item {
  padding-left: 0.5rem;
}
.breadcrumb-item+.breadcrumb-item::before {
  font-family: "Unicons";
  font-weight: normal;
  display: flex;
  align-items: center;
  padding-right: 0.5rem;
  color: rgba(96, 105, 123, 0.35);
  content: "\e931";
  margin-top: -1px;
  font-size: 0.9rem;
}
.breadcrumb.text-white .breadcrumb-item:hover,
.breadcrumb.text-white .breadcrumb-item.active {
  color: var(--bs-white);
}
.breadcrumb.text-white .breadcrumb-item a {
  color: var(--bs-white);
}
.breadcrumb.text-white .breadcrumb-item a:hover {
  border-color: var(--bs-white);
}
.breadcrumb.text-white .breadcrumb-item+.breadcrumb-item::before {
  color: rgba(var(--bs-white-rgb), 0.5);
}
.pagination {
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
}
.pagination .page-link {
  width: 2.5rem;
  height: 2.5rem;
  font-size: 0.65rem;
  font-weight: 700;
  display: flex;
  justify-content: center;
  align-items: center;
}
.pagination .page-link i {
  font-size: 0.9rem;
}
.pagination.pagination-alt {
  box-shadow: none;
}
.pagination.pagination-alt .page-item {
  margin-right: 0.5rem;
}
.pagination.pagination-alt .page-item .page-link {
  border: 0;
  border-radius: 0.4rem !important;
  box-shadow: 0rem 0.25rem 1.75rem rgba(30, 34, 40, 0.07);
}
.alert-dismissible .btn-close {
  position: absolute !important;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 1.05rem 1rem;
  color: var(--bs-alert-link-color) !important;
}
.alert-dismissible .btn-close:before {
  background: none;
  font-size: 1.2rem;
  width: 1.2rem;
  height: 1.2rem;
}
.alert-dismissible .btn-close:hover:before {
  background: none;
}
.alert-icon {
  padding-left: 2.5rem;
}
.alert-icon i {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  padding: 0.8rem 1rem;
  font-size: 1rem;
}
.alert[class*=bg-] {
  padding: 0.8rem 0;
}
.alert[class*=bg-] .alert-inner {
  padding-right: 3rem;
}
.alert[class*=bg-].alert-dismissible .btn-close {
  padding-top: 0;
  padding-bottom: 0;
  top: 50%;
  transform: translateY(-50%);
  color: rgba(var(--bs-white-rgb), 0.8);
}
.alert[class*=bg-].alert-dismissible .btn-close:hover {
  color: var(--bs-white);
}
@media (max-width: 767px) {
  .alert[class*=bg-].alert-dismissible .btn-close {
    padding-right: 0.5rem;
  }
}
.progress-list {
  margin: 0;
  padding: 0;
  list-style: none;
}
.progress-list p {
  margin-bottom: 0.25rem;
}
.progress-list li {
  margin-bottom: 1rem;
}
.progress-list .progressbar svg,
.progress-list .progressbar svg path {
  border-radius: 1rem;
}
.progress-list .progressbar.line {
  position: relative;
}
.progress-list .progressbar.line svg {
  height: 0.3rem;
}
.progressbar.semi-circle {
  position: relative;
  margin: 0 auto 1rem;
  width: 8.5rem;
  height: 4.25rem;
}
.progressbar.semi-circle .progressbar-text {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  margin: 0;
  font-size: 2rem;
  line-height: 1;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  color: #343f52 !important;
}
.progressbar.semi-circle .progressbar-text:after {
  content: "%";
  display: block;
  font-size: 1rem;
  padding-left: 0.01rem;
  padding-bottom: 0.1rem;
}
.progressbar.semi-circle.text-white .progressbar-text {
  color: var(--bs-white) !important;
}
.progressbar svg path:first-child {
  stroke: rgba(30, 34, 40, 0.06);
}
.progressbar.blue svg path:last-child {
  stroke: var(--bs-blue);
}
.progressbar.semi-circle.blue svg path:first-child {
  stroke: rgba(63, 120, 224, 0.1);
}
.progressbar.sky svg path:last-child {
  stroke: var(--bs-sky);
}
.progressbar.semi-circle.sky svg path:first-child {
  stroke: rgba(94, 185, 240, 0.1);
}
.progressbar.purple svg path:last-child {
  stroke: var(--bs-purple);
}
.progressbar.semi-circle.purple svg path:first-child {
  stroke: rgba(116, 126, 209, 0.1);
}
.progressbar.grape svg path:last-child {
  stroke: var(--bs-grape);
}
.progressbar.semi-circle.grape svg path:first-child {
  stroke: rgba(96, 93, 186, 0.1);
}
.progressbar.violet svg path:last-child {
  stroke: var(--bs-violet);
}
.progressbar.semi-circle.violet svg path:first-child {
  stroke: rgba(160, 124, 197, 0.1);
}
.progressbar.pink svg path:last-child {
  stroke: var(--bs-pink);
}
.progressbar.semi-circle.pink svg path:first-child {
  stroke: rgba(209, 107, 134, 0.1);
}
.progressbar.fuchsia svg path:last-child {
  stroke: var(--bs-fuchsia);
}
.progressbar.semi-circle.fuchsia svg path:first-child {
  stroke: rgba(230, 104, 179, 0.1);
}
.progressbar.red svg path:last-child {
  stroke: var(--bs-red);
}
.progressbar.semi-circle.red svg path:first-child {
  stroke: rgba(226, 98, 107, 0.1);
}
.progressbar.orange svg path:last-child {
  stroke: var(--bs-orange);
}
.progressbar.semi-circle.orange svg path:first-child {
  stroke: rgba(247, 139, 119, 0.1);
}
.progressbar.yellow svg path:last-child {
  stroke: var(--bs-yellow);
}
.progressbar.semi-circle.yellow svg path:first-child {
  stroke: rgba(250, 183, 88, 0.1);
}
.progressbar.green svg path:last-child {
  stroke: var(--bs-green);
}
.progressbar.semi-circle.green svg path:first-child {
  stroke: rgba(69, 196, 160, 0.1);
}
.progressbar.leaf svg path:last-child {
  stroke: var(--bs-leaf);
}
.progressbar.semi-circle.leaf svg path:first-child {
  stroke: rgba(124, 183, 152, 0.1);
}
.progressbar.aqua svg path:last-child {
  stroke: var(--bs-aqua);
}
.progressbar.semi-circle.aqua svg path:first-child {
  stroke: rgba(84, 168, 199, 0.1);
}
.progressbar.navy svg path:last-child {
  stroke: var(--bs-navy);
}
.progressbar.semi-circle.navy svg path:first-child {
  stroke: rgba(52, 63, 82, 0.1);
}
.progressbar.ash svg path:last-child {
  stroke: var(--bs-ash);
}
.progressbar.semi-circle.ash svg path:first-child {
  stroke: rgba(148, 153, 163, 0.1);
}
.progressbar.white svg path:last-child {
  stroke: var(--bs-white);
}
.progressbar.semi-circle.white svg path:first-child {
  stroke: rgba(255, 255, 255, 0.1);
}
.progressbar.light svg path:last-child {
  stroke: var(--bs-light);
}
.progressbar.semi-circle.light svg path:first-child {
  stroke: rgba(254, 254, 254, 0.1);
}
.progressbar.gray svg path:last-child {
  stroke: var(--bs-gray);
}
.progressbar.semi-circle.gray svg path:first-child {
  stroke: rgba(246, 247, 249, 0.1);
}
.progressbar.dark svg path:last-child {
  stroke: var(--bs-dark);
}
.progressbar.semi-circle.dark svg path:first-child {
  stroke: rgba(38, 43, 50, 0.1);
}
.progressbar.primary svg path:last-child {
  stroke: var(--bs-primary);
}
.progressbar.semi-circle.primary svg path:first-child {
  stroke: rgba(63, 120, 224, 0.1);
}
.progressbar.soft-blue svg path:last-child {
  stroke: var(--bs-icon-fill-blue);
}
.progressbar.semi-circle.soft-blue svg path:first-child {
  stroke: rgba(63, 120, 224, 0.1);
}
.progressbar.soft-sky svg path:last-child {
  stroke: var(--bs-icon-fill-sky);
}
.progressbar.semi-circle.soft-sky svg path:first-child {
  stroke: rgba(94, 185, 240, 0.1);
}
.progressbar.soft-purple svg path:last-child {
  stroke: var(--bs-icon-fill-purple);
}
.progressbar.semi-circle.soft-purple svg path:first-child {
  stroke: rgba(116, 126, 209, 0.1);
}
.progressbar.soft-grape svg path:last-child {
  stroke: var(--bs-icon-fill-grape);
}
.progressbar.semi-circle.soft-grape svg path:first-child {
  stroke: rgba(96, 93, 186, 0.1);
}
.progressbar.soft-violet svg path:last-child {
  stroke: var(--bs-icon-fill-violet);
}
.progressbar.semi-circle.soft-violet svg path:first-child {
  stroke: rgba(160, 124, 197, 0.1);
}
.progressbar.soft-pink svg path:last-child {
  stroke: var(--bs-icon-fill-pink);
}
.progressbar.semi-circle.soft-pink svg path:first-child {
  stroke: rgba(209, 107, 134, 0.1);
}
.progressbar.soft-fuchsia svg path:last-child {
  stroke: var(--bs-icon-fill-fuchsia);
}
.progressbar.semi-circle.soft-fuchsia svg path:first-child {
  stroke: rgba(230, 104, 179, 0.1);
}
.progressbar.soft-red svg path:last-child {
  stroke: var(--bs-icon-fill-red);
}
.progressbar.semi-circle.soft-red svg path:first-child {
  stroke: rgba(226, 98, 107, 0.1);
}
.progressbar.soft-orange svg path:last-child {
  stroke: var(--bs-icon-fill-orange);
}
.progressbar.semi-circle.soft-orange svg path:first-child {
  stroke: rgba(247, 139, 119, 0.1);
}
.progressbar.soft-yellow svg path:last-child {
  stroke: var(--bs-icon-fill-yellow);
}
.progressbar.semi-circle.soft-yellow svg path:first-child {
  stroke: rgba(250, 183, 88, 0.1);
}
.progressbar.soft-green svg path:last-child {
  stroke: var(--bs-icon-fill-green);
}
.progressbar.semi-circle.soft-green svg path:first-child {
  stroke: rgba(69, 196, 160, 0.1);
}
.progressbar.soft-leaf svg path:last-child {
  stroke: var(--bs-icon-fill-leaf);
}
.progressbar.semi-circle.soft-leaf svg path:first-child {
  stroke: rgba(124, 183, 152, 0.1);
}
.progressbar.soft-aqua svg path:last-child {
  stroke: var(--bs-icon-fill-aqua);
}
.progressbar.semi-circle.soft-aqua svg path:first-child {
  stroke: rgba(84, 168, 199, 0.1);
}
.progressbar.soft-navy svg path:last-child {
  stroke: var(--bs-icon-fill-navy);
}
.progressbar.semi-circle.soft-navy svg path:first-child {
  stroke: rgba(52, 63, 82, 0.1);
}
.progressbar.soft-ash svg path:last-child {
  stroke: var(--bs-icon-fill-ash);
}
.progressbar.semi-circle.soft-ash svg path:first-child {
  stroke: rgba(148, 153, 163, 0.1);
}
.progressbar.soft-white svg path:last-child {
  stroke: var(--bs-icon-fill-white);
}
.progressbar.semi-circle.soft-white svg path:first-child {
  stroke: rgba(255, 255, 255, 0.1);
}
.progressbar.soft-light svg path:last-child {
  stroke: var(--bs-icon-fill-light);
}
.progressbar.semi-circle.soft-light svg path:first-child {
  stroke: rgba(254, 254, 254, 0.1);
}
.progressbar.soft-gray svg path:last-child {
  stroke: var(--bs-icon-fill-gray);
}
.progressbar.semi-circle.soft-gray svg path:first-child {
  stroke: rgba(246, 247, 249, 0.1);
}
.progressbar.soft-dark svg path:last-child {
  stroke: var(--bs-icon-fill-dark);
}
.progressbar.semi-circle.soft-dark svg path:first-child {
  stroke: rgba(38, 43, 50, 0.1);
}
.progressbar.soft-primary svg path:last-child {
  stroke: var(--bs-icon-fill-primary);
}
.progressbar.semi-circle.soft-primary svg path:first-child {
  stroke: rgba(63, 120, 224, 0.1);
}
@media (min-width: 576px) {
  .progress-wrap.active-progress {
    opacity: 1;
  }
}
.progress-wrap {
  position: fixed;
  right: 1.5rem;
  bottom: 1.5rem;
  width: 2.3rem;
  height: 2.3rem;
  cursor: pointer;
  display: block;
  border-radius: 100%;
  box-shadow: inset 0 0 0 0.1rem rgba(128, 130, 134, 0.25);
  z-index: 1010;
  opacity: 0;
  visibility: hidden;
  transform: translateY(0.75rem);
  transition: all 200ms linear, margin-right 0ms;
}
@media (prefers-reduced-motion: reduce) {
  .progress-wrap {
    transition: none;
  }
}
.progress-wrap.active-progress {
  visibility: visible;
  transform: translateY(0);
}
.progress-wrap:after {
  position: absolute;
  font-family: "Unicons";
  content: "\e951";
  text-align: center;
  line-height: 2.3rem;
  font-size: 1.2rem;
  color: var(--bs-primary);
  left: 0;
  top: 0;
  height: 2.3rem;
  width: 2.3rem;
  cursor: pointer;
  display: block;
  z-index: 1;
  transition: all 200ms linear;
}
@media (prefers-reduced-motion: reduce) {
  .progress-wrap:after {
    transition: none;
  }
}
.progress-wrap svg path {
  fill: none;
}
.progress-wrap svg.progress-circle path {
  stroke: var(--bs-primary);
  stroke-width: 4;
  box-sizing: border-box;
  transition: all 200ms linear;
}
@media (prefers-reduced-motion: reduce) {
  .progress-wrap svg.progress-circle path {
    transition: none;
  }
}
@media (min-width: 576px) {
  .progress-wrap.active-progress {
    opacity: 1;
  }
}
.btn-close {
  padding: 0 0;
  background: none;
  border: 0;
  line-height: 1;
  color: #343f52;
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn-close {
    transition: none;
  }
}
.btn-close:before {
  background: rgba(0, 0, 0, 0.08);
  font-family: "Unicons";
  font-size: 1.05rem;
  content: "\ed3b";
  width: 1.8rem;
  height: 1.8rem;
  line-height: 1.8rem;
  border-radius: 100%;
  margin: 0;
  padding: 0;
  box-shadow: none;
  transition: background 0.2s ease-in-out;
  display: flex;
  justify-content: center;
  align-items: center;
}
.btn-close:hover {
  text-decoration: none;
}
.btn-close:hover:before {
  background: rgba(0, 0, 0, 0.11);
}
.btn-close:focus {
  outline: none;
}
.btn-close:disabled,
.btn-close.disabled {
  pointer-events: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  opacity: 0.25;
}
.btn-close-white {
  color: var(--bs-white);
}
.btn-close-white:before {
  background: rgba(var(--bs-white-rgb), 0.08);
}
.btn-close-white:hover {
  color: var(--bs-white);
}
.btn-close-white:hover:before {
  background: rgba(var(--bs-white-rgb), 0.11);
}
.btn-close[data-bs-dismiss=modal] {
  position: absolute;
  top: 0.7rem;
  right: 0.7rem;
}
.modal.fade.modal-bottom-center .modal-dialog {
  position: absolute;
  bottom: 0;
  right: 0;
  left: 0;
}
@media (min-width: 576px) {
  .modal.fade.modal-bottom-center .modal-dialog {
    margin: 1.75rem auto;
  }
}
@media (max-width: 767.98px) {
  .modal.fade.modal-bottom-center .modal-dialog {
    width: calc(100% - 1rem);
  }
}
.tooltip {
  font-weight: 500;
  pointer-events: none;
}
.has-tooltip:focus {
  outline: 0;
}
.white-tooltip {
  margin-right: 0.25rem !important;
}
.white-tooltip.bs-tooltip-start .tooltip-arrow::before,
.white-tooltip.bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
  border-left-color: var(--bs-white);
}
.white-tooltip .tooltip-inner {
  background: var(--bs-white);
  color: #343f52;
  font-size: 0.7rem;
  padding-top: 0.35rem;
  padding-bottom: 0.35rem;
  padding-left: 0.5rem;
  padding-right: 0.5rem;
}
.has-popover:focus {
  outline: 0;
}
.popover-header {
  padding: 1rem 1.25rem 0.25rem;
  border: 0;
  font-size: 1rem;
}
.popover-body {
  padding: 0 1.25rem 1rem;
}
.swiper-controls {
  position: absolute !important;
  pointer-events: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
}
.swiper-controls .swiper-navigation {
  pointer-events: all;
}
.swiper-controls .swiper-navigation .swiper-button {
  background: rgba(var(--bs-white-rgb), 0.7);
  color: #343f52;
  border: 0;
  box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
  width: 2.2rem;
  height: 2.2rem;
  line-height: inherit;
  border-radius: 100%;
  text-shadow: none;
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .swiper-controls .swiper-navigation .swiper-button {
    transition: none;
  }
}
.swiper-controls .swiper-navigation .swiper-button:hover {
  background: rgba(var(--bs-white-rgb), 0.9);
}
.swiper-controls .swiper-navigation .swiper-button:focus {
  outline: 0;
}
.swiper-controls .swiper-navigation .swiper-button:after {
  font-family: "Unicons";
  font-size: 1.2rem;
}
.swiper-controls .swiper-navigation .swiper-button.swiper-button-prev {
  left: 1rem;
}
.swiper-controls .swiper-navigation .swiper-button.swiper-button-prev:after {
  content: "\e949";
}
.swiper-controls .swiper-navigation .swiper-button.swiper-button-next {
  right: 1rem;
}
.swiper-controls .swiper-navigation .swiper-button.swiper-button-next:after {
  content: "\e94c";
}
.swiper-controls .swiper-navigation .swiper-button.swiper-button-disabled {
  background: rgba(var(--bs-white-rgb), 0.7);
}
.swiper-controls .swiper-pagination {
  bottom: -2.8rem;
  position: absolute !important;
  pointer-events: all;
}
.swiper-controls .swiper-pagination .swiper-pagination-bullet {
  -webkit-backface-visibility: visible;
  transition: all 0.2s ease-in-out;
  position: relative;
  display: inline-block;
  width: 0.5rem;
  height: 0.5rem;
  margin: 0 0.3rem;
  padding: 0;
  background: #aab0bc;
  opacity: 0.5;
  border-radius: 100%;
  border: 3px solid transparent;
  transform: scale(0.6);
}
@media (prefers-reduced-motion: reduce) {
  .swiper-controls .swiper-pagination .swiper-pagination-bullet {
    transition: none;
  }
}
.swiper-controls .swiper-pagination .swiper-pagination-bullet:hover {
  transform: scale(1);
}
.swiper-controls .swiper-pagination .swiper-pagination-bullet:focus {
  outline: 0;
}
.swiper-controls .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
  transform: scale(1);
  background: none;
  border-color: #aab0bc;
}
.swiper-container {
  -webkit-user-select: none;
  position: relative;
  z-index: 10 !important;
}
.swiper-container.clients .swiper {
  display: flex;
  align-items: center;
}
.swiper-container .swiper img {
  width: 100%;
  height: auto;
}
.swiper-container.nav-color .swiper-button,
.swiper-container.nav-color .swiper-slide figure .item-link {
  background: rgba(var(--bs-primary-rgb), 0.9) !important;
  color: var(--bs-white) !important;
}
.swiper-container.nav-color .swiper-button.swiper-button-disabled,
.swiper-container.nav-color .swiper-slide figure .item-link.swiper-button-disabled {
  background: rgba(var(--bs-primary-rgb), 0.7) !important;
}
.swiper-container.nav-color .swiper-button:hover,
.swiper-container.nav-color .swiper-slide figure .item-link:hover {
  background: var(--bs-primary) !important;
}
.swiper-container.nav-dark .swiper-button,
.swiper-container.nav-dark .swiper-slide figure .item-link {
  background: rgba(0, 0, 0, 0.3) !important;
  color: var(--bs-white) !important;
}
.swiper-container.nav-dark .swiper-button.swiper-button-disabled,
.swiper-container.nav-dark .swiper-slide figure .item-link.swiper-button-disabled {
  background: rgba(0, 0, 0, 0.1) !important;
}
.swiper-container.nav-dark .swiper-button:hover,
.swiper-container.nav-dark .swiper-slide figure .item-link:hover {
  background: rgba(0, 0, 0, 0.5) !important;
}
.swiper-container.nav-bottom .swiper-navigation {
  display: flex;
  flex-direction: row;
  justify-content: center;
  transform: none;
  position: absolute !important;
  bottom: -3.2rem;
  left: 0;
  width: 100%;
}
.swiper-container.nav-bottom .swiper-navigation .swiper-button {
  top: auto;
  left: auto;
  right: auto;
  bottom: 0;
  position: relative;
  margin: 0 0.2rem;
}
.swiper-container.nav-bottom .swiper-navigation+.swiper-pagination {
  bottom: -5.2rem;
}
.swiper-container.nav-bottom.nav-far .swiper-navigation {
  bottom: -4.1rem;
}
.swiper-container.nav-bottom.nav-start .swiper-navigation {
  text-align: left;
  justify-content: flex-start;
}
.swiper-container.nav-bottom.nav-start .swiper-navigation .swiper-button {
  margin: 0 0.4rem 0 0;
}
.swiper-container.dots-over .swiper-pagination {
  bottom: 0.6rem;
}
.swiper-container.dots-over .swiper-pagination .swiper-pagination-bullet {
  background: var(--bs-white);
  opacity: 1;
  box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
}
.swiper-container.dots-over .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background: none;
  border-color: var(--bs-white);
}
.swiper-container.dots-start .swiper-pagination {
  text-align: left;
  justify-content: flex-start;
}
.swiper-container.dots-light .swiper-pagination .swiper-pagination-bullet {
  background: var(--bs-white);
  opacity: 1;
}
.swiper-container.dots-light .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background: none;
  border-color: var(--bs-white);
}
.swiper-container.dots-dark .swiper-pagination .swiper-pagination-bullet {
  background: rgba(0, 0, 0, 0.3);
  opacity: 1;
}
.swiper-container.dots-dark .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
  background: none;
  border-color: rgba(0, 0, 0, 0.3);
}
.swiper-container.dots-light.dots-light-75 .swiper-pagination .swiper-pagination-bullet {
  opacity: 0.75;
}
.swiper-container.dots-closer .swiper-pagination {
  bottom: -2rem;
}
.swiper-slide.bg-overlay:before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 100%;
  background: rgba(30, 34, 40, 0.5);
}
.swiper-slide.rounded.bg-overlay:before {
  border-radius: 0.4rem;
}
.swiper-slide.bg-overlay-300:before {
  background: rgba(30, 34, 40, 0.3);
}
.swiper-slide.bg-overlay-400:before {
  background: rgba(30, 34, 40, 0.4);
}
.swiper-slide.bg-overlay [class*=container]>*,
.swiper-slide.bg-overlay .caption-wrapper>* {
  position: relative;
  z-index: 3;
}
.swiper-slide .caption-wrapper {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
}
.swiper-slide .caption-wrapper .caption {
  display: flex;
}
@media (max-width: 767px) {
  .caption-wrapper {
    display: none !important;
  }
}
.swiper-hero,
.swiper-hero .swiper-slide {
  height: 750px !important;
}
.swiper-hero .swiper-slide {
  background-size: cover;
  background-position: center center;
}
@media (max-width: 767px) {
  .swiper-hero,
  .swiper-hero .swiper-slide {
    height: 500px !important;
  }
  .swiper-hero .swiper-navigation {
    display: none;
  }
}
.swiper-fullscreen {
  height: 100vh;
}
.swiper-fullscreen .swiper:not(.swiper-thumbs) .swiper-slide {
  height: 100vh;
  background-size: cover;
  background-position: center center;
}
.swiper-fullscreen .swiper-thumbs {
  position: absolute;
  bottom: 1rem;
  left: 50%;
  transform: translateX(-50%);
  z-index: 9999;
}
.swiper-fullscreen .swiper-thumbs .swiper-slide {
  cursor: pointer;
  width: 2.5rem !important;
  height: 2.5rem !important;
}
.swiper-fullscreen .swiper-thumbs .swiper-slide img {
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 100%;
}
.swiper-fullscreen .swiper-thumbs .swiper-slide:after {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: "";
  display: block;
  z-index: 2;
  transition: all 150ms ease-in-out;
  box-sizing: border-box;
  border: 2px solid transparent;
  border-radius: 100%;
}
.swiper-fullscreen .swiper-thumbs .swiper-slide.swiper-slide-thumb-active:after {
  border-color: rgba(var(--bs-white-rgb), 0.6);
}
@media (max-width: 1199.98px) {
  .swiper-fullscreen,
  .swiper-fullscreen .swiper:not(.swiper-thumbs) .swiper-slide {
    height: 750px !important;
  }
}
@media (max-width: 767px) {
  .swiper-fullscreen,
  .swiper-fullscreen .swiper:not(.swiper-thumbs) .swiper-slide {
    height: 500px !important;
  }
}
@media (min-width: 1024px) {
  .swiper-auto .swiper-slide {
    width: 850px;
  }
  .swiper-auto.swiper-auto-xs .swiper-slide {
    width: 600px;
  }
}
@media (min-width: 768px) and (max-width: 1023.98px) {
  .swiper-auto .swiper-slide {
    width: 600px;
  }
  .swiper-auto.swiper-auto-xs .swiper-slide {
    width: 400px;
  }
}
@media (max-width: 767px) {
  .swiper-auto.swiper-auto-xs .swiper-slide {
    width: 300px;
  }
}
.swiper-container .swiper-slide [class*=animate__] {
  animation-name: none;
  visibility: hidden;
}
.swiper-container .swiper-slide.swiper-slide-active [class*=animate__] {
  visibility: visible;
}
.swiper-container .swiper-slide.swiper-slide-active [class*=animate__].animate__fadeInUp {
  animation-name: fadeInUp;
}
.swiper-container .swiper-slide.swiper-slide-active [class*=animate__].animate__fadeInDown {
  animation-name: fadeInDown;
}
.swiper-container .swiper-slide.swiper-slide-active [class*=animate__].animate__fadeInTopRight {
  animation-name: fadeInTopRight;
}
.swiper-container .swiper-slide.swiper-slide-active [class*=animate__].animate__slideInUp {
  animation-name: slideInUp;
}
.swiper-container .swiper-slide.swiper-slide-active [class*=animate__].animate__slideInDown {
  animation-name: slideInDown;
}
.swiper-container .swiper-slide.swiper-slide-active [class*=animate__].animate__slideInLeft {
  animation-name: slideInLeft;
}
.swiper-container .swiper-slide.swiper-slide-active [class*=animate__].animate__slideInRight {
  animation-name: slideInRight;
}
.swiper-container .swiper-slide.swiper-slide-active [class*=animate__].animate__zoomIn {
  animation-name: zoomIn;
}
.item-inner {
  padding: 1rem 0.75rem;
}
.swiper-thumbs-container:not(.swiper-fullscreen) .swiper-main {
  position: relative;
}
.swiper-thumbs-container:not(.swiper-fullscreen) .swiper:not(.swiper-thumbs) {
  margin-bottom: 0.5rem;
}
.swiper-thumbs-container:not(.swiper-fullscreen):not(.swiper-fullscreen) .swiper-thumbs .swiper-slide {
  cursor: pointer;
  opacity: 0.7;
}
.swiper-thumbs-container:not(.swiper-fullscreen):not(.swiper-fullscreen) .swiper-thumbs .swiper-slide.swiper-slide-thumb-active {
  opacity: 1;
}
.swiper-static {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
  z-index: 1000;
}
@media (min-width: 1400px) {
  .container-custom {
    max-width: 80%;
  }
}
@media (min-width: 1200px) {
  .container-custom {
    max-width: 90%;
  }
}
.swiper-wrapper.ticker {
  transition-timing-function: linear !important;
}
#offcanvas-cart {
  width: 20rem;
}
#offcanvas-search {
  bottom: auto;
  height: auto;
}
#offcanvas-search .search-form:before {
  font-size: 1rem;
  color: #343f52;
  left: 0;
  right: auto;
}
#offcanvas-search .search-form .form-control {
  font-size: 0.8rem;
  border: 0;
  background: none;
  box-shadow: none;
  padding-left: 1.75rem;
  padding-right: 0.75rem !important;
}
.offcanvas.bg-light {
  background: #fefefe;
  color: #60697b;
}
.offcanvas-header {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
  display: flex;
  flex-direction: row;
}
.offcanvas-header .btn-close {
  margin: 0;
  padding: 0;
  margin-right: -0.5rem;
}
.offcanvas-header a:focus {
  outline: 0;
}
.offcanvas-body {
  padding-top: 0;
  padding-bottom: 0;
}
.offcanvas-nav .offcanvas-header .btn-close {
  margin-right: -0.75rem;
}
.offcanvas-nav .offcanvas-body {
  flex-grow: 0;
}
.offcanvas:not(.offcanvas-nav) {
  overflow-y: auto;
}
.offcanvas:not(.offcanvas-nav) .offcanvas-body {
  overflow-y: unset;
}
.offcanvas-footer {
  display: flex;
  flex-shrink: 0;
  margin-top: auto;
  padding: 1.5rem 0;
}
img.svg-inject {
  visibility: hidden;
}
.icon-svg,
.icon-svg.icon-svg-lg {
  width: 3rem;
  height: 3rem;
}
.icon-svg.icon-svg-md {
  width: 2.6rem;
  height: 2.6rem;
}
.icon-svg.icon-svg-sm {
  width: 2.2rem;
  height: 2.2rem;
}
.icon-svg.icon-svg-xs {
  width: 1.8rem;
  height: 1.8rem;
}
.svg-bg {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  width: 3rem;
  height: 3rem;
}
.svg-bg .icon-svg {
  width: 1.3rem;
  height: 1.3rem;
}
.svg-bg.svg-bg-lg {
  width: 4rem;
  height: 4rem;
}
.svg-bg.svg-bg-lg .icon-svg {
  width: 1.5rem;
  height: 1.5rem;
}
.lineal-fill {
  fill: var(--bs-icon-fill-primary);
}
.lineal-stroke {
  fill: #36496d;
}
.text-primary .lineal-fill {
  fill: var(--bs-icon-fill-primary);
}
.text-blue .lineal-fill {
  fill: var(--bs-icon-fill-blue);
}
.text-sky .lineal-fill {
  fill: var(--bs-icon-fill-sky);
}
.text-purple .lineal-fill {
  fill: var(--bs-icon-fill-purple);
}
.text-grape .lineal-fill {
  fill: var(--bs-icon-fill-grape);
}
.text-violet .lineal-fill {
  fill: var(--bs-icon-fill-violet);
}
.text-pink .lineal-fill {
  fill: var(--bs-icon-fill-pink);
}
.text-fuchsia .lineal-fill {
  fill: var(--bs-icon-fill-fuchsia);
}
.text-red .lineal-fill {
  fill: var(--bs-icon-fill-red);
}
.text-orange .lineal-fill {
  fill: var(--bs-icon-fill-orange);
}
.text-yellow .lineal-fill {
  fill: var(--bs-icon-fill-yellow);
}
.text-green .lineal-fill {
  fill: var(--bs-icon-fill-green);
}
.text-leaf .lineal-fill {
  fill: var(--bs-icon-fill-leaf);
}
.text-aqua .lineal-fill {
  fill: var(--bs-icon-fill-aqua);
}
.text-navy .lineal-fill {
  fill: var(--bs-icon-fill-navy);
}
.text-ash .lineal-fill {
  fill: var(--bs-icon-fill-ash);
}
.solid .fill-primary,
.solid .fill-secondary {
  fill: var(--bs-primary);
}
.solid.text-blue .fill-primary,
.solid.text-blue .fill-secondary {
  fill: var(--bs-blue);
}
.solid.text-sky .fill-primary,
.solid.text-sky .fill-secondary {
  fill: var(--bs-sky);
}
.solid.text-purple .fill-primary,
.solid.text-purple .fill-secondary {
  fill: var(--bs-purple);
}
.solid.text-grape .fill-primary,
.solid.text-grape .fill-secondary {
  fill: var(--bs-grape);
}
.solid.text-violet .fill-primary,
.solid.text-violet .fill-secondary {
  fill: var(--bs-violet);
}
.solid.text-pink .fill-primary,
.solid.text-pink .fill-secondary {
  fill: var(--bs-pink);
}
.solid.text-fuchsia .fill-primary,
.solid.text-fuchsia .fill-secondary {
  fill: var(--bs-fuchsia);
}
.solid.text-red .fill-primary,
.solid.text-red .fill-secondary {
  fill: var(--bs-red);
}
.solid.text-orange .fill-primary,
.solid.text-orange .fill-secondary {
  fill: var(--bs-orange);
}
.solid.text-yellow .fill-primary,
.solid.text-yellow .fill-secondary {
  fill: var(--bs-yellow);
}
.solid.text-green .fill-primary,
.solid.text-green .fill-secondary {
  fill: var(--bs-green);
}
.solid.text-leaf .fill-primary,
.solid.text-leaf .fill-secondary {
  fill: var(--bs-leaf);
}
.solid.text-aqua .fill-primary,
.solid.text-aqua .fill-secondary {
  fill: var(--bs-aqua);
}
.solid.text-navy .fill-primary,
.solid.text-navy .fill-secondary {
  fill: var(--bs-navy);
}
.solid.text-ash .fill-primary,
.solid.text-ash .fill-secondary {
  fill: var(--bs-ash);
}
.solid.text-white .fill-primary,
.solid.text-white .fill-secondary {
  fill: var(--bs-white);
}
.solid.text-light .fill-primary,
.solid.text-light .fill-secondary {
  fill: var(--bs-light);
}
.solid.text-gray .fill-primary,
.solid.text-gray .fill-secondary {
  fill: var(--bs-gray);
}
.solid.text-dark .fill-primary,
.solid.text-dark .fill-secondary {
  fill: var(--bs-dark);
}
.solid.text-primary .fill-primary,
.solid.text-primary .fill-secondary {
  fill: var(--bs-primary);
}
.solid-mono .fill-primary {
  fill: var(--bs-primary);
}
.solid-mono .fill-secondary {
  fill: var(--bs-icon-solid-fill-primary);
}
.solid-mono.text-primary .fill-primary {
  fill: var(--bs-primary);
}
.solid-mono.text-primary .fill-secondary {
  fill: var(--bs-icon-solid-fill-primary);
}
.solid-mono.text-blue .fill-primary {
  fill: var(--bs-blue);
}
.solid-mono.text-blue .fill-secondary {
  fill: var(--bs-icon-solid-fill-blue);
}
.solid-mono.text-sky .fill-primary {
  fill: var(--bs-sky);
}
.solid-mono.text-sky .fill-secondary {
  fill: var(--bs-icon-solid-fill-sky);
}
.solid-mono.text-purple .fill-primary {
  fill: var(--bs-purple);
}
.solid-mono.text-purple .fill-secondary {
  fill: var(--bs-icon-solid-fill-purple);
}
.solid-mono.text-grape .fill-primary {
  fill: var(--bs-grape);
}
.solid-mono.text-grape .fill-secondary {
  fill: var(--bs-icon-solid-fill-grape);
}
.solid-mono.text-violet .fill-primary {
  fill: var(--bs-violet);
}
.solid-mono.text-violet .fill-secondary {
  fill: var(--bs-icon-solid-fill-violet);
}
.solid-mono.text-pink .fill-primary {
  fill: var(--bs-pink);
}
.solid-mono.text-pink .fill-secondary {
  fill: var(--bs-icon-solid-fill-pink);
}
.solid-mono.text-fuchsia .fill-primary {
  fill: var(--bs-fuchsia);
}
.solid-mono.text-fuchsia .fill-secondary {
  fill: var(--bs-icon-solid-fill-fuchsia);
}
.solid-mono.text-red .fill-primary {
  fill: var(--bs-red);
}
.solid-mono.text-red .fill-secondary {
  fill: var(--bs-icon-solid-fill-red);
}
.solid-mono.text-orange .fill-primary {
  fill: var(--bs-orange);
}
.solid-mono.text-orange .fill-secondary {
  fill: var(--bs-icon-solid-fill-orange);
}
.solid-mono.text-yellow .fill-primary {
  fill: var(--bs-yellow);
}
.solid-mono.text-yellow .fill-secondary {
  fill: var(--bs-icon-solid-fill-yellow);
}
.solid-mono.text-green .fill-primary {
  fill: var(--bs-green);
}
.solid-mono.text-green .fill-secondary {
  fill: var(--bs-icon-solid-fill-green);
}
.solid-mono.text-leaf .fill-primary {
  fill: var(--bs-leaf);
}
.solid-mono.text-leaf .fill-secondary {
  fill: var(--bs-icon-solid-fill-leaf);
}
.solid-mono.text-aqua .fill-primary {
  fill: var(--bs-aqua);
}
.solid-mono.text-aqua .fill-secondary {
  fill: var(--bs-icon-solid-fill-aqua);
}
.solid-mono.text-navy .fill-primary {
  fill: var(--bs-navy);
}
.solid-mono.text-navy .fill-secondary {
  fill: var(--bs-icon-solid-fill-navy);
}
.solid-mono.text-ash .fill-primary {
  fill: var(--bs-ash);
}
.solid-mono.text-ash .fill-secondary {
  fill: var(--bs-icon-solid-fill-ash);
}
.solid-duo.text-purple-aqua .fill-primary {
  fill: #747ed1;
}
.solid-duo.text-purple-aqua .fill-secondary {
  fill: #8ce0f1;
}
.solid-duo.text-navy-green .fill-primary {
  fill: #414b64;
}
.solid-duo.text-navy-green .fill-secondary {
  fill: #45c4a0;
}
.solid-duo.text-grape-fuchsia .fill-primary {
  fill: #605dba;
}
.solid-duo.text-grape-fuchsia .fill-secondary {
  fill: #f857a6;
}
.solid-duo.text-grape-green .fill-primary {
  fill: #605dba;
}
.solid-duo.text-grape-green .fill-secondary {
  fill: #94dd8e;
}
.solid-duo.text-navy-sky .fill-primary {
  fill: #414b64;
}
.solid-duo.text-navy-sky .fill-secondary {
  fill: #5eb9f0;
}
.solid-duo.text-blue-pink .fill-primary {
  fill: #3f78e0;
}
.solid-duo.text-blue-pink .fill-secondary {
  fill: #fc7eb9;
}
.solid-duo.text-green-fuchsia .fill-primary {
  fill: #8ed882;
}
.solid-duo.text-green-fuchsia .fill-secondary {
  fill: #e668b3;
}
.solid-duo.text-grape-yellow .fill-primary {
  fill: #605dba;
}
.solid-duo.text-grape-yellow .fill-secondary {
  fill: #fab758;
}
.solid-duo.text-sky-pink .fill-primary {
  fill: #5eb9f0;
}
.solid-duo.text-sky-pink .fill-secondary {
  fill: #ff98ab;
}
.solid-duo.text-purple-pink .fill-primary {
  fill: #747ed1;
}
.solid-duo.text-purple-pink .fill-secondary {
  fill: #fdb9d3;
}
.solid-duo.text-green-red .fill-primary {
  fill: #45c4a0;
}
.solid-duo.text-green-red .fill-secondary {
  fill: #ff7c94;
}
.solid-duo.text-red-yellow .fill-primary {
  fill: #e54281;
}
.solid-duo.text-red-yellow .fill-secondary {
  fill: #fab758;
}
.ratings {
  display: inline-block;
  position: relative;
  width: 5rem;
  height: 0.8rem;
  font-size: 0.9rem;
  line-height: 1;
}
.ratings:after,
.ratings:before {
  display: inline-block;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
  font-style: normal;
  font-weight: normal;
  position: absolute;
  top: 0;
  left: 0;
  color: #fcc032;
  content: "\2605\2605\2605\2605\2605";
  overflow: hidden;
}
.ratings:before {
  color: rgba(38, 43, 50, 0.1);
}
.ratings.one:after {
  content: "\2605";
}
.ratings.two:after {
  content: "\2605\2605";
}
.ratings.three:after {
  content: "\2605\2605\2605";
}
.ratings.four:after {
  content: "\2605\2605\2605\2605";
}
.custom-control .ratings {
  height: 0.9rem;
}
.ratings-wrapper span {
  display: inline-block;
}
.ratings-wrapper span.ratings {
  vertical-align: -1px;
}
@font-face {
  font-family: "Unicons";
  src: url({{asset('../fonts/unicons/Unicons.woff2')}}) format("woff2"), url("../fonts/unicons/Unicons.woff") format("woff");
  font-weight: normal;
  font-style: normal;
  font-display: block;
}
@font-face {
  font-family: "Custom";
  src: url("../fonts/custom/Custom.woff2") format("woff2"), url("../fonts/custom/Custom.woff") format("woff");
  font-weight: normal;
  font-style: normal;
  font-display: block;
}
[class^=uil-],
[class*=" uil-"],
[class^=icn-],
[class*=" icn-"] {
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  word-spacing: normal;
}
[class^=uil-],
[class*=" uil-"] {
  font-family: "Unicons" !important;
}
[class^=icn-],
[class*=" icn-"] {
  font-family: "Custom" !important;
}
.icn-caret-right:before {
  content: "\e900";
}
.icn-comment-line:before {
  content: "\e904";
}
.icn-external:before {
  content: "\e906";
}
.icn-flower:before {
  content: "\e907";
}
.icn-terminal:before {
  content: "\e905";
}
.uil-plus-0:before {
  content: "\e900";
}
.uil-plus-3:before {
  content: "\e901";
}
.uil-plus-6:before {
  content: "\e902";
}
.uil-plus-10:before {
  content: "\e903";
}
.uil-plus-12:before {
  content: "\e904";
}
.uil-plus-13:before {
  content: "\e905";
}
.uil-plus-16:before {
  content: "\e906";
}
.uil-plus-17:before {
  content: "\e907";
}
.uil-plus-18:before {
  content: "\e908";
}
.uil-plus-21:before {
  content: "\e909";
}
.uil-500px:before {
  content: "\e90a";
}
.uil-abacus:before {
  content: "\e90b";
}
.uil-accessible-icon-alt:before {
  content: "\e90c";
}
.uil-adjust-alt:before {
  content: "\e90d";
}
.uil-adjust-circle:before {
  content: "\e90e";
}
.uil-adjust-half:before {
  content: "\e90f";
}
.uil-adjust:before {
  content: "\e910";
}
.uil-adobe-alt:before {
  content: "\e911";
}
.uil-airplay:before {
  content: "\e912";
}
.uil-adobe:before {
  content: "\e913";
}
.uil-align-alt:before {
  content: "\e914";
}
.uil-align-center-alt:before {
  content: "\e915";
}
.uil-align-center-v:before {
  content: "\e916";
}
.uil-align-center:before {
  content: "\e917";
}
.uil-align-center-h:before {
  content: "\e918";
}
.uil-align-justify:before {
  content: "\e919";
}
.uil-align-left:before {
  content: "\e91a";
}
.uil-align-left-justify:before {
  content: "\e91b";
}
.uil-align-center-justify:before {
  content: "\e91c";
}
.uil-align-letter-right:before {
  content: "\e91d";
}
.uil-align-right-justify:before {
  content: "\e91e";
}
.uil-align-right:before {
  content: "\e91f";
}
.uil-align:before {
  content: "\e920";
}
.uil-amazon:before {
  content: "\e921";
}
.uil-ambulance:before {
  content: "\e922";
}
.uil-analysis:before {
  content: "\e923";
}
.uil-analytics:before {
  content: "\e924";
}
.uil-anchor:before {
  content: "\e925";
}
.uil-android-alt:before {
  content: "\e926";
}
.uil-android-phone-slash:before {
  content: "\e927";
}
.uil-android:before {
  content: "\e928";
}
.uil-angle-double-down:before {
  content: "\e929";
}
.uil-angle-double-left:before {
  content: "\e92a";
}
.uil-angle-double-right:before {
  content: "\e92b";
}
.uil-angle-double-up:before {
  content: "\e92c";
}
.uil-angle-down:before {
  content: "\e92d";
}
.uil-angle-left-b:before {
  content: "\e92e";
}
.uil-angle-left:before {
  content: "\e92f";
}
.uil-angle-right-b:before {
  content: "\e930";
}
.uil-angle-right:before {
  content: "\e931";
}
.uil-angle-up:before {
  content: "\e932";
}
.uil-angry:before {
  content: "\e933";
}
.uil-ankh:before {
  content: "\e934";
}
.uil-annoyed-alt:before {
  content: "\e935";
}
.uil-annoyed:before {
  content: "\e936";
}
.uil-apple-alt:before {
  content: "\e937";
}
.uil-apple:before {
  content: "\e938";
}
.uil-apps:before {
  content: "\e939";
}
.uil-archive-alt:before {
  content: "\e93a";
}
.uil-archive:before {
  content: "\e93b";
}
.uil-archway:before {
  content: "\e93c";
}
.uil-arrow-break:before {
  content: "\e93d";
}
.uil-arrow-circle-down:before {
  content: "\e93e";
}
.uil-arrow-circle-left:before {
  content: "\e93f";
}
.uil-arrow-circle-right:before {
  content: "\e940";
}
.uil-arrow-circle-up:before {
  content: "\e941";
}
.uil-arrow-compress-h:before {
  content: "\e942";
}
.uil-arrow-down-left:before {
  content: "\e943";
}
.uil-arrow-down-right:before {
  content: "\e944";
}
.uil-arrow-down:before {
  content: "\e945";
}
.uil-arrow-from-right:before {
  content: "\e946";
}
.uil-arrow-from-top:before {
  content: "\e947";
}
.uil-arrow-growth:before {
  content: "\e948";
}
.uil-arrow-left:before {
  content: "\e949";
}
.uil-arrow-random:before {
  content: "\e94a";
}
.uil-arrow-resize-diagonal:before {
  content: "\e94b";
}
.uil-arrow-right:before {
  content: "\e94c";
}
.uil-arrow-to-bottom:before {
  content: "\e94d";
}
.uil-arrow-to-right:before {
  content: "\e94e";
}
.uil-arrow-up-left:before {
  content: "\e94f";
}
.uil-arrow-up-right:before {
  content: "\e950";
}
.uil-arrow-up:before {
  content: "\e951";
}
.uil-arrow:before {
  content: "\e952";
}
.uil-arrows-h-alt:before {
  content: "\e953";
}
.uil-arrows-h:before {
  content: "\e954";
}
.uil-arrows-left-down:before {
  content: "\e955";
}
.uil-arrows-maximize:before {
  content: "\e956";
}
.uil-arrows-merge:before {
  content: "\e957";
}
.uil-arrows-resize-h:before {
  content: "\e958";
}
.uil-arrows-resize-v:before {
  content: "\e959";
}
.uil-arrows-resize:before {
  content: "\e95a";
}
.uil-arrows-shrink-h:before {
  content: "\e95b";
}
.uil-arrows-right-down:before {
  content: "\e95c";
}
.uil-arrows-shrink-v:before {
  content: "\e95d";
}
.uil-arrows-up-right:before {
  content: "\e95e";
}
.uil-arrows-v-alt:before {
  content: "\e95f";
}
.uil-arrows-v:before {
  content: "\e960";
}
.uil-assistive-listening-systems:before {
  content: "\e961";
}
.uil-asterisk:before {
  content: "\e962";
}
.uil-at:before {
  content: "\e963";
}
.uil-atom:before {
  content: "\e964";
}
.uil-auto-flash:before {
  content: "\e965";
}
.uil-award-alt:before {
  content: "\e966";
}
.uil-award:before {
  content: "\e967";
}
.uil-baby-carriage:before {
  content: "\e968";
}
.uil-backpack:before {
  content: "\e969";
}
.uil-backspace:before {
  content: "\e96a";
}
.uil-backward:before {
  content: "\e96b";
}
.uil-bag-alt:before {
  content: "\e96c";
}
.uil-bag-slash:before {
  content: "\e96d";
}
.uil-bag:before {
  content: "\e96e";
}
.uil-balance-scale:before {
  content: "\e96f";
}
.uil-ban:before {
  content: "\e970";
}
.uil-band-aid:before {
  content: "\e971";
}
.uil-bars:before {
  content: "\e972";
}
.uil-baseball-ball:before {
  content: "\e973";
}
.uil-basketball-hoop:before {
  content: "\e974";
}
.uil-basketball:before {
  content: "\e975";
}
.uil-bath:before {
  content: "\e976";
}
.uil-battery-bolt:before {
  content: "\e977";
}
.uil-battery-empty:before {
  content: "\e978";
}
.uil-bed-double:before {
  content: "\e979";
}
.uil-bed:before {
  content: "\e97a";
}
.uil-behance-alt:before {
  content: "\e97b";
}
.uil-behance:before {
  content: "\e97c";
}
.uil-bell-school:before {
  content: "\e97d";
}
.uil-bell-slash:before {
  content: "\e97e";
}
.uil-bell:before {
  content: "\e97f";
}
.uil-bill:before {
  content: "\e980";
}
.uil-bing:before {
  content: "\e981";
}
.uil-bitcoin-alt:before {
  content: "\e982";
}
.uil-bitcoin-circle:before {
  content: "\e983";
}
.uil-bitcoin-sign:before {
  content: "\e984";
}
.uil-bitcoin:before {
  content: "\e985";
}
.uil-black-berry:before {
  content: "\e986";
}
.uil-blogger-alt:before {
  content: "\e987";
}
.uil-blogger:before {
  content: "\e988";
}
.uil-bluetooth-b:before {
  content: "\e989";
}
.uil-bold:before {
  content: "\e98a";
}
.uil-bolt-alt:before {
  content: "\e98b";
}
.uil-bolt-slash:before {
  content: "\e98c";
}
.uil-bolt:before {
  content: "\e98d";
}
.uil-book-alt:before {
  content: "\e98e";
}
.uil-book-medical:before {
  content: "\e98f";
}
.uil-book-open:before {
  content: "\e990";
}
.uil-book-reader:before {
  content: "\e991";
}
.uil-book:before {
  content: "\e992";
}
.uil-bookmark-full:before {
  content: "\e993";
}
.uil-bookmark:before {
  content: "\e994";
}
.uil-books:before {
  content: "\e995";
}
.uil-boombox:before {
  content: "\e996";
}
.uil-border-alt:before {
  content: "\e997";
}
.uil-border-bottom:before {
  content: "\e998";
}
.uil-border-clear:before {
  content: "\e999";
}
.uil-border-horizontal:before {
  content: "\e99a";
}
.uil-border-inner:before {
  content: "\e99b";
}
.uil-border-left:before {
  content: "\e99c";
}
.uil-border-out:before {
  content: "\e99d";
}
.uil-border-right:before {
  content: "\e99e";
}
.uil-border-top:before {
  content: "\e99f";
}
.uil-border-vertical:before {
  content: "\e9a0";
}
.uil-bowling-ball:before {
  content: "\e9a1";
}
.uil-box:before {
  content: "\e9a2";
}
.uil-brackets-curly:before {
  content: "\e9a3";
}
.uil-brain:before {
  content: "\e9a4";
}
.uil-briefcase-alt:before {
  content: "\e9a5";
}
.uil-briefcase:before {
  content: "\e9a6";
}
.uil-bright:before {
  content: "\e9a7";
}
.uil-brightness-empty:before {
  content: "\e9a8";
}
.uil-brightness-half:before {
  content: "\e9a9";
}
.uil-brightness-low:before {
  content: "\e9aa";
}
.uil-brightness-minus:before {
  content: "\e9ab";
}
.uil-brightness-plus:before {
  content: "\e9ac";
}
.uil-brightness:before {
  content: "\e9ad";
}
.uil-bring-bottom:before {
  content: "\e9ae";
}
.uil-bring-front:before {
  content: "\e9af";
}
.uil-browser:before {
  content: "\e9b0";
}
.uil-brush-alt:before {
  content: "\e9b1";
}
.uil-bug:before {
  content: "\e9b2";
}
.uil-building:before {
  content: "\e9b3";
}
.uil-bus-alt:before {
  content: "\e9b4";
}
.uil-bus-school:before {
  content: "\e9b5";
}
.uil-bus:before {
  content: "\e9b6";
}
.uil-bullseye:before {
  content: "\e9b7";
}
.uil-calculator-alt:before {
  content: "\e9b8";
}
.uil-calendar-slash:before {
  content: "\e9b9";
}
.uil-calendar-alt:before {
  content: "\e9ba";
}
.uil-calender:before {
  content: "\e9bb";
}
.uil-calculator:before {
  content: "\e9bc";
}
.uil-calling:before {
  content: "\e9bd";
}
.uil-camera-plus:before {
  content: "\e9be";
}
.uil-camera-change:before {
  content: "\e9bf";
}
.uil-capsule:before {
  content: "\e9c0";
}
.uil-capture:before {
  content: "\e9c1";
}
.uil-cancel:before {
  content: "\e9c2";
}
.uil-car-sideview:before {
  content: "\e9c3";
}
.uil-car-slash:before {
  content: "\e9c4";
}
.uil-camera:before {
  content: "\e9c5";
}
.uil-camera-slash:before {
  content: "\e9c6";
}
.uil-car-wash:before {
  content: "\e9c7";
}
.uil-car:before {
  content: "\e9c8";
}
.uil-card-atm:before {
  content: "\e9c9";
}
.uil-caret-right:before {
  content: "\e9ca";
}
.uil-cell:before {
  content: "\e9cb";
}
.uil-celsius:before {
  content: "\e9cc";
}
.uil-channel-add:before {
  content: "\e9cd";
}
.uil-channel:before {
  content: "\e9ce";
}
.uil-chart-down:before {
  content: "\e9cf";
}
.uil-chart-bar:before {
  content: "\e9d0";
}
.uil-chart-growth-alt:before {
  content: "\e9d1";
}
.uil-chart-bar-alt:before {
  content: "\e9d2";
}
.uil-chart-line:before {
  content: "\e9d3";
}
.uil-chart-growth:before {
  content: "\e9d4";
}
.uil-chart-pie-alt:before {
  content: "\e9d5";
}
.uil-chart:before {
  content: "\e9d6";
}
.uil-chart-pie:before {
  content: "\e9d7";
}
.uil-chat-bubble-user:before {
  content: "\e9d8";
}
.uil-chat:before {
  content: "\e9d9";
}
.uil-chat-info:before {
  content: "\e9da";
}
.uil-check-circle:before {
  content: "\e9db";
}
.uil-check-square:before {
  content: "\e9dc";
}
.uil-check:before {
  content: "\e9dd";
}
.uil-circle-layer:before {
  content: "\e9de";
}
.uil-circle:before {
  content: "\e9df";
}
.uil-clapper-board:before {
  content: "\e9e0";
}
.uil-circuit:before {
  content: "\e9e1";
}
.uil-clinic-medical:before {
  content: "\e9e2";
}
.uil-clipboard-blank:before {
  content: "\e9e3";
}
.uil-clipboard-alt:before {
  content: "\e9e4";
}
.uil-clock-eight:before {
  content: "\e9e5";
}
.uil-clipboard-notes:before {
  content: "\e9e6";
}
.uil-clock-five:before {
  content: "\e9e7";
}
.uil-clipboard:before {
  content: "\e9e8";
}
.uil-clock-nine:before {
  content: "\e9e9";
}
.uil-clock-seven:before {
  content: "\e9ea";
}
.uil-clock-ten:before {
  content: "\e9eb";
}
.uil-clock-three:before {
  content: "\e9ec";
}
.uil-clock-two:before {
  content: "\e9ed";
}
.uil-clock:before {
  content: "\e9ee";
}
.uil-closed-captioning-slash:before {
  content: "\e9ef";
}
.uil-closed-captioning:before {
  content: "\e9f0";
}
.uil-cloud-block:before {
  content: "\e9f1";
}
.uil-cloud-bookmark:before {
  content: "\e9f2";
}
.uil-cloud-check:before {
  content: "\e9f3";
}
.uil-cloud-computing:before {
  content: "\e9f4";
}
.uil-cloud-data-connection:before {
  content: "\e9f5";
}
.uil-cloud-database-tree:before {
  content: "\e9f6";
}
.uil-cloud-download:before {
  content: "\e9f7";
}
.uil-cloud-drizzle:before {
  content: "\e9f8";
}
.uil-cloud-exclamation:before {
  content: "\e9f9";
}
.uil-cloud-hail:before {
  content: "\e9fa";
}
.uil-cloud-heart:before {
  content: "\e9fb";
}
.uil-cloud-info:before {
  content: "\e9fc";
}
.uil-cloud-lock:before {
  content: "\e9fd";
}
.uil-cloud-meatball:before {
  content: "\e9fe";
}
.uil-cloud-moon-hail:before {
  content: "\e9ff";
}
.uil-cloud-moon-meatball:before {
  content: "\ea00";
}
.uil-cloud-moon-rain:before {
  content: "\ea01";
}
.uil-cloud-moon-showers:before {
  content: "\ea02";
}
.uil-cloud-moon:before {
  content: "\ea03";
}
.uil-cloud-question:before {
  content: "\ea04";
}
.uil-cloud-rain-sun:before {
  content: "\ea05";
}
.uil-cloud-rain:before {
  content: "\ea06";
}
.uil-cloud-redo:before {
  content: "\ea07";
}
.uil-cloud-share:before {
  content: "\ea08";
}
.uil-cloud-shield:before {
  content: "\ea09";
}
.uil-cloud-showers-alt:before {
  content: "\ea0a";
}
.uil-cloud-showers-heavy:before {
  content: "\ea0b";
}
.uil-cloud-showers:before {
  content: "\ea0c";
}
.uil-cloud-slash:before {
  content: "\ea0d";
}
.uil-cloud-sun-hail:before {
  content: "\ea0e";
}
.uil-cloud-sun-meatball:before {
  content: "\ea0f";
}
.uil-cloud-sun-rain-alt:before {
  content: "\ea10";
}
.uil-cloud-sun-rain:before {
  content: "\ea11";
}
.uil-cloud-sun-tear:before {
  content: "\ea12";
}
.uil-cloud-sun:before {
  content: "\ea13";
}
.uil-cloud-times:before {
  content: "\ea14";
}
.uil-cloud-unlock:before {
  content: "\ea15";
}
.uil-cloud-upload:before {
  content: "\ea16";
}
.uil-cloud-wifi:before {
  content: "\ea17";
}
.uil-cloud-wind:before {
  content: "\ea18";
}
.uil-cloud:before {
  content: "\ea19";
}
.uil-clouds:before {
  content: "\ea1a";
}
.uil-club:before {
  content: "\ea1b";
}
.uil-code-branch:before {
  content: "\ea1c";
}
.uil-coffee:before {
  content: "\ea1d";
}
.uil-cog:before {
  content: "\ea1e";
}
.uil-coins:before {
  content: "\ea1f";
}
.uil-columns:before {
  content: "\ea20";
}
.uil-comment-add:before {
  content: "\ea21";
}
.uil-comment-alt-block:before {
  content: "\ea22";
}
.uil-comment-alt-chart-lines:before {
  content: "\ea23";
}
.uil-comment-alt-check:before {
  content: "\ea24";
}
.uil-comment-alt-dots:before {
  content: "\ea25";
}
.uil-comment-alt-download:before {
  content: "\ea26";
}
.uil-comment-alt-edit:before {
  content: "\ea27";
}
.uil-comment-alt-exclamation:before {
  content: "\ea28";
}
.uil-comment-alt-heart:before {
  content: "\ea29";
}
.uil-comment-alt-image:before {
  content: "\ea2a";
}
.uil-comment-alt-info:before {
  content: "\ea2b";
}
.uil-comment-alt-lines:before {
  content: "\ea2c";
}
.uil-comment-alt-lock:before {
  content: "\ea2d";
}
.uil-comment-alt-medical:before {
  content: "\ea2e";
}
.uil-comment-alt-message:before {
  content: "\ea2f";
}
.uil-comment-alt-notes:before {
  content: "\ea30";
}
.uil-comment-alt-plus:before {
  content: "\ea31";
}
.uil-comment-alt-question:before {
  content: "\ea32";
}
.uil-comment-alt-redo:before {
  content: "\ea33";
}
.uil-comment-alt-search:before {
  content: "\ea34";
}
.uil-comment-alt-share:before {
  content: "\ea35";
}
.uil-comment-alt-shield:before {
  content: "\ea36";
}
.uil-comment-alt-slash:before {
  content: "\ea37";
}
.uil-comment-alt-upload:before {
  content: "\ea38";
}
.uil-comment-alt-verify:before {
  content: "\ea39";
}
.uil-comment-alt:before {
  content: "\ea3a";
}
.uil-comment-block:before {
  content: "\ea3b";
}
.uil-comment-chart-line:before {
  content: "\ea3c";
}
.uil-comment-check:before {
  content: "\ea3d";
}
.uil-comment-dots:before {
  content: "\ea3e";
}
.uil-comment-download:before {
  content: "\ea3f";
}
.uil-comment-edit:before {
  content: "\ea40";
}
.uil-comment-exclamation:before {
  content: "\ea41";
}
.uil-comment-heart:before {
  content: "\ea42";
}
.uil-comment-image:before {
  content: "\ea43";
}
.uil-comment-info-alt:before {
  content: "\ea44";
}
.uil-comment-info:before {
  content: "\ea45";
}
.uil-comment-lines:before {
  content: "\ea46";
}
.uil-comment-lock:before {
  content: "\ea47";
}
.uil-comment-medical:before {
  content: "\ea48";
}
.uil-comment-message:before {
  content: "\ea49";
}
.uil-comment-notes:before {
  content: "\ea4a";
}
.uil-comment-plus:before {
  content: "\ea4b";
}
.uil-comment-question:before {
  content: "\ea4c";
}
.uil-comment-redo:before {
  content: "\ea4d";
}
.uil-comment-search:before {
  content: "\ea4e";
}
.uil-comment-share:before {
  content: "\ea4f";
}
.uil-comment-shield:before {
  content: "\ea50";
}
.uil-comment-slash:before {
  content: "\ea51";
}
.uil-comment-upload:before {
  content: "\ea52";
}
.uil-comment-verify:before {
  content: "\ea53";
}
.uil-comment:before {
  content: "\ea54";
}
.uil-comments-alt:before {
  content: "\ea55";
}
.uil-comments:before {
  content: "\ea56";
}
.uil-compact-disc:before {
  content: "\ea57";
}
.uil-comparison:before {
  content: "\ea58";
}
.uil-compass:before {
  content: "\ea59";
}
.uil-compress-alt-left:before {
  content: "\ea5a";
}
.uil-compress-alt:before {
  content: "\ea5b";
}
.uil-compress-arrows:before {
  content: "\ea5c";
}
.uil-compress-lines:before {
  content: "\ea5d";
}
.uil-compress-point:before {
  content: "\ea5e";
}
.uil-compress-v:before {
  content: "\ea5f";
}
.uil-compress:before {
  content: "\ea60";
}
.uil-confused:before {
  content: "\ea61";
}
.uil-constructor:before {
  content: "\ea62";
}
.uil-copy-alt:before {
  content: "\ea63";
}
.uil-copy-landscape:before {
  content: "\ea64";
}
.uil-copy:before {
  content: "\ea65";
}
.uil-copyright:before {
  content: "\ea66";
}
.uil-corner-down-left:before {
  content: "\ea67";
}
.uil-corner-down-right-alt:before {
  content: "\ea68";
}
.uil-corner-down-right:before {
  content: "\ea69";
}
.uil-corner-left-down:before {
  content: "\ea6a";
}
.uil-corner-right-down:before {
  content: "\ea6b";
}
.uil-corner-up-left-alt:before {
  content: "\ea6c";
}
.uil-corner-up-left:before {
  content: "\ea6d";
}
.uil-corner-up-right-alt:before {
  content: "\ea6e";
}
.uil-corner-up-right:before {
  content: "\ea6f";
}
.uil-coronavirus:before {
  content: "\ea70";
}
.uil-create-dashboard:before {
  content: "\ea71";
}
.uil-creative-commons-pd:before {
  content: "\ea72";
}
.uil-credit-card-search:before {
  content: "\ea73";
}
.uil-credit-card:before {
  content: "\ea74";
}
.uil-crockery:before {
  content: "\ea75";
}
.uil-crop-alt-rotate-left:before {
  content: "\ea76";
}
.uil-crop-alt-rotate-right:before {
  content: "\ea77";
}
.uil-crop-alt:before {
  content: "\ea78";
}
.uil-crosshair-alt:before {
  content: "\ea79";
}
.uil-crosshair:before {
  content: "\ea7a";
}
.uil-crosshairs:before {
  content: "\ea7b";
}
.uil-css3-simple:before {
  content: "\ea7c";
}
.uil-cube:before {
  content: "\ea7d";
}
.uil-dashboard:before {
  content: "\ea7e";
}
.uil-data-sharing:before {
  content: "\ea7f";
}
.uil-database-alt:before {
  content: "\ea80";
}
.uil-database:before {
  content: "\ea81";
}
.uil-desert:before {
  content: "\ea82";
}
.uil-desktop-alt-slash:before {
  content: "\ea83";
}
.uil-desktop-alt:before {
  content: "\ea84";
}
.uil-desktop-cloud-alt:before {
  content: "\ea85";
}
.uil-desktop-slash:before {
  content: "\ea86";
}
.uil-dialpad-alt:before {
  content: "\ea87";
}
.uil-desktop:before {
  content: "\ea88";
}
.uil-dialpad:before {
  content: "\ea89";
}
.uil-diamond:before {
  content: "\ea8a";
}
.uil-diary-alt:before {
  content: "\ea8b";
}
.uil-diary:before {
  content: "\ea8c";
}
.uil-dice-five:before {
  content: "\ea8d";
}
.uil-dice-four:before {
  content: "\ea8e";
}
.uil-dice-one:before {
  content: "\ea8f";
}
.uil-dice-six:before {
  content: "\ea90";
}
.uil-dice-three:before {
  content: "\ea91";
}
.uil-dice-two:before {
  content: "\ea92";
}
.uil-direction:before {
  content: "\ea93";
}
.uil-directions:before {
  content: "\ea94";
}
.uil-discord:before {
  content: "\ea95";
}
.uil-dizzy-meh:before {
  content: "\ea96";
}
.uil-dna:before {
  content: "\ea97";
}
.uil-docker:before {
  content: "\ea98";
}
.uil-document-info:before {
  content: "\ea99";
}
.uil-document-layout-center:before {
  content: "\ea9a";
}
.uil-document-layout-left:before {
  content: "\ea9b";
}
.uil-document-layout-right:before {
  content: "\ea9c";
}
.uil-dollar-alt:before {
  content: "\ea9d";
}
.uil-dollar-sign-alt:before {
  content: "\ea9e";
}
.uil-dollar-sign:before {
  content: "\ea9f";
}
.uil-download-alt:before {
  content: "\eaa0";
}
.uil-draggabledots:before {
  content: "\eaa1";
}
.uil-dribbble:before {
  content: "\eaa2";
}
.uil-drill:before {
  content: "\eaa3";
}
.uil-dropbox:before {
  content: "\eaa4";
}
.uil-dumbbell:before {
  content: "\eaa5";
}
.uil-ear:before {
  content: "\eaa6";
}
.uil-edit-alt:before {
  content: "\eaa7";
}
.uil-edit:before {
  content: "\eaa8";
}
.uil-elipsis-double-v-alt:before {
  content: "\eaa9";
}
.uil-ellipsis-h:before {
  content: "\eaaa";
}
.uil-ellipsis-v:before {
  content: "\eaab";
}
.uil-emoji:before {
  content: "\eaac";
}
.uil-english-to-chinese:before {
  content: "\eaad";
}
.uil-enter:before {
  content: "\eaae";
}
.uil-envelope-add:before {
  content: "\eaaf";
}
.uil-envelope-alt:before {
  content: "\eab0";
}
.uil-envelope-block:before {
  content: "\eab1";
}
.uil-envelope-bookmark:before {
  content: "\eab2";
}
.uil-envelope-check:before {
  content: "\eab3";
}
.uil-envelope-download-alt:before {
  content: "\eab4";
}
.uil-envelope-download:before {
  content: "\eab5";
}
.uil-envelope-edit:before {
  content: "\eab6";
}
.uil-envelope-exclamation:before {
  content: "\eab7";
}
.uil-envelope-info:before {
  content: "\eab8";
}
.uil-envelope-heart:before {
  content: "\eab9";
}
.uil-envelope-lock:before {
  content: "\eaba";
}
.uil-envelope-minus:before {
  content: "\eabb";
}
.uil-envelope-open:before {
  content: "\eabc";
}
.uil-envelope-question:before {
  content: "\eabd";
}
.uil-envelope-receive:before {
  content: "\eabe";
}
.uil-envelope-redo:before {
  content: "\eabf";
}
.uil-envelope-search:before {
  content: "\eac0";
}
.uil-envelope-send:before {
  content: "\eac1";
}
.uil-envelope-share:before {
  content: "\eac2";
}
.uil-envelope-shield:before {
  content: "\eac3";
}
.uil-envelope-star:before {
  content: "\eac4";
}
.uil-envelope-times:before {
  content: "\eac5";
}
.uil-envelope-upload-alt:before {
  content: "\eac6";
}
.uil-envelope-upload:before {
  content: "\eac7";
}
.uil-envelope:before {
  content: "\eac8";
}
.uil-envelopes:before {
  content: "\eac9";
}
.uil-equal-circle:before {
  content: "\eaca";
}
.uil-estate:before {
  content: "\eacb";
}
.uil-euro-circle:before {
  content: "\eacc";
}
.uil-euro:before {
  content: "\eacd";
}
.uil-exchange-alt:before {
  content: "\eace";
}
.uil-exchange:before {
  content: "\eacf";
}
.uil-exclamation-circle:before {
  content: "\ead0";
}
.uil-exclamation-octagon:before {
  content: "\ead1";
}
.uil-exclamation-triangle:before {
  content: "\ead2";
}
.uil-exclamation:before {
  content: "\ead3";
}
.uil-exclude:before {
  content: "\ead4";
}
.uil-exit:before {
  content: "\ead5";
}
.uil-expand-alt:before {
  content: "\ead6";
}
.uil-expand-arrows-alt:before {
  content: "\ead7";
}
.uil-expand-arrows:before {
  content: "\ead8";
}
.uil-expand-from-corner:before {
  content: "\ead9";
}
.uil-expand-left:before {
  content: "\eada";
}
.uil-expand-right:before {
  content: "\eadb";
}
.uil-export:before {
  content: "\eadc";
}
.uil-exposure-alt:before {
  content: "\eadd";
}
.uil-exposure-increase:before {
  content: "\eade";
}
.uil-external-link-alt:before {
  content: "\eadf";
}
.uil-eye-slash:before {
  content: "\eae0";
}
.uil-eye:before {
  content: "\eae1";
}
.uil-facebook-f:before {
  content: "\eae2";
}
.uil-facebook-messenger-alt:before {
  content: "\eae3";
}
.uil-facebook-messenger:before {
  content: "\eae4";
}
.uil-facebook:before {
  content: "\eae5";
}
.uil-fahrenheit:before {
  content: "\eae6";
}
.uil-fast-mail-alt:before {
  content: "\eae7";
}
.uil-fast-mail:before {
  content: "\eae8";
}
.uil-favorite:before {
  content: "\eae9";
}
.uil-feedback:before {
  content: "\eaea";
}
.uil-fidget-spinner:before {
  content: "\eaeb";
}
.uil-file-alt:before {
  content: "\eaec";
}
.uil-file-blank:before {
  content: "\eaed";
}
.uil-file-block-alt:before {
  content: "\eaee";
}
.uil-file-bookmark-alt:before {
  content: "\eaef";
}
.uil-file-check-alt:before {
  content: "\eaf0";
}
.uil-file-check:before {
  content: "\eaf1";
}
.uil-file-contract-dollar:before {
  content: "\eaf2";
}
.uil-file-contract:before {
  content: "\eaf3";
}
.uil-file-copy-alt:before {
  content: "\eaf4";
}
.uil-file-download-alt:before {
  content: "\eaf5";
}
.uil-file-download:before {
  content: "\eaf6";
}
.uil-file-edit-alt:before {
  content: "\eaf7";
}
.uil-file-exclamation-alt:before {
  content: "\eaf8";
}
.uil-file-exclamation:before {
  content: "\eaf9";
}
.uil-file-export:before {
  content: "\eafa";
}
.uil-file-graph:before {
  content: "\eafb";
}
.uil-file-heart:before {
  content: "\eafc";
}
.uil-file-import:before {
  content: "\eafd";
}
.uil-file-info-alt:before {
  content: "\eafe";
}
.uil-file-landscape-alt:before {
  content: "\eaff";
}
.uil-file-landscape:before {
  content: "\eb00";
}
.uil-file-lanscape-slash:before {
  content: "\eb01";
}
.uil-file-medical-alt:before {
  content: "\eb02";
}
.uil-file-medical:before {
  content: "\eb03";
}
.uil-file-minus-alt:before {
  content: "\eb04";
}
.uil-file-lock-alt:before {
  content: "\eb05";
}
.uil-file-minus:before {
  content: "\eb06";
}
.uil-file-network:before {
  content: "\eb07";
}
.uil-file-plus-alt:before {
  content: "\eb08";
}
.uil-file-plus:before {
  content: "\eb09";
}
.uil-file-question:before {
  content: "\eb0a";
}
.uil-file-redo-alt:before {
  content: "\eb0b";
}
.uil-file-question-alt:before {
  content: "\eb0c";
}
.uil-file-slash:before {
  content: "\eb0d";
}
.uil-file-times-alt:before {
  content: "\eb0e";
}
.uil-file-shield-alt:before {
  content: "\eb0f";
}
.uil-file-times:before {
  content: "\eb10";
}
.uil-file-share-alt:before {
  content: "\eb11";
}
.uil-file-search-alt:before {
  content: "\eb12";
}
.uil-file:before {
  content: "\eb13";
}
.uil-file-upload:before {
  content: "\eb14";
}
.uil-filter:before {
  content: "\eb15";
}
.uil-filter-slash:before {
  content: "\eb16";
}
.uil-files-landscapes:before {
  content: "\eb17";
}
.uil-film:before {
  content: "\eb18";
}
.uil-flask:before {
  content: "\eb19";
}
.uil-flask-potion:before {
  content: "\eb1a";
}
.uil-files-landscapes-alt:before {
  content: "\eb1b";
}
.uil-flip-h-alt:before {
  content: "\eb1c";
}
.uil-flip-h:before {
  content: "\eb1d";
}
.uil-flip-v-alt:before {
  content: "\eb1e";
}
.uil-file-upload-alt:before {
  content: "\eb1f";
}
.uil-fire:before {
  content: "\eb20";
}
.uil-flower:before {
  content: "\eb21";
}
.uil-focus-add:before {
  content: "\eb22";
}
.uil-flip-v:before {
  content: "\eb23";
}
.uil-focus:before {
  content: "\eb24";
}
.uil-folder-check:before {
  content: "\eb25";
}
.uil-folder-download:before {
  content: "\eb26";
}
.uil-folder-exclamation:before {
  content: "\eb27";
}
.uil-folder-heart:before {
  content: "\eb28";
}
.uil-folder-info:before {
  content: "\eb29";
}
.uil-folder-lock:before {
  content: "\eb2a";
}
.uil-folder-medical:before {
  content: "\eb2b";
}
.uil-folder-minus:before {
  content: "\eb2c";
}
.uil-folder-network:before {
  content: "\eb2d";
}
.uil-folder-open:before {
  content: "\eb2e";
}
.uil-folder-plus:before {
  content: "\eb2f";
}
.uil-folder-question:before {
  content: "\eb30";
}
.uil-folder-slash:before {
  content: "\eb31";
}
.uil-folder-times:before {
  content: "\eb32";
}
.uil-folder-upload:before {
  content: "\eb33";
}
.uil-folder:before {
  content: "\eb34";
}
.uil-font:before {
  content: "\eb35";
}
.uil-football-american:before {
  content: "\eb36";
}
.uil-football-ball:before {
  content: "\eb37";
}
.uil-football:before {
  content: "\eb38";
}
.uil-forecastcloud-moon-tear:before {
  content: "\eb39";
}
.uil-forwaded-call:before {
  content: "\eb3a";
}
.uil-forward:before {
  content: "\eb3b";
}
.uil-frown:before {
  content: "\eb3c";
}
.uil-game-structure:before {
  content: "\eb3d";
}
.uil-gift:before {
  content: "\eb3e";
}
.uil-github-alt:before {
  content: "\eb3f";
}
.uil-github:before {
  content: "\eb40";
}
.uil-gitlab:before {
  content: "\eb41";
}
.uil-glass-martini-alt-slash:before {
  content: "\eb42";
}
.uil-focus-target:before {
  content: "\eb43";
}
.uil-glass-martini-alt:before {
  content: "\eb44";
}
.uil-glass-martini:before {
  content: "\eb45";
}
.uil-glass-tea:before {
  content: "\eb46";
}
.uil-glass:before {
  content: "\eb47";
}
.uil-globe:before {
  content: "\eb48";
}
.uil-gold:before {
  content: "\eb49";
}
.uil-golf-ball:before {
  content: "\eb4a";
}
.uil-google-drive-alt:before {
  content: "\eb4b";
}
.uil-google-drive:before {
  content: "\eb4c";
}
.uil-google-hangouts-alt:before {
  content: "\eb4d";
}
.uil-google-hangouts:before {
  content: "\eb4e";
}
.uil-google-play:before {
  content: "\eb4f";
}
.uil-google:before {
  content: "\eb50";
}
.uil-graduation-cap:before {
  content: "\eb51";
}
.uil-graph-bar:before {
  content: "\eb52";
}
.uil-grid:before {
  content: "\eb53";
}
.uil-grids:before {
  content: "\eb54";
}
.uil-grin-tongue-wink-alt:before {
  content: "\eb55";
}
.uil-grin:before {
  content: "\eb56";
}
.uil-grin-tongue-wink:before {
  content: "\eb57";
}
.uil-grip-horizontal-line:before {
  content: "\eb58";
}
.uil-hard-hat:before {
  content: "\eb59";
}
.uil-hdd:before {
  content: "\eb5a";
}
.uil-head-side-mask:before {
  content: "\eb5b";
}
.uil-head-side-cough:before {
  content: "\eb5c";
}
.uil-head-side:before {
  content: "\eb5d";
}
.uil-headphone-slash:before {
  content: "\eb5e";
}
.uil-headphones-alt:before {
  content: "\eb5f";
}
.uil-heart-alt:before {
  content: "\eb60";
}
.uil-headphones:before {
  content: "\eb61";
}
.uil-heart-break:before {
  content: "\eb62";
}
.uil-heart-medical:before {
  content: "\eb63";
}
.uil-heart-rate:before {
  content: "\eb64";
}
.uil-heart-sign:before {
  content: "\eb65";
}
.uil-heart:before {
  content: "\eb66";
}
.uil-heartbeat:before {
  content: "\eb67";
}
.uil-hindi-to-chinese:before {
  content: "\eb68";
}
.uil-hipchat:before {
  content: "\eb69";
}
.uil-history-alt:before {
  content: "\eb6a";
}
.uil-history:before {
  content: "\eb6b";
}
.uil-home-alt:before {
  content: "\eb6c";
}
.uil-home:before {
  content: "\eb6d";
}
.uil-horizontal-align-center:before {
  content: "\eb6e";
}
.uil-horizontal-align-left:before {
  content: "\eb6f";
}
.uil-horizontal-align-right:before {
  content: "\eb70";
}
.uil-horizontal-distribution-center:before {
  content: "\eb71";
}
.uil-horizontal-distribution-right:before {
  content: "\eb72";
}
.uil-hospital-square-sign:before {
  content: "\eb73";
}
.uil-hospital-symbol:before {
  content: "\eb74";
}
.uil-horizontal-distribution-left:before {
  content: "\eb75";
}
.uil-hospital:before {
  content: "\eb76";
}
.uil-house-user:before {
  content: "\eb77";
}
.uil-hourglass:before {
  content: "\eb78";
}
.uil-html3-alt:before {
  content: "\eb79";
}
.uil-html5-alt:before {
  content: "\eb7a";
}
.uil-html3:before {
  content: "\eb7b";
}
.uil-html5:before {
  content: "\eb7c";
}
.uil-hunting:before {
  content: "\eb7d";
}
.uil-icons:before {
  content: "\eb7e";
}
.uil-illustration:before {
  content: "\eb7f";
}
.uil-image-alt-slash:before {
  content: "\eb80";
}
.uil-image-block:before {
  content: "\eb81";
}
.uil-image-broken:before {
  content: "\eb82";
}
.uil-image-check:before {
  content: "\eb83";
}
.uil-image-download:before {
  content: "\eb84";
}
.uil-image-edit:before {
  content: "\eb85";
}
.uil-image-lock:before {
  content: "\eb86";
}
.uil-image-minus:before {
  content: "\eb87";
}
.uil-image-plus:before {
  content: "\eb88";
}
.uil-image-question:before {
  content: "\eb89";
}
.uil-image-redo:before {
  content: "\eb8a";
}
.uil-image-resize-landscape:before {
  content: "\eb8b";
}
.uil-image-resize-square:before {
  content: "\eb8c";
}
.uil-image-search:before {
  content: "\eb8d";
}
.uil-image-share:before {
  content: "\eb8e";
}
.uil-image-shield:before {
  content: "\eb8f";
}
.uil-image-slash:before {
  content: "\eb90";
}
.uil-image-times:before {
  content: "\eb91";
}
.uil-image-upload:before {
  content: "\eb92";
}
.uil-image-v:before {
  content: "\eb93";
}
.uil-image:before {
  content: "\eb94";
}
.uil-images:before {
  content: "\eb95";
}
.uil-import:before {
  content: "\eb96";
}
.uil-inbox:before {
  content: "\eb97";
}
.uil-incoming-call:before {
  content: "\eb98";
}
.uil-info-circle:before {
  content: "\eb99";
}
.uil-instagram-alt:before {
  content: "\eb9a";
}
.uil-info:before {
  content: "\eb9b";
}
.uil-instagram:before {
  content: "\eb9c";
}
.uil-intercom-alt:before {
  content: "\eb9d";
}
.uil-intercom:before {
  content: "\eb9e";
}
.uil-invoice:before {
  content: "\eb9f";
}
.uil-italic:before {
  content: "\eba0";
}
.uil-jackhammer:before {
  content: "\eba1";
}
.uil-java-script:before {
  content: "\eba2";
}
.uil-kayak:before {
  content: "\eba3";
}
.uil-key-skeleton-alt:before {
  content: "\eba4";
}
.uil-key-skeleton:before {
  content: "\eba5";
}
.uil-keyboard-alt:before {
  content: "\eba6";
}
.uil-keyboard-hide:before {
  content: "\eba7";
}
.uil-keyboard-show:before {
  content: "\eba8";
}
.uil-keyboard:before {
  content: "\eba9";
}
.uil-keyhole-circle:before {
  content: "\ebaa";
}
.uil-keyhole-square-full:before {
  content: "\ebab";
}
.uil-keyhole-square:before {
  content: "\ebac";
}
.uil-kid:before {
  content: "\ebad";
}
.uil-label-alt:before {
  content: "\ebae";
}
.uil-label:before {
  content: "\ebaf";
}
.uil-lamp:before {
  content: "\ebb0";
}
.uil-language:before {
  content: "\ebb1";
}
.uil-laptop-cloud:before {
  content: "\ebb2";
}
.uil-laptop-connection:before {
  content: "\ebb3";
}
.uil-laptop:before {
  content: "\ebb4";
}
.uil-laughing:before {
  content: "\ebb5";
}
.uil-layer-group-slash:before {
  content: "\ebb6";
}
.uil-layer-group:before {
  content: "\ebb7";
}
.uil-layers-alt:before {
  content: "\ebb8";
}
.uil-layers-slash:before {
  content: "\ebb9";
}
.uil-layers:before {
  content: "\ebba";
}
.uil-left-arrow-from-left:before {
  content: "\ebbb";
}
.uil-left-arrow-to-left:before {
  content: "\ebbc";
}
.uil-left-indent-alt:before {
  content: "\ebbd";
}
.uil-left-indent:before {
  content: "\ebbe";
}
.uil-left-to-right-text-direction:before {
  content: "\ebbf";
}
.uil-letter-chinese-a:before {
  content: "\ebc0";
}
.uil-letter-english-a:before {
  content: "\ebc1";
}
.uil-letter-hindi-a:before {
  content: "\ebc2";
}
.uil-letter-japanese-a:before {
  content: "\ebc3";
}
.uil-life-ring:before {
  content: "\ebc4";
}
.uil-lightbulb-alt:before {
  content: "\ebc5";
}
.uil-lightbulb:before {
  content: "\ebc6";
}
.uil-line-alt:before {
  content: "\ebc7";
}
.uil-line-spacing:before {
  content: "\ebc8";
}
.uil-link-add:before {
  content: "\ebc9";
}
.uil-link-alt:before {
  content: "\ebca";
}
.uil-link-broken:before {
  content: "\ebcb";
}
.uil-link-h:before {
  content: "\ebcc";
}
.uil-link:before {
  content: "\ebcd";
}
.uil-linux:before {
  content: "\ebce";
}
.uil-line:before {
  content: "\ebcf";
}
.uil-linkedin-alt:before {
  content: "\ebd0";
}
.uil-linkedin:before {
  content: "\ebd1";
}
.uil-list-ol:before {
  content: "\ebd2";
}
.uil-list-ui-alt:before {
  content: "\ebd3";
}
.uil-list-ol-alt:before {
  content: "\ebd4";
}
.uil-location-arrow-alt:before {
  content: "\ebd5";
}
.uil-lira-sign:before {
  content: "\ebd6";
}
.uil-location-point:before {
  content: "\ebd7";
}
.uil-location-pin-alt:before {
  content: "\ebd8";
}
.uil-location-arrow:before {
  content: "\ebd9";
}
.uil-lottiefiles-alt:before {
  content: "\ebda";
}
.uil-mailbox:before {
  content: "\ebdb";
}
.uil-lock:before {
  content: "\ebdc";
}
.uil-map-marker-minus:before {
  content: "\ebdd";
}
.uil-map-marker-info:before {
  content: "\ebde";
}
.uil-map-marker-edit:before {
  content: "\ebdf";
}
.uil-map-marker-alt:before {
  content: "\ebe0";
}
.uil-map-marker-shield:before {
  content: "\ebe1";
}
.uil-map-marker-slash:before {
  content: "\ebe2";
}
.uil-map-marker:before {
  content: "\ebe3";
}
.uil-map-marker-question:before {
  content: "\ebe4";
}
.uil-map-pin-alt:before {
  content: "\ebe5";
}
.uil-map:before {
  content: "\ebe6";
}
.uil-map-pin:before {
  content: "\ebe7";
}
.uil-map-marker-plus:before {
  content: "\ebe8";
}
.uil-mars:before {
  content: "\ebe9";
}
.uil-lock-open-alt:before {
  content: "\ebea";
}
.uil-lock-slash:before {
  content: "\ebeb";
}
.uil-master-card:before {
  content: "\ebec";
}
.uil-luggage-cart:before {
  content: "\ebed";
}
.uil-lottiefiles:before {
  content: "\ebee";
}
.uil-medical-square-full:before {
  content: "\ebef";
}
.uil-lock-alt:before {
  content: "\ebf0";
}
.uil-medical-square:before {
  content: "\ebf1";
}
.uil-medical-drip:before {
  content: "\ebf2";
}
.uil-medkit:before {
  content: "\ebf3";
}
.uil-medium-m:before {
  content: "\ebf4";
}
.uil-megaphone:before {
  content: "\ebf5";
}
.uil-meeting-board:before {
  content: "\ebf6";
}
.uil-meh-alt:before {
  content: "\ebf7";
}
.uil-meh-closed-eye:before {
  content: "\ebf8";
}
.uil-medal:before {
  content: "\ebf9";
}
.uil-maximize-left:before {
  content: "\ebfa";
}
.uil-meh:before {
  content: "\ebfb";
}
.uil-list-ul:before {
  content: "\ebfc";
}
.uil-metro:before {
  content: "\ebfd";
}
.uil-message:before {
  content: "\ebfe";
}
.uil-microphone-slash:before {
  content: "\ebff";
}
.uil-mailbox-alt:before {
  content: "\ec00";
}
.uil-microscope:before {
  content: "\ec01";
}
.uil-microphone:before {
  content: "\ec02";
}
.uil-microsoft:before {
  content: "\ec03";
}
.uil-minus-path:before {
  content: "\ec04";
}
.uil-minus-square-full:before {
  content: "\ec05";
}
.uil-minus-circle:before {
  content: "\ec06";
}
.uil-minus:before {
  content: "\ec07";
}
.uil-missed-call:before {
  content: "\ec08";
}
.uil-mobile-android-alt:before {
  content: "\ec09";
}
.uil-mobile-android:before {
  content: "\ec0a";
}
.uil-mobile-vibrate:before {
  content: "\ec0b";
}
.uil-modem:before {
  content: "\ec0c";
}
.uil-minus-square:before {
  content: "\ec0d";
}
.uil-money-bill-slash:before {
  content: "\ec0e";
}
.uil-money-bill-stack:before {
  content: "\ec0f";
}
.uil-money-bill:before {
  content: "\ec10";
}
.uil-lock-access:before {
  content: "\ec11";
}
.uil-money-insert:before {
  content: "\ec12";
}
.uil-money-stack:before {
  content: "\ec13";
}
.uil-money-withdraw:before {
  content: "\ec14";
}
.uil-money-withdrawal:before {
  content: "\ec15";
}
.uil-moneybag-alt:before {
  content: "\ec16";
}
.uil-moneybag:before {
  content: "\ec17";
}
.uil-monitor-heart-rate:before {
  content: "\ec18";
}
.uil-monitor:before {
  content: "\ec19";
}
.uil-moon-eclipse:before {
  content: "\ec1a";
}
.uil-moon:before {
  content: "\ec1b";
}
.uil-moonset:before {
  content: "\ec1c";
}
.uil-mountains-sun:before {
  content: "\ec1d";
}
.uil-mountains:before {
  content: "\ec1e";
}
.uil-mouse-alt-2:before {
  content: "\ec1f";
}
.uil-mouse-alt:before {
  content: "\ec20";
}
.uil-mouse:before {
  content: "\ec21";
}
.uil-multiply:before {
  content: "\ec22";
}
.uil-music-note:before {
  content: "\ec23";
}
.uil-music-tune-slash:before {
  content: "\ec24";
}
.uil-music:before {
  content: "\ec25";
}
.uil-n-a:before {
  content: "\ec26";
}
.uil-navigator:before {
  content: "\ec27";
}
.uil-nerd:before {
  content: "\ec28";
}
.uil-newspaper:before {
  content: "\ec29";
}
.uil-no-entry:before {
  content: "\ec2a";
}
.uil-ninja:before {
  content: "\ec2b";
}
.uil-notebooks:before {
  content: "\ec2c";
}
.uil-notes:before {
  content: "\ec2d";
}
.uil-object-group:before {
  content: "\ec2e";
}
.uil-object-ungroup:before {
  content: "\ec2f";
}
.uil-octagon:before {
  content: "\ec30";
}
.uil-okta:before {
  content: "\ec31";
}
.uil-opera-alt:before {
  content: "\ec32";
}
.uil-opera:before {
  content: "\ec33";
}
.uil-outgoing-call:before {
  content: "\ec34";
}
.uil-padlock:before {
  content: "\ec35";
}
.uil-package:before {
  content: "\ec36";
}
.uil-pagelines:before {
  content: "\ec37";
}
.uil-paint-tool:before {
  content: "\ec38";
}
.uil-pagerduty:before {
  content: "\ec39";
}
.uil-palette:before {
  content: "\ec3a";
}
.uil-panel-add:before {
  content: "\ec3b";
}
.uil-panorama-h-alt:before {
  content: "\ec3c";
}
.uil-panorama-h:before {
  content: "\ec3d";
}
.uil-panorama-v:before {
  content: "\ec3e";
}
.uil-paperclip:before {
  content: "\ec3f";
}
.uil-parcel:before {
  content: "\ec40";
}
.uil-paragraph:before {
  content: "\ec41";
}
.uil-parking-circle:before {
  content: "\ec42";
}
.uil-parking-square:before {
  content: "\ec43";
}
.uil-pathfinder-unite:before {
  content: "\ec44";
}
.uil-pathfinder:before {
  content: "\ec45";
}
.uil-pause-circle:before {
  content: "\ec46";
}
.uil-pause:before {
  content: "\ec47";
}
.uil-paypal:before {
  content: "\ec48";
}
.uil-pen:before {
  content: "\ec49";
}
.uil-pentagon:before {
  content: "\ec4a";
}
.uil-percentage:before {
  content: "\ec4b";
}
.uil-phone-pause:before {
  content: "\ec4c";
}
.uil-phone-alt:before {
  content: "\ec4d";
}
.uil-phone-slash:before {
  content: "\ec4e";
}
.uil-phone-times:before {
  content: "\ec4f";
}
.uil-phone-volume:before {
  content: "\ec50";
}
.uil-phone:before {
  content: "\ec51";
}
.uil-picture:before {
  content: "\ec52";
}
.uil-pizza-slice:before {
  content: "\ec53";
}
.uil-plane-arrival:before {
  content: "\ec54";
}
.uil-plane-departure:before {
  content: "\ec55";
}
.uil-plane-fly:before {
  content: "\ec56";
}
.uil-plane:before {
  content: "\ec57";
}
.uil-play-circle:before {
  content: "\ec58";
}
.uil-play:before {
  content: "\ec59";
}
.uil-plug:before {
  content: "\ec5a";
}
.uil-plus-circle:before {
  content: "\ec5b";
}
.uil-plus-square:before {
  content: "\ec5c";
}
.uil-plus:before {
  content: "\ec5d";
}
.uil-podium:before {
  content: "\ec5e";
}
.uil-polygon:before {
  content: "\ec5f";
}
.uil-post-stamp:before {
  content: "\ec60";
}
.uil-postcard:before {
  content: "\ec61";
}
.uil-pound-circle:before {
  content: "\ec62";
}
.uil-pound:before {
  content: "\ec63";
}
.uil-power:before {
  content: "\ec64";
}
.uil-prescription-bottle:before {
  content: "\ec65";
}
.uil-presentation-check:before {
  content: "\ec66";
}
.uil-presentation-edit:before {
  content: "\ec67";
}
.uil-presentation-line:before {
  content: "\ec68";
}
.uil-presentation-lines-alt:before {
  content: "\ec69";
}
.uil-presentation-minus:before {
  content: "\ec6a";
}
.uil-presentation-play:before {
  content: "\ec6b";
}
.uil-presentation-plus:before {
  content: "\ec6c";
}
.uil-presentation-times:before {
  content: "\ec6d";
}
.uil-presentation:before {
  content: "\ec6e";
}
.uil-previous:before {
  content: "\ec6f";
}
.uil-pricetag-alt:before {
  content: "\ec70";
}
.uil-print-slash:before {
  content: "\ec71";
}
.uil-print:before {
  content: "\ec72";
}
.uil-process:before {
  content: "\ec73";
}
.uil-processor:before {
  content: "\ec74";
}
.uil-programming-language:before {
  content: "\ec75";
}
.uil-pump:before {
  content: "\ec76";
}
.uil-puzzle-piece:before {
  content: "\ec77";
}
.uil-qrcode-scan:before {
  content: "\ec78";
}
.uil-question-circle:before {
  content: "\ec79";
}
.uil-question:before {
  content: "\ec7a";
}
.uil-raindrops-alt:before {
  content: "\ec7b";
}
.uil-rainbow:before {
  content: "\ec7c";
}
.uil-raindrops:before {
  content: "\ec7d";
}
.uil-react:before {
  content: "\ec7e";
}
.uil-receipt-alt:before {
  content: "\ec7f";
}
.uil-receipt:before {
  content: "\ec80";
}
.uil-record-audio:before {
  content: "\ec81";
}
.uil-reddit-alien-alt:before {
  content: "\ec82";
}
.uil-redo:before {
  content: "\ec83";
}
.uil-refresh:before {
  content: "\ec84";
}
.uil-registered:before {
  content: "\ec85";
}
.uil-repeat:before {
  content: "\ec86";
}
.uil-restaurant:before {
  content: "\ec87";
}
.uil-right-indent-alt:before {
  content: "\ec88";
}
.uil-right-to-left-text-direction:before {
  content: "\ec89";
}
.uil-robot:before {
  content: "\ec8a";
}
.uil-rope-way:before {
  content: "\ec8b";
}
.uil-rocket:before {
  content: "\ec8c";
}
.uil-rotate-360:before {
  content: "\ec8d";
}
.uil-rss-alt:before {
  content: "\ec8e";
}
.uil-rss-interface:before {
  content: "\ec8f";
}
.uil-rss:before {
  content: "\ec90";
}
.uil-ruler-combined:before {
  content: "\ec91";
}
.uil-ruler:before {
  content: "\ec92";
}
.uil-rupee-sign:before {
  content: "\ec93";
}
.uil-sad-cry:before {
  content: "\ec94";
}
.uil-sad-crying:before {
  content: "\ec95";
}
.uil-sad-dizzy:before {
  content: "\ec96";
}
.uil-sad-squint:before {
  content: "\ec97";
}
.uil-sad:before {
  content: "\ec98";
}
.uil-sanitizer-alt:before {
  content: "\ec99";
}
.uil-sanitizer:before {
  content: "\ec9a";
}
.uil-save:before {
  content: "\ec9b";
}
.uil-scaling-left:before {
  content: "\ec9c";
}
.uil-scaling-right:before {
  content: "\ec9d";
}
.uil-scenery:before {
  content: "\ec9e";
}
.uil-screw:before {
  content: "\ec9f";
}
.uil-scroll-h:before {
  content: "\eca0";
}
.uil-scroll:before {
  content: "\eca1";
}
.uil-schedule:before {
  content: "\eca2";
}
.uil-search-alt:before {
  content: "\eca3";
}
.uil-search-minus:before {
  content: "\eca4";
}
.uil-search:before {
  content: "\eca5";
}
.uil-selfie:before {
  content: "\eca6";
}
.uil-server-alt:before {
  content: "\eca7";
}
.uil-search-plus:before {
  content: "\eca8";
}
.uil-server-connection:before {
  content: "\eca9";
}
.uil-server-network:before {
  content: "\ecaa";
}
.uil-server-network-alt:before {
  content: "\ecab";
}
.uil-servers:before {
  content: "\ecac";
}
.uil-servicemark:before {
  content: "\ecad";
}
.uil-server:before {
  content: "\ecae";
}
.uil-setting:before {
  content: "\ecaf";
}
.uil-share-alt:before {
  content: "\ecb0";
}
.uil-share:before {
  content: "\ecb1";
}
.uil-shield-check:before {
  content: "\ecb2";
}
.uil-shield-exclamation:before {
  content: "\ecb3";
}
.uil-shield-plus:before {
  content: "\ecb4";
}
.uil-shield-question:before {
  content: "\ecb5";
}
.uil-shield:before {
  content: "\ecb6";
}
.uil-ship:before {
  content: "\ecb7";
}
.uil-shop:before {
  content: "\ecb8";
}
.uil-shield-slash:before {
  content: "\ecb9";
}
.uil-shopping-bag:before {
  content: "\ecba";
}
.uil-shopping-basket:before {
  content: "\ecbb";
}
.uil-shopping-cart-alt:before {
  content: "\ecbc";
}
.uil-shopping-cart:before {
  content: "\ecbd";
}
.uil-shovel:before {
  content: "\ecbe";
}
.uil-shrink:before {
  content: "\ecbf";
}
.uil-shuffle:before {
  content: "\ecc0";
}
.uil-shutter:before {
  content: "\ecc1";
}
.uil-sick:before {
  content: "\ecc2";
}
.uil-sigma:before {
  content: "\ecc3";
}
.uil-sign-alt:before {
  content: "\ecc4";
}
.uil-sign-in-alt:before {
  content: "\ecc5";
}
.uil-sign-left:before {
  content: "\ecc6";
}
.uil-sign-out-alt:before {
  content: "\ecc7";
}
.uil-sign-right:before {
  content: "\ecc8";
}
.uil-signal-alt:before {
  content: "\ecc9";
}
.uil-signal:before {
  content: "\ecca";
}
.uil-signin:before {
  content: "\eccb";
}
.uil-signout:before {
  content: "\eccc";
}
.uil-silence:before {
  content: "\eccd";
}
.uil-signal-alt-3:before {
  content: "\ecce";
}
.uil-silent-squint:before {
  content: "\eccf";
}
.uil-sim-card:before {
  content: "\ecd0";
}
.uil-skip-forward-alt:before {
  content: "\ecd1";
}
.uil-sitemap:before {
  content: "\ecd2";
}
.uil-skype-alt:before {
  content: "\ecd3";
}
.uil-skype:before {
  content: "\ecd4";
}
.uil-skip-forward:before {
  content: "\ecd5";
}
.uil-skip-forward-circle:before {
  content: "\ecd6";
}
.uil-shutter-alt:before {
  content: "\ecd7";
}
.uil-sliders-v:before {
  content: "\ecd8";
}
.uil-slider-h-range:before {
  content: "\ecd9";
}
.uil-slider-h:before {
  content: "\ecda";
}
.uil-sliders-v-alt:before {
  content: "\ecdb";
}
.uil-slack-alt:before {
  content: "\ecdc";
}
.uil-slack:before {
  content: "\ecdd";
}
.uil-smile-beam:before {
  content: "\ecde";
}
.uil-smile-dizzy:before {
  content: "\ecdf";
}
.uil-smile-squint-wink-alt:before {
  content: "\ece0";
}
.uil-smile-squint-wink:before {
  content: "\ece1";
}
.uil-smile-wink-alt:before {
  content: "\ece2";
}
.uil-smile-wink:before {
  content: "\ece3";
}
.uil-smile:before {
  content: "\ece4";
}
.uil-snapchat-ghost:before {
  content: "\ece5";
}
.uil-snowflake:before {
  content: "\ece6";
}
.uil-sperms:before {
  content: "\ece7";
}
.uil-snow-flake:before {
  content: "\ece8";
}
.uil-space-key:before {
  content: "\ece9";
}
.uil-spade:before {
  content: "\ecea";
}
.uil-star:before {
  content: "\eceb";
}
.uil-sorting:before {
  content: "\ecec";
}
.uil-squint:before {
  content: "\eced";
}
.uil-step-backward-alt:before {
  content: "\ecee";
}
.uil-snapchat-square:before {
  content: "\ecef";
}
.uil-square:before {
  content: "\ecf0";
}
.uil-square-shape:before {
  content: "\ecf1";
}
.uil-spinner:before {
  content: "\ecf2";
}
.uil-square-full:before {
  content: "\ecf3";
}
.uil-spin:before {
  content: "\ecf4";
}
.uil-stop-circle:before {
  content: "\ecf5";
}
.uil-stopwatch-slash:before {
  content: "\ecf6";
}
.uil-step-forward:before {
  content: "\ecf7";
}
.uil-step-backward:before {
  content: "\ecf8";
}
.uil-store-alt:before {
  content: "\ecf9";
}
.uil-snapchat-alt:before {
  content: "\ecfa";
}
.uil-sort:before {
  content: "\ecfb";
}
.uil-sort-amount-down:before {
  content: "\ecfc";
}
.uil-social-distancing:before {
  content: "\ecfd";
}
.uil-subway:before {
  content: "\ecfe";
}
.uil-subway-alt:before {
  content: "\ecff";
}
.uil-stopwatch:before {
  content: "\ed00";
}
.uil-subject:before {
  content: "\ed01";
}
.uil-step-backward-circle:before {
  content: "\ed02";
}
.uil-stretcher:before {
  content: "\ed03";
}
.uil-store:before {
  content: "\ed04";
}
.uil-streering:before {
  content: "\ed05";
}
.uil-sync:before {
  content: "\ed06";
}
.uil-sync-slash:before {
  content: "\ed07";
}
.uil-sync-exclamation:before {
  content: "\ed08";
}
.uil-table-tennis:before {
  content: "\ed09";
}
.uil-stethoscope:before {
  content: "\ed0a";
}
.uil-swimmer:before {
  content: "\ed0b";
}
.uil-snowflake-alt:before {
  content: "\ed0c";
}
.uil-tablet:before {
  content: "\ed0d";
}
.uil-syringe:before {
  content: "\ed0e";
}
.uil-table:before {
  content: "\ed0f";
}
.uil-tag-alt:before {
  content: "\ed10";
}
.uil-store-slash:before {
  content: "\ed11";
}
.uil-tape:before {
  content: "\ed12";
}
.uil-tachometer-fast:before {
  content: "\ed13";
}
.uil-tag:before {
  content: "\ed14";
}
.uil-tachometer-fast-alt:before {
  content: "\ed15";
}
.uil-swatchbook:before {
  content: "\ed16";
}
.uil-swiggy:before {
  content: "\ed17";
}
.uil-surprise:before {
  content: "\ed18";
}
.uil-sunset:before {
  content: "\ed19";
}
.uil-telegram:before {
  content: "\ed1a";
}
.uil-telegram-alt:before {
  content: "\ed1b";
}
.uil-tear:before {
  content: "\ed1c";
}
.uil-tablets:before {
  content: "\ed1d";
}
.uil-taxi:before {
  content: "\ed1e";
}
.uil-temperature-empty:before {
  content: "\ed1f";
}
.uil-temperature-minus:before {
  content: "\ed20";
}
.uil-temperature-half:before {
  content: "\ed21";
}
.uil-temperature-plus:before {
  content: "\ed22";
}
.uil-temperature-quarter:before {
  content: "\ed23";
}
.uil-sort-amount-up:before {
  content: "\ed24";
}
.uil-telescope:before {
  content: "\ed25";
}
.uil-temperature:before {
  content: "\ed26";
}
.uil-sun:before {
  content: "\ed27";
}
.uil-suitcase:before {
  content: "\ed28";
}
.uil-temperature-three-quarter:before {
  content: "\ed29";
}
.uil-text-strike-through:before {
  content: "\ed2a";
}
.uil-text:before {
  content: "\ed2b";
}
.uil-stethoscope-alt:before {
  content: "\ed2c";
}
.uil-text-size:before {
  content: "\ed2d";
}
.uil-th-slash:before {
  content: "\ed2e";
}
.uil-th-large:before {
  content: "\ed2f";
}
.uil-thermometer:before {
  content: "\ed30";
}
.uil-th:before {
  content: "\ed31";
}
.uil-star-half-alt:before {
  content: "\ed32";
}
.uil-thunderstorm-moon:before {
  content: "\ed33";
}
.uil-thunderstorm:before {
  content: "\ed34";
}
.uil-thumbs-up:before {
  content: "\ed35";
}
.uil-thumbs-down:before {
  content: "\ed36";
}
.uil-times-circle:before {
  content: "\ed37";
}
.uil-toggle-off:before {
  content: "\ed38";
}
.uil-thunderstorm-sun:before {
  content: "\ed39";
}
.uil-spinner-alt:before {
  content: "\ed3a";
}
.uil-times:before {
  content: "\ed3b";
}
.uil-times-square:before {
  content: "\ed3c";
}
.uil-toggle-on:before {
  content: "\ed3d";
}
.uil-suitcase-alt:before {
  content: "\ed3e";
}
.uil-tennis-ball:before {
  content: "\ed3f";
}
.uil-text-fields:before {
  content: "\ed40";
}
.uil-ticket:before {
  content: "\ed41";
}
.uil-toilet-paper:before {
  content: "\ed42";
}
.uil-top-arrow-from-top:before {
  content: "\ed43";
}
.uil-top-arrow-to-top:before {
  content: "\ed44";
}
.uil-tornado:before {
  content: "\ed45";
}
.uil-trademark-circle:before {
  content: "\ed46";
}
.uil-trademark:before {
  content: "\ed47";
}
.uil-traffic-barrier:before {
  content: "\ed48";
}
.uil-traffic-light:before {
  content: "\ed49";
}
.uil-transaction:before {
  content: "\ed4a";
}
.uil-trash-alt:before {
  content: "\ed4b";
}
.uil-trash:before {
  content: "\ed4c";
}
.uil-trees:before {
  content: "\ed4d";
}
.uil-triangle:before {
  content: "\ed4e";
}
.uil-trophy:before {
  content: "\ed4f";
}
.uil-trowel:before {
  content: "\ed50";
}
.uil-truck-loading:before {
  content: "\ed51";
}
.uil-truck:before {
  content: "\ed52";
}
.uil-tumblr-alt:before {
  content: "\ed53";
}
.uil-tumblr-square:before {
  content: "\ed54";
}
.uil-tumblr:before {
  content: "\ed55";
}
.uil-tv-retro-slash:before {
  content: "\ed56";
}
.uil-tv-retro:before {
  content: "\ed57";
}
.uil-twitter-alt:before {
  content: "\ed58";
}
.uil-twitter:before {
  content: "\ed59";
}
.uil-umbrella:before {
  content: "\ed5a";
}
.uil-unamused:before {
  content: "\ed5b";
}
.uil-underline:before {
  content: "\ed5c";
}
.uil-university:before {
  content: "\ed5d";
}
.uil-unlock-alt:before {
  content: "\ed5e";
}
.uil-unlock:before {
  content: "\ed5f";
}
.uil-upload-alt:before {
  content: "\ed60";
}
.uil-upload:before {
  content: "\ed61";
}
.uil-usd-circle:before {
  content: "\ed62";
}
.uil-usd-square:before {
  content: "\ed63";
}
.uil-user-arrows:before {
  content: "\ed64";
}
.uil-user-check:before {
  content: "\ed65";
}
.uil-user-circle:before {
  content: "\ed66";
}
.uil-user-exclamation:before {
  content: "\ed67";
}
.uil-user-location:before {
  content: "\ed68";
}
.uil-user-md:before {
  content: "\ed69";
}
.uil-user-minus:before {
  content: "\ed6a";
}
.uil-user-nurse:before {
  content: "\ed6b";
}
.uil-user-plus:before {
  content: "\ed6c";
}
.uil-user-square:before {
  content: "\ed6d";
}
.uil-user-times:before {
  content: "\ed6e";
}
.uil-user:before {
  content: "\ed6f";
}
.uil-users-alt:before {
  content: "\ed70";
}
.uil-utensils-alt:before {
  content: "\ed71";
}
.uil-utensils:before {
  content: "\ed72";
}
.uil-vector-square-alt:before {
  content: "\ed73";
}
.uil-vector-square:before {
  content: "\ed74";
}
.uil-venus:before {
  content: "\ed75";
}
.uil-vertical-align-bottom:before {
  content: "\ed76";
}
.uil-vertical-align-center:before {
  content: "\ed77";
}
.uil-vertical-align-top:before {
  content: "\ed78";
}
.uil-vertical-distribute-bottom:before {
  content: "\ed79";
}
.uil-vertical-distribution-center:before {
  content: "\ed7a";
}
.uil-vertical-distribution-top:before {
  content: "\ed7b";
}
.uil-video-question:before {
  content: "\ed7c";
}
.uil-video-slash:before {
  content: "\ed7d";
}
.uil-video:before {
  content: "\ed7e";
}
.uil-virus-slash:before {
  content: "\ed7f";
}
.uil-visual-studio:before {
  content: "\ed80";
}
.uil-vk-alt:before {
  content: "\ed81";
}
.uil-vk:before {
  content: "\ed82";
}
.uil-voicemail-rectangle:before {
  content: "\ed83";
}
.uil-voicemail:before {
  content: "\ed84";
}
.uil-volume-down:before {
  content: "\ed85";
}
.uil-volleyball:before {
  content: "\ed86";
}
.uil-volume-mute:before {
  content: "\ed87";
}
.uil-volume-off:before {
  content: "\ed88";
}
.uil-volume-up:before {
  content: "\ed89";
}
.uil-volume:before {
  content: "\ed8a";
}
.uil-vuejs-alt:before {
  content: "\ed8b";
}
.uil-vuejs:before {
  content: "\ed8c";
}
.uil-wall:before {
  content: "\ed8d";
}
.uil-wallet:before {
  content: "\ed8e";
}
.uil-watch-alt:before {
  content: "\ed8f";
}
.uil-watch:before {
  content: "\ed90";
}
.uil-water-drop-slash:before {
  content: "\ed91";
}
.uil-water-glass:before {
  content: "\ed92";
}
.uil-water:before {
  content: "\ed93";
}
.uil-web-grid-alt:before {
  content: "\ed94";
}
.uil-web-grid:before {
  content: "\ed95";
}
.uil-web-section:before {
  content: "\ed96";
}
.uil-webcam:before {
  content: "\ed97";
}
.uil-web-section-alt:before {
  content: "\ed98";
}
.uil-whatsapp-alt:before {
  content: "\ed99";
}
.uil-whatsapp:before {
  content: "\ed9a";
}
.uil-weight:before {
  content: "\ed9b";
}
.uil-wheel-barrow:before {
  content: "\ed9c";
}
.uil-wheelchair-alt:before {
  content: "\ed9d";
}
.uil-wheelchair:before {
  content: "\ed9e";
}
.uil-wifi-router:before {
  content: "\ed9f";
}
.uil-wind-moon:before {
  content: "\eda0";
}
.uil-wifi:before {
  content: "\eda1";
}
.uil-wifi-slash:before {
  content: "\eda2";
}
.uil-wind-sun:before {
  content: "\eda3";
}
.uil-wind:before {
  content: "\eda4";
}
.uil-window-grid:before {
  content: "\eda5";
}
.uil-window-maximize:before {
  content: "\eda6";
}
.uil-window-section:before {
  content: "\eda7";
}
.uil-window:before {
  content: "\eda8";
}
.uil-windows:before {
  content: "\eda9";
}
.uil-windsock:before {
  content: "\edaa";
}
.uil-windy:before {
  content: "\edab";
}
.uil-wordpress-simple:before {
  content: "\edac";
}
.uil-wordpress:before {
  content: "\edad";
}
.uil-wrap-text:before {
  content: "\edae";
}
.uil-wrench:before {
  content: "\edaf";
}
.uil-x-add:before {
  content: "\edb0";
}
.uil-x:before {
  content: "\edb1";
}
.uil-yen-circle:before {
  content: "\edb2";
}
.uil-yen:before {
  content: "\edb3";
}
.uil-yin-yang:before {
  content: "\edb4";
}
.uil-youtube:before {
  content: "\edb5";
}
.counter-wrapper p {
  margin-bottom: 0;
  font-size: 0.8rem;
  font-weight: 500;
}
.counter-wrapper .counter {
  font-size: calc(1.325rem + 0.9vw);
  letter-spacing: normal;
  line-height: 1;
  margin-bottom: 0.5rem;
}
@media (min-width: 1200px) {
  .counter-wrapper .counter {
    font-size: 2rem;
  }
}
.counter-wrapper .counter.counter-lg {
  font-size: calc(1.345rem + 1.14vw);
}
@media (min-width: 1200px) {
  .counter-wrapper .counter.counter-lg {
    font-size: 2.2rem;
  }
}
.counter-wrapper .card-body {
  padding: 1.5rem;
}
.counter-wrapper .icon-bg {
  margin: 0 auto;
}
html,
body {
  height: 100%;
}
body {
  display: flex;
  flex-direction: column;
}
.content-wrapper,
footer {
  flex-shrink: 0;
}
.content-wrapper {
  flex-grow: 1;
}
figure.overlay img {
  opacity: 1;
  width: 100%;
  max-width: 100%;
  vertical-align: top;
  position: relative;
}
.overlay {
  position: relative;
  text-align: center;
  overflow: hidden;
  transform: translate3d(0, 0, 0);
}
.overlay figcaption,
.overlay .figcaption {
  padding: 0.5rem;
  z-index: 5;
  pointer-events: none;
}
.overlay * {
  transition: all 0.4s ease;
}
@media (prefers-reduced-motion: reduce) {
  .overlay * {
    transition: none;
  }
}
.overlay img {
  transition: none;
}
.overlay:not(.caption-overlay) i {
  display: block;
  font-size: calc(1.265rem + 0.18vw);
}
@media (min-width: 1200px) {
  .overlay:not(.caption-overlay) i {
    font-size: 1.4rem;
  }
}
.overlay a {
  position: relative;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 3;
  cursor: pointer !important;
}
.overlay span.bg {
  position: relative;
  display: block;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 3;
  cursor: pointer !important;
  opacity: 0;
  z-index: 4;
  position: absolute;
  width: 100%;
  height: 100%;
  background: rgba(30, 34, 40, 0.6);
}
.overlay.color span.bg {
  background: rgba(var(--bs-primary-rgb), 0.7);
}
.overlay.light span.bg {
  background: rgba(255, 255, 255, 0.6);
}
.overlay.overlay-gradient-1 span.bg {
  background: linear-gradient(120deg, #f857a6 10%, #ef3f6e 100%);
}
.overlay.overlay-gradient-2 span.bg {
  background: linear-gradient(40deg, #f5b161 0.4%, #ec366e 100.2%);
}
.overlay.overlay-gradient-3 span.bg {
  background: linear-gradient(45deg, #FBDA61 0%, #FF5ACD 100%);
}
.overlay.overlay-gradient-4 span.bg {
  background: linear-gradient(125deg, #9040db, #ff72c2 50%, #ffd84f);
}
.overlay.overlay-gradient-5 span.bg {
  background: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);
}
.overlay.overlay-gradient-6 span.bg {
  background: linear-gradient(45deg, #08AEEA 0%, #2AF598 100%);
}
.overlay.overlay-gradient-7 span.bg {
  background: linear-gradient(100deg, #605dba 20%, #3f78e0 85%);
}
.overlay.overlay-gradient-8 span.bg {
  background: linear-gradient(0deg, #2c46a7, #3757c4);
}
.overlay.overlay-gradient-9 span.bg {
  background: linear-gradient(45deg, #ffdee9, #b5fffc);
}
.overlay:not(.overlay-3):hover span.bg {
  opacity: 1;
  transition: opacity 0.35s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .overlay:not(.overlay-3):hover span.bg {
    transition: none;
  }
}
.overlay * {
  color: var(--bs-white) !important;
}
.overlay.light * {
  color: #343f52 !important;
}
.overlay img {
  max-width: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  vertical-align: top;
}
.overlay.caption figcaption {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  opacity: 1;
  padding: 1.5rem;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: flex-start;
  text-align: left;
}
.overlay.caption figcaption .post-meta {
  display: flex;
  flex-direction: row;
}
.overlay.caption figcaption .post-meta>li {
  display: flex;
  align-items: center;
}
.overlay.caption figcaption .badge {
  color: #343f52 !important;
}
.overlay.caption.caption-overlay span.bg {
  opacity: 1;
  background: none;
  background: rgba(30, 34, 40, 0) linear-gradient(transparent 15%, transparent 20%, rgba(30, 34, 40, 0.3) 55%, rgba(30, 34, 40, 0.7) 85%, rgba(30, 34, 40, 0.75) 100%) repeat scroll 0 0;
}
.overlay.caption.caption-overlay span.bg:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
  width: 100%;
  height: 100%;
  background: rgba(30, 34, 40, 0.2);
  transition: all 0.4s ease;
}
@media (prefers-reduced-motion: reduce) {
  .overlay.caption.caption-overlay span.bg:after {
    transition: none;
  }
}
.overlay.caption.caption-overlay span.bg:hover:after {
  opacity: 1;
}
.overlay-1 * {
  box-sizing: border-box;
}
.overlay-1 figcaption {
  position: absolute;
  width: 100%;
  height: 100%;
  padding: 0.75rem 1rem;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  opacity: 0;
  text-align: center;
}
.overlay-1 .from-top {
  position: absolute;
  padding: 0.75rem 1rem;
  top: 50%;
  left: 0;
  width: 100%;
  transform: translateY(-80%);
}
.overlay-1:hover figcaption,
.overlay-1:hover .figcaption {
  opacity: 1;
}
.overlay-1:hover figcaption *,
.overlay-1:hover .figcaption * {
  transform: translateY(-50%);
}
.overlay-2 * {
  position: absolute;
  left: 0;
  margin: 0;
  width: 100%;
  text-align: center;
}
.overlay-2>* {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  height: 100%;
  position: absolute;
}
.overlay-2 figcaption {
  height: 100%;
  opacity: 0;
}
.overlay-2 img {
  position: relative;
}
.overlay-2 .from-top {
  bottom: 50%;
  padding: 0 1rem;
  transform: translate3d(0%, -100%, 0);
}
.overlay-2 .from-bottom {
  top: 50%;
  padding: 0 1rem;
  transform: translate3d(0%, 100%, 0);
}
.overlay-2:hover * {
  opacity: 1;
}
.overlay-2:hover figcaption * {
  transform: translate3d(0%, 0%, 0);
}
.overlay-3 {
  text-align: left;
}
.overlay-3 span.bg {
  position: absolute;
  display: block;
  width: 0;
  height: 100%;
  left: 0;
  top: 0;
  opacity: 0;
  visibility: hidden;
}
.overlay-3:hover span.bg {
  visibility: visible;
  opacity: 0.8;
  width: 100%;
}
.overlay-3 figcaption {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  opacity: 0;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  padding: 1rem 1.25rem;
}
.overlay-3 .from-left {
  opacity: 0;
  transition: opacity 0.4s, transform 0.4s;
  transform: translate3d(-10%, 0, 0);
}
.overlay-3 .from-left:nth-child(1) {
  transition-delay: 0.15s;
}
.overlay-3 .from-left:nth-child(2) {
  transition-delay: 0.2s;
}
.overlay-3:hover figcaption,
.overlay-3:hover .figcaption {
  opacity: 1;
}
.overlay-3:hover figcaption .from-left,
.overlay-3:hover .figcaption .from-left {
  opacity: 1;
  transform: translate3d(0, 0, 0);
}
.hover-scale {
  overflow: hidden;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  transform: translateY(0);
}
.hover-scale img {
  transition: all 0.35s ease-in-out;
}
.hover-scale:hover img {
  transform: scale(1.05);
}
.itooltip-inner {
  padding: 0.7rem 1rem;
  box-shadow: var(--shadow);
  animation: 0.15s linear fadeIn;
  border-radius: 0.4rem;
  background: rgba(255, 255, 255, 0.9);
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  color: inherit;
}
.itooltip-light.itooltip-inner {
  background: rgba(255, 255, 255, 0.9);
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  color: inherit;
}
.itooltip-dark.itooltip-inner {
  background: rgba(30, 34, 40, 0.9);
}
.itooltip-color.itooltip-inner {
  background: rgba(var(--bs-primary-rgb), 0.9);
}
.itooltip-blue.itooltip-inner {
  background: rgba(63, 120, 224, 0.9);
}
.itooltip-sky.itooltip-inner {
  background: rgba(94, 185, 240, 0.9);
}
.itooltip-purple.itooltip-inner {
  background: rgba(116, 126, 209, 0.9);
}
.itooltip-grape.itooltip-inner {
  background: rgba(96, 93, 186, 0.9);
}
.itooltip-violet.itooltip-inner {
  background: rgba(160, 124, 197, 0.9);
}
.itooltip-pink.itooltip-inner {
  background: rgba(209, 107, 134, 0.9);
}
.itooltip-fuchsia.itooltip-inner {
  background: rgba(230, 104, 179, 0.9);
}
.itooltip-red.itooltip-inner {
  background: rgba(226, 98, 107, 0.9);
}
.itooltip-orange.itooltip-inner {
  background: rgba(247, 139, 119, 0.9);
}
.itooltip-yellow.itooltip-inner {
  background: rgba(250, 183, 88, 0.9);
}
.itooltip-green.itooltip-inner {
  background: rgba(69, 196, 160, 0.9);
}
.itooltip-leaf.itooltip-inner {
  background: rgba(124, 183, 152, 0.9);
}
.itooltip-aqua.itooltip-inner {
  background: rgba(84, 168, 199, 0.9);
}
.itooltip-navy.itooltip-inner {
  background: rgba(52, 63, 82, 0.9);
}
.itooltip-ash.itooltip-inner {
  background: rgba(148, 153, 163, 0.9);
}
.itooltip-white.itooltip-inner {
  background: rgba(255, 255, 255, 0.9);
}
.itooltip-light.itooltip-inner {
  background: rgba(254, 254, 254, 0.9);
}
.itooltip-gray.itooltip-inner {
  background: rgba(246, 247, 249, 0.9);
}
.itooltip-primary.itooltip-inner {
  background: rgba(63, 120, 224, 0.9);
}
.itooltip-secondary.itooltip-inner {
  background: rgba(170, 176, 188, 0.9);
}
.itooltip-success.itooltip-inner {
  background: rgba(69, 196, 160, 0.9);
}
.itooltip-info.itooltip-inner {
  background: rgba(84, 168, 199, 0.9);
}
.itooltip-warning.itooltip-inner {
  background: rgba(250, 183, 88, 0.9);
}
.itooltip-danger.itooltip-inner {
  background: rgba(226, 98, 107, 0.9);
}
[class*=itooltip-]:not(.itooltip-light).itooltip-inner * {
  color: var(--bs-white);
}
.lift {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  transform: translateY(0);
  transition: all 0.3s ease;
}
.lift:hover {
  transform: translateY(-0.4rem);
  box-shadow: 0rem 0.25rem 1.25rem rgba(52, 63, 82, 0.1);
}
.cursor-light a {
  cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:%23fff;opacity:0.9;%7D.cls-2%7Bfill:%23262b32;%7D%3C/style%3E%3C/defs%3E%3Ccircle class='cls-1' cx='25' cy='25' r='25'/%3E%3Cpath class='cls-2' d='M21.79,26.79,17,31.59V30a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,16,35h4a1,1,0,0,0,0-2H18.41l4.8-4.79a1,1,0,0,0-1.42-1.42Z'/%3E%3Cpath class='cls-2' d='M34.92,15.62a1,1,0,0,0-.54-.54A1,1,0,0,0,34,15H30a1,1,0,0,0,0,2h1.59l-4.8,4.79a1,1,0,0,0,0,1.41h0a1,1,0,0,0,1.41,0h0L33,18.41V20a1,1,0,0,0,2,0V16A1,1,0,0,0,34.92,15.62Z'/%3E%3C/svg%3E"), auto;
}
.cursor-dark a {
  cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:%23262b32;opacity:0.9;%7D.cls-2%7Bfill:%23fff;%7D%3C/style%3E%3C/defs%3E%3Ccircle class='cls-1' cx='25' cy='25' r='25'/%3E%3Cpath class='cls-2' d='M21.79,26.79,17,31.59V30a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,16,35h4a1,1,0,0,0,0-2H18.41l4.8-4.79a1,1,0,0,0-1.42-1.42Z'/%3E%3Cpath class='cls-2' d='M34.92,15.62a1,1,0,0,0-.54-.54A1,1,0,0,0,34,15H30a1,1,0,0,0,0,2h1.59l-4.8,4.79a1,1,0,0,0,0,1.41h0a1,1,0,0,0,1.41,0h0L33,18.41V20a1,1,0,0,0,2,0V16A1,1,0,0,0,34.92,15.62Z'/%3E%3C/svg%3E"), auto;
}
.cursor-primary a {
  cursor: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='50' height='50' viewBox='0 0 50 50'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:%233f78e0;opacity:0.9;%7D.cls-2%7Bfill:%23fff;%7D%3C/style%3E%3C/defs%3E%3Ccircle class='cls-1' cx='25' cy='25' r='25'/%3E%3Cpath class='cls-2' d='M21.79,26.79,17,31.59V30a1,1,0,0,0-2,0v4a1,1,0,0,0,.08.38,1,1,0,0,0,.54.54A1,1,0,0,0,16,35h4a1,1,0,0,0,0-2H18.41l4.8-4.79a1,1,0,0,0-1.42-1.42Z'/%3E%3Cpath class='cls-2' d='M34.92,15.62a1,1,0,0,0-.54-.54A1,1,0,0,0,34,15H30a1,1,0,0,0,0,2h1.59l-4.8,4.79a1,1,0,0,0,0,1.41h0a1,1,0,0,0,1.41,0h0L33,18.41V20a1,1,0,0,0,2,0V16A1,1,0,0,0,34.92,15.62Z'/%3E%3C/svg%3E"), auto;
}
.goverlay {
  background: rgba(30, 34, 40, 0.9);
}
.glightbox-mobile .goverlay {
  background: rgba(30, 34, 40, 0.9);
}
.glightbox-clean .gclose,
.glightbox-clean .gnext,
.glightbox-clean .gprev {
  border: 0;
  background: rgba(0, 0, 0, 0.3);
  color: var(--bs-white);
  font-size: 1.2rem;
  width: 2.2rem;
  height: 2.2rem;
  line-height: 2.2rem;
  border-radius: 100%;
  margin-top: 0;
  padding: 0;
  box-shadow: none;
  transition: background 0.2s ease-in-out;
  display: flex;
  justify-content: center;
  align-items: center;
}
.glightbox-clean .gprev:before,
.glightbox-clean .gnext:before {
  font-family: "Unicons";
}
.glightbox-clean .gprev:hover,
.glightbox-clean .gnext:hover {
  background: rgba(0, 0, 0, 0.5);
}
.glightbox-clean .gprev:after,
.glightbox-clean .gnext:after {
  display: none;
}
.glightbox-clean .gclose {
  top: 0.75rem;
  right: 0.75rem;
}
.glightbox-clean .gclose:hover {
  background: rgba(0, 0, 0, 0.5);
}
.glightbox-clean .gclose:after {
  font-family: "Unicons";
  content: "\ed3b";
}
.glightbox-clean .gprev {
  left: 0.75rem;
}
.glightbox-clean .gprev:before {
  content: "\e949";
}
.glightbox-clean .gnext {
  right: 0.75rem;
}
.glightbox-clean .gnext:before {
  content: "\e94c";
}
.glightbox-clean .gprev svg,
.glightbox-clean .gnext svg,
.glightbox-clean .gclose svg {
  display: none;
}
.glightbox-clean .gprev.disabled,
.glightbox-clean .gnext.disabled,
.glightbox-clean .gclose.disabled {
  display: none;
}
.glightbox-clean .gslide-media {
  box-shadow: none;
}
.glightbox-clean .gslide-description {
  background: none;
}
.glightbox-clean .gdesc-inner {
  padding: 1rem 0 1rem 0;
  text-align: center;
}
.glightbox-clean .gdesc-inner .gslide-title {
  margin: 0;
}
.glightbox-clean .gdesc-inner .gslide-title+.gslide-desc {
  margin-top: 0.3rem;
}
.glightbox-clean .gdesc-inner .gslide-title,
.glightbox-clean .gdesc-inner .gslide-desc {
  color: var(--bs-white);
}
@media (min-width: 768px) {
  .glightbox-clean .gprev,
  .glightbox-clean .gnext {
    transform: translateY(-50%);
    top: 50%;
  }
}
.gbtn.focused {
  outline: none;
}
.gvideo .plyr {
  border-radius: 0 !important;
}
.gslide-image img {
  max-height: 100vh;
}
video.player {
  max-width: 100%;
}
.plyr {
  border-radius: 0.4rem;
  position: relative;
  z-index: 2;
}
.plyr__control--overlaid {
  border: 0;
  padding: 1.25rem;
  background: var(--bs-white);
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  color: #343f52;
  opacity: 1;
}
.plyr__control--overlaid:focus,
.plyr__control--overlaid:hover {
  background: var(--bs-white) !important;
  color: var(--bs-primary) !important;
  box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04);
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .plyr__control--overlaid:focus,
  .plyr__control--overlaid:hover {
    transition: none;
  }
}
.plyr--video .plyr__controls {
  background: linear-gradient(transparent, rgba(30, 34, 40, 0.2));
}
.plyr--video .plyr__controls .plyr__control.plyr__tab-focus,
.plyr--video .plyr__controls .plyr__control:hover,
.plyr--video .plyr__controls .plyr__control[aria-expanded=true] {
  background: var(--bs-primary);
}
.plyr--full-ui input[type=range] {
  color: var(--bs-primary);
}
.plyr__control--overlaid::before,
.plyr__control--overlaid::after,
.btn-circle.ripple::before,
.btn-circle.ripple::after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border-radius: 50%;
  background: var(--bs-white);
  opacity: 0.8;
  animation: ripple-1 2s infinite ease-in-out;
  z-index: -1;
}
.plyr__control--overlaid::after,
.btn-circle.ripple::after {
  opacity: 0.6;
  animation: ripple-2 2s infinite ease-in-out;
  animation-delay: 0.5s;
}
.plyr--video.plyr--menu-open {
  overflow: hidden;
}
.btn-blue.btn-circle.ripple::before,
.btn-blue.btn-circle.ripple::after {
  background: var(--bs-blue);
}
.btn-sky.btn-circle.ripple::before,
.btn-sky.btn-circle.ripple::after {
  background: var(--bs-sky);
}
.btn-purple.btn-circle.ripple::before,
.btn-purple.btn-circle.ripple::after {
  background: var(--bs-purple);
}
.btn-grape.btn-circle.ripple::before,
.btn-grape.btn-circle.ripple::after {
  background: var(--bs-grape);
}
.btn-violet.btn-circle.ripple::before,
.btn-violet.btn-circle.ripple::after {
  background: var(--bs-violet);
}
.btn-pink.btn-circle.ripple::before,
.btn-pink.btn-circle.ripple::after {
  background: var(--bs-pink);
}
.btn-fuchsia.btn-circle.ripple::before,
.btn-fuchsia.btn-circle.ripple::after {
  background: var(--bs-fuchsia);
}
.btn-red.btn-circle.ripple::before,
.btn-red.btn-circle.ripple::after {
  background: var(--bs-red);
}
.btn-orange.btn-circle.ripple::before,
.btn-orange.btn-circle.ripple::after {
  background: var(--bs-orange);
}
.btn-yellow.btn-circle.ripple::before,
.btn-yellow.btn-circle.ripple::after {
  background: var(--bs-yellow);
}
.btn-green.btn-circle.ripple::before,
.btn-green.btn-circle.ripple::after {
  background: var(--bs-green);
}
.btn-leaf.btn-circle.ripple::before,
.btn-leaf.btn-circle.ripple::after {
  background: var(--bs-leaf);
}
.btn-aqua.btn-circle.ripple::before,
.btn-aqua.btn-circle.ripple::after {
  background: var(--bs-aqua);
}
.btn-navy.btn-circle.ripple::before,
.btn-navy.btn-circle.ripple::after {
  background: var(--bs-navy);
}
.btn-ash.btn-circle.ripple::before,
.btn-ash.btn-circle.ripple::after {
  background: var(--bs-ash);
}
.btn-white.btn-circle.ripple::before,
.btn-white.btn-circle.ripple::after {
  background: var(--bs-white);
}
.btn-light.btn-circle.ripple::before,
.btn-light.btn-circle.ripple::after {
  background: var(--bs-light);
}
.btn-gray.btn-circle.ripple::before,
.btn-gray.btn-circle.ripple::after {
  background: var(--bs-gray);
}
.btn-dark.btn-circle.ripple::before,
.btn-dark.btn-circle.ripple::after {
  background: var(--bs-dark);
}
.btn-primary.btn-circle.ripple::before,
.btn-primary.btn-circle.ripple::after {
  background: var(--bs-primary);
}
.btn-soft-primary.btn-circle.ripple::before,
.btn-soft-primary.btn-circle.ripple::after {
  background-color: var(--bs-pale-primary);
}
.btn-soft-blue.btn-circle.ripple::before,
.btn-soft-blue.btn-circle.ripple::after {
  background-color: var(--bs-pale-blue);
}
.btn-soft-sky.btn-circle.ripple::before,
.btn-soft-sky.btn-circle.ripple::after {
  background-color: var(--bs-pale-sky);
}
.btn-soft-purple.btn-circle.ripple::before,
.btn-soft-purple.btn-circle.ripple::after {
  background-color: var(--bs-pale-purple);
}
.btn-soft-grape.btn-circle.ripple::before,
.btn-soft-grape.btn-circle.ripple::after {
  background-color: var(--bs-pale-grape);
}
.btn-soft-violet.btn-circle.ripple::before,
.btn-soft-violet.btn-circle.ripple::after {
  background-color: var(--bs-pale-violet);
}
.btn-soft-pink.btn-circle.ripple::before,
.btn-soft-pink.btn-circle.ripple::after {
  background-color: var(--bs-pale-pink);
}
.btn-soft-fuchsia.btn-circle.ripple::before,
.btn-soft-fuchsia.btn-circle.ripple::after {
  background-color: var(--bs-pale-fuchsia);
}
.btn-soft-red.btn-circle.ripple::before,
.btn-soft-red.btn-circle.ripple::after {
  background-color: var(--bs-pale-red);
}
.btn-soft-orange.btn-circle.ripple::before,
.btn-soft-orange.btn-circle.ripple::after {
  background-color: var(--bs-pale-orange);
}
.btn-soft-yellow.btn-circle.ripple::before,
.btn-soft-yellow.btn-circle.ripple::after {
  background-color: var(--bs-pale-yellow);
}
.btn-soft-green.btn-circle.ripple::before,
.btn-soft-green.btn-circle.ripple::after {
  background-color: var(--bs-pale-green);
}
.btn-soft-leaf.btn-circle.ripple::before,
.btn-soft-leaf.btn-circle.ripple::after {
  background-color: var(--bs-pale-leaf);
}
.btn-soft-aqua.btn-circle.ripple::before,
.btn-soft-aqua.btn-circle.ripple::after {
  background-color: var(--bs-pale-aqua);
}
.btn-soft-navy.btn-circle.ripple::before,
.btn-soft-navy.btn-circle.ripple::after {
  background-color: var(--bs-pale-navy);
}
.btn-soft-dark.btn-circle.ripple::before,
.btn-soft-dark.btn-circle.ripple::after {
  background-color: var(--bs-pale-dark);
}
.btn-soft-ash.btn-circle.ripple::before,
.btn-soft-ash.btn-circle.ripple::after {
  background-color: var(--bs-pale-ash);
}
.pricing-wrapper [class*=col-] {
  z-index: 1;
}
.pricing-wrapper [class*=col-].popular {
  z-index: 3 !important;
}
.pricing-wrapper [class*=col-] .pricing.card .card-body {
  padding-top: 3rem;
  padding-bottom: 3rem;
  margin-left: auto;
  margin-right: auto;
}
.pricing-wrapper [class*=col-] .pricing.card .card-body .icon {
  margin-bottom: 0.75rem;
}
.pricing-wrapper [class*=col-] .pricing.card .card-body .card-title {
  margin: 0 0 0.5rem 0;
  padding: 0;
}
.pricing-wrapper [class*=col-] .pricing.card .prices {
  padding: 0;
  margin: 0;
  line-height: 1;
  background: none;
  font-weight: 500;
  position: relative;
  height: 2.3rem;
}
.pricing-wrapper [class*=col-] .pricing.card .prices .price-value {
  font-size: calc(1.365rem + 1.38vw);
}
@media (min-width: 1200px) {
  .pricing-wrapper [class*=col-] .pricing.card .prices .price-value {
    font-size: 2.4rem;
  }
}
.pricing-wrapper [class*=col-] .pricing.card .prices .price-currency {
  display: inline-block;
  font-size: 1rem;
  font-weight: 500;
  padding-right: 0.2rem;
  padding-top: 0.4rem;
}
.pricing-wrapper [class*=col-] .pricing.card .prices .price-duration {
  font-size: 0.8rem;
  font-weight: 500;
  color: #60697b;
  margin-top: auto;
  margin-bottom: 0.25rem;
}
.pricing-wrapper [class*=col-] .pricing.card .prices .price-duration:before {
  content: "/";
  padding: 0;
}
.pricing-wrapper [class*=col-] .pricing.card .prices .price {
  position: absolute;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
}
.pricing-wrapper [class*=col-] .pricing.card .prices .price-hidden {
  display: none;
}
.pricing-wrapper [class*=col-] .pricing.card .prices .price-show {
  animation: priceShow 0.6s forwards;
}
.pricing-wrapper [class*=col-] .pricing.card .prices .price-hide {
  animation: priceFade 0.6s forwards;
}
.pricing-switcher-wrapper {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}
.pricing-switcher-wrapper p:last-child {
  position: relative;
}
.pricing-switcher-wrapper p:last-child .badge {
  position: absolute;
  top: -1rem;
  right: -2rem;
}
.pricing-switchers {
  width: 2rem;
  height: 1rem;
  clear: both;
  text-align: center;
  position: relative;
  background-color: rgba(30, 34, 40, 0.07);
  border-radius: 1.5rem;
  border: 0.2rem solid transparent;
  box-sizing: content-box;
}
.pricing-switchers .pricing-switcher {
  cursor: pointer;
  width: 100%;
  float: left;
  height: 1rem;
  line-height: 1rem;
  position: relative;
  z-index: 888;
  transition: 0.3s ease-in-out;
  text-transform: uppercase;
}
.pricing-switchers .pricing-switcher:nth-child(1).pricing-switcher-active~.switcher-button {
  left: 0;
}
.pricing-switchers .pricing-switcher:nth-child(2).pricing-switcher-active~.switcher-button {
  left: 50%;
}
.pricing-switchers .switcher-button {
  height: 1rem;
  width: 1rem;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 555;
  margin: 0;
  border: none;
  transition: 0.3s ease-in-out;
  border-radius: 100%;
}
.pricing-switchers .pricing-switcher.pricing-switcher-active {
  color: var(--bs-white);
}
.switcher-dark .pricing-switchers {
  background-color: rgba(var(--bs-white-rgb), 0.06);
}
@media (min-width: 992px) {
  .pricing-wrapper .popular .pricing.card {
    padding-top: 1rem;
    padding-bottom: 1rem;
    margin-top: -1rem;
  }
}
@media (min-width: 992px) {
  .process-wrapper.line [class*=col-] {
    position: relative;
  }
  .process-wrapper.line [class*=col-]:after {
    width: 100%;
    position: absolute;
    content: "";
    height: 1px;
    background: none;
    border-top: 1px solid rgba(164, 174, 198, 0.2);
    top: 1.5rem;
    z-index: 1;
    left: 3rem;
  }
  .process-wrapper.line [class*=col-]:last-child:after {
    display: none;
  }
  .process-wrapper.line.text-center [class*=col-]:before,
  .process-wrapper.line.text-center [class*=col-]:after {
    width: 50%;
    position: absolute;
    content: "";
    height: 1px;
    background: rgba(164, 174, 198, 0.2);
    border: 0;
    top: 1.5rem;
    z-index: 1;
    left: 0;
  }
  .process-wrapper.line.text-center [class*=col-]:after {
    right: 0;
    left: auto;
  }
  .process-wrapper.line.text-center [class*=col-]:first-child:before,
  .process-wrapper.line.text-center [class*=col-]:last-child:after {
    display: none;
  }
  .process-wrapper.arrow [class*=col-] {
    position: relative;
  }
  .process-wrapper.arrow [class*=col-]:before {
    content: "";
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 108.15 19.5'%3E%3Cpath fill='%23ar(--bs-primary)' d='M2.38,13.63A107.77,107.77,0,0,1,41.56,3.28C54.29,2.51,67,4.2,79.4,6.9c7.73,1.68,15.38,3.73,23,5.86a1.56,1.56,0,0,0,.83-3C89.85,6,76.35,2.5,62.54.87A111,111,0,0,0,24,2.73,119,119,0,0,0,.8,10.93c-1.81.85-.23,3.54,1.58,2.7Z'/%3E%3Cpath fill='%23ar(--bs-primary)' d='M95.51,19.27A60.35,60.35,0,0,1,107,12.41a1.58,1.58,0,0,0,1.12-1.29,1.53,1.53,0,0,0-.75-1.56,20.31,20.31,0,0,1-9-8.65,1.56,1.56,0,0,0-2.7,1.57c2.34,4,5.79,7.86,10.12,9.78l.37-2.86a62.69,62.69,0,0,0-12.25,7.18,1.6,1.6,0,0,0-.56,2.14,1.56,1.56,0,0,0,2.13.55Z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: 70% 70%;
    position: absolute;
    width: 6rem;
    height: 1rem;
    top: 0.8rem;
    left: -3rem;
    z-index: 1;
    opacity: 0.15;
  }
  .process-wrapper.arrow [class*=col-]:nth-child(odd):before {
    transform: scale(1, -1);
  }
  .process-wrapper.arrow [class*=col-]:first-child:before {
    display: none;
  }
}
.process-wrapper.line .btn-circle {
  position: relative;
  z-index: 2;
}
.timeline {
  list-style: none;
  margin: 0;
  padding: 0;
  width: 100%;
}
.timeline .timeline-item {
  position: relative;
  padding-left: 2rem;
}
.timeline .timeline-item .timeline-info {
  white-space: nowrap;
  margin-bottom: 0.5rem;
}
.timeline .timeline-item .timeline-content {
  padding-bottom: 2rem;
}
.timeline .timeline-item .timeline-content p:last-child {
  margin: 0;
}
.timeline .timeline-item .timeline-marker {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 0.6rem;
  color: var(--bs-primary);
}
.timeline .timeline-item .timeline-marker:before,
.timeline .timeline-item .timeline-marker:after {
  content: "";
  display: block;
  position: absolute;
}
.timeline .timeline-item .timeline-marker:before {
  background: currentColor;
  border-radius: 100%;
  width: 0.55rem;
  height: 0.55rem;
  top: 0.2rem;
  left: 0;
}
.timeline .timeline-item .timeline-marker:after {
  width: 1px;
  background: rgba(164, 174, 198, 0.2);
  top: 1rem;
  left: 0.25rem;
  bottom: 0;
}
.timeline .timeline-item:last-child {
  padding-bottom: 0;
}
.timeline .timeline-item:last-child .timeline-content {
  padding-bottom: 0;
}
.timeline .timeline-item:last-child .timeline-marker:after {
  content: none;
}
@media (min-width: 768px) {
  .timeline {
    display: table;
  }
  .timeline .timeline-item {
    display: table-row;
    padding: 0;
  }
  .timeline .timeline-item .timeline-info,
  .timeline .timeline-item .timeline-marker,
  .timeline .timeline-item .timeline-content {
    display: table-cell;
    vertical-align: top;
  }
  .timeline .timeline-item .timeline-info {
    text-align: right;
    padding-right: 1.5rem;
  }
  .timeline .timeline-item .timeline-marker {
    position: relative;
  }
  .timeline .timeline-item .timeline-content {
    padding-left: 1.5rem;
  }
  .timeline .timeline-item .timeline-content .timeline-title {
    margin-top: -0.25rem;
  }
}
.projects-tiles .project:first-child {
  margin-top: 0;
}
@media (min-width: 768px) {
  .projects-tiles .project {
    margin-top: 10rem;
  }
  .projects-tiles .project-details {
    padding: 2rem;
    padding-bottom: 1rem;
  }
}
@media (max-width: 767px) {
  .projects-tiles .project {
    margin-top: 5rem;
  }
}
.projects-overflow .project-details {
  width: 100%;
}
.projects-overflow .item {
  position: relative;
  margin-top: 2.5rem;
}
.projects-overflow .item:first-child {
  margin-top: 0;
}
@media (min-width: 1200px) {
  .projects-overflow .project-details {
    max-width: 24rem;
  }
}
@media (min-width: 992px) and (max-width: 1199.98px) {
  .projects-overflow .project-details {
    max-width: 20rem;
  }
}
@media (min-width: 992px) {
  .projects-overflow .project-details {
    position: absolute;
  }
  .projects-overflow .item {
    margin-top: 10rem;
  }
}
@media (max-width: 991.98px) {
  .projects-overflow .project {
    box-shadow: 0rem 0rem 1.25rem rgba(30, 34, 40, 0.04) !important;
    border-radius: 0.4rem !important;
  }
  .projects-overflow .project figure img {
    border-bottom-left-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
  }
  .projects-overflow .project-details .card {
    border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
    box-shadow: none !important;
  }
}
.projects-overflow2 .project-image {
  top: 50%;
  transform: translateY(-50%);
  z-index: 2;
}
.projects-overflow2 .item {
  position: relative;
  margin-top: 2.5rem;
}
.projects-overflow2 .item .card {
  z-index: 1;
}
.projects-overflow2 .item .card .card-body {
  padding: 4rem;
}
.projects-overflow2 .item:first-child {
  margin-top: 0;
}
@media (min-width: 1400px) {
  .projects-overflow2 .project-image {
    max-width: 30rem;
  }
}
@media (min-width: 1200px) {
  .projects-overflow2 .project-image {
    max-width: 30rem;
  }
}
@media (min-width: 992px) and (max-width: 1199.98px) {
  .projects-overflow2 .project-image {
    max-width: 25rem;
  }
}
.overlap-grid {
  display: flex;
  flex-wrap: wrap;
  position: relative;
}
@media (min-width: 768px) {
  .overlap-grid-2 .item:nth-child(1) {
    width: 70%;
    margin-top: 0;
    margin-left: 30%;
    z-index: 3;
  }
  .overlap-grid-2 .item:nth-child(2) {
    width: 55%;
    margin-top: -45%;
    margin-left: 0;
    z-index: 4;
  }
  .overlap-grid-2 .item:nth-child(3) {
    width: 60%;
    margin-top: -35%;
    margin-left: 40%;
    z-index: 2;
  }
}
@media (max-width: 767px) {
  .overlap-grid-2 .item {
    width: 100%;
  }
  .overlap-grid-2 .item+.item {
    margin-top: 1.5rem;
  }
}
.item figure,
.swiper-slide figure {
  position: relative;
}
.item figure .item-link,
.item figure .item-like,
.item figure .item-view,
.swiper-slide figure .item-link,
.swiper-slide figure .item-like,
.swiper-slide figure .item-view {
  opacity: 0;
  position: absolute;
  right: 0;
  bottom: 1rem;
  width: 2.2rem;
  height: 2.2rem;
  line-height: 2.2rem;
  z-index: 1;
  transition: all 0.3s ease-in-out;
  opacity: 0;
  color: #343f52;
  background: rgba(var(--bs-white-rgb), 0.7);
  box-shadow: 0rem 0.25rem 0.75rem rgba(30, 34, 40, 0.02);
  font-size: 1rem;
  border-radius: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.item figure .item-link:hover,
.item figure .item-like:hover,
.item figure .item-view:hover,
.swiper-slide figure .item-link:hover,
.swiper-slide figure .item-like:hover,
.swiper-slide figure .item-view:hover {
  background: rgba(var(--bs-white-rgb), 0.9);
}
.item:hover figure .item-link,
.item:hover figure .item-like,
.item:hover figure .item-view,
.swiper-slide:hover figure .item-link,
.swiper-slide:hover figure .item-like,
.swiper-slide:hover figure .item-view {
  opacity: 1;
  right: 1rem;
}
.item figure .item-like,
.item figure .item-view,
.swiper-slide figure .item-like,
.swiper-slide figure .item-view {
  background: var(--bs-white);
}
.item figure .item-like,
.swiper-slide figure .item-like {
  bottom: auto;
  top: 1rem;
}
.item figure .item-view,
.swiper-slide figure .item-view {
  bottom: auto;
  top: 3.7rem;
}
.item figure .item-cart,
.swiper-slide figure .item-cart {
  opacity: 0;
  position: absolute;
  bottom: -2rem;
  padding: 0.8rem;
  margin: 0;
  left: 0;
  width: 100%;
  height: auto;
  color: var(--bs-white);
  background: rgba(38, 43, 50, 0.8);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  text-align: center;
  transition: all 0.3s ease-in-out;
  font-size: 0.85rem;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
}
.item figure .item-cart i,
.swiper-slide figure .item-cart i {
  font-weight: normal;
  margin-right: 0.25rem;
  margin-top: -0.05rem;
}
.item figure .item-cart:hover,
.swiper-slide figure .item-cart:hover {
  background: rgba(38, 43, 50, 0.9);
}
.item:hover figure .item-cart,
.swiper-slide:hover figure .item-cart {
  opacity: 1;
  bottom: 0;
}
.shop figure {
  overflow: hidden;
  transform: translate3d(0px, 0px, 0px);
}
.price {
  margin: 0;
}
.price del {
  color: #9499a3;
}
.price ins {
  text-decoration: none;
  color: #e2626b;
}
.shopping-cart .shopping-cart-item .price {
  margin-bottom: 0.4rem;
}
table.shopping-cart td {
  vertical-align: middle;
  padding-top: 1.2rem;
  padding-bottom: 1.2rem;
}
.shape.rellax {
  position: absolute;
}
.shape.rellax {
  z-index: 1;
}
.position-relative .shape.rellax+figure {
  position: relative;
  z-index: 2;
}
.bg-dot,
.bg-line {
  opacity: 0.5;
}
.bg-dot {
  background-size: 0.75rem 0.75rem;
}
.bg-dot.blue {
  background-image: radial-gradient(var(--bs-blue) 2px, transparent 2.5px);
}
.bg-dot.sky {
  background-image: radial-gradient(var(--bs-sky) 2px, transparent 2.5px);
}
.bg-dot.purple {
  background-image: radial-gradient(var(--bs-purple) 2px, transparent 2.5px);
}
.bg-dot.grape {
  background-image: radial-gradient(var(--bs-grape) 2px, transparent 2.5px);
}
.bg-dot.violet {
  background-image: radial-gradient(var(--bs-violet) 2px, transparent 2.5px);
}
.bg-dot.pink {
  background-image: radial-gradient(var(--bs-pink) 2px, transparent 2.5px);
}
.bg-dot.fuchsia {
  background-image: radial-gradient(var(--bs-fuchsia) 2px, transparent 2.5px);
}
.bg-dot.red {
  background-image: radial-gradient(var(--bs-red) 2px, transparent 2.5px);
}
.bg-dot.orange {
  background-image: radial-gradient(var(--bs-orange) 2px, transparent 2.5px);
}
.bg-dot.yellow {
  background-image: radial-gradient(var(--bs-yellow) 2px, transparent 2.5px);
}
.bg-dot.green {
  background-image: radial-gradient(var(--bs-green) 2px, transparent 2.5px);
}
.bg-dot.leaf {
  background-image: radial-gradient(var(--bs-leaf) 2px, transparent 2.5px);
}
.bg-dot.aqua {
  background-image: radial-gradient(var(--bs-aqua) 2px, transparent 2.5px);
}
.bg-dot.navy {
  background-image: radial-gradient(var(--bs-navy) 2px, transparent 2.5px);
}
.bg-dot.ash {
  background-image: radial-gradient(var(--bs-ash) 2px, transparent 2.5px);
}
.bg-dot.white {
  background-image: radial-gradient(var(--bs-white) 2px, transparent 2.5px);
}
.bg-dot.light {
  background-image: radial-gradient(var(--bs-light) 2px, transparent 2.5px);
}
.bg-dot.gray {
  background-image: radial-gradient(var(--bs-gray) 2px, transparent 2.5px);
}
.bg-dot.dark {
  background-image: radial-gradient(var(--bs-dark) 2px, transparent 2.5px);
}
.bg-dot.primary {
  background-image: radial-gradient(var(--bs-primary) 2px, transparent 2.5px);
}
.bg-line.blue {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-blue) 1.6px, var(--bs-blue) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.sky {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-sky) 1.6px, var(--bs-sky) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.purple {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-purple) 1.6px, var(--bs-purple) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.grape {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-grape) 1.6px, var(--bs-grape) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.violet {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-violet) 1.6px, var(--bs-violet) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.pink {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-pink) 1.6px, var(--bs-pink) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.fuchsia {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-fuchsia) 1.6px, var(--bs-fuchsia) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.red {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-red) 1.6px, var(--bs-red) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.orange {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-orange) 1.6px, var(--bs-orange) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.yellow {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-yellow) 1.6px, var(--bs-yellow) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.green {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-green) 1.6px, var(--bs-green) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.leaf {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-leaf) 1.6px, var(--bs-leaf) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.aqua {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-aqua) 1.6px, var(--bs-aqua) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.navy {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-navy) 1.6px, var(--bs-navy) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.ash {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-ash) 1.6px, var(--bs-ash) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.white {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-white) 1.6px, var(--bs-white) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.light {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-light) 1.6px, var(--bs-light) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.gray {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-gray) 1.6px, var(--bs-gray) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.dark {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-dark) 1.6px, var(--bs-dark) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
.bg-line.primary {
  background: repeating-linear-gradient(-55deg, rgba(var(--bs-white-rgb), 0) 0.8px, var(--bs-primary) 1.6px, var(--bs-primary) 3px, rgba(var(--bs-white-rgb), 0) 3.8px, rgba(var(--bs-white-rgb), 0) 10px);
}
@media (max-width: 575.98px) {
  .shape {
    display: none;
  }
}
.shape.blue .svg-fill {
  fill: var(--bs-blue);
}
.shape.soft-blue .svg-fill {
  fill: var(--bs-soft-blue);
}
.shape.pale-blue .svg-fill {
  fill: var(--bs-pale-blue);
}
.shape.sky .svg-fill {
  fill: var(--bs-sky);
}
.shape.soft-sky .svg-fill {
  fill: var(--bs-soft-sky);
}
.shape.pale-sky .svg-fill {
  fill: var(--bs-pale-sky);
}
.shape.purple .svg-fill {
  fill: var(--bs-purple);
}
.shape.soft-purple .svg-fill {
  fill: var(--bs-soft-purple);
}
.shape.pale-purple .svg-fill {
  fill: var(--bs-pale-purple);
}
.shape.grape .svg-fill {
  fill: var(--bs-grape);
}
.shape.soft-grape .svg-fill {
  fill: var(--bs-soft-grape);
}
.shape.pale-grape .svg-fill {
  fill: var(--bs-pale-grape);
}
.shape.violet .svg-fill {
  fill: var(--bs-violet);
}
.shape.soft-violet .svg-fill {
  fill: var(--bs-soft-violet);
}
.shape.pale-violet .svg-fill {
  fill: var(--bs-pale-violet);
}
.shape.pink .svg-fill {
  fill: var(--bs-pink);
}
.shape.soft-pink .svg-fill {
  fill: var(--bs-soft-pink);
}
.shape.pale-pink .svg-fill {
  fill: var(--bs-pale-pink);
}
.shape.fuchsia .svg-fill {
  fill: var(--bs-fuchsia);
}
.shape.soft-fuchsia .svg-fill {
  fill: var(--bs-soft-fuchsia);
}
.shape.pale-fuchsia .svg-fill {
  fill: var(--bs-pale-fuchsia);
}
.shape.red .svg-fill {
  fill: var(--bs-red);
}
.shape.soft-red .svg-fill {
  fill: var(--bs-soft-red);
}
.shape.pale-red .svg-fill {
  fill: var(--bs-pale-red);
}
.shape.orange .svg-fill {
  fill: var(--bs-orange);
}
.shape.soft-orange .svg-fill {
  fill: var(--bs-soft-orange);
}
.shape.pale-orange .svg-fill {
  fill: var(--bs-pale-orange);
}
.shape.yellow .svg-fill {
  fill: var(--bs-yellow);
}
.shape.soft-yellow .svg-fill {
  fill: var(--bs-soft-yellow);
}
.shape.pale-yellow .svg-fill {
  fill: var(--bs-pale-yellow);
}
.shape.green .svg-fill {
  fill: var(--bs-green);
}
.shape.soft-green .svg-fill {
  fill: var(--bs-soft-green);
}
.shape.pale-green .svg-fill {
  fill: var(--bs-pale-green);
}
.shape.leaf .svg-fill {
  fill: var(--bs-leaf);
}
.shape.soft-leaf .svg-fill {
  fill: var(--bs-soft-leaf);
}
.shape.pale-leaf .svg-fill {
  fill: var(--bs-pale-leaf);
}
.shape.aqua .svg-fill {
  fill: var(--bs-aqua);
}
.shape.soft-aqua .svg-fill {
  fill: var(--bs-soft-aqua);
}
.shape.pale-aqua .svg-fill {
  fill: var(--bs-pale-aqua);
}
.shape.navy .svg-fill {
  fill: var(--bs-navy);
}
.shape.soft-navy .svg-fill {
  fill: var(--bs-soft-navy);
}
.shape.pale-navy .svg-fill {
  fill: var(--bs-pale-navy);
}
.shape.ash .svg-fill {
  fill: var(--bs-ash);
}
.shape.soft-ash .svg-fill {
  fill: var(--bs-soft-ash);
}
.shape.pale-ash .svg-fill {
  fill: var(--bs-pale-ash);
}
.shape.white .svg-fill {
  fill: var(--bs-white);
}
.shape.soft-white .svg-fill {
  fill: var(--bs-soft-white);
}
.shape.pale-white .svg-fill {
  fill: var(--bs-pale-white);
}
.shape.light .svg-fill {
  fill: var(--bs-light);
}
.shape.soft-light .svg-fill {
  fill: var(--bs-soft-light);
}
.shape.pale-light .svg-fill {
  fill: var(--bs-pale-light);
}
.shape.gray .svg-fill {
  fill: var(--bs-gray);
}
.shape.soft-gray .svg-fill {
  fill: var(--bs-soft-gray);
}
.shape.pale-gray .svg-fill {
  fill: var(--bs-pale-gray);
}
.shape.dark .svg-fill {
  fill: var(--bs-dark);
}
.shape.soft-dark .svg-fill {
  fill: var(--bs-soft-dark);
}
.shape.pale-dark .svg-fill {
  fill: var(--bs-pale-dark);
}
.shape.primary .svg-fill {
  fill: var(--bs-primary);
}
.shape.soft-primary .svg-fill {
  fill: var(--bs-soft-primary);
}
.shape.pale-primary .svg-fill {
  fill: var(--bs-pale-primary);
}
.classic-view .post {
  margin-bottom: 2rem;
}
.classic-view .post-header {
  margin-bottom: 0.9rem;
}
.blog.single .post {
  margin-bottom: 0;
}
.post-content {
  position: relative;
}
@media (min-width: 768px) {
  .classic-view article .card-body {
    padding: 2rem 2.5rem 1.25rem;
  }
  .classic-view article .card-footer {
    padding: 1.25rem 2.5rem 1.25rem;
  }
  .blog.single .card-body {
    padding: 2.8rem 3rem 2.8rem;
  }
  .grid-view article .card-body {
    padding: 1.75rem 1.75rem 1rem 1.75rem;
  }
  .grid-view article .card-footer {
    padding: 1.25rem 1.75rem 1.25rem;
  }
}
@media (max-width: 767px) {
  .classic-view article .card-body,
  .grid-view article .card-body {
    padding-bottom: 1rem;
  }
}
aside:not(.doc-sidebar) .widget+.widget {
  margin-top: 2rem;
}
footer [class*=col-] .widget+.widget {
  margin-top: 1rem;
}
.sticky-sidebar {
  position: sticky;
  top: 0;
  height: 100%;
}
.sidebar nav .nav-link {
  font-weight: 500;
  padding: 0;
  font-size: inherit;
  line-height: inherit;
}
.sidebar nav .nav-link.active {
  color: var(--bs-primary) !important;
}
#comments {
  margin: 0;
  position: relative;
}
#comments ol.commentlist {
  list-style: none;
  margin: 0;
  padding: 0;
}
#comments ol.commentlist li.comment {
  margin-top: 2rem;
}
#comments ol.commentlist li.comment:first-child {
  margin: 0;
}
#comments ul.children {
  margin: 2rem 0 0 0;
  overflow: inherit;
  padding: 0 0 0 3.5rem;
  list-style: none;
}
#comments ul.children li.comment {
  position: relative;
}
#comments ul.children li.comment:before {
  display: block;
  font-family: "Custom";
  content: "\e904";
  font-size: calc(1.325rem + 0.9vw);
  position: absolute;
  left: -2.5rem;
  top: -1.25rem;
  color: rgba(164, 174, 198, 0.25);
}
@media (min-width: 1200px) {
  #comments ul.children li.comment:before {
    font-size: 2rem;
  }
}
#comments .comment-author,
#comments .post-meta {
  margin: 0;
}
#comments .comment-author {
  margin-bottom: 0.2rem;
}
.author-info h6,
.author-info .h6 {
  margin-bottom: 0.2rem;
}
#comments .comment-header {
  margin-bottom: 0.5rem;
}
#comments .post-meta li:before {
  margin: 0 0.6rem 0 0.4rem;
}
.user-avatar {
  margin-right: 1rem;
  width: 3rem;
  height: 3rem;
  position: relative;
  border-radius: 100%;
}
@media (max-width: 767px) {
  #comments .user-avatar {
    display: none;
  }
  #comments ul.children {
    padding-left: 1.5rem;
  }
  #comments ul.children li.comment:before {
    display: none;
  }
}
.wrapper-border {
  border-bottom: 1px solid rgba(164, 174, 198, 0.2);
}
.wrapper-border.bg-dark {
  border-color: rgba(var(--bs-white-rgb), 0.08);
}
footer.bg-dark,
.footer.bg-dark {
  background: #21262c !important;
}
.image-wrapper {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  position: relative;
  z-index: 0;
}
.image-wrapper:not(.mobile) {
  background-attachment: fixed !important;
}
.image-wrapper.bg-auto {
  background-size: auto;
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: scroll !important;
}
.image-wrapper.bg-full {
  background-size: 100%;
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: scroll !important;
}
.image-wrapper.bg-cover {
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
  background-attachment: scroll !important;
}
.image-wrapper.bg-overlay:before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 100%;
  background: rgba(30, 34, 40, 0.5);
}
.image-wrapper.bg-overlay-300:before {
  background: rgba(30, 34, 40, 0.3);
}
.image-wrapper.bg-overlay-400:before {
  background: rgba(30, 34, 40, 0.4);
}
.image-wrapper.bg-overlay-light-300:before {
  background: rgba(var(--bs-white-rgb), 0.3);
}
.image-wrapper.bg-overlay-light-400:before {
  background: rgba(var(--bs-white-rgb), 0.4);
}
.image-wrapper.bg-overlay-light-500:before {
  background: rgba(var(--bs-white-rgb), 0.5);
}
.image-wrapper.bg-overlay-light-600:before {
  background: rgba(var(--bs-white-rgb), 0.6);
}
.image-wrapper.bg-overlay:not(.bg-content) *,
.image-wrapper.bg-overlay.bg-content .content {
  position: relative;
  z-index: 2;
}
.image-wrapper.bg-overlay .form-floating>label {
  position: absolute;
}
.image-wrapper.card:before {
  border-radius: 0.4rem !important;
}
@media (max-width: 991.98px) {
  .image-wrapper.bg-full {
    background-size: cover !important;
  }
}
@media (max-width: 767px) {
  .bg-map {
    background: none !important;
  }
}
@media (max-width: 575.98px) {
  .bg-xs-none {
    background-image: none !important;
  }
}
@media (max-width: 991.98px) {
  .image-wrapper.bg-cover {
    min-height: 25rem;
  }
}
@media (max-width: 767px) {
  .image-wrapper.bg-cover {
    min-height: 20rem;
  }
}
.bg-lines {
  position: relative;
}
.bg-lines:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url(../../assets/img/photos/lines.png) no-repeat center center;
  background-size: cover;
  pointer-events: none;
}
.video-wrapper {
  position: relative;
  overflow: hidden;
}
.video-wrapper.bg-overlay:after {
  content: "";
  display: block;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: rgba(30, 34, 40, 0.4);
  z-index: 1;
}
.video-wrapper.bg-overlay.bg-overlay-gradient:after {
  opacity: 0.4;
  background: linear-gradient(120deg, #542461 50%, #332487 100%);
}
.video-wrapper video {
  -o-object-fit: cover;
  object-fit: cover;
  display: block;
  position: absolute;
  height: 100% !important;
  width: 100% !important;
  max-width: 100% !important;
  top: 0;
  left: 0;
  background: #000;
}
.video-wrapper video:-webkit-media-controls {
  display: none !important;
}
.video-wrapper .video-content {
  position: absolute;
  z-index: 2;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  flex-direction: column;
}
.pattern-wrapper {
  background-repeat: repeat;
  background-attachment: fixed;
}
.wrapper.bg-blue.angled:after,
.wrapper.bg-blue.angled:before {
  border-color: var(--bs-blue);
}
.wrapper.bg-sky.angled:after,
.wrapper.bg-sky.angled:before {
  border-color: var(--bs-sky);
}
.wrapper.bg-purple.angled:after,
.wrapper.bg-purple.angled:before {
  border-color: var(--bs-purple);
}
.wrapper.bg-grape.angled:after,
.wrapper.bg-grape.angled:before {
  border-color: var(--bs-grape);
}
.wrapper.bg-violet.angled:after,
.wrapper.bg-violet.angled:before {
  border-color: var(--bs-violet);
}
.wrapper.bg-pink.angled:after,
.wrapper.bg-pink.angled:before {
  border-color: var(--bs-pink);
}
.wrapper.bg-fuchsia.angled:after,
.wrapper.bg-fuchsia.angled:before {
  border-color: var(--bs-fuchsia);
}
.wrapper.bg-red.angled:after,
.wrapper.bg-red.angled:before {
  border-color: var(--bs-red);
}
.wrapper.bg-orange.angled:after,
.wrapper.bg-orange.angled:before {
  border-color: var(--bs-orange);
}
.wrapper.bg-yellow.angled:after,
.wrapper.bg-yellow.angled:before {
  border-color: var(--bs-yellow);
}
.wrapper.bg-green.angled:after,
.wrapper.bg-green.angled:before {
  border-color: var(--bs-green);
}
.wrapper.bg-leaf.angled:after,
.wrapper.bg-leaf.angled:before {
  border-color: var(--bs-leaf);
}
.wrapper.bg-aqua.angled:after,
.wrapper.bg-aqua.angled:before {
  border-color: var(--bs-aqua);
}
.wrapper.bg-navy.angled:after,
.wrapper.bg-navy.angled:before {
  border-color: var(--bs-navy);
}
.wrapper.bg-ash.angled:after,
.wrapper.bg-ash.angled:before {
  border-color: var(--bs-ash);
}
.wrapper.bg-white.angled:after,
.wrapper.bg-white.angled:before {
  border-color: var(--bs-white);
}
.wrapper.bg-light.angled:after,
.wrapper.bg-light.angled:before {
  border-color: var(--bs-light);
}
.wrapper.bg-gray.angled:after,
.wrapper.bg-gray.angled:before {
  border-color: var(--bs-gray);
}
.wrapper.bg-dark.angled:after,
.wrapper.bg-dark.angled:before {
  border-color: var(--bs-dark);
}
.wrapper.bg-primary.angled:after,
.wrapper.bg-primary.angled:before {
  border-color: var(--bs-primary);
}
.wrapper.bg-soft-primary.angled:after,
.wrapper.bg-soft-primary.angled:before {
  border-color: var(--bs-soft-primary);
}
.wrapper.bg-soft-blue.angled:after,
.wrapper.bg-soft-blue.angled:before {
  border-color: var(--bs-soft-blue);
}
.wrapper.bg-soft-sky.angled:after,
.wrapper.bg-soft-sky.angled:before {
  border-color: var(--bs-soft-sky);
}
.wrapper.bg-soft-purple.angled:after,
.wrapper.bg-soft-purple.angled:before {
  border-color: var(--bs-soft-purple);
}
.wrapper.bg-soft-grape.angled:after,
.wrapper.bg-soft-grape.angled:before {
  border-color: var(--bs-soft-grape);
}
.wrapper.bg-soft-violet.angled:after,
.wrapper.bg-soft-violet.angled:before {
  border-color: var(--bs-soft-violet);
}
.wrapper.bg-soft-pink.angled:after,
.wrapper.bg-soft-pink.angled:before {
  border-color: var(--bs-soft-pink);
}
.wrapper.bg-soft-fuchsia.angled:after,
.wrapper.bg-soft-fuchsia.angled:before {
  border-color: var(--bs-soft-fuchsia);
}
.wrapper.bg-soft-red.angled:after,
.wrapper.bg-soft-red.angled:before {
  border-color: var(--bs-soft-red);
}
.wrapper.bg-soft-orange.angled:after,
.wrapper.bg-soft-orange.angled:before {
  border-color: var(--bs-soft-orange);
}
.wrapper.bg-soft-yellow.angled:after,
.wrapper.bg-soft-yellow.angled:before {
  border-color: var(--bs-soft-yellow);
}
.wrapper.bg-soft-green.angled:after,
.wrapper.bg-soft-green.angled:before {
  border-color: var(--bs-soft-green);
}
.wrapper.bg-soft-leaf.angled:after,
.wrapper.bg-soft-leaf.angled:before {
  border-color: var(--bs-soft-leaf);
}
.wrapper.bg-soft-aqua.angled:after,
.wrapper.bg-soft-aqua.angled:before {
  border-color: var(--bs-soft-aqua);
}
.wrapper.bg-soft-navy.angled:after,
.wrapper.bg-soft-navy.angled:before {
  border-color: var(--bs-soft-navy);
}
.wrapper.bg-soft-ash.angled:after,
.wrapper.bg-soft-ash.angled:before {
  border-color: var(--bs-soft-ash);
}
.wrapper.bg-soft-gray.angled:after,
.wrapper.bg-soft-gray.angled:before {
  border-color: var(--bs-soft-gray);
}
.wrapper.bg-pale-primary.angled:after,
.wrapper.bg-pale-primary.angled:before {
  border-color: var(--bs-pale-primary);
}
.wrapper.bg-pale-blue.angled:after,
.wrapper.bg-pale-blue.angled:before {
  border-color: var(--bs-pale-blue);
}
.wrapper.bg-pale-sky.angled:after,
.wrapper.bg-pale-sky.angled:before {
  border-color: var(--bs-pale-sky);
}
.wrapper.bg-pale-purple.angled:after,
.wrapper.bg-pale-purple.angled:before {
  border-color: var(--bs-pale-purple);
}
.wrapper.bg-pale-grape.angled:after,
.wrapper.bg-pale-grape.angled:before {
  border-color: var(--bs-pale-grape);
}
.wrapper.bg-pale-violet.angled:after,
.wrapper.bg-pale-violet.angled:before {
  border-color: var(--bs-pale-violet);
}
.wrapper.bg-pale-pink.angled:after,
.wrapper.bg-pale-pink.angled:before {
  border-color: var(--bs-pale-pink);
}
.wrapper.bg-pale-fuchsia.angled:after,
.wrapper.bg-pale-fuchsia.angled:before {
  border-color: var(--bs-pale-fuchsia);
}
.wrapper.bg-pale-red.angled:after,
.wrapper.bg-pale-red.angled:before {
  border-color: var(--bs-pale-red);
}
.wrapper.bg-pale-orange.angled:after,
.wrapper.bg-pale-orange.angled:before {
  border-color: var(--bs-pale-orange);
}
.wrapper.bg-pale-yellow.angled:after,
.wrapper.bg-pale-yellow.angled:before {
  border-color: var(--bs-pale-yellow);
}
.wrapper.bg-pale-green.angled:after,
.wrapper.bg-pale-green.angled:before {
  border-color: var(--bs-pale-green);
}
.wrapper.bg-pale-leaf.angled:after,
.wrapper.bg-pale-leaf.angled:before {
  border-color: var(--bs-pale-leaf);
}
.wrapper.bg-pale-aqua.angled:after,
.wrapper.bg-pale-aqua.angled:before {
  border-color: var(--bs-pale-aqua);
}
.wrapper.bg-pale-navy.angled:after,
.wrapper.bg-pale-navy.angled:before {
  border-color: var(--bs-pale-navy);
}
.wrapper.bg-pale-dark.angled:after,
.wrapper.bg-pale-dark.angled:before {
  border-color: var(--bs-pale-dark);
}
.wrapper.bg-pale-ash.angled:after,
.wrapper.bg-pale-ash.angled:before {
  border-color: var(--bs-pale-ash);
}
.wrapper.angled {
  position: relative;
  border: 0;
}
.wrapper.angled:before,
.wrapper.angled:after {
  content: "";
  display: block;
  position: absolute;
  right: 0;
  z-index: 0;
  border-width: 0;
  border-style: solid;
  border-top-color: transparent !important;
  border-bottom-color: transparent !important;
}
.wrapper.angled.lower-end:after {
  border-left-color: transparent !important;
  border-right-width: 100vw;
  border-bottom-width: 4rem;
  bottom: -4rem;
}
.wrapper.angled.lower-start:after {
  border-right-color: transparent !important;
  border-left-width: 100vw;
  border-bottom-width: 4rem;
  bottom: -4rem;
}
.wrapper.angled.upper-end:before {
  border-left-color: transparent !important;
  border-right-width: 100vw;
  border-top-width: 4rem;
  top: -4rem;
}
.wrapper.angled.upper-start:before {
  border-right-color: transparent !important;
  border-left-width: 100vw;
  border-top-width: 4rem;
  top: -4rem;
}
footer.bg-dark.angled.lower-end:after,
footer.bg-dark.angled.upper-end:before {
  border-right-color: #21262c !important;
}
footer.bg-dark.angled.lower-start:after,
footer.bg-dark.angled.upper-start:before {
  border-left-color: #21262c !important;
}
@media (min-width: 1550px) {
  .box-layout {
    position: relative;
    background: #edeef1;
  }
  .box-layout .content-wrapper,
  .box-layout footer:not(.blockquote-footer) {
    width: 100%;
    max-width: 1550px !important;
    margin: 0 auto;
    position: relative;
  }
}
</style>


