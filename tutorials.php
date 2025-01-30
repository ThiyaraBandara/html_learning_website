<!-- tutorials.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>HTML Tutorials - Learning Hub</title>
</head>
<body>
    <!-- Google Translate Widget -->
<div id="google_translate_element"></div>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en', // Set the default language of your site
            includedLanguages: 'en,es,fr,de,it,zh-CN,ja,ru,fi,el,hi,ko,la,pt,si,ta,th,uk', // Add the languages you want to support
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <?php include 'header.php'; ?>
    <main>
    <h2>Welcome to the HTML Tutorial Series!</h2>
    <p>In this series, you will learn the fundamentals of HTML, empowering you to create structured and engaging web pages. Below, you can navigate to various lessons that cover essential HTML concepts.</p>
    
    <!-- Navigation Links for Lessons -->
    <nav>
        <h2>Lessons</h2>
        <ul>
            <li><a href="#lesson1" style="color: black;">Lesson 1: Introduction to HTML</a></li>
            <li><a href="#lesson2" style="color: black;">Lesson 2: HTML Lists</a></li>
            <li><a href="#lesson3" style="color: black;">Lesson 3: Attributes</a></li>
            <li><a href="#lesson4" style="color: black;">Lesson 4: Lists</a></li>
            <li><a href="#lesson5" style="color: black;">Lesson 5: Images</a></li>
        </ul>
    </nav>
    <main>
    <center><h2 id="lesson1">1. Introduction to HTML</h2></center>
    
    <h3>What is HTML?</h3>
    <p>
        HTML (HyperText Markup Language) is the foundation of all web pages. It is the standard language used to 
        structure and present content on the web. With HTML, you can create headings, paragraphs, links, images, 
        and much more to build the skeleton of any website.
        <ul>
        <li><b>HyperText:</b> Refers to the ability to link to other pages or resources using hyperlinks.</li>

        <li><b>Markup Language:</b> Uses tags to "mark up" the content, indicating how it should be displayed in a browser.</li>

       </ul>

       HTML is not a programming language; it is a declarative language that tells the browser how to display content. It works alongside CSS (Cascading Style Sheets) for styling and JavaScript for functionality and interactivity.


    </p>
    <p>
        <h3>Why Learn HTML?</h3>
<p>Learning HTML (HyperText Markup Language) is fundamental for anyone interested in web development or creating content for the web. Here are several reasons why learning HTML is important:</p>
<ul>
<p><b>Foundation of Web Development:</b></p>
<li>HTML is the starting point for building web pages. It's essential for anyone looking to become a web developer or designer.</li>

<p><b>Easy to Learn:</b></p>
<li>HTML syntax is straightforward and easy to grasp for beginners. You can create a simple webpage with just a few lines of code.</li>

<p><b>Structure Content:</b></p>
<li>HTML allows you to structure your content in a meaningful way. You can define headings, paragraphs, lists, links, images, and more, making your content more readable and organized.</li>

<p><b>Essential for Other Technologies:</b></p>
<li>Understanding HTML is crucial for learning CSS (Cascading Style Sheets) and JavaScript. These technologies work together to create interactive and visually appealing web pages.</li>

<p><b>Control Over Web Page Layout:</b></p>
<li>With HTML, you can control the layout of your web pages. You can create sections, articles, and various content blocks.</li>

<p><b>SEO Benefits:</b></p>
<li>Proper use of HTML tags can improve your website's SEO (Search Engine Optimization). Search engines rely on HTML structure to understand the content of a page.</li>


<p><b>Accessibility:</b></p>
<li>HTML allows you to create accessible web content. Using semantic HTML tags helps screen readers and other assistive technologies understand your content better.</li>

<p><b>Build Static Websites:</b></p>
<li>You can easily create static websites with just HTML. This is great for personal portfolios, landing pages, or simple informational sites.</li>

<p><b>Community and Resources:</b></p>
<li>There is a vast community of developers and extensive resources available for learning HTML. From online tutorials to forums, you can find help and support easily.</li>


</p>
   
<p>

    <h3>Setting Up</h3>
       <p>Tools Needed:</p>
           <ul>
             <li>A web browser (e.g., Chrome, Firefox, or Edge) to view your HTML files.</li> <br>

             <li>A text editor (e.g., Notepad++, Visual Studio Code, or Sublime Text) to write your code.</li>
           </ul>

    <p>Basic File Setup:</p>
    <ul>
        <li>Save your files with the .html extension, e.g., <code>index.html</code></li>
    </ul>
</p>
<h2>HTML Tags </h2>

<h3>What is a Tag?</h3>
<p>Tags are the building blocks of HTML. They usually come in pairs: an opening tag and a closing tag.</p>
<p>Example: &lt;tagname&gt;Content&lt;/tagname&gt;</p>
<p>Opening tag: &lt;tagname&gt;</p>
<p>Content: Content</p>
<p>Closing tag: &lt;/tagname&gt;</p>

<h3>The &lt;html&gt;Tag</h3>
<p>The&lt;html&gt; tag encompasses all other HTML elements, including the &lt;head&gt; and &lt;body&gt; sections.</p>
<p>The&lt;html&gt; tag has both an opening tag (&lt;html&gt;) and a closing tag (&lt;/html&gt;). Everything in between these tags is part of the HTML document.</p>

<p><b>Format of HTML Tag</b></p>

<div class="code-box">
    <pre><code>&lt;html&gt;
    Your Title and Document (contains text with HTML tags goes here)
&lt;/html&gt;</code></pre>
</div>


<p>The HTML Document has two distinct parts as HEAD and BODY</p>
<img src="assets/images/html-structure.png" alt="HTML Structure Diagram" />


<h3>The &lt;head&gt;Tag</h3>
<p>Head tag comes after the HTML Start Tag</p>
</p>Contains the TITLE tag to give the document a title that displays on the browsers title bar at the top</p>

<p><b>Format of Head Tag</b></p>

<div class="code-box">
    <pre><code>&lt;head&gt;
    &lt;title&gt; Your Title goes here &lt;/title&gt;
&lt;/head&gt;</code></pre>
</div>

<h3>The Body&lt;body&gt;Tag</h3>
<p>The body tag contains all the text ang graphics of the document with all the HTML tags that are used for control and formatting of the page</p>


<p><b>Format of Body Tag</b></p>

<div class="code-box">
    <pre><code>&lt;body&gt;
    Your Document goes here
&lt;/body&gt;</code></pre>
</div>



<h2>Creating The First Web Page</h2>

        <ul>
             <li>Open a text editor (Notepad)</li> <br>

             <li>Enter the following lines of code</li>

             <div class="code-box">
                   &lt;html&gt;<br>
                   &lt;head&gt;<br>
                   &nbsp;&nbsp;&lt;title&gt;My first page&lt;/title&gt;<br>
                   &lt;/head&gt;<br>
                   &lt;body&gt;<br>
                   &nbsp;&nbsp;welcome to my first web page<br>
                   &lt;/body&gt;<br>
                   &lt;/html&gt;
             </div>

             <li>Save the file as myfirstpage.html</li><br>

             <li>View the Document in Web browser</li>
                
        </ul>


      <h3>HTML Header Tags</h3>
      <ul>
        <li>HTML has 6 header tags &lt;H1&gt;  &lt;H2&gt;  &lt;H3&gt;  &lt;H4&gt;  &lt;H5&gt;  &lt;H6&gt; used to specify section headings</li>
        <li>&lt;/h1&gt; represents the highest, or most significant level of heading, and &lt;/h6&gt; represents the lowest significant level. </li>
        <li>Every header leaves a blank line above and below it when displayed in the browser</li>

      </ul>  
      <div class="code-box">
        &lt;html&gt;<br>
        &lt;head&gt;<br>
        &nbsp;&nbsp;&lt;title&gt;Headings&lt;/title&gt;<br>
        &lt;/head&gt;<br>
        &lt;body&gt;<br>
        &nbsp;&nbsp;&lt;h1&gt;Heading Level 1&lt;/h1&gt;<br>
        &nbsp;&nbsp;&lt;h2&gt;Heading Level 2&lt;/h2&gt;<br>
        &nbsp;&nbsp;&lt;h3&gt;Heading Level 3&lt;/h3&gt;<br>
        &nbsp;&nbsp;&lt;h4&gt;Heading Level 4&lt;/h1&gt;<br>
        &nbsp;&nbsp;&lt;h5&gt;Heading Level 5&lt;/h5&gt;<br>
        &nbsp;&nbsp;&lt;h6&gt;Heading Level 6&lt;/h6&gt;<br>
        &lt;/body&gt;<br>
        &lt;/html&gt;

    </div>
    <img src="assets/images/html-headings.png" alt="HTML Structure Diagram" />

    <h3>The Paragraph &lt;P&gt;Tag</h3>
    <ul>
        <li>This tag indicates a paragraph , used to separate two paragraphs with a blank line.</li>
        <p>Example:</p>
    </ul>
    
    <div class="code-box">
    <pre><code>
    &lt;p&gt; Welcome to the world of htmml &lt;/p&gt;
    &lt;p&gt;First Paragraph
                     Text of the 1st paragraph goes here &lt;/p&gt;
            </code></pre>
</div>

<h3>The Break &lt;br&gt;Tag</h3>
    <ul>
        <li>This is an empty tag which is used where the text needs to start from a new line and not to continue on the same line.</li>
        <li>To get every sentence on a new line, it is necessary to use a line break.</li>
        <p>Example:</p>
    </ul>
    
    <div class="code-box">
    <pre><code>
    &lt;body&gt;
         Demonstrating the BR Tag &lt;br&gt;<br>
         This is a paragraph with a line break.&lt;br&gt; <br>
         Here is the text after the line break.
     &lt;/body&gt;
    </code></pre>
</div>

<h3>Preformatted Text Tag: &lt;pre&gt;</h3>
    <ul>
        <li>This tag can be used, where it requires total control over spacing and line breaks.</li>
        <li>Browser preserves your space and line break in the text written inside the tag</li>
        <p>Example:</p>
    </ul>
    
    <div class="code-box">
    <pre><code>
    &lt;pre&gt;
         Demonstrating the BR Tag &lt;br&gt;
         This is a paragraph with a line break.&lt;br&gt; 
         Here is the text after the line break.
     &lt;/pre&gt;
    </code></pre>
</div>

<h3>Horizontal Rule Tag: &lt;pre&gt;</h3>
    <ul>
        <li>This an empty tag is basically used to draw lines and horizontal rules</li>
        <li>It can be used to separate two sections of text</li>
        <p>Example:</p>
    </ul>
    
    <div class="code-box">
    <pre><code>
    &lt;body&gt;
         Welcome to the page  &lt;hr&gt; 
         Below are the contents

    &lt;/body&gt;
    </code></pre>
</div>

<div class="code-box">
    <pre><code>
    
         Welcome to the page  <hr>
         Below are the contents

    </code></pre>
</div>



<h3>Tag Attributes</h3>
    <ul>
        <li>Tags can havve attributes. Attributes provide additional information to an HTML Element</li>
        <li>Attributes are always specified in the start tag</li>
        <li>Attributes usually come in name/value pairs like : name ="value" </li>
</ul>
        <p>Example 1:</p>
    
    
    <div class="code-box">
    <pre><code>
    &lt;body&gt;
         Welcome to the page  &lt;hr size ="3" color="red"&gt; 
         Below are the contents

    &lt;/body&gt;
    </code></pre>
</div>

         <p>Example 2:</p>
<div class="code-box">
    <pre><code>
    &lt;body bgcolor="red"&gt;
           &lt;p align ="center" &gt; This is a paragraph &lt;/p&gt;
         

    &lt;/body&gt;
    </code></pre>
</div>

<h3>Character Formatting Tags</h3>

    
    <table>
        <thead>
            <tr>
                <th>Format Type</th>
                <th>Tag</th>
                <th>Example</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Boldface</td>
                <td>&lt;b&gt; ... &lt;/b&gt;</td>
                <td><strong>This text is bold</strong></td>
            </tr>
            <tr>
                <td>Italics</td>
                <td>&lt;i&gt; ... &lt;/i&gt;</td>
                <td><em>This text is italic</em></td>
            </tr>
            <tr>
                <td>Underline</td>
                <td>&lt;u&gt; ... &lt;/u&gt;</td>
                <td><u>This text is underlined</u></td>
            </tr>
            <tr>
                <td>Subscript</td>
                <td>&lt;sub&gt; ... &lt;/sub&gt;</td>
                <td><sub>This is subscript text</sub></td>
            </tr>
            <tr>
                <td>Superscript</td>
                <td>&lt;sup&gt; ... &lt;sup&gt;</td>
                <td><sup>This is superscript text</sup></td>
            </tr>
            <tr>
                <td>Small</td>
                <td>&lt;small&gt; ... &lt;/small&gt;</td>
                <td><small>This text is small</small></td>
            </tr>
            <tr>
                <td>Big</td>
                <td>&lt;big&gt; ... &lt;/big&gt;</td>
                <td><big>This text is big</big></td>
            </tr>
        </tbody>
    </table>

<h3>Font Tag &lt;font&gt;</h3>
    <ul>
        <li>By using this tag , you can specify the colors, size of the text</li>
        
    </ul>
    <ul>
        <li><b>COLOR: Sets the color of the text that will appear on the screen. It can be set by giving the RGB value of the specific color or by the color name.</b></li>

        <li><b>SIZE: Sets the size of the text.</b></li>

        <li><b>FACE:</b> Sets the normal font type, provided it is installed on the users machine.</li>
    </ul>

    <div class="code-box">
    <pre><code>
    &lt;body&gt;

        &lt;font color="" size="" face="" &gt; &lt;/font&gt;
         
    &lt;/body&gt;
    </code></pre>
</div>

<h2>Comments</h2>
   <ul>
    <li>HTML Comments are not displayed in the browser, They helps to document your HTML source code</li>
   </ul>

   <div class="code-box">
    <pre><code>
    &lt;body&gt;

        &lt;!-- This is a comment --&gt;
        
    &lt;/body&gt;
    </code></pre>
</div>

<h2>Using Special Characters in HTML /HTML Character Entities</h2>
   <ul>
    <li>There are some special characters thst can be used while creating a document</li>
   </ul>

   <table>
        <thead>
            <tr>
                <th>Symbol</th>
                <th>HTML Entity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>&copy;</td>
                <td>&amp;copy</td>
            </tr>
            <tr>
                <td>&reg;</td>
                <td>&amp;reg</td>
            </tr>
            <tr>
                <td>&frac12;</td>
                <td>&amp;frac12</td>
            </tr>
            <tr>
            <tr>
                <td>&divide;</td>
                <td>&amp;divide</td>
            </tr>
            </tr>
            <tr>
                <td>&lt;</td>
                <td>&amp;lt</td>
            </tr>
            <tr>
                <td>&gt;</td>
                <td>&amp;gt</td>
            </tr>
            <tr>
                <td>&ge;</td>
                <td>&amp;ge</td>
            </tr>
            <tr>
                <td>&le;</td>
                <td>&amp;le</td>
            </tr>
            <tr>
                <td>&amp;</td>
                <td>&amp;amp</td>
            </tr>
            
        </tbody>
    </table>

    <h3>Using Some Special Characters</h3>
   

   <div class="code-box">
    <pre><code>
    &lt;html&gt;
       &lt;body&gt;

         The copyright symbol is: &copy;
         The registered rank is: &reg;
        
        &lt;/body&gt;
    &lt;/html&gt;
    </code></pre>
</div>

<center><h2 id="lesson2">2. HTML Lists</h2></center>
<p>HTML lists are used to group a set of related items in a structured format. They help in organizing content, making it easy to read and understand.</p>
<p>There are two main types of HTML lists</p>
<ul>
    <li>Ordered Lists /Numbered List(&lt;ol&gt;)</li>
    <li>Unordered Lists /Bulleted List ( &lt;ul&gt;)</li>
</ul>

<h3>Ordered List &lt;ol&gt;</h3>
<ul>
<li>An ordered list is used when the sequence of items matters. Each item in an ordered list is numbered.</li>
<li>These lists must begin with &lt;ol&gt; and followed by &lt;li&gt; list item tag.</li>
</ul>

<div class="code-box">
    <pre><code>
    &lt;html&gt;
     &lt;head&gt;
      &lt;title&gt; An Ordered List &lt;/title&gt;
       &lt;body&gt;

       &lt;ol&gt;
           &lt;li&gt;Mango&lt;/li&gt;
           &lt;li&gt;Apple&lt;/li&gt;
           &lt;li&gt;Grapes&lt;/li&gt;
       &lt;/ol&gt;
        
        &lt;/body&gt;
      &lt;/head&gt;
    &lt;/html&gt;
    </code></pre>
    <img src="assets/images/html-lists.png" alt="ordered list" />
</div>
    
      <h4>Atributes of &lt;ol&gt; tag</h4>
    
      <p><b>ol types</b></p>
      &lt;ol type=""&gt;

    <table>
        <thead>
            <tr>
                <th>Attribute</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Type A</td>
                <td>Capital letters eg:A,B,C,D,E...</td>
            </tr>
            <tr>
                <td>Type a</td>
                <td>Small Letters eg:a,b,c,d,e</td>
            </tr>
            <tr>
                <td>Type I</td>
                <td>Uppercase Roman Numbers eg:I,II,III,IV,V...</td>
            </tr>
            <tr>
            <tr>
                <td>Type i</td>
                <td>Lowercase Roman Numbers eg:i,ii,iii,iv,v...</td>
            </tr>
            </tr>
            <tr>
                <td>Type 1</td>
                <td>Numbers eg:1,2,3,4,5...</td>
           </tr>
        </tbody>
</table>


     <ul>
         <li>START: This is used for the lists that need to start values other than 1.</li>
     </ul>


     <div class="code-box">
    <pre><code>

       &lt;ol type="i" start="3"&gt;
           &lt;li&gt;cat&lt;/li&gt;
           &lt;li&gt;dog&lt;/li&gt;
           &lt;li&gt;rabbit&lt;/li&gt;
           &lt;li&gt;bird&lt;/li&gt;
           &lt;li&gt;deer&lt;/li&gt;
       &lt;/ol&gt;
       
</div>

<div class="code-box">
<code>
     <ol type="i" start="3">
        <li>rabbit</li>
        <li>bird</li>
        <li>deer</li>
     </ol>
     </code>
 </div>



 <h3>Nested Ordered List</h3>
 <p>If one ordered list contains one or more ordered lists... It is known as a Nested Order lists</p>
 <div class="code-box">
<code><pre>
 
 &lt;ol&gt;
        &lt;li&gt;Fruits&lt;/li&gt;
           &lt;ol type=I&gt;
              &lt;li&gt;Mango&lt;/li&gt;
              &lt;li&gt;Apple&lt;/li&gt;
              &lt;li&gt;Grapes&lt;/li&gt;

        &lt;li&gt;Vegetables&lt;/li&gt;
           &lt;ol type=I&gt;
              &lt;li&gt;Carrot&lt;/li&gt;
              &lt;li&gt;Brinjal&lt;/li&gt;
              &lt;li&gt;Beans&lt;/li&gt;
          
          &lt;/ol&gt;
&lt;/ol&gt;
</code></pre>
 </div>

 <div class="code-box">
 <code>

 <ol>
        <li>Fruits</li>
           <ol type=I>
              <li>Mango</li>
              <li>Apple</li>
              <li>Grapes</li>
           </ol>

        <li>Vegetables</li>
           <ol type=I>
              <li>Carrot</li>
              <li>Brinjal</li>
              <li>Beans</li>
          </ol>
</ol>

 </code>
 </div>
 
 <h2>Unoedered List &lt;ul&gt; </h2>
 <ul>
    <li>Unordered lists are used to show list of items with bullets</li>
    <li>They are also known as bulleted list</li>
    <li>Unordered lists start with in &lt;ul&gt; and followed by &lt;li&gt;
 </ul>

Example 1
 <div class="code-box">
 <code><pre>

 &lt;ul&gt;
              &lt;li&gt;Cat&lt;/li&gt;
              &lt;li&gt;dog&lt;/li&gt;
              &lt;li&gt;cow&lt;/li&gt;
          
&lt;/ul&gt;
</code></pre>
 </div>

 <div class="code-box">
 <code>
 <ul>
              <li>cat</li>
              <li>dog</li>
              <li>cow</li>
           </ol>
</ul>
</code>
 </div>
Example 2
 <div class="code-box">
 <code><pre>

 &lt;ul type="square"&gt;
              &lt;li&gt;Cat&lt;/li&gt;
              &lt;li&gt;dog&lt;/li&gt;
              &lt;li&gt;cow&lt;/li&gt;
          
&lt;/ul&gt;
</code></pre>
 </div>

 <div class="code-box">
 <code>
 <ul type="square">
              <li>cat</li>
              <li>dog</li>
              <li>cow</li>
           </ol>
</ul>
</code>
 </div>

<h2>Definition Lists</h2>
<ul>
    <li>This is a list of terms and their explanations</li>
    <li>It starts with &lt;dl&gt; tag and each definition list term starts with &lt;dt&gt; tag and each definition starts with &lt;dd&gt; tag.</li>
</ul>
<div class="code-box">
 <code><pre>

 &lt;dl&gt;
              &lt;dt&gt;Coffee&lt;/dt&gt;
              &lt;dd&gt;Black hot drink&lt;/dd&gt;
              &lt;dt&gt;Milk&lt;/dt&gt;
              &lt;dd&gt;White hot drink&lt;/dd&gt;
          
&lt;/dl&gt;
</code></pre>
 </div>

<div class="code-box">
 <code>
 <dl>
              <dt>Coffee</dt>
              <dd>Black hot drink</dd>
              <dt>Milk</dt>
              <dd>White hot drink</dd>
           
</dl>
</code>
 </div>



</ul> 





 </main>
    <?php include 'footer.php' ?>
</body>
</html>

