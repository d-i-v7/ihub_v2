-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2025 at 04:57 PM
-- Server version: 10.5.22-MariaDB-cll-lve
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himilo_ihub2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `topic_2` varchar(255) NOT NULL,
  `short_text` text NOT NULL,
  `long_text` text NOT NULL,
  `topic_3` varchar(255) NOT NULL,
  `our_v` text NOT NULL,
  `topic_4` varchar(255) NOT NULL,
  `our_m` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `topic`, `image`, `topic_2`, `short_text`, `long_text`, `topic_3`, `our_v`, `topic_4`, `our_m`, `create_date`) VALUES
(1, 'About Us', 'uploads/about.png', 'Who We Are?', 'Himilo Innovation Hub is a business incubator and innovation hub founded in 2022 with the purpose of creating a secure and work-oriented environment for entrepreneurs, job seekers, and students to promote the growth and sustainability of their startups.', 'Himilo Innovation Hub is a business incubator and innovation hub founded in 2022 with the purpose of creating a secure and work-oriented environment for entrepreneurs, job seekers, and students to promote the growth and sustainability of their startups. Himilo Innovation Hub Entrepreneurial and Incubation programs aim to help youth launch their startup ideas by providing them with the necessary entrepreneurship training, mentorships, Acceleration programs, and incubation services to become self-employed. Himilo Innovation Hub was established to help early-stage startups grow and flourish by providing unique services.', 'Our Vission', 'To provide innovative access opportunities to youth that will unlock the potential of the next generation, connecting them to the local & global economy.\r\n\r\n', 'Our Mission', 'To help the national innovation ecosystem grow so that Somalia can compete more effectively on the world stage.', '2024-01-17 10:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `con1` text NOT NULL,
  `image` longtext NOT NULL,
  `content` longtext NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `con1`, `image`, `content`, `create_date`) VALUES
(11, 'Meetup Event ', 'A Heartfelt Thank You to All the Passionate Participants', 'uploads/jabril.jpg', '<p>We would like to express our deepest gratitude to all the incredible participants who attended our meetup event on building a strong entrepreneurial mindset. Your passion and enthusiasm were truly inspiring!</p>\r\n<p>ðŸ”¥ The energy in the room was electrifying as each and every one of you actively engaged in the discussions, shared your experiences, and contributed valuable insights. Your dedication to personal and professional growth was evident, and it created an atmosphere of inspiration and motivation.</p>\r\n<p>ðŸ’¡ We want to commend you for your willingness to open up, share your stories, and exchange knowledge with fellow participants. Your collective wisdom and diverse perspectives enriched the event and made it a truly remarkable experience.</p>\r\n<p>ðŸŒŸ It was incredible to witness the depth of your passion for entrepreneurship and your unwavering commitment to pursuing your dreams. Your presence and active participation created an environment that fostered learning, collaboration, and the forging of new connections.</p>\r\n<p>ðŸ¤ We are grateful for the connections that were established during the event. The networking sessions were buzzing with excitement as participants shared ideas, exchanged contact information, and laid the foundation for potential future collaborations. We are excited to see the amazing ventures that may arise from these connections!</p>\r\n<p>ðŸ—£ï¸ Thank you for bringing your authentic selves to the event and for sharing your personal journeys, challenges, and triumphs. Your stories resonated with everyone present and served as a reminder that entrepreneurship is not just about success but also about the resilience, determination, and perseverance required to overcome obstacles along the way.</p>\r\n<p>ðŸŒŸ Your passion and commitment are what make events like these so impactful, and we are truly grateful to have had the opportunity to host such an incredible group of individuals. Your presence made the event a resounding success, and we hope that you found it as rewarding and enriching as we did.</p>\r\n<p>ðŸ™Œ Once again, thank you for your passion, engagement, and the positive energy you brought to the meetup. Stay connected, continue to pursue your entrepreneurial dreams, and let\'s support and inspire each other on this incredible journey!</p>\r\n<p>#PassionateParticipants #EntrepreneurialMindset #Gratitude #Collaboration #Inspiration</p>', '2024-02-04 06:42:53'),
(12, 'Meetup Event ', 'Turning Ideas into Successful Businesses', 'uploads/ibra.jpg', '<p>Introduction:<br>Innovation is the lifeblood of entrepreneurship. It is the ability to turn ideas into successful businesses that drives economic growth and transforms industries. At our innovation hub, we recently organized an experience sharing session focused on this very topic. With over 60 enthusiastic participants in attendance, the session proved to be highly informative and inspiring. In this blog post, we will delve into the key takeaways from the event and explore the valuable insights shared by our expert speakers.</p>\r\n<p>Creating a Vision:<br>The session kicked off with a discussion on the importance of creating a clear vision for your business idea. Participants were encouraged to think big, set audacious goals, and define their purpose. The speakers emphasized that a compelling vision acts as a guiding star, enabling entrepreneurs to stay focused and motivated throughout their journey.</p>\r\n<p>Validating the Idea:<br>Validating the feasibility and market demand for an idea emerged as another critical aspect of building a successful business. The session highlighted the significance of conducting thorough market research, engaging with potential customers, and seeking feedback from industry experts. By validating their ideas, entrepreneurs can identify potential pitfalls and make necessary adjustments early on.</p>\r\n<p>Building a Solid Business Plan:<br>Crafting a comprehensive business plan was deemed essential for turning ideas into reality. Participants were educated on the importance of outlining their value proposition, identifying target customer segments, and mapping out a sustainable revenue model. The session stressed the need for entrepreneurs to anticipate challenges, devise mitigation strategies, and establish measurable goals to track their progress.</p>\r\n<p>Leveraging Resources and Networks:<br>The power of collaboration and networking was a recurring theme throughout the session. Participants were encouraged to tap into available resources, such as mentorship programs, incubators, and accelerators, to gain valuable guidance and support. The speakers emphasized the significance of building strong professional networks, both within and outside the industry, to access expertise, potential partnerships, and investment opportunities.</p>\r\n<p>Embracing Innovation and Adaptability:<br>The dynamic nature of the business landscape demands a willingness to adapt and embrace innovation. The session highlighted the importance of staying abreast of emerging trends, technological advancements, and customer preferences. Entrepreneurs were encouraged to cultivate a culture of continuous learning and agility within their organizations to stay ahead of the competition.</p>\r\n<p>Overcoming Challenges:<br>No entrepreneurial journey is without its challenges, and the session aimed to equip participants with strategies to overcome them. The speakers shared personal anecdotes and lessons learned from their own ventures, offering valuable insights into managing setbacks, securing funding, and building resilient teams. The session emphasized the importance of perseverance, resilience, and a growth mindset in navigating the inevitable hurdles on the path to success.</p>\r\n<p>Conclusion:<br>The experience sharing session on turning ideas into successful businesses at our innovation hub proved to be an invaluable opportunity for participants to gain insights and inspiration. With a diverse range of perspectives and experiences shared by expert speakers, attendees left equipped with practical knowledge and a renewed sense of motivation. Armed with the key takeaways from the session, these aspiring entrepreneurs are now better prepared to transform their ideas into thriving businesses. As our innovation hub continues to foster a culture of innovation and entrepreneurship, we look forward to witnessing the growth and success of these passionate individuals who dare to dream big and make a difference in the world of business.</p>', '2024-02-04 06:55:11'),
(13, 'A Transformative Journey', ' Our Entrepreneurship Mentees\' Visit to Banadiria Coffee Production Company', 'uploads/IMG_4449.JPG', '<p><span style=\"font-size: 14pt; color: rgb(15, 82, 242);\"><strong>Introduction</strong></span>:<br>In our quest to empower and nurture budding entrepreneurs, we recently organized a highly anticipated boot camp visit for our entrepreneurship mentees. The destination? The renowned Banadiria Coffee Production Company. This immersive experience provided our mentees with a firsthand opportunity to observe how the company operates, while gaining insights into the intricacies of marketing, branding, product packaging, sales strategies, and customer interactions. Let\'s delve into the transformative journey our mentees embarked upon during their visit.</p>\r\n<p><strong><span style=\"font-size: 14pt; color: rgb(15, 82, 242);\">Discovering the Inner Workings:</span></strong><br>Stepping into Banadiria Coffee\'s production facility, our mentees were greeted by the captivating aroma of freshly roasted beans. They were given a guided tour, where they witnessed the meticulous processes involved in coffee production, from sourcing the finest beans to the art of roasting and blending. The mentees were enthralled as they observed the company\'s commitment to maintaining the highest quality standards at every step of the production process.</p>\r\n<p><strong><span style=\"color: rgb(15, 82, 242); font-size: 14pt;\">Unveiling the Secrets of Marketing and Branding:</span></strong><br>Banadiria Coffee\'s success is not solely attributed to its exceptional product; it is also a result of their effective marketing and branding strategies. Our mentees had the privilege of engaging in interactive sessions with the company\'s marketing team, who shared their expertise on building a strong brand identity, crafting compelling marketing campaigns, and effectively reaching the target audience. The mentees gained invaluable knowledge on the importance of storytelling, creating a unique value proposition, and leveraging digital platforms to enhance brand visibility.</p>\r\n<p><strong><span style=\"color: rgb(15, 82, 242); font-size: 14pt;\">The Art of Product Packaging:</span></strong><br>Packaging plays a vital role in capturing customers\' attention and conveying the essence of a brand. During their visit, our mentees were introduced to Banadiria Coffee\'s aesthetically pleasing and eco-friendly packaging designs. They learned about the significance of packaging in enhancing product appeal, ensuring product freshness, and differentiating themselves from competitors. The mentees were inspired to think creatively and consider the impact of packaging choices on the overall customer experience.</p>\r\n<p><span style=\"font-size: 14pt;\"><strong><span style=\"color: rgb(15, 82, 242);\">Mastering the Art of Sales:</span></strong></span><br>Banadiria Coffee\'s sales team shared their expertise and insights on effective sales strategies. Our mentees learned about the importance of building relationships with customers, understanding their needs, and tailoring solutions to meet those needs. They discovered the power of compelling storytelling and how it can enhance the sales process. Through role-playing exercises and real-life examples, the mentees gained practical skills that will undoubtedly contribute to their future success as entrepreneurs.</p>\r\n<p><span style=\"color: rgb(15, 82, 242); font-size: 14pt;\"><strong>Customer-Centric Approach:</strong></span><br>One of the key takeaways for our mentees was the emphasis Banadiria Coffee places on fostering strong customer relationships. They observed firsthand how the company values customer feedback, actively engages with customers through various channels, and constantly strives to exceed their expectations. Our mentees recognized the significance of a customer-centric approach in building loyalty, fostering repeat business, and driving sustainable growth.</p>\r\n<p><span style=\"color: rgb(15, 82, 242); font-size: 14pt;\"><strong>Conclusion:</strong></span><br>The boot camp visit to Banadiria Coffee Production Company was a truly transformative experience for our entrepreneurship mentees. They not only gained a deeper understanding of the coffee production process but also acquired valuable insights into marketing, branding, product packaging, sales strategies, and customer interactions. Armed with this newfound knowledge, our mentees are now better equipped to navigate the entrepreneurial landscape and create successful ventures of their own. We express our heartfelt gratitude to Banadiria Coffee for opening their doors and inspiring our mentees on their entrepreneurial journey.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2024-02-04 09:38:45'),
(14, 'Empowering Small Business Owners', 'Marketing and Branding Training ', 'uploads/407792446_2454857488032642_7307575954155812361_n.jpg', '<p>&nbsp;</p>\r\n<p><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\"><strong><span style=\"color: rgb(15, 82, 242); font-size: 14pt;\">Introduction:</span></strong></span><br><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\">Innovation hubs are instrumental in supporting and nurturing small business owners, providing them with the necessary resources and guidance to grow their ventures. At our innovation hub, we recently organized a comprehensive marketing and branding training program specifically tailored for the small business owners who have been incubated within our community. The training aimed to equip these entrepreneurs with the essential skills and knowledge required to effectively market and brand their products or services. To ensure a valuable learning experience, we curated a training session led by Mr. Shafici Hilowle, a renowned marketing expert and the Cheif commercial officer at Amtel, who shared his expertise and insights with our incubated business owners.</span></p>\r\n<p><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\"><strong><span style=\"color: rgb(15, 82, 242); font-size: 14pt;\">The Importance of Marketing and Branding:</span></strong></span><br><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\">Marketing and branding are critical elements for the success of any business, regardless of its size. They empower entrepreneurs to create a unique identity, establish credibility, and connect with their target audience. Effective marketing strategies generate awareness, attract customers, and drive sales, while a strong brand identity fosters trust, loyalty, and differentiation in the market. Recognizing the significance of these aspects, our innovation hub took the initiative to provide our incubated small business owners with a comprehensive training program tailored to their specific needs.</span></p>\r\n<p><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\"><strong><span style=\"color: rgb(15, 82, 242); font-size: 14pt;\">The Expertise of Mr. Shafici Hilowle:</span></strong></span><br><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\">Mr. Shafici Hilowle, a seasoned marketing expert with a wealth of experience in the banking industry, was the perfect choice to guide our incubated business owners. As chief commerical officer a reputable institution, Mr. Hilowle has successfully crafted marketing campaigns and strategies. His extensive knowledge and practical insights have enabled him to navigate the dynamic market landscape effectively. We were honored to have him share his expertise and experiences with our small business owners.</span></p>\r\n<p><span style=\"color: rgb(15, 82, 242); font-size: 14pt; font-family: tahoma, arial, helvetica, sans-serif;\"><strong>Delivering Knowledge and Insights:</strong></span><br><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\">The training session conducted by Mr. Shafici Hilowle covered various aspects of marketing and branding, catering specifically to the needs and interests of our incubated business owners. The session commenced with an overview of the significance of marketing and branding in today\'s competitive business environment. Mr. Hilowle emphasized the importance of identifying target audiences, understanding their preferences, and developing tailored marketing campaigns.</span></p>\r\n<p><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\">During the training, participants delved into various marketing strategies, including digital marketing, social media marketing, content marketing, and traditional marketing techniques. Mr. Hilowle shared practical tips and best practices for each strategy, emphasizing the importance of consistency, creativity, and adaptability. He highlighted the significance of leveraging technology and data analytics to measure marketing efforts\' effectiveness and make informed decisions.</span></p>\r\n<p><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\">Moreover, the training underscored the significance of branding in establishing a strong market presence. Mr. Hilowle discussed the elements of a successful brand identity, such as logo design, brand messaging, storytelling, and customer experience. He encouraged the small business owners to develop a compelling brand narrative that resonates with their target audience and sets them apart from competitors.</span></p>\r\n<p><span style=\"color: rgb(15, 82, 242); font-size: 14pt; font-family: tahoma, arial, helvetica, sans-serif;\"><strong>Interactive Learning and Mentoring:</strong></span><br><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\">The training session encouraged active participation, with Mr. Hilowle engaging the participants through discussions, case studies, and practical exercises. The business owners had the opportunity to ask questions, seek advice, and share their own experiences. Mr. Hilowle provided personalized guidance and constructive feedback, helping the participants develop effective marketing and branding strategies for their respective businesses.</span></p>\r\n<p><span style=\"color: rgb(15, 82, 242); font-size: 14pt;\"><strong>Conclusion:</strong></span><br><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\">The marketing and branding training conducted at our innovation hub has empowered our incubated small business owners with invaluable knowledge and insights. We are grateful to Mr. Shafici Hilowle for generously sharing his time, expertise, and dedication to nurturing the growth of these entrepreneurs. Equipped with the tools and skills acquired during this training, we are confident that our incubated business owners will be better equipped to market and brand their products or services, driving their ventures towards success in the competitive business landscape.</span></p>\r\n<p><span style=\"font-family: tahoma, arial, helvetica, sans-serif;\">As an innovation hub, we remain committed to providing comprehensive training and mentorship opportunities to small business owners, enabling them to thrive and make a positive impact in their respective industries.</span></p>', '2024-09-16 13:33:14'),
(16, 'Exciting News', 'Art of Living: Developing Critical Thinking and Effective Decision-Making Skills', 'uploads/WhatsApp Image 2024-02-28 at 3.16.43 AM.jpeg', '<p>We are thrilled to announce that the \"Art of Living: Developing Critical Thinking and Effective Decision-Making Skills\" training, conducted by Himilo Innovation Hub in collaboration with Himilo University and Weliterate Organization, was a resounding success! ðŸŽ‰ðŸŽ“</p>\r\n<p>Our heartfelt congratulations go out to all the students from various faculties who actively participated and greatly benefited from this enriching experience organized by Himilo Innovation Hub. By honing their critical thinking and decision-making skills, they are now equipped to confidently navigate life\'s challenges. ðŸ¤©ðŸ’¡</p>\r\n<p>Throughout the training, participants delved into the significance of mindfulness, intuition, ethical dimensions, and problem-solving strategies under the guidance of Himilo Innovation Hub. They cultivated their logical reasoning and analytical thinking abilities, experiencing personal and academic growth. ðŸŒˆðŸ’ª</p>\r\n<p>We extend our deepest appreciation to our esteemed guest, Mr. Abdirahman Khalid, Programs Manager for Weliterate Organization, for sharing his expertise and guidance during this training organized by Himilo Innovation Hub. His valuable insights will have a lasting impact on the lives of our students. ðŸ™ðŸŒŸ</p>\r\n<p>We would like to express our sincere gratitude to Himilo Innovation Hub, Himilo University, and Weliterate Organization for their collaboration in organizing this transformative experience. Together, they have created a dynamic learning environment that fosters the development of critical thinking skills and effective decision-making under the banner of Himilo Innovation Hub. ðŸŽ‰ðŸ™Œ</p>\r\n<p>We are excited to witness the continued progress and success of our students as they apply their newly acquired skills from this training organized by Himilo Innovation Hub in various aspects of their lives. ðŸ’ªðŸŽ‰</p>\r\n<p>Once again, congratulations to all the participants for their dedication and active involvement in making this training, organized by Himilo Innovation Hub, a remarkable success! Your commitment to personal growth is truly inspiring. ðŸŒŸ</p>\r\n<p>#ArtOfLiving #CriticalThinking #DecisionMaking #StudentSuccess #HimiloUniversity #HimiloInnovationHub #WeliterateOrganization #TransformativeExperience</p>', '2024-03-09 14:34:07'),
(17, 'Calling all aspiring photographers!', 'Capturing the Future: Unlocking the World of Digital Photography', 'uploads/WhatsApp Image 2024-03-04 at 5.23.05 AM.jpeg', '<p>Are you passionate about photography and eager to explore the exciting world of digital imagery? Join us at Himilo Innovation Hub for an incredible meetup session where we will dive into the future of digital photography, unlocking a world of opportunities, skills, and insights on how to turn your passion into a profession!</p>\r\n<p>ðŸ—“ï¸ Date: 06/March/2024<br>ðŸ•’ Time: 9Am-12pm<br>ðŸ“ Location: Himilo Innovation Hub, [</p>\r\n<p>During this meetup at Himilo Innovation Hub, you\'ll have the chance to:</p>\r\n<p>ðŸ“Œ Discover the latest trends and advancements in digital photography<br>ðŸ“Œ Learn essential skills and techniques to enhance your photography skills<br>ðŸ“Œ Gain insights on how to start a career as a digital photographer<br>ðŸ“Œ Explore various avenues to make a living through photography<br>ðŸ“Œ Network with like-minded individuals and industry professionals</p>\r\n<p>Whether you\'re a beginner, an enthusiast, or looking to level up your photography game, this meetup at Himilo Innovation Hub is designed to provide you with valuable knowledge and inspiration. Our expert speakers will share their experiences, tips, and tricks, helping you unlock your creative potential and take your photography skills to new heights.</p>\r\n<p>Don\'t miss out on this incredible opportunity at Himilo Innovation Hub to connect with fellow aspiring photographers, learn about the future of digital photography, and discover the possibilities that lie ahead. Come and join us at Himilo Innovation Hub for an enlightening and engaging session!</p>\r\n<p>Limited spots are available, so make sure to secure your spot at Himilo Innovation Hub by RSVPing today. Click the link below to register and reserve your seat:</p>\r\n<p>[Include registration link]</p>\r\n<p>We can\'t wait to see you at Himilo Innovation Hub for the \"Capturing the Future: Unlocking the World of Digital Photography\" meetup session. Let\'s embark on this exciting journey together and unleash the power of our lenses!</p>\r\n<p>Feel free to tag and share this post with anyone who might be interested. Spread the word and let\'s create a community of passionate digital photographers!</p>\r\n<p>For any inquiries, please reach out to [Contact information].</p>\r\n<p>#DigitalPhotography #PhotographyMeetup #UnlockingTheFuture #InspireAndCapture #himiloinnovationhub&nbsp;</p>', '2024-03-09 14:40:44'),
(18, 'Crafting Websites: Design and Development Bootcamp', 'Design and Development Bootcamp', 'uploads/462490905_529074423391560_6442072155007897060_n.jpg', '<h3>Crafting Websites: Design and Development Bootcamp&nbsp;</h3>\r\n<p>We are thrilled to share the highlights of our recent <strong>Crafting Websites: Design and Development Bootcamp</strong>, held over two exciting days! This intensive program, organized by Himilo Innovation Hub in collaboration with the Faculty of Engineering and Technology at Himilo University, aimed to equip students with essential skills in web design and development.</p>\r\n<h4>Day 1: Design Fundamentals</h4>\r\n<p>The bootcamp kicked off with a focus on design principles, where participants learned to use Figma and Adobe XD. Students engaged in hands-on activities, creating wireframes and prototypes that laid the groundwork for their future projects. The energy in the room was palpable as creativity blossomed!</p>\r\n<h4>Day 2: WordPress Development</h4>\r\n<p>On the second day, students dove into the world of WordPress development. They applied their design skills to build their own websites, transforming their ideas into reality. The atmosphere was filled with excitement as each student showcased their unique designs, demonstrating their newfound knowledge and technical abilities.</p>\r\n<h4>Certificates of Completion</h4>\r\n<p>As the bootcamp concluded, all 50 participants were awarded certificates, recognizing their hard work and dedication. Our rector and deputy rector closed the event with inspiring remarks, encouraging students to continue honing their skills and pursuing their passions in technology.</p>\r\n<h4>A Successful Journey</h4>\r\n<p>This bootcamp was not just an educational experience; it was a celebration of creativity, collaboration, and growth. We are proud of all our students for their commitment and enthusiasm throughout the program.</p>\r\n<p>Thank you to everyone who made this bootcamp a success! We look forward to seeing how our students apply what they\'ve learned in their future endeavors. Stay tuned for more exciting programs and opportunities!</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2024-10-13 10:50:24'),
(19, 'Celebrating the Success of Cohort II Bootcamp', 'Crafting Websites - Design and Development', 'uploads/IMG_3601.JPG', '<p>We are thrilled to announce the successful conclusion of the Cohort II Bootcamp: Crafting Websites - Design and Development at Himilo Innovation Hub! Over four days, held during two weekends, <strong>a total of 43 enthusiastic participants</strong> embarked on a transformative journey to master the art of web design and development.</p>\r\n<p><strong>Bootcamp Overview</strong><br>This intensive bootcamp took place on the weekends of <strong>October 24th and 25th</strong>, followed by October <strong>31st and November 1st </strong>at <strong>Himilo Innovation Hub</strong>. The structure was designed to provide a balanced mix of theoretical knowledge and practical hands-on experience, ensuring that participants left with both skills and confidence.</p>\r\n<p><strong>What Participants Learned</strong><br><strong>Week 1: Design Phase</strong><br>During the first two days, students focused on the design aspect of web development. Here&rsquo;s what they learned:</p>\r\n<p><strong>Mastering Figma:</strong> Participants were introduced to Figma, a powerful design tool used for creating user interfaces. They learned how to navigate the platform and utilize its features to design visually appealing layouts.<br><strong>User Experience (UX) Principles:</strong> Understanding the importance of UX, students explored fundamental principles that guide effective design. They learned how to prioritize user needs and create intuitive navigation.<br><strong>User Interface (UI) Design:</strong> Students gained insights into UI design elements, such as typography, color theory, and spacing. They practiced designing their own websites, applying these concepts to create engaging and functional user interfaces.<br><strong>Project Work</strong>: Each participant designed their own website, allowing them to apply what they learned in a practical context. This hands-on approach fostered creativity and innovation, a core value at Himilo Innovation Hub.<br><strong>Week 2: Development Phase</strong><br>The final two days focused on transforming designs into fully functional websites:</p>\r\n<p><strong>Introduction to WordPress</strong>: Participants were introduced to WordPress, one of the most widely used content management systems. They learned how to set up their websites, customize themes, and manage content effectively.<br><strong>Building Functional Websites:</strong> Students took their designs from Figma and turned them into live websites. They learned how to implement responsive design principles, ensuring their sites look great on any device.<br><strong>E-Commerce Integration:</strong> A key highlight was the exploration of e-commerce solutions. Participants learned how to integrate features that allow customers to purchase products directly from their websites. They set up local payment systems like <strong>EVC and E-Dahab</strong>, as well as international payment options such as <strong>MasterCard and Visa.</strong><br><strong>Final Projects:</strong> By the end of the bootcamp, each student had created a fully functional website, showcasing their unique designs and the e-commerce capabilities they integrated.</p>\r\n<p><br><strong>Building a Collaborative Community</strong><br>One of the standout aspects of the bootcamp at Himilo Innovation Hub was the collaborative environment fostered among participants. Many students had the opportunity to work with peers they hadn&rsquo;t met before, which encouraged teamwork and the sharing of ideas. This collaborative spirit not only enriched the learning experience but also helped build lasting connections within the community.</p>\r\n<p><strong>Certificates of Completion</strong><br>To celebrate their hard work and achievements, each participant was awarded a Certificate of Completion at the end of the bootcamp. This recognition serves as a testament to their dedication and newly acquired skills in web design and development.</p>\r\n<p><strong>Conclusion</strong><br>Cohort II of the <strong>Crafting Websites: Design and Development Bootcamp at Himilo Innovation Hub</strong> was a remarkable success, filled with learning, creativity, and collaboration. We are incredibly proud of the accomplishments of our 43 participants and excited to see how they will apply their skills in the real world.</p>\r\n<p>As we look to the future, we invite aspiring web designers and developers to join us for our upcoming bootcamps at Himilo Innovation Hub. Together, let&rsquo;s continue to explore the endless possibilities of web design and development!</p>\r\n<p>Stay tuned for more updates, success stories, and announcements about future cohorts. Happy designing!</p>\r\n<p><br>#HimiloInnovationHub #WebDesign #WebDevelopment #Bootcamp #Ecommerce #SuccessStories #Figma #WordPress #LearnToCode #CommunityBuilding #CraftingWebsites #HihWebDevelopment</p>\r\n<p><br><br></p>', '2024-11-06 09:28:54'),
(20, 'ðð¢ð  ð€ð§ð§ð¨ð®ð§ðœðžð¦ðžð§ð­ ', 'Digital Empowerment Bootcamps', 'uploads/Digital Bootcamp.jpg', '<p>&nbsp;</p>\r\n<p>ðŸš€ <strong>Empower Your Future with Himilo Innovation Hub!</strong></p>\r\n<p>We&rsquo;re thrilled to announce our <strong>Digital Empowerment Bootcamps</strong>, designed to equip you with the skills needed to thrive in today&rsquo;s digital age. Choose from:</p>\r\n<p>ðŸ’» <strong>Full-Stack Web Development</strong><br>ðŸŽ¨ <strong>Multimedia &amp; Graphic Design</strong><br>ðŸŒ <strong>WordPress Development</strong></p>\r\n<p>These bootcamps are perfect for youth looking to master modern skills and transform their careers.</p>\r\n<p>âœ¨ <strong>Stay tuned for registration details &ndash; your future starts here!</strong><br>#DigitalSkills #Empowerment #Bootcamps #HimiloInnovationHub</p>', '2024-12-10 07:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `current_coment`
--

CREATE TABLE `current_coment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `coment` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `current_coment`
--

INSERT INTO `current_coment` (`id`, `name`, `image`, `coment`, `create_date`) VALUES
(9, 'Mukhtar yonis Abdi', '../uploads/Screenshot 2024-02-02 174045.png.jpg', 'The Entrepreneurship Training Program Provided By The Himilo Innovation hub Was A Game-Changer, I Now Have A Clear RoadMap For Starting And Growing My Business. Thank You For The Incredible Support And Guidance. ', '2024-02-02 14:49:24'),
(10, 'Ali Ibrahim Salah', '../uploads/Screenshot 2024-02-02 175042.png.jpg', 'Thank You, Himilo Innovation Hub, For The Free Entreprenrurship Training! I Learned So Much And Feel More Confident Than Ever To Start My Own Business, The Course Was Incredibly Helpful In Providing Me With The Knowledge And Skills TO Turn MY Busines', '2024-02-02 14:56:55'),
(11, 'Ali Garane Aden ', '../uploads/gaar.jpg', 'Bootcamp-kii aan ka qaatay Himilo Innovation Hub wuxuu runtii wax badan ka beddelay fahamkayga ku saabsan naqshadeynta iyo dhismaha website-yada.', '2024-11-06 09:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `event` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `fb_link` text NOT NULL,
  `in_link` text NOT NULL,
  `tw_link` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `fb_link`, `in_link`, `tw_link`, `create_date`) VALUES
(1, 'https://www.facebook.com/HimiloInnovationHub', 'in_link', 'tw_link', '2024-09-14 11:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

CREATE TABLE `hero` (
  `id` int(111) NOT NULL,
  `text_1` varchar(255) NOT NULL,
  `text_2` varchar(255) NOT NULL,
  `btn_text` varchar(255) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`id`, `text_1`, `text_2`, `btn_text`, `create_date`) VALUES
(1, 'Enriching lives through innovation and creativity', 'We provide services to assist entrepreneurs, startups, and innovators in moving forward, and we have specialized solutions for private sector growth', 'Download Procedure', 0);

-- --------------------------------------------------------

--
-- Table structure for table `impact`
--

CREATE TABLE `impact` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `impact`
--

INSERT INTO `impact` (`id`, `icon`, `name`, `number`, `create_date`) VALUES
(3, '<i class=\'fa-solid fa-grip\'></i>', 'Applicants Received', '1000', '2024-02-01 13:15:35'),
(4, '<i class=\'fa-solid fa-users\'></i>', 'Youth Trained', '300', '2024-02-01 13:18:11'),
(5, '<i class=\'fa-solid fa-wheat-awn\'></i>', 'Entrepreneurs Incubated', '15', '2024-02-01 13:18:55'),
(6, '<i class=\'fa-solid fa-calendar-days\'></i>', 'Events', '10', '2024-02-01 13:19:38');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `image` longtext NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `image`, `create_date`) VALUES
(1, 'uploads/logo.png', '2024-01-19 23:33:43'),
(2, 'uploads/l-s-logo.png', '2024-01-19 23:34:04'),
(3, 'uploads/l-logo.png', '2024-01-19 23:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `logo_slider`
--

CREATE TABLE `logo_slider` (
  `id` int(11) NOT NULL,
  `logo` longtext NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logo_slider`
--

INSERT INTO `logo_slider` (`id`, `logo`, `create_date`) VALUES
(4, 'uploads/l-s-logo.png', '2024-01-25 19:31:25'),
(5, 'uploads/HU_Logo_720x720-01-removebg-preview.png', '2024-02-03 09:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `mentor_students`
--

CREATE TABLE `mentor_students` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mentor_students`
--

INSERT INTO `mentor_students` (`id`, `fullName`, `Email`, `Phone`, `Address`, `create_date`) VALUES
(8, 'Mubarak abdirahman abdilahi ', 'mubaarakabdirahmaan571@gmail.com', '+25263650506', 'Berbera', '2024-09-23 17:30:54'),
(9, 'Mubarak abdirahman abdilahi ', 'mubaarigabdiabdilaahi@gmail.com', '+252636450506', 'Berbera', '2024-09-23 17:31:29'),
(10, 'Cabdiwali xasan cabdulaahi', 'dayaxadaacada@gmail.com', '0618273909', 'Dharkenley ', '2024-10-02 08:21:17'),
(21, 'Abuubakar Mohamed Mohyadin', 'taamir.mm@gmail.com', '+252615546003', 'madiino', '2024-10-03 05:05:04'),
(22, 'Abuubakar Mohamed Mohyadin', 'taamir.mmm@gmail.com', '+25287755566', 'madiino tabkaayo madow', '2024-10-03 05:05:31'),
(23, 'Maryan Cabdulaahi mohamed ', 'Muniichaapdalla@gmail.com', '+252619588349', 'Dharkenley ', '2024-10-03 05:29:37'),
(24, 'Mohamed Mogaw Mohamed ', 'moogaaw9@gmail.com', '+252612084701 ', 'Baydhabo ', '2024-10-03 06:25:36'),
(25, 'Abdinor Adan Ahmed', 'Cabdiramsey@gmail.com', '+252619509724', 'Waaberi ', '2024-10-03 08:06:26'),
(26, 'Abdullhi Adam  Abdinor ', 'alanbiit476@gmail.com', '+252617438064', 'Bay', '2024-10-03 08:59:33'),
(27, 'Abdullhi Adam  Abdinor ', 'Daboole3008@gmail.com', '+252627438064', 'Baidoa ', '2024-10-03 09:04:38'),
(28, 'C.najiib maxamed yuusuf', 'najiib7578@gmail.com', '+252683873206', 'C.caziiz', '2024-10-04 05:50:49'),
(29, 'Abdihamiid Abdi mohamed', 'barafabdi6@gmail.com', '+252612215820', 'Baidoa ', '2024-10-04 19:42:25'),
(30, 'Anisa mohamed ibraahim', 'anizamohamed40@gmail.com', '+252617731619', 'Wadjir', '2024-10-05 08:12:14'),
(31, 'Abdishakur mohamud osman', 'Shakurdebrunya7@gmail.com', '+252619895907', 'AbdiAziiz', '2024-10-06 19:12:40'),
(32, 'CABDIRISAAQ MAXAMED TIFOOW', 'Couplekj565@gmail.com', '+252613513052', 'Dharkenley', '2024-10-07 19:37:16'),
(33, 'Mohamed Ahmed Ibrahim ', 'engshiine2@gmail.com', '+252612492882', 'Wadajir ', '2024-10-29 03:50:56'),
(34, 'Mohamed Salad Hussein', 'momedyare66@gmail.com', '+252611118205', 'labe', '2024-11-13 15:53:23'),
(35, 'Maxmuud Araale jimacaale', 'mohamedcarale839@gmail.com', '+252613978776', 'Dharkiinley', '2024-12-04 08:43:16'),
(36, 'Abshir Yusuf Nur', 'abshirynuur@gmail.com', '+252618941097', 'Karan', '2024-12-04 09:23:17'),
(37, 'Omar Mohamed Abdi Abdillaahi', 'maahirzein08@gmail.com', '+252619689449', 'Kahda', '2024-12-10 12:37:51'),
(38, 'Xuseen nuur maxamed', 'xuseenxarako2019@gmail.com', '+252616102403', 'Ceelasha', '2025-01-05 15:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `our_prog`
--

CREATE TABLE `our_prog` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `text` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_prog`
--

INSERT INTO `our_prog` (`id`, `topic`, `image`, `text`, `create_date`) VALUES
(3, ' Entrepreneurship Training', '', 'We Offer comprehensive training programs that cover various aspects of entrepreneurship, such as idea generation, business planning, marketing, financial management, and legal considerations. We also Provide mentorship and guidance to help participants develop and launch their own businesses.\r\n', '2024-01-18 20:29:53'),
(4, ' Incubation and Acceleration Programs', '', 'we Established an incubation and acceleration program that provides aspiring entrepreneurs with workspace, resources, mentoring, and access to networks. This program can help promising startups grow and scale their businesses effectively.\r\n', '2024-01-18 20:30:26'),
(5, 'Coding and Technology Workshops', '', 'We  Organize coding and technology workshops to teach relevant skills such as web development, mobile app development, data analysis, and artificial intelligence. These skills are in high demand globally and can contribute to the growth of the technology sector in Somalia.\r\n', '2024-01-18 20:30:47'),
(6, 'Industry Partnerships', '', 'We Forge partnerships with local and international tech companies, startups, and investors. Collaborating with industry experts can provide valuable insights, networking opportunities, and potential funding for the startups and entrepreneurs within your hub.\r\n', '2024-01-18 20:31:15'),
(7, 'Hackathons and Innovation Challenges', '', ' we Conduct regular hackathons and innovation challenges to foster creativity, problem-solving, and teamwork among participants. These events can focus on solving local challenges and encourage the development of innovative solutions that benefit the Somali society and economy.\r\n', '2024-01-18 20:31:50'),
(8, 'Business Mentorship', '', ' We Connect experienced entrepreneurs and professionals with young entrepreneurs for one-on-one mentorship sessions. Mentors provide guidance, share their knowledge, and help mentees navigate the challenges of starting and running a business.\r\n', '2024-01-18 20:32:15'),
(9, 'Financial Literacy and Access to Funding', '', 'We Offer workshops and training sessions on financial literacy, including budgeting, bookkeeping, and access to funding. Provide information about available funding opportunities, grants, and loans to help entrepreneurs secure the necessary capital for their ventures.\r\n', '2024-01-18 20:32:43'),
(10, ' Soft Skills Development', '', 'We Conduct workshops on essential employability skills such as communication, teamwork, problem-solving, leadership, and adaptability. These skills are valuable not only for entrepreneurship but also for securing and excelling in employment opportunities within the broader job market.\r\n', '2024-01-18 20:33:08'),
(11, 'Networking Events', '', ' We Organize regular networking events that bring together entrepreneurs, industry professionals, investors, and potential collaborators. These events provide opportunities for participants to expand their networks, build relationships, and explore potential partnerships.\r\n', '2024-01-18 20:33:33'),
(12, 'Community Outreach and Engagement', '', 'We Engage with the local community by organizing outreach programs, such as entrepreneurship awareness campaigns, technology workshops for underserved communities, and collaborations with local schools and universities.', '2024-01-18 20:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `our_ser`
--

CREATE TABLE `our_ser` (
  `id` int(11) NOT NULL,
  `image` longtext NOT NULL,
  `topic` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_ser`
--

INSERT INTO `our_ser` (`id`, `image`, `topic`, `text`, `create_date`) VALUES
(9, 'uploads/teamwork.png', 'Co-Working Space', 'The shared office space used on daily, weekly or monthly\r\nsubscription. ', '2024-01-18 19:42:38'),
(10, 'uploads/adviser.png', 'Mentorship Services', 'we Offer mentorship services in the areas of entrepreneurship,\r\ntechnology development', '2024-01-18 19:53:04'),
(12, 'uploads/funds.png', 'Crowd funding:', 'our crowd funding platform supports entrepreneurs and startups\r\nto share their profiles and business plans ', '2024-01-18 19:55:05'),
(13, 'uploads/scholarship.png', 'Education', 'our education technology practice at Himilo Innovation Hub\r\nfocuses on helping schools and students use technology in smart\r\nways to improve learning outcomes in STEM Education', '2024-01-18 20:26:57'),
(14, 'uploads/incubator.png', 'Incubation and acceleration programs', 'We run accelerator and incubation programs for startups to help\r\nthem improve their products, enter new market, validate their ideas\r\nand build sustainable ventures', '2024-01-18 20:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `link_1` text NOT NULL,
  `link_2` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `name`, `role`, `image`, `link_1`, `link_2`, `create_date`) VALUES
(3, 'Ahmed Abdikadir Abdullahi', 'Innovation Hub Director ', 'uploads/WhatsApp Image 2024-02-03 at 11.41.18 AM.jpeg', 'https://fb.com/', 'https://instgram.com/', '2024-02-12 11:11:17'),
(4, 'Dr.Ahmed Abdi Da\'ud', 'Mentor & Business Development Manager', 'uploads/team-1-1_1.jpg', 'https://facebook.com/himilo', 'https://instgram.com/himilo', '2024-02-18 22:21:49'),
(5, 'Shafi\'i Hilowle Ali', 'Startup Incubator Mentor', 'uploads/j_1.jpg', 'https://facebook.com/himilo', 'https://instgram.com/himilo', '2024-02-18 22:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `our_val`
--

CREATE TABLE `our_val` (
  `id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `val_topic` text NOT NULL,
  `val_text` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_val`
--

INSERT INTO `our_val` (`id`, `topic`, `val_topic`, `val_text`, `create_date`) VALUES
(7, '', 'Integrity', 'Commitment to conducting\r\nbusiness with integrity and\r\nprofessionalism', '2024-01-18 19:38:50'),
(8, '', 'Innovation', 'Commitment to promoting\r\ninnovation and competitiveness', '2024-01-18 19:39:41'),
(9, '', 'Collaboration', 'To build a community powered by\r\ncollaborative knowledge.', '2024-01-18 19:39:57'),
(10, '', 'Trust', 'To ensure among our employees\r\nthe commitment acquired when\r\nundertaking any action', '2024-01-18 19:40:14'),
(11, '', 'Responsibility', 'To build and maintain strong\r\nrelationships with the community for\r\nthe benefit of the region’s\r\ndevelopment.', '2024-01-18 19:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `p_coment`
--

CREATE TABLE `p_coment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `coment` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slide_image`
--

CREATE TABLE `slide_image` (
  `id` int(11) NOT NULL,
  `image` longtext NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slide_image`
--

INSERT INTO `slide_image` (`id`, `image`, `create_date`) VALUES
(4, 'uploads/16.jpg', '2024-01-14 22:42:25'),
(7, 'uploads/5.jpg', '2024-01-15 09:01:30'),
(8, 'uploads/9.jpg', '2024-01-15 09:01:59'),
(9, 'uploads/3.jpg', '2024-01-15 09:02:25'),
(10, 'uploads/5.jpg', '2024-01-15 09:15:49'),
(16, 'uploads/13.jpg', '2024-01-15 09:33:35'),
(17, 'uploads/6.jpg', '2024-01-15 10:34:39'),
(18, 'uploads/7.jpg', '2024-01-15 10:34:51'),
(19, 'uploads/4.jpg', '2024-01-15 10:35:16'),
(20, 'uploads/1.jpg', '2024-01-15 10:36:20'),
(21, 'uploads/15.jpg', '2024-01-15 10:37:12'),
(22, 'uploads/8.jpg', '2024-01-15 15:10:45'),
(23, 'uploads/IMG_3601.JPG', '2024-11-06 09:30:44'),
(24, 'uploads/IMG_3583.JPG', '2024-11-06 09:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(355) NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `email`, `token`, `is_verified`, `created`) VALUES
(1, 'taamir.mm@gmail.com', 'd4b462f931aa65c2a7b36f979901600dfa929d486d3da9a54f5dfdf1e7b1eeb9f3c84f64e5b8a344f7f4595ed263c4fcac23', 0, '2024-01-19 14:00:07'),
(2, 'affanacademy0@gmail.com', 'a6cdbade5c8737cb2c6f7b2e46b22d3cd70f5e35863861edccf6ad3539ca3423a0172cabd6fdd64e68d65daf6263a505bd15', 0, '2024-01-19 14:05:27'),
(3, 'haahaahaahah@gmail.com', '932c7728f29331438447390fc0a2ed8e9f3e1753bc0d13b41d3e5ecc9b1d802f83e8928137d5875f962993cbfd035a5df15b', 0, '2024-01-19 14:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `my_password` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `f_name`, `l_name`, `image`, `email`, `phone`, `my_password`, `create_date`) VALUES
(1, 'ihubauth', 'abuubakar', 'mohamed', 'uploads/user.png', 'ihubauth@gmail.com', '+252615546003', '$pass=\"ihubauth(password)\";', '2024-02-02 12:42:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `current_coment`
--
ALTER TABLE `current_coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impact`
--
ALTER TABLE `impact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo_slider`
--
ALTER TABLE `logo_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor_students`
--
ALTER TABLE `mentor_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_prog`
--
ALTER TABLE `our_prog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_ser`
--
ALTER TABLE `our_ser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_val`
--
ALTER TABLE `our_val`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_coment`
--
ALTER TABLE `p_coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_image`
--
ALTER TABLE `slide_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `current_coment`
--
ALTER TABLE `current_coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `impact`
--
ALTER TABLE `impact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo_slider`
--
ALTER TABLE `logo_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mentor_students`
--
ALTER TABLE `mentor_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `our_prog`
--
ALTER TABLE `our_prog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `our_ser`
--
ALTER TABLE `our_ser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `our_val`
--
ALTER TABLE `our_val`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `p_coment`
--
ALTER TABLE `p_coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide_image`
--
ALTER TABLE `slide_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
