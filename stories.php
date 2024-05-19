<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mia Stories</title>

    <!-- bootstrap css cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--Styles sheet-->
    <link rel="stylesheet" href="styles.css">

    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include './partials/connect.php'; ?>


    <!--php code-->

    <?php
    $id = $_GET['story_id'];
    $sql = "SELECT * FROM `topics` WHERE topic_id=$id";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $topic_name = $row['topic_name'];
        $topic_desc = $row['topic_desc'];
        $topic_image = $row['topic_image'];
    }



    ?>
    <!--jumbotron-->

    <div class="container-fluid">
        <div class="jumbotron text-light bg-dark rounded">
            <div class="container">
                <h1 class="display-4"><?php echo $topic_name; ?></h1>
                <p class="lead"><?php echo $topic_desc; ?></p>
                <button class="btn btn-warning">
                    <a class="text-dark" href="#reading" role="button">Continue Reading...</a>
                </button>

            </div>
        </div>
    </div>



    <div class="container-fluid slider">

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Images/pin6.jpg" class="d-block w-100" alt="first slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><i><b>Write It Down!</b></i></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Images/pin5.jpg" class="d-block w-100" alt="second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><i><b>Write It Down!</b></i></h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Images/pin7.jpg" class="d-block w-100" alt="third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><i><b>Write It Down!</b></i></h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <!-- Reading -->
    <div class="container" id="reading">
        <div class="container-fluid">
            <div class="jumbotron jumbotron-fluid text-light bg-dark rounded
    p-0">
                <div class="container">
                    <h1 class="display-4 text-center">Enjoy Reading!</h1>
                    <img class="img-fluid rounded mx-auto d-block" src="<?php echo $topic_image; ?>" alt="">
                    <h2>Chapter 1: The Sparks Fly.</h2>
                    <p class="lead pb-3">
                        The stench of burnt coffee hung heavy in the air as Sarah slammed the door shut, narrowly missing Liam's nose. He scowled, the remnants of sleep still clinging to his messy hair. "Morning sunshine," he drawled, the sarcasm dripping thicker than the coffee.
                        "More like morning thundercloud," Sarah retorted, her voice laced with the same disdain. Their daily ritual of passive-aggressive greetings had become a well-worn path in their year-long cohabitation.
                        They were polar opposites, both brilliant minds at the cutting edge of tech, but their paths rarely crossed without sparks flying. Sarah, the planner, thrived on order and precision. Liam, the whirlwind of innovation, reveled in the chaos of his latest brainchild. Their rivalry was legendary at Tech Solutions Inc., fueled by their constant one-upmanship in project proposals and late-night coding sessions.
                        Living in the same cramped apartment building only amplified the tension. Shared hallways became battlegrounds for forgotten dishes and overflowing laundry baskets. The kitchen, once a communal space, was now a warzone of passive-aggressive notes left on the fridge and territorial claims over the coffee machine.
                        Their animosity reached its peak during the annual company hackathon. Sarah, with her planned algorithm, was on the verge of winning when Liam, in a last-minute burst of genius, cracked her code and snatched the victory. The look of triumph on his face, coupled with Sarah's utter defeat, cemented their mutual dislike.
                        But fate, it seemed, had a different plan. The CEO, tired of their constant bickering, decided to force them together. Their new project: a revolutionary AI program designed to optimize energy consumption in smart homes.
                        "You've got to be kidding me," Sarah muttered, her eyes widening in disbelief.
                        Liam, for once, seemed equally speechless. The prospect of working together was as appealing as a server crash on presentation day.
                        And so began their unlikely partnership. The initial days were a disaster zone of arguments and slammed laptops. Sarah's calculations clashed with Liam's impulsive leaps of faith. Their coding styles were as different as their personalities, leading to late nights of frustration and near-meltdowns.
                        Yet, amidst the chaos, something unexpected happened. They started to understand each other. Sarah saw the brilliance beneath Liam's messy exterior, his ability to think outside the box. Liam, in turn, admired Sarah's unwavering focus and meticulous attention to detail.
                        As they delved deeper into the project, the late-night arguments morphed into heated discussions, fueled by a shared passion for their creation. They began to appreciate each other's strengths, learning to navigate their differences with a grudging respect.
                        Little did they know, the sparks of their rivalry were slowly igniting into something far more powerful, a connection forged in the crucible of their shared ambition. The world of technology was about to witness the birth of something groundbreaking, and their journey had just begun.
                    </p>
                    <h2>Chapter 2: The Code Whisperer.</h2>
                    <p class="lead pb-3">Weeks turned into months, the initial animosity between Sarah and Liam morphing into a grudging collaboration. Their contrasting styles remained a constant source of friction, but they were slowly learning to navigate them. Sarah, ever the planner, charted the project's roadmap, while Liam, the free spirit, injected his wild ideas into the mix.
                        One particularly frustrating night, Sarah found herself staring at a wall of code, a critical algorithm refusing to cooperate. Hours bled into the early morning, frustration gnawing at her like a persistent bug. Just as she was about to give up, a voice startled her.
                        "Stuck?" Liam stood in the doorway, his messy hair wilder than usual, a mug of coffee clutched in his hand.
                        Sarah hesitated, her pride warring with desperation. Finally, with a sigh, she confessed her predicament.
                        Liam, to her surprise, didn't gloat. Instead, his eyes lit up with a mischievous glint. He perched on the chair next to her, his gaze scanning the code. He muttered under his breath, tracing lines with his finger, a silent conversation with the digital language.
                        Moments turned into an eternity. Sarah watched, captivated by the way his mind seemed to dance with the code, his fingers flying across the keyboard with a practiced ease. He spoke in a low murmur, explaining his thought process, a symphony of logic and intuition.
                        Suddenly, a breakthrough. Liam pointed to a specific line, a seemingly insignificant detail Sarah had overlooked. With a few keystrokes, he tweaked the code, and the algorithm sprang to life, the error vanishing like a ghost.
                        Relief washed over Sarah, followed by a strange sense of awe. It was the first time she had truly witnessed Liam's genius in action, the way he could seemingly whisper to the code and coax it into obedience.
                        "There you go," Liam said, a hint of a smile playing on his lips. "Sometimes, the solution is just a matter of perspective."
                        Sarah managed a weak smile in return. "Thanks, Liam. I wouldn't have figured it out without you."
                        The tension in the room had shifted, replaced by a newfound respect. It was a small victory, a shared triumph in the trenches of their project. But as they sat there, surrounded by the hum of their computers and the faint glow of the morning light, a different kind of spark flickered between them, a spark that had nothing to do with rivalry and everything to do with the shared language of innovation.
                    </p>
                    <h2>Chapter 3: The Late Night Deliveries.</h2>
                    <p class="lead pb-3">
                        The shared victory over the stubborn algorithm had a subtle yet profound effect on Sarah and Liam's dynamic. The tension, though not entirely gone, had softened around the edges, replaced by a grudging respect and a newfound appreciation for each other's skills.
                        Late nights in the cramped apartment became less about silent battles and more about collaborative brainstorming sessions. Takeout boxes piled up on the coffee table, fueled by caffeine and the shared pursuit of their project.
                        One particularly grueling night, Sarah, bleary-eyed and exhausted, stumbled into the kitchen for a much-needed caffeine fix. She found Liam already there, a half-eaten bowl of cereal perched precariously on a stack of coding manuals.
                        "Rough night?" he asked, his voice laced with a hint of amusement.
                        Sarah grunted in response, her eyes glued to the coffee machine.
                        "You know," Liam continued, "sometimes a change of scenery does wonders."
                        Before Sarah could question him, a knock on the door startled them. Liam opened it to find a delivery guy holding a steaming pizza.
                        "Extra pepperoni," Liam grinned, handing over a wad of cash. "My treat."
                        Sarah stared at him, bewildered. "But..."
                        "Consider it a peace offering," Liam interrupted, a playful glint in his eyes. "And maybe a bribe to keep you going for another few hours."
                        Sarah hesitated, then a small smile tugged at the corner of her lips. "Fine," she conceded, "but next time, I'm ordering the toppings."
                        They settled back at their computers, the shared pizza a silent truce in their ongoing battle against the project deadline. As the night wore on, the lines between work and personal space began to blur. Liam, usually a whirlwind of chaotic energy, surprised Sarah with his quiet focus. He seemed to understand her need for order, instinctively creating space for her meticulous calculations within his own creative chaos.
                        In the quiet hum of the apartment, a sense of camaraderie bloomed, a shared understanding forged in the crucible of their late-night battles. It was a fragile bond, built on a foundation of mutual respect and fueled by the shared passion for their creation. But beneath the surface, something else was stirring, a spark of something more than just professional collaboration. It was a spark that promised to change the course of their lives, both in the world of technology and beyond.
                    </p>
                    <h2>Chapter 4: The Accidental Confession.</h2>
                    <p class="lead pb-3">
                        The weeks leading up to the project deadline were a whirlwind of caffeine-fueled coding sessions and late-night brainstorming. Sarah and Liam, once adversaries, had become an unlikely team, their contrasting styles somehow meshing into a potent force.
                        One particularly stressful afternoon, the tension in the air was thicker than the code they were wrestling with. A crucial algorithm malfunction threatened to derail their entire project. Sarah, usually the picture of calm, was on the verge of a meltdown. Liam, sensing her frustration, did something completely unexpected.
                        He reached out, his hand gently hovering over hers on the keyboard. Sarah froze, her breath catching in her throat. His touch sent a jolt through her, a spark that had nothing to do with the problem at hand.
                        "Let me try," he said softly, his voice barely a whisper.
                        Sarah, mesmerized by the sudden closeness, relinquished control. Liam's fingers danced across the keyboard, a symphony of logic and intuition. He spoke in a low murmur, explaining his thought process, his voice a soothing balm to her mounting anxiety.
                        Minutes ticked by, the tension in the room replaced by a strange sense of intimacy. When Liam finally solved the problem, a wave of relief washed over Sarah, followed by a realization that sent a blush creeping up her cheeks.
                        They had been so focused on the task at hand that they hadn't noticed the shift in their dynamic. The accidental touch, the quiet murmur, the shared triumph – it all felt different, charged with an unspoken tension that went beyond their usual professional collaboration.
                        As they pulled back, their eyes met, and for a fleeting moment, the world around them seemed to fade away. A silent understanding passed between them, a realization that their animosity had morphed into something far more complex, something that threatened to rewrite the code of their carefully constructed lives.
                        The air crackled with unspoken emotions, leaving them both speechless. Sarah, usually so articulate, could only manage a weak smile. Liam, for once, seemed equally flustered, his usual playful banter replaced by a hesitant silence.
                        The project deadline loomed large, a constant reminder of the reality they had to return to. But the spark that had ignited between them, born from the crucible of their shared struggle, refused to be extinguished. It was a spark that promised to change their lives forever, both in the world of technology and in the uncharted territory of their hearts.
                    </p>
                    <h2>Chapter 5: The Presentation and its Aftermath.</h2>
                    <p class="lead pb-3">
                        The tension following the accidental touch hung heavy in the air, a silent acknowledgment of the unspoken emotions swirling between Sarah and Liam. They threw themselves back into their work, the project deadline, a welcome distraction from the unspoken desires simmering beneath the surface.
                        The presentation day arrived, a culmination of months of tireless work. Standing side-by-side, Sarah and Liam unveiled their creation – a revolutionary AI program that promised to revolutionize energy consumption in smart homes. Their presentation was flawless, a testament to their contrasting styles that somehow managed to complement each other perfectly.
                        The response was overwhelming. Applause filled the room, followed by a flurry of questions and eager inquiries. Sarah and Liam, once rivals, were now hailed as a formidable team, their creation generating a buzz that resonated throughout the tech industry.
                        As the excitement died down, a sense of accomplishment settled over them. They had achieved something remarkable, not just for the world of technology, but also for themselves.
                        But the lingering tension remained, a silent undercurrent beneath the surface of their success. As the crowd dispersed, their eyes met, and the unspoken confession hung between them, a question mark waiting to be answered.
                        Suddenly, Liam extended his hand. "Drinks?" he asked, his voice barely above a whisper.
                        Sarah hesitated for a moment, then a small smile played on her lips. "Sure," she agreed, her voice betraying the flutter in her stomach.
                        They stepped out into the bustling city, the weight of the presentation lifting from their shoulders. The world around them seemed different, charged with the electricity of their unspoken connection.
                        As they walked, the conversation flowed easily, a comfortable rhythm replacing the usual competitive banter. They talked about their work, their dreams, their hopes for the future. But beneath the surface, there was something else, a shared vulnerability that had blossomed amidst the pressure of their project.
                        The bar they settled in was a quiet haven amidst the city's chaos. As they sipped their drinks, their eyes met again, and the unspoken truth finally spilled over.
                        "About the other night..." Sarah began, her voice hesitant.
                        Liam leaned in, his gaze intense. "I know," he said softly. "And I..."
                        He didn't need to finish the sentence. The spark of understanding in their eyes spoke volumes, a confirmation of the feelings that had been simmering beneath the surface for weeks.
                        The night unfolded in a blur of whispered conversations and stolen glances. The lines between colleagues and collaborators blurred further, replaced by the tentative steps of a nascent connection.
                        As they walked back to their apartment, the city lights seemed brighter, the air charged with the promise of something new. They had achieved a groundbreaking success in the world of technology, but the most significant breakthrough was yet to come – the one that would rewrite the code of their hearts.
                    </p>
                    <h2>Chapter 6: Navigating Uncharted Territory.</h2>
                    <p class="lead pb-3">The following days were a delicate dance between the familiar and the new. Sarah and Liam still worked side-by-side, the project demands keeping them grounded in their professional partnership. But beneath the surface, a new current flowed, a subtle shift in their interactions that sent shivers down their spines.
                        Stolen glances across the office, lingering touches during brainstorming sessions, whispered jokes that only they understood – the air crackled with unspoken desires. The lines between colleagues and something more were blurring, leaving them both exhilarated and apprehensive.
                        One particularly quiet evening, Sarah found herself lingering in the kitchen after work, the silence in the apartment deafening. Liam walked in, his gaze lingering on her for a beat too long before he spoke.
                        "Can't sleep?" he asked, his voice a low murmur.
                        Sarah shook her head, her heart hammering in her chest. "No, just... thinking."
                        Liam leaned against the counter, his eyes searching hers. "About what?"
                        The unspoken question hung between them, a silent acknowledgment of the new reality they both navigated. Sarah took a deep breath, her voice barely a whisper.
                        "About us," she confessed.
                        Liam's lips curved into a hesitant smile. "Me too."
                        The air crackled with unspoken desires, the tension thick enough to cut with a knife. They stood there, a silent storm brewing between them, the boundaries of their professional relationship teetering on the edge of collapse.
                        Suddenly, Liam reached out, his fingers brushing against hers. The touch sent a jolt through Sarah, a spark that ignited the unspoken desires simmering beneath the surface.
                        "What do we do?" he asked, his voice husky with unspoken emotions.
                        Sarah looked into his eyes, the answer clear as day. They both knew this was uncharted territory, a path they hadn't planned on taking, but the pull of their connection was undeniable.
                        With a shared breath, they leaned in, the kiss a collision of pent-up emotions, a confirmation of the feelings that had been simmering for weeks. It was a kiss filled with the thrill of the unknown, the excitement of a new chapter unfolding in their lives.
                        As they pulled back, the air around them felt charged, the silence now filled with a different kind of tension. They had crossed a line, a point of no return, and the future stretched before them, an exciting yet uncertain landscape.
                        Their journey in the world of technology had taken an unexpected turn, leading them to a groundbreaking invention and now, to the precipice of a love story waiting to be written.
                    </p>
                    <h2>Chapter 7: Navigating the Workspace.</h2>
                    <p class="lead pb-3">
                        The days following their unexpected kiss were a whirlwind of stolen glances, lingering touches, and whispered conversations that sent shivers down Sarah and Liam's spines. Their professional partnership remained intact, fueled by the demands of their ongoing project and the constant media attention surrounding their groundbreaking invention.
                        But the air crackled with a new energy, a subtle shift in their interactions that was impossible to ignore. The shared late-night coding sessions now held a different kind of tension, the quiet moments filled with unspoken desires and the promise of something more.
                        However, navigating their newfound romance in the workplace proved tricky. The office gossip mill was a constant hum, and the potential for awkwardness loomed large. They had to tread carefully, maintaining a professional facade while indulging in stolen moments of intimacy when no one was looking.
                        One particularly tense afternoon, Sarah found herself cornered by a group of colleagues, their questions laced with thinly veiled curiosity about her and Liam's sudden change in demeanor.
                        "So," one of them began, a sly smile playing on her lips, "are you two an item now?"
                        Sarah felt her cheeks flush, her heart hammering against her ribs. She glanced towards Liam, who was pretending to be engrossed in his work, but she could feel his gaze burning into her.
                        Taking a deep breath, she decided to face the inevitable. "Yes," she said, her voice firm despite the butterflies in her stomach.
                        The announcement was met with a mixture of surprised gasps and knowing nods. The tension in the air finally dissipated, replaced by a sense of acceptance.
                        From that day on, Sarah and Liam navigated their relationship with newfound openness. They still maintained professionalism at work, but their interactions were no longer shrouded in secrecy. A quick brush of hands during a meeting, a shared smile across the room – these subtle gestures became their secret language, a silent acknowledgment of the bond they shared.
                        The media frenzy surrounding their invention only intensified, further blurring the lines between their professional and personal lives. Interviews, photo shoots, and public appearances became a constant part of their routine, and they learned to navigate the spotlight together.
                        Amidst the chaos, their love blossomed, fueled by shared late nights working on their project, stolen kisses in the quiet corners of the office, and whispered promises of a future they were both eager to explore. They were not just colleagues and collaborators anymore; they were partners in every sense of the word, their professional and personal lives intertwined in a way they never could have anticipated.
                        Their journey in the world of technology had taken an unexpected turn, leading them not only to groundbreaking innovation but also to a love story that was just beginning to unfold.
                    </p>
                    <h2>Chapter 8: The Birth of an Idea.</h2>
                    <p class="lead pb-3">
                        The whirlwind of media attention surrounding their invention began to settle, leaving Sarah and Liam with a strange sense of normalcy amidst the chaos. Their professional lives continued at a steady pace, fueled by the ongoing development of their AI program and the constant stream of requests for interviews and collaborations.
                        But their personal lives blossomed in the quiet moments stolen between meetings and late-night coding sessions. Weekend getaways to secluded cabins, shared meals cooked in their cramped apartment, and whispered promises under the starry sky – these moments became their sanctuary, a refuge from the public eye.
                        One particularly rainy Saturday afternoon, curled up on the couch with mugs of steaming coffee, Sarah and Liam found themselves discussing their future. The success of their invention had opened doors they never imagined, and lucrative job offers were flooding their inboxes.
                        "Maybe it's time we strike out on our own," Liam mused, his gaze fixed on the rain-streaked window.
                        Sarah's eyes widened. "Our own company? Are you serious?"
                        A playful grin spread across Liam's face. "Why not? We work well together, and the ideas are flowing. We could create something truly groundbreaking, something that reflects both our strengths."
                        The seed of an idea was planted, a spark of ambition ignited by their shared love for technology and each other. They spent the rest of the afternoon brainstorming, their initial hesitation morphing into a shared excitement. They envisioned a company built on innovation, a platform where their contrasting styles could complement each other, pushing the boundaries of what was possible.
                        The next few weeks were a blur of late-night discussions, market research, and meticulous planning. They poured their hearts and souls into their vision, fueled by the belief that they could create something truly special. Finally, the day arrived – the official launch of their own tech company.
                        Standing hand-in-hand at the press conference, surrounded by flashing cameras and eager reporters, Sarah and Liam announced their venture to the world. The air crackled with anticipation, a testament to the impact they had already made in the tech industry.
                        Their journey had taken an unexpected turn, leading them from rivals to partners, from groundbreaking invention to entrepreneurship. As they looked into each other's eyes, they knew this was just the beginning. Their love story was intertwined with their tech journey, a testament to the power of collaboration, innovation, and the spark that ignited between two brilliant minds and passionate hearts.
                    </p>
                    <h2>Chapter 9: The Growing Empire.</h2>
                    <p class="lead pb-3">The launch of their company, named "Synapse," marked a new chapter in Sarah and Liam's journey. The initial months were a whirlwind of activity, fueled by their relentless drive and the growing demand for their expertise. They assembled a talented team of engineers and designers, drawn to their innovative vision and the infectious energy of their partnership.
                        Their contrasting styles continued to be their secret weapon. Sarah, with her meticulous planning and organizational skills, kept the company running smoothly, while Liam's boundless creativity fueled the development of groundbreaking new products. They learned to navigate their differences, their arguments often leading to breakthroughs, their contrasting perspectives pushing the boundaries of what was possible.
                        Their first major project was an AI-powered personal assistant, a natural evolution of their initial invention. This time, they aimed to create a truly intuitive and personalized experience, one that could anticipate users' needs and seamlessly integrate into their daily lives.
                        The development process was a rollercoaster of late nights, caffeine-fueled brainstorming sessions, and the occasional heated debate. But their shared passion and unwavering belief in their vision kept them going. Finally, after months of tireless work, they unveiled their creation to the world.
                        The response was overwhelming. Their AI assistant, christened "Iris," became an instant success, lauded for its intuitive interface and ability to learn and adapt to individual users. Synapse was catapulted into the spotlight, attracting significant investments and partnerships.
                        As their company grew, Sarah and Liam found themselves juggling the demands of leadership with the responsibilities of their personal lives. They carved out stolen moments amidst the chaos, celebrating milestones with quiet dinners and impromptu weekend getaways.
                        Despite the whirlwind, they remained grounded, their core values guiding their decisions. They prioritized ethical AI development, ensuring their technology served humanity and not the other way around. Their commitment to responsible innovation resonated with their customers, further solidifying their position as a leader in the tech industry.
                        Years passed, and Synapse became a global phenomenon. Their inventions, driven by Sarah and Liam's unique partnership, revolutionized various aspects of daily life, from personalized healthcare to sustainable energy solutions. They had built an empire, not just of technology, but also of love and shared ambition.
                        But their journey wasn't over. The future stretched before them, filled with new challenges and opportunities, and they were ready to face them together, hand-in-hand.
                    </p>
                    <h2>Chapter 10: The Codes of Their Hearts.</h2>
                    <p class="lead pb-3">
                        Decades had passed since the spark ignited in that cramped apartment, a spark that had blossomed into a love story and a tech empire. Sarah and Liam, their hair now streaked with silver, sat hand-in-hand on the balcony of their sprawling penthouse, overlooking the city that had witnessed their journey.
                        The cityscape was unrecognizable from their early days. Their inventions, once groundbreaking, now formed the very fabric of daily life. Smart homes, personalized healthcare, sustainable energy solutions – their creations had transformed the world, a testament to the power of their collaboration.
                        But as they gazed at the twinkling lights, it wasn't the city that held their attention. It was each other. Their eyes met, a silent conversation passing between them, a language forged in years of shared triumphs and challenges.
                        "Remember that first hackathon?" Liam chuckled, a hint of nostalgia in his voice.
                        Sarah smiled, the memory vivid even after all these years. "And the burnt coffee? And the constant arguments?"
                        They both laughed, the sound echoing through the quiet night. The initial animosity, the clash of their contrasting styles – it all seemed like a distant memory now, a stepping stone on their extraordinary path.
                        "We came a long way," Sarah murmured, her voice filled with awe.
                        Liam squeezed her hand. "We did. And it's not over yet."
                        The future stretched before them, filled with new possibilities. They had reached the pinnacle of their careers, their names etched in the history books of technological innovation. But their passion, their drive, remained undimmed.
                        They dreamt of tackling new challenges, pushing the boundaries of what was possible, always with the unwavering belief in each other's abilities. Their love story, intertwined with their journey in the world of technology, had become a beacon of inspiration, a testament to the transformative power of collaboration, ambition, and a spark that ignited a revolution.
                        This was just but a new beginning. The code of their hearts, forever intertwined, would continue to write their story, a story etched not just in the silicon landscape of technology, but also in the enduring legacy of their love.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Thank you text-->

    <div class="container-fluid mb-4">
        <h2 class="text-center display-4">Thank You for your Time😁!</h2>
    </div>

    <?php include './partials/footer.php'; ?>

</body>

</html>