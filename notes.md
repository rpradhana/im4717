
# Regex

## Character classes
.			any character except newline
\w \d \s	word, digit, whitespace
\W \D \S	not word, digit, whitespace
[abc]		any of a, b, or c
[^abc]		not a, b, or c
[a-g]		character between a & g

## Anchors
^abc$		start / end of the string
\b \B		word, not-word boundary

## Escaped characters
\. \* \\	escaped special characters
\t \n \r	tab, linefeed, carriage return
\u00A9		unicode escaped ©

## Groups & Lookaround
(abc)		capture group
\1			backreference to group #1
(?:abc)		non-capturing group
(?=abc)		positive lookahead
(?!abc)		negative lookahead

## Quantifiers & Alternation
a* a+ a?	0 or more, 1 or more, 0 or 1
a{5} a{2,}	exactly five, two or more
a{1,3}		between one & three
a+? a{2,}?	match as few as possible
ab|cd		match ab or cd

# HTML/CSS

### Flex

display: flex;
flex-wrap: nowrap | wrap | wrap-reverse;
flex-grow: number;
justify-content: flex-start | flex-end | center | space-between | space-around | space-evenly;
align-content: flex-start | flex-end | center | space-between | space-around | stretch;
align-items: flex-start | flex-end | center | baseline | stretch;
align-self: auto | flex-start | flex-end | center | baseline | stretch;

align-items		-> 1 line
align-content	-> multiline
