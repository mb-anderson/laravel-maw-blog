<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blogs')->delete();
        
        \DB::table('blogs')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'content' => 'Custom app development wins the battle with ready made solutions for a simple reason, when you create a custom app, you become its owner. Off the shelf solution never gives you all reins and the same level of control as the custom software does. The bespoke app is capable of evolving alongside your business and can scale accordingly to the growing business requirements. Purchasing a custom app means that a business is investing in itself.
The obvious benefits businesses get from creating custom application includes scalability, easy deployment and increased productivity. There are no doubts, the future of mobile dev belongs to the custom apps. 2019 is anticipated to be the year when adoption of mobile apps will grow to meet the specific business requirements, as research from IDC analysts says.
Sometimes we can spend so much time finding a workaround for a problem while using off the shelf applications, it would have been more cost effective and quicker to have had a custom software built on the long run.
Also with off the shelf applications it could be more costly or in some cases not possible to have a new and very specific feature to be added on.
Few examples where we were able to find solutions here at webApps4u
<br/><br/>
Set a schedule to export data from the in-house software as a CSV and upload it to the website updating products, prices and descriptions a few times a day.
Restrict user registrations and deliveries for customers that were not on the postcode list.
Created banners and when clicked on, it will return all the products related to the banner or the offers. Also created an easy access admin page where staff can make changes to the banners as an when needed.
Limit certain product quantity when ordering.
<br/><br/>
Pre-created passwords to all existing customers than diverted everyone to change password page at their first login.
The list goes on. There is hardly anything that cannot be achieved with a custom web application.',
                'created_at' => '2023-04-09 00:30:39',
                'featured_image' => 'blog_webapp.jpg',
                'featured_text' => 'Custom app development wins the battle with ready made solutions for a simple reason, when you create a custom app, you become its owner.',
                'id' => 1,
                'publish_date' => '2023-04-09 12:30:39',
                'status' => 2,
                'title' => 'Advantages Of Custom Web Applications',
                'updated_at' => '2023-04-09 00:44:40',
                'url' => 'advantages-of-custom-web-applications',
            ),
            1 => 
            array (
                'category_id' => 2,
                'content' => '
Designing a fresh simple website is no easy task. There are a lot of factors to take into account. Images need to be high quality and clean, must be user-friendly, design of the menu needs to be clean, the logo needs to stand out, must be rich in content and we must not forget speed.The website needs to load fast. All websites must be responsive. We spend much more time on mobile devices than computers these days. At webApps4u we start to design for mobile devices first then move on to desktop screens.
Colours are also important. Did you know each colour represents a different industry or character?
are some of the colours and their meanings.
<br/><br/>
Green: Represents wealth, health, tranquillity and nature. The easiest colour for the eye to process, so it has relaxing effects. Some of the companies that use green are BP, Whole Foods, Animal Planet and Tropicana.
<br/><br/>
Yellow: Represents youthfulness, optimism and cheerfulness. Often used to grab attention. Yellow can put strain on the eyes, so you want to use it sparingly. Companies that use yellow are McDonalds, Hertz, National Geographics and Best Buy.
<br/><br/>
Orange: Represents friendliness, enthusiasm and creativity. Promotes people to take action like BUY and Subscribe. Orange also attracts impulse shoppers. Some of the companies are Amazon, Payless, Harley Davidson and Crush Orange.
<br/><br/>
Red: Represents passion, energy, urgency, excitement, vibrancy and danger. Often used to create urgency for people to buy or take action. Effective in triggering strong emotional reactions. Restaurants use it to stimulate the appetite. Companies use red are Kmart, H&M, Coca-Cola and Heinz.
<br/><br/>
Pink: Represents feminine, sweetness, innocence, fertility and romance. Often used to market services and products to women and young girls. Companies that use pink are PINK, Barbie and T Mobile
<br/><br/>
Purple: Represents royalty, wealth, success and wisdom. Often used in beauty or anti-ageing products. Purple has a shooting and calming effect on people. Companies that use purple are Crown Royal, Qatar and Cadbury.
<br/><br/>
Blue: Represents trust, security, stability, peace and calmness. Often used in businesses and banks to create a sense of security and trust in the brand. Blue is the number one preferred colour by both men and women. Companies like Oral-B, American Express and Dell use the colour blue.
<br/><br/>
Grey: Represents neutral, simplicity, calm, futuristic and logic. It lacks emotion and is associated with technology, industry, precision, control, competence and even sophistication. Companies that use grey include Apple, Mercedes and Tesla.
<br/><br/>
Black: Represents power, luxury, sophistication and elegance. Often used to market luxury brands to evoke professionalism, strength and precision. Companies that use black are Rolls Roys, Chanel and Loreal Paris.
<br/><br/>
You can use colours to guide your visitors to the direction you want by making certain text or buttons more visible.
Every designer will have their own style so there is no correct way of stating but if you are a newbie there are few methods that you can use.
<br/><br/>
- Method 1- Start with an image. You can get inspired by an image, also use the colour scheme from the image.
<br/><br/>
- Method 2 - Start with the business goal. Choose the colour that will attract the type of customer you want then build everything with this colour.
<br/><br/>
- Method 3 - Start with a blank page. You will need to build a colour plate. A colour plate usually has 3 colours and a good rule of thumb is to use 60%, 30% and 10%. Primary colour being 60% then secondary colour 30% and the third colour which is used for complementing your primary and secondary should be 10%.',
                'created_at' => '2023-04-09 00:30:39',
                'featured_image' => 'web_design.png',
                'featured_text' => 'Designing a fresh simple website is no easy task. There are a lot of factors to take into account.',
                'id' => 2,
                'publish_date' => '2023-04-09 00:30:39',
                'status' => 2,
                'title' => 'Web Design',
                'updated_at' => '2023-04-09 00:30:39',
                'url' => 'web-design',
            ),
            2 => 
            array (
                'category_id' => 1,
                'content' => '
There may be a time where you may have had to make a decision between having a native mobile application or a responsive web application. You might find that the native mobile app has a few nice extra features that your responsive website doesn\'t provide. For example, sending a notification to a user or work offline while there is no internet. But is it worth spending thousands of hard earned cash just to have these few extra features? And don\'t forget this cost will easily double or triple if you had to have your app work on an Apple device, Android device and also a Windows device.
You probably started wondering why Progressive Web Apps aren\'t used far and wide.
Even though the technology has been around for a while now with the new HTML5 introduced it has become easier to implement.
What is a progressive web app?
<br/><br/>
A progressive web application takes advantage of the latest technologies to combine the best of web and mobile apps. Think of it as a website built using web technologies but that acts and feels like an app. Recent advancements in the browser and in the availability of service workers and in the Cache and Push APIs have enabled web developers to allow users to install web apps to their home screen, receive push notifications and even work offline..
Works on all devices
<br/><br/>
Some of the best features of Progressive Web Apps (PWA\'s);
- Installable. A progressive web app can be installed on the device’s home screen, making it readily available.<br/>
- Progressive. By definition, a progressive web app must work on any device and enhance progressively, taking advantage of any features available on the user’s device and browser.
<br/>
- Discoverable. Because a progressive web app is a website, it should be discoverable in search engines. This is a major advantage over native applications, which still lag behind websites in searchability.
<br/>
- App-like. A progressive web app should look like a native app and be built on the application shell model, with minimal page refreshes.
<br/>
- Offline. It works offline.
<br/>
- Push Notification. Mobile app users are more likely to reuse their apps, and progressive web apps are intended to achieve the same goals through features such as push notifications.
<br/>
- Installable. A progressive web app can be installed on the device’s home screen, making it readily available.
<br/>
- All Way Up To Date. Every time new content is published the user will get the latest content soon as they have an internet connection available.
<br/>
- Safe. Because progressive web apps all network requests can be intercepted through service workers and also it has to be hosted over HTTPS it prevents man-in-the-middle attacks.
<br/><br/>
In my opinion, progressive web apps will be the future of all website and apps as you will never need to develop website and apps separately, which saves time and money.
There are a few browsers that do not support WPA}\'s at the moment. These browsers are Safari and Microsoft Edge. Microsoft Edge has is now in development mode but Safari which is the main browser on all apple devices has no plans just yet..',
                'created_at' => '2023-04-09 00:30:39',
                'featured_image' => 'pwa.png',
                'featured_text' => 'There may be a time where you may have had to make a decision between having a native mobile application or a responsive web application.',
                'id' => 3,
                'publish_date' => '2023-04-09 00:30:39',
                'status' => 2,
                'title' => 'Progressive Web Apps',
                'updated_at' => '2023-04-09 00:30:39',
                'url' => 'progressive-web-apps',
            ),
            3 => 
            array (
                'category_id' => 4,
                'content' => 'There are so many little tasks that we all have to do every day which makes the day feel busy and gives us that sensation of being useful, but in reality, that\'s not being productive. Imagine having time to find new customers, implement new strategies and making decisions that make a real difference.
With the correct software, web application or even an app, we can automate most of these small tasks.
<br/><br/>
To busy
Few examples
<br/>
Having all staff login to work using a clocking device and having this information sent to you on a scheduled time.
If you have an e-commerce or any sales software auto-generate most used reports and email you at a certain time.
You could have your engineers on the road using online job sheet to log all the work, then having the web application email you a report showing who completed which job and when. This will free up a lot of time during the week.
Having your web application helping potential customers get quotes after hours.
<br/><br/>
As we can see by looking at Amazon, Uber, JustEat and many other companies that made everything available online allowed them to grow huge as they don\'t need people doing all the work all day and night. They don\'t need people answering a call just to book a taxi, they don\'t need someone to answer the phone just to take a simple food order. Web Applications not only make life easier it also reduces human errors.
Remember the days when we ordered food over the phone and instead of lamb shish kebab we ended up with lamb doner instead. Now, whose fault was that :)
<br/><br/>
We used to call up and wait in line for hours just to ask where our delivery was, now we can just ask Alexa "where is my delivery".
<br/><br/>
Think about it, what is it that you do daily or what are time-consuming tasks that you have to do every day? Which tasks do keep your employees occupied for a long period of time?
<br/><br/>
Now, if you have designed a custom solution for your problems, it\'s not difficult to see how you can now start to progress and move forward. Worst case scenario you could save money from stopping mistakes, having employees being more productive and concentrating on what really matters.
<br/><br/>
My favourite is that these software solutions do the work while you sleep. Make sales, generate invoices, take payments, produce time sheets, lets customers log in to their accounts to get all the information they need. By the time you wake up, you would have completed a days work already.',
            'created_at' => '2023-04-09 00:30:39',
            'featured_image' => 'business.jpg',
            'featured_text' => 'There are so many little tasks that we all have to do every day which makes the day feel busy ...',
            'id' => 4,
            'publish_date' => '2023-04-09 00:30:39',
            'status' => 2,
            'title' => 'How to grow your business with WebApplications',
            'updated_at' => '2023-04-09 00:30:39',
            'url' => 'how-to-grow-your-business-with-webApplications',
        ),
        4 => 
        array (
            'category_id' => 4,
            'content' => '
We have been contacted by a lift installation company stressing that they had 90 subcontractors and was struggling to keep a track of locating their engineers and the hours of work they were putting in. They had more than 10 active sites and sometimes engineers will go to different sites. Most sites were construction sites and which meant in most cases there was no internet or even electric. Furthermore, some engineers had agreed on a set price for the installation and will invoice for % of the job and some engineers get paid by the hour which they will complete a timesheet explaining which sites they have visited, time of arrival and finish time. All of this generated a lot of emails and paperwork for the engineers and the accounts department, where each month they would receive 90 invoices and they all demanded payment asap which gave accounts team a little time to check the details of the timesheets and invoices. On top of it, the company also sold some of the tools which engineers purchased and they had to pay for them at the end of each month. In most cases, the engineers would leave notes for the accounts department outlining what tools they took.
WebApps4u came up with the idea of developing a web application where engineers could sign in to work then select the site they are at. We wanted to make the web application user-friendly for the engineers so they would choose a site then click on "login to work" but we recorded the altitude and latitude of the phone on the database so we knew where they were when the button was clicked. The office staff could load the day\'s activity and see who is where on a spreadsheet-like layout. They could further click on the location of the engineer to view on the map to locate where the engineer is. The engineer could not sign in to the app anywhere else or even the same place the next day if they hadn\'t logged out. If they forgot to log out they would have to call the office team and explain, which then the web application allowed the office staff to edit the leaving time. The engineers could also browse through all the tools they need via the web application then place the order where office staff would receive an email and prepare the order to be picked up. This allowed engineers to get organised and even start adding items to their list while on site. Of course, they could also add more to their list whilst in the office.
<br><br>
The engineers loved the fact that they could select the invoice section where they could either click on a new invoice which auto-populated all the information including how much the job was agreed for and they could simply enter the % they were going to charge or continue invoicing the job that they partly invoiced previously. If they were charging hourly the engineers could select the weeks that they haven\'t already invoiced and generated the invoice from their timesheet. This was also very handy as some engineers invoiced every 5 weeks and some every 2 weeks, and some engineers mostly 4 weeks. Besides this, the invoice also added all the tools bought.
<br><br>
Office team marked each invoice after making payments via dropdown menu saying Paid / Not Paid / Partly paid with a reason. Engineers didn\'t have to call up to ask if they got paid, they could simply login to the web app to check if NOT PAID has been changed to PAID :)
<br><br>
The average hourly rate was £90 for lift engineers at the time and if they were leaving work 1 hour early every day this web app would have saved the company nearly £2000 just on the payroll. The amount of time saved for the accounts department was priceless. They used to dread the end of each month. The engineers no longer had to go through their dairy to create their invoices for the whole month which saved them hours. Overall things were running much more smoothly and took a lot of stressful workloads out for the admin team.',
        'created_at' => '2023-04-09 00:30:39',
        'featured_image' => 'time_and_money.jpg',
        'featured_text' => 'We have been contacted by a lift installation company stressing that they had 90 subcontractors and ...',
        'id' => 5,
        'publish_date' => '2023-04-09 00:30:39',
        'status' => 2,
        'title' => 'How we helped our client save time and money',
        'updated_at' => '2023-04-09 00:30:39',
        'url' => 'how-we-helped-our-client-save-time-and-money',
    ),
    5 => 
    array (
        'category_id' => 1,
        'content' => 'Have you ever had an idea for an app, software or even a website that could make lots of money? Or maybe an idea that could help lots of people but didn\'t know whom to go and whom to trust with your ideas. End of the day it\'s your idea your vision and you don\'t want anyone else stealing it. You probably have lot\'s of questions like how much will it cost, how long will it take, what is required to make your vision come to life.
We hear this quite often and here at Web Apps 4 U privacy is our top priority. We are a software company and this is our business and we are here to help people and companies bring their idea\'s to life and not to get idea\'s and do it our selves. We have built websites, web apps and apps for all sorts of industries like construction, lift installation, finance, catering, laundry, wholesale, martial arts, art portfolio, author and many more, so we know that you have the vision and the know-how to make your idea come to life. We just help and advice on the technology side with the experience we have, to give you the best chance to achieve and build your business.
<br>
<br>
We will listen and discuss the details and give you a price and a timescale so you can decide if it\'s worth starting once you have done your maths.',
        'created_at' => '2023-04-09 00:30:39',
        'featured_image' => '1681141632.png',
        'featured_text' => 'Have you ever had an idea for an app, software or even a website that could make lots of money?',
        'id' => 6,
        'publish_date' => '2023-04-09 12:30:39',
        'status' => 2,
        'title' => 'Bringing Ideas to Life',
        'updated_at' => '2023-04-10 15:47:12',
        'url' => 'bringing-ideas-to-life',
    ),
    6 => 
    array (
        'category_id' => 1,
        'content' => '<p>Content blog</p>',
        'created_at' => '2023-04-10 15:49:31',
        'featured_image' => '1681347424.png',
        'featured_text' => 'TEST BLOG FEATURE',
        'id' => 7,
        'publish_date' => '2023-04-10 03:48:43',
        'status' => 2,
        'title' => 'blog test',
        'updated_at' => '2023-04-13 15:38:03',
        'url' => 'blog-test',
    ),
));
        
        
    }
}