# Farhan Saif Portfolio Site

A data-driven PHP portfolio site for showcasing academic work, research interests, and professional information.

## Site Structure

This site uses a PHP-based architecture that separates content (data) from presentation (templates):

```
farhansaif/
├── index.php              # Main entry point
├── config/                # Site configuration
│   └── site.php          # Meta tags, SEO settings
├── data/                  # Content data files
│   ├── bio.php
│   ├── timeline.php
│   ├── projects.php
│   ├── papers.php
│   ├── research_interests.php
│   ├── tech_stack.php
│   ├── ta_courses.php
│   └── contact.php
├── templates/             # HTML templates
│   ├── header.php
│   ├── footer.php
│   └── sections/         # Section templates
├── includes/              # Helper functions
│   └── functions.php
├── js/                    # Client-side JavaScript (ES6 modules)
│   ├── main.js           # Main entry point
│   ├── typing.js         # Typing animation
│   ├── scroll.js         # Smooth scrolling
│   └── animations.js     # Scroll animations
└── readme.md             # This file
```

## How to Update Content

All content is stored in PHP data files under the `/data` directory. To update your site, simply edit the appropriate data file.

### Updating Your Bio

Edit `/data/bio.php`:

```php
return [
    'name' => 'Your Name',
    'paragraphs' => [
        ['text' => 'First paragraph with <a href="url">links</a> if needed.'],
        ['text' => 'Second paragraph...'],
    ],
];
```

### Adding a New Project

Edit `/data/projects.php` and add a new entry to the `projects` array:

```php
[
    'title' => 'Project Name',
    'description' => 'Project description here.',
    'link' => 'https://github.com/your/repo', // or null if no link
],
```

### Adding a New Paper

Edit `/data/papers.php` and add a new entry to the `papers` array:

```php
[
    'title' => 'Paper Title',
    'status' => 'published', // or 'under submission', 'accepted', etc.
    'period' => 'year',
    'link' => null, // or URL to paper
],
```

### Updating Timeline

Edit `/data/timeline.php` and add entries to the `entries` array:

```php
'entries' => [
    'Position Title, Start - End',
    'Another Position, Dates',
],
```

### Updating Research Interests

Edit `/data/research_interests.php`:

```php
'interests' => [
    'Interest 1',
    'Interest 2',
    'Interest 3',
],
```

### Updating Tech Stack

Edit `/data/tech_stack.php`:

```php
'technologies' => [
    'Language/Tool 1',
    'Language/Tool 2',
],
```

### Updating TA Courses

Edit `/data/ta_courses.php`:

```php
'courses' => [
    'Course Code: Course Name, Semester',
],
```

### Updating Contact Information

Edit `/data/contact.php`:

```php
return [
    'title' => 'Contact',
    'section_id' => 'section6',
    'email' => 'your[at]email[dot]com',
    'links' => [
        ['label' => 'Github', 'url' => 'https://github.com/yourusername'],
        ['label' => 'LinkedIn', 'url' => 'https://linkedin.com/in/yourprofile'],
    ],
];
```

### Updating Meta Tags / SEO

Edit `/config/site.php` to update meta tags, Open Graph tags, and Twitter Card settings.

### Adding Blog Posts

Blog posts can be written in Markdown! Two options:

**Option 1: Markdown Files (Recommended)**

1. Create a `.md` file in `/data/blog/posts/` (e.g., `my-post.md`)
2. Write your content in Markdown
3. Add metadata in `/data/blog_posts.php`:

```php
[
    'id' => 'my-post',
    'title' => 'My Post Title',
    'date' => '2025-12-15',
    'excerpt' => 'Short summary...',
    'content_type' => 'markdown',
    'content_file' => 'my-post.md',
    'tags' => ['research', 'python'],
],
```

**Option 2: Inline Markdown**

```php
[
    'id' => 'quick-post',
    'title' => 'Quick Post',
    'date' => '2025-12-16',
    'excerpt' => 'Summary...',
    'content_type' => 'markdown',
    'content' => '## Heading\n\nSome **bold** text.',
    'tags' => ['update'],
],
```

Markdown supports: headings, lists, links, **bold**, *italic*, `code`, code blocks, blockquotes, and more!

## Deployment

This site uses GitHub Actions for automatic deployment. Simply:

1. Make your changes to data files
2. Commit: `git add . && git commit -m "Update content"`
3. Push: `git push origin main`

GitHub Actions will automatically deploy to farhansaif.xyz.

## TODOs

* Add the updated CV
* Consider restructuring files (current structure is good but can be enhanced)

## Technical Details

- **PHP Version**: 7.4+
- **Server**: Nginx with PHP-FPM
- **Deployment**: Automated via GitHub Actions
- **SSL**: Let's Encrypt (auto-renewal enabled)

## Security

The Nginx configuration denies direct access to `/data`, `/config`, `/includes`, and `/templates` directories for security.
