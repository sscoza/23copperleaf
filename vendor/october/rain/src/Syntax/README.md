# Rain Dynamic Syntax

Dynamic Syntax is a templating engine that supports two modes of rendering. Parsing template text can produce two results, either a **view** or **editor** mode. Using this template text as an example:

    <h1>{text name="websiteName" label="Website Name"}Our wonderful website{/text}</h1>

The inner part of the `{text}...{/text}` tags represents the default **view** text, the remaining properties (name and label) are used primarily for the **editor** mode.

## Class usage

Calling `$syntax->render($params)` will render the template:

    <h1>Our wonderful website</h1>

Calling `$syntax->toTwig()` will render as Twig markup:

    <h1>{{ websiteName }}</h1>

Calling `$syntax->toEditor()` will return an array:

    'websiteName' => [
        'label' => 'Website name',
        'default' => 'Our wonderful website',
        'type' => 'text'
    ]

Example

    $syntax = Parser::parse('<h1>{text name="websiteName" label="Website Name"}Our wonderful website{/text}</h1>');

    // Outputs <h1>{{ websiteName }}</h1>
    echo $syntax->toView();

    // Returns ['websiteName' => [...] ]
    $syntax->toEditor();

    // Outputs <h1>Our wonderful website</h1>
    echo $syntax->render();

    // Outputs <h1>Your awesome web page</h1>
    echo $syntax->render(['websiteName' => 'Your awesome web page']);

## Supported tags

### Text

Renders a single line editor field for smaller blocks of text. The view value is the text entered.

    {text name="websiteName" label="Website Name"}Our wonderful website{/text}

### Textarea

Renders a multiple line editor field for larger blocks of text. The view value is the text entered.

    {textarea name="websiteDescription" label="Website Description"}This is our vision for things to come{/textarea}

### Rich editor

    {richeditor name="content" label="Main content"}Default text{/checkbox}

Renders in Twig as

    {{ content|raw }}

### Markdown

    {markdown name="content" label="Markdown content"}Default text{/markdown}

Renders in Twig as

    {{ content|md }}

### Checkbox

    {checkbox name="showHeader" label="Show heading" default="true"}
        <p>This content will be shown if the checkbox is ticked</p>
    {/checkbox}

Renders in Twig as

    {% if checkbox %}
        {{ showHeader }}
    {% endif %}

### File Upload

Renders a file upload editor field. The view value is the full path to the file.

    {fileupload name="logo" label="Logo"}defaultlogo.png{/fileupload}

### Repeater

    {repeater}
        <h2>{text name="title" label="Title"}Title{/text}</h2>
        <p>{textarea name="content" label="Content"}Content{/textarea}</p>
    {/repeater}

Renders in Twig as

    {% for content in repeater %}
        {{ content|raw }}
    {% endfor %}
