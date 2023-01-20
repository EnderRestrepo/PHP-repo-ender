<?php
/*
Article:
https://medium.com/accesto/solid-php-solid-principles-in-php-accesto-blog-3d3b8cc421a3
Repo
https://github.com/accesto/solid-php/blob/master/single-responsibility-principle/single-responsibility-principle-good.php
*/

class BlogPost
{
    private string $author;
    private string $title;
    private string $content;
    private \DateTime $date;
 
    public function getData(): array
    {
        return [
            'author' => $this->author,
            'title' => $this->title,
            'content' => $this->content,
            'timestamp' => $this->date->getTimestamp(),
        ];
    }
}

new BlogPost = $blogpost2;
$blogpost2->getData(author ='Felipe', title = 'a great article', content = 'a lot of thing', timestamp = '');

interface PrintableBlogPost
{
    public function print(BlogPost $blogPost);
}

class JsonBlogPostPrinter implements PrintableBlogPost
{
    public function print(BlogPost $blogPost) {
        return json_encode($blogPost->getData());
    }
}
 
class HtmlBlogPostPrinter implements PrintableBlogPost
{
    public function print(BlogPost $blogPost) {
        return 
                '<article>
                    <h1>{$blogPost->getTitle()}</h1>
                    <article>
                        <p>{$blogPost->getDate()->format('Y-m-d H:i:s')}</p>
                        <p>{$blogPost->getAuthor()}</p>
                        <p>{$blogPost->getContent()}</p>
                    </article>
                </article>';
    }
}
?>
