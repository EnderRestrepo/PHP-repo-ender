<?php
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
                ("<article>
                    <h1>{$blogPost->getTitle()}</h1>
                    <article>
                        <p>{$blogPost->getDate()->format('Y-m-d H:i:s')}</p>
                        <p>{$blogPost->getAuthor()}</p>
                        <p>{$blogPost->getContent()}</p>
                    </article>
                </article>");
    }
}
?>