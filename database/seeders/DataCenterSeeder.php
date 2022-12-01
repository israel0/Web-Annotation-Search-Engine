<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public static function delete()
    {
        return DB::table("data_centers")->delete();
    }
    public function run()
    {
        Self::delete();

        $data =
        [
          [
             "data_tithe" => "Artificial Inteligence",
              "link" => "https://www.techtarget.com/searchenterpriseai/definition/AI-Artificial-Intelligence",
              "category" => 1,
              "content" => "Artificial Intelligence (AI), the ability of a digital computer or computer- controlled robot to perform tasks commonly associated with intelligent beings. The term is frequently applied to the project of developing systems endowed with the intellectual processes characteristic of humans, such as the ability to reason, discover meaning, generalize, or learn from past experience.
              Since the development of the digital computer in the 1940s, it has been demonstrated that computers can be programmed to carry out very complex tasks—as, for example, discovering proofs for mathematical theorems or playing chess—with great proficiency. Still, despite continuing advances in computer processing speed and memory capacity, there are as yet no programs that can match human flexibility over wider domains or in tasks requiring much everyday knowledge.
              On the other hand, some programs have attained the performance levels of human experts and professionals in performing certain specific tasks, so that artificial intelligence in this limited sense is found in applications as diverse as medical diagnosis, computer search engines, and voice or handwriting recognition.
              Research in AI has focused chiefly on the following components of intelligence: Learning, Reasoning, Problem Solving, Perception, and using Language.
              ",
              "image" => "ai.jpg"
          ],

          [
            "data_tithe" => "Data Science",
             "link" => "https://aws.amazon.com/what-is/data-science/",
             "category" => 2,
             "content" => "What is data science?
             Data science is the study of data to extract meaningful insights for business. It is a multidisciplinary approach that combines principles and practices from the fields of mathematics, statistics, artificial intelligence, and computer engineering to analyze large amounts of data. This analysis helps data scientists to ask and answer questions like what happened, why it happened, what will happen, and what can be done with the results.

             Why is data science important?
             Data science is important because it combines tools, methods, and technology to generate meaning from data. Modern organizations are inundated with data; there is a proliferation of devices that can automatically collect and store information. Online systems and payment portals capture more data in the fields of e-commerce, medicine, finance, and every other aspect of human life. We have text, audio, video, and image data available in vast quantities.

             History of data science
             While the term data science is not new, the meanings and connotations have changed over time. The word first appeared in the ’60s as an alternative name for statistics. In the late ’90s, computer science professionals formalized the term. A proposed definition for data science saw it as a separate field with three aspects: data design, collection, and analysis. It still took another decade for the term to be used outside of academia.

             Future of data science
             Artificial intelligence and machine learning innovations have made data processing faster and more efficient. Industry demand has created an ecosystem of courses, degrees, and job positions within the field of data science. Because of the cross-functional skillset and expertise required, data science shows strong projected growth over the coming decades.

             What is data science used for?
             Data science is used to study data in four main ways:

             1. Descriptive analysis
             Descriptive analysis examines data to gain insights into what happened or what is happening in the data environment. It is characterized by data visualizations such as pie charts, bar charts, line graphs, tables, or generated narratives. For example, a flight booking service may record data like the number of tickets booked each day. Descriptive analysis will reveal booking spikes, booking slumps, and high-performing months for this service.

             2. Diagnostic analysis
             Diagnostic analysis is a deep-dive or detailed data examination to understand why something happened. It is characterized by techniques such as drill-down, data discovery, data mining, and correlations. Multiple data operations and transformations may be performed on a given data set to discover unique patterns in each of these techniques.For example, the flight service might drill down on a particularly high-performing month to better understand the booking spike. This may lead to the discovery that many customers visit a particular city to attend a monthly sporting event.

             3. Predictive analysis
             Predictive analysis uses historical data to make accurate forecasts about data patterns that may occur in the future. It is characterized by techniques such as machine learning, forecasting, pattern matching, and predictive modeling. In each of these techniques, computers are trained to reverse engineer causality connections in the data.For example, the flight service team might use data science to predict flight booking patterns for the coming year at the start of each year. The computer program or algorithm may look at past data and predict booking spikes for certain destinations in May. Having anticipated their customer’s future travel requirements, the company could start targeted advertising for those cities from February.

             4. Prescriptive analysis
             Prescriptive analytics takes predictive data to the next level. It not only predicts what is likely to happen but also suggests an optimum response to that outcome. It can analyze the potential implications of different choices and recommend the best course of action. It uses graph analysis, simulation, complex event processing, neural networks, and recommendation engines from machine learning.

             Back to the flight booking example, prescriptive analysis could look at historical marketing campaigns to maximize the advantage of the upcoming booking spike. A data scientist could project booking outcomes for different levels of marketing spend on various marketing channels. These data forecasts would give the flight booking company greater confidence in their marketing decisions.

             What are the benefits of data science for business?
             ata science is revolutionizing the way companies operate. Many businesses, regardless of size, need a robust data science strategy to drive growth and maintain a competitive edge. Some key benefits include:

             Discover unknown transformative patterns
             Data science allows businesses to uncover new patterns and relationships that have the potential to transform the organization. It can reveal low-cost changes to resource management for maximum impact on profit margins.For example, an e-commerce company uses data science to discover that too many customer queries are being generated after business hours. Investigations reveal that customers are more likely to purchase if they receive a prompt response instead of an answer the next business day. By implementing 24/7 customer service, the business grows its revenue by 30%.

             Innovate new products and solutions
             Data science can reveal gaps and problems that would otherwise go unnoticed. Greater insight about purchase decisions, customer feedback, and business processes can drive innovation in internal operations and external solutions.For example, an online payment solution uses data science to collate and analyze customer comments about the company on social media. Analysis reveals that customers forget passwords during peak purchase periods and are unhappy with the current password retrieval system. The company can innovate a better solution and see a significant increase in customer satisfaction.

             Real-time optimization
             It’s very challenging for businesses, especially large-scale enterprises, to respond to changing conditions in real-time. This can cause significant losses or disruptions in business activity. Data science can help companies predict change and react optimally to different circumstances.For example, a truck-based shipping company uses data science to reduce downtime when trucks break down. They identify the routes and shift patterns that lead to faster breakdowns and tweak truck schedules. They also set up an inventory of common spare parts that need frequent replacement so trucks can be repaired faster.  ",
             "image" => "datascience.jpg"
         ],

         [
            "data_tithe" => "Programmng One (Javascript)",
             "link" => "https://careerfoundry.com/en/tutorials/web-development-for-beginners/an-introduction-to-javascript/",
             "category" => 3,
             "content" => "Welcome to the fifth and final day of your web development short course! Today, we’ll touch upon JavaScript and try to improvise a bit as we learn more about this third and final pillar of the web.

             JavaScript, as you might know, is ubiquitous in today’s software development world. It is the foundation of frontend web development and is the key ingredient in frameworks like ReactJS, Angular, and VueJS. It can also help create solid backends with platforms like Nodejs, runs desktop applications like Slack, Atom, and Spotify, and runs on mobile phones as Progressive Web Apps (PWAs).

             In short, it is everywhere—and for good reasons. For starters, compared to other languages like C and Java, JavaScript is generally easier to learn. When we say ‘easier’, we mean in terms of how quickly you can go from being a JavaScript novice to someone who can actually make a living writing professional, high quality JavaScript code. So, in that sense, it’s more accessible than some other languages like C and Java.

             JavaScript is also a fun and rewarding language, which is especially important when you’re just getting started in software development. The community support is very good, so if you get stuck, there’s a good chance that the problem and its solution already exist on the web.",
             "image" => "js.jpg"
         ],

         [
            "data_tithe" => "Optical Recognition ",
             "link" => "https://www.techtarget.com/searchcontentmanagement/definition/OCR-optical-character-recognition",
             "category" => 4,
             "content" => "Optical Character Recognition is one of the significant applications within the area of pattern recognition. Fields like architecture, cartography, electronics, engineering etc. use domain-dependent graphic notations to develop their designs. The automatic interpretation of such documents, requires processes able to recognize the corresponding alphabets of objects. (Josep , 2015)
             MATLAB is a multi-paradigm proprietary programming language and numerical computing environment developed by MathWorks. Within MATLAB Integrated Development Environment (IDE) you can perform Computer-aided design (CAD), different matrix manipulations, plotting of functions and data, implementation algorithms, creation of user interfaces, and has the ability to interface with programs written in other languages. Since, its launch in 1984 MATLAB software has not particularly been associated within the field of data science. In 2013, that changed with the launch of their new data science concentrated toolboxes that included Computer Vision, Image Processing , Optical Character Recognition and then a year later Statistics and Machine Learning. Optical Character Recognition is any set of components that interact to achieve a specific goal of reading, scanning, identifying documents  and converts the document into desired format.

          With the advancement in technologies, Recognition development has become one of the important need of the time for cursive script languages, especially Urdu text/script. Recognition system helps to digitally recognize and classify the current paper records, books, magazines, daily papers, and notes etc. ( syed , 2019) . Finding and identification of symbol present embedded in an image is a complex task to extract required object of interest in computer vision applications as well as digital image processing. This is of high demand and consequently of research hot spot. Main questions regarding the extraction of text from document image include, starting and ending of text, exact place, and the extracting the meaning of the text. This mechanism should have the capability to answer the indemnified text and its meaning adaptably to be meaningful to real world. The above mentioned sequences requires robust technology, good amount storage, and high speed workstation. Fast expanding digital technology contains wide information, like-education, news, games, etc. The said information contain text in different ways, may be still document image. There are some instances where this extraction is on real time basis. The detection and recognition is applied widely in monitoring and security, information access, etc.

          The need to extract and reproduce data from scanned documents and other digitalized documents, where users can single out numerical and alphabetical objects from images, put them in words and then, words into sentences thus enabling users to access and edit content of original document is voluminous.
There is Inefficiency in the traditional methods that various organization adopt for processing large document. The need to use technology to distinguish printed or handwritten text characters inside digital images of physical documents, such as a scanned paper document cannot be overemphasized.  Large organization has embrace OCR technology to prevent huge loss of information by eradicating their traditional methodology for extracting large documents. OCR technology improve data security through scanning and introduce efficiency for data storage system.
",
"image" => "ocr.jpg"
         ],


        ];

        DB::table("data_centers")->insert($data);
    }
}
