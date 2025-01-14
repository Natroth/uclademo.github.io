<?php include("./header.php") ?>

<script>
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

</script>
	
<div class="flex-container">
	<div class="description">
		<h3><i>Everything But the Music</i></h3>
		<h4>President, 2021: Liv Slaby</h4>
			<p><i>Everything but the Music</i> is a podcast where UCLA undergraduates talk about all things musicking, from contemporary opera to protest anthems to the sounds of other animals.<br><br>
			Listen to the most recent episodes to the right and browse transcripts and other material from individual episodes below.</p>
	</div>
	
	<div class="content">
		<a href="MUSEV1N2.pdf"><img div class="current" src="ebtm-square.png"></a>
	</div>
</div>
	
<hr>
	
<h3>Supplementary Material</h3>

<div class="tab">
	<button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen"><h7>Episode 1</h7></button>
	<button class="tablinks" onclick="openCity(event, '2')"><h7>Episode 2</h7></button>
	<button class="tablinks" onclick="openCity(event, '3')"><h7>Episode 3</h7></button>
	<button class="tablinks" onclick="openCity(event, '4')"><h7>Episode 4</h7></button>
	<button class="tablinks" onclick="openCity(event, '5')"><h7>Episode 5</h7></button>
	<button class="tablinks" onclick="openCity(event, '6')"><h7>Episode 6</h7></button>
	<button class="tablinks" onclick="openCity(event, '7')"><h7>Episode 7</h7></button>
	<button class="tablinks" onclick="openCity(event, '8')"><h7>Episode 8</h7></button>
</div>

<!-- Tab content -->
<div id="1" class="tabcontent">
	<h3>Episode #1: “Hearing Queer Horror”</h3>
	<p>In this episode, we discuss the soundscapes of Bryan Fuller’s Hannibal (2013-2015), which employs near-constant musique concrète to invite the audience into the show’s psychological turbulence. We use Hannibal to examine queerness in horror, sonic depictions of disorientation and insanity, innovative trends in contemporary horror, and what exactly horror music allows us to feel and understand beyond the jump scares.</p>
	
	<h3>Listenings</h3>
	<ul class="center">
		<li><a href="https://www.youtube.com/watch?v=l3GvLmFOkpA&list=PLRFAOvDITgP_XUv1q6xAl-6mz-9mmmJ4s&index=3">Season 2 soundtrack selections</a></li>
		<li>S2E10 “Naka-Choko”: (22:40-25:30)</li>
		<li><a href="https://www.youtube.com/watch?v=7vwHATDeJhU&ab_channel=RetardedPornstar">Season 2 fight scene</a> (contains violence)</li>
	</ul>
	
	<h3>Readings</h3>
	<ul>
		<li>A bit of background on how Brian Reitzell created the soundtrack (<a href="https://www.vulture.com/2014/09/brian-reitzell-hannibal-music-interview-composer.html">1</a>, <a href="https://www.nytimes.com/2015/06/14/arts/television/hannibal-3-steps-to-tvs-scariest-soundtrack.html">2</a>)
		 — “‘When my parents got divorced, I wanted to spend my time laying in the garage listening to the washer and dryer,’ he said of his 5-year-old self. ‘Loud, immersive, changing. It was music to me.’”</li>
		<li>Joe Tompkins - "Mellifluous Terror: The Discourse of Music and Horror Films" in <i>A Companion to the Horror Film</i></li>
		<li>EJ Nielsen &amp; Kavita Finn -  "Blood in the Moonlight: <i>Hannibal</i> as Queer Noir"</li>
		<li>Stacey Abbott - "Not Just Another Serial Killer Show: <i>Hannibal</i>, Complexity, and the Televisual Palimpsest"</li>
		<li>Sue-Ellen Case - "Tracking the Vampire"</li>
		<li>EJ Neilsen &amp; Kavita Finn - <a href="https://www.jstor.org/stable/j.ctvj7wmhg?Search=yes&resultItemClick=true&searchText=hannibal&searchText=bryan&searchText=fuller&searchUri=%252Faction%252FdoBasicSearch%253FQuery%253Dhannibal%252Bbryan%252Bfuller&ab_segments=0%252Fbasic_SYC-5187%252Ftest&refreqid=search%253A2f55ec248b368b10797d2b4f165ce302">"Introduction: A Love Crime"</a> in <i>Becoming: Genre, Queerness, and Transformation</i></li>
		<li>Morgan Woolsey - <a href="https://escholarship.org/content/qt5715688d/qt5715688d.pdf?t=pebook">Monstrous Resonance: Sexuality in the Horror Soundtrack (1968-1981)</a></li>
		<li>Lee Edelman - <i>No Future: Queer Theory and the Death Drive</i></li>
		<li>Caleb Crain - <a href="https://steamthing.com/cannibals"><i>Lovers of Human Flesh: Homosexuality and Cannibalism in Melville’s Novels</i></a> — “The body is a convenient boundary for the definition of the self. In theory, a sort of social anthropology may rationalize cannibalism or homosexuality, but in practice, the peculiar act violates that boundary. The act offers an ecstatic union; it offers to relieve the self of the burden of selfhood; it offers a chance to surrender the body, to consume or be consumed by another. … Cannibalism and homosexuality violate the distinctions between identity and desire; between self and other; between what we want, what we want to be, and what we are. This is why they are appealing; this is why the nineteenth century American man is horrified to discover that they appeal to him.”</li>
		<li>Harry M. Benshoff - <i>Monsters in the Closet: Homosexuality and the Horror Film</i> — “On the other hand are a multitude of horror films which employed more radical postmodern aesthetic practices to challenge the dominant formal notions of the horror film genre and their ideological underpinnings. These practices (which have been spoken about at length by others) include: [1] pastiche, with which I would include a high modern self-reflexivity and/or the yearning for nostalgia already mentioned, [2] the slippage of the signifier/death of the subject/death of the transcendental signified, and [3] schizophrenia as a mode of presentation/reception (which can perhaps be theorized as a result of [1] and [2]).’ In moving away from a monolithically constructed subject and its concomitant strict adherence to binary oppositions, this type of “utopian” postmodern artifact opens onto the theorization of “queemess” and celebrates the Bakhtinian carnivalesque – a polyvocal hodgepodge of images culled from different races, genders, and sexual positionings, as well as both high and low art.” (212-213)</li></ul>
	
		<h3>Time Stamps</h3>
			<ul class="center">
				<li>00:00 — Group intro</li>
				<li>03:05 — Intro to the episode topic</li>
				<li>05:08 —What horror scores do you like / what sounds scare you?</li>
				<li>07:30 — Familiar music in horror</li>
				<li>11:17 — Blurring diegetic and non-diegetic sound</li>
				<li>15:10 —Under vs overscoring</li>
				<li>19:15 — Queerness, the other, monstrosity</li>
				<li>25:49 — Refusing binaries, The Silence of the Lambs controversy</li>
				<li>31:20 — Sonic representations of psychosis and disorientation</li>
				<li>39:40 — Repetition</li>
				<li>42:25 — Conventions in horror scoring</li>
				<li>45:55 — Cross-cultural horror</li>
				<li>52:20 — Criticisms of horror as a genre of the body</li>
				<li>58:10 — Productivity of horror as a genre of the body</li>
			</ul>
	</div>

<div id="2" class="tabcontent">
	<h3>Episode #2: “Music and Nostalgia During COVID-19”</h3>
	<p>We are lacking points of social contact now more than ever, and many of us find connection through popular media such as commercials, TV, movies, video games, and music. In this episode, we discuss the phenomenon of musical nostalgia during the pandemic and how it might differ from other forms of nostalgia.</p>
	
		<h3>Listenings</h3>
	<ul class="center">
		<li>TikToks that use the transition sounds from Hannah Montana as a soundtrack for “rating” random things (<a href="https://vm.tiktok.com/J6gF1HE/">1</a>, <a href="https://vm.tiktok.com/J6gFwn3/">2</a>)</li>
		<li>TikToks that make fun of Disney Channel movies (<a href="https://vm.tiktok.com/J64UgLW/">1</a>, <a href="https://vm.tiktok.com/J64yVT8/">2</a>)</li>
		<li><a href="https://vm.tiktok.com/J64F4DT/">“‘90s Infomercial Guy” TikTok account</a></li>
		<li><a href="https://vm.tiktok.com/J646rqV/">TikTok account (@doyoulovethe2000s) that reposts videos from the 2000s</a></li>
	</ul>
	
		<h3>Readings</h3>
	<ul>
		<li>Frederick S.Barrett &amp; Petr Janata - <a href="https://www.sciencedirect.com/science/article/abs/pii/S0028393216303037">"Neural responses to nostalgia-evoking music modeled by elements of dynamic musical structure and individual differences in affective traits"
		</a></li>
	</ul>
	
	<h3>Time Stamps</h3>
		<ul class="center">
			<li>00:59 — What music have you been using as a “safety blanket” during COVID, and at what age did you originally listen to this music, if it’s not new music?</li>
			<li>18:32 — Romanticizing nostalgia</li>
			<li>25:03 — Favorite TikTok audios</li>
			<li>29:26 — Social media (specifically TikTok) fulfilling the desire for social connection, especially through nostalgia</li>
			<li>35:06 — Jameson’s postmodernity theory</li>
			<li>41:28 — Is there anything people have seen on other people’s social media that you’ve never seen or interacted with before, but you were inspired to do so because somebody else talked about it?</li>
			<li>49:43 — Is it healthy to revert to nostalgia during this time? Is it fair for brands to be capitalizing on this?</li>
			<li>50:36 — Nostalgia and capitalistic consumption practices</li>
			<li>51:25 — Nietzsche’s “On the Use and Abuse of History for Life”</li>
			<li>58:23 — How will kids today experience nostalgia in the future?</li>
		</ul>
</div>

<div id="3" class="tabcontent">
	<h3>Episode #3: “Mood Music for the Revolution”</h3>
	<p>In this episode, we discuss music that encourages the understanding of Black narratives in America. Specifically addressing the questions: how has the movement for Black lives, from the Civil Rights Era, to now, Black Lives Matter, shifted narratives through generations? And how is the music we partake in reflect or even influence how these narratives shift?</p>
	<h3>Listenings</h3>
	<ul class="center">
		<li><a href="https://www.youtube.com/watch?v=ghRzenaeKaI">Louis Armstrong — "Black and Blue"</a></li>
		<li><a href="https://www.youtube.com/watch?v=Web007rzSOI">Billie Holiday — "Strange Fruit"</a></li>
		<li><a href="https://www.youtube.com/watch?v=rc0XEw4m-3w">Stevie Wonder — "Living for the City"</a></li>
		<li><a href="https://www.youtube.com/watch?v=o5TmORitlKk">Marvin Gaye — "What's Going On"</a></li>
		<li><a href="https://www.youtube.com/watch?v=WkZ5e94QnWk">YG — "FDT" (ft. Nipsey Hussle)</a></li>
		<li><a href="https://www.youtube.com/watch?v=l_sdubWaY5o">Lauryn Hill — "Black Rage"</a></li>
		<li><a href="http://orionsun.bandcamp.com/track/mamas-baby">Orion Sun — "Mama's Baby"</a></li>
		<li><a href="https://open.spotify.com/album/4eLPsYPBmXABThSJ821sqY?si=GJH41xotQPiN_o4rhIw07Q">Kendrick Lamar — DAMN</a></li>
		<li><a href="https://www.youtube.com/watch?v=NFp1eW2bihg">Noname — "Song 33"</a></li>
		<li><a href="https://www.youtube.com/watch?v=OZa3HyVLimQ">J. Cole — "Snow on tha Bluff"</a></li>
	</ul>
		<h3>Readings</h3>
	<ul>
		<li>Shana Redmond - <a href="https://www.npr.org/2020/06/26/883334741/we-insist-a-century-of-black-music-against-state-violence">"We Insist: A Century Of Black Music Against State Violence"</a></li>
		<li>Eudie Pak - <a href="https://www.biography.com/news/billie-holiday-strange-fruit">"The Tragic Story Behind Billie Holiday’s 'Strange Fruit'”</a></li>
		<li>Maeve Hastings - <a href="https://uclpimedia.com/online/a-gen-z-perspective-on-black-lives-matter">"Gen Z Perspective on Black Lives Matter"</a></li>
		<li>Brittany Spanos &amp; Sarah Grant - <a href="https://www.rollingstone.com/music/music-lists/songs-of-black-lives-matter-22-new-protest-anthems-15256/lauryn-hill-black-rage-sketch-32423/">"Songs of Black Lives Matter: 22 New Protest Anthems"</a></li>
		<li>Zoe Haylock - <a href="https://www.vulture.com/2020/06/j-cole-noname-snow-on-tha-bluff.html">"Why is J. Cole coming for Noname?"</a></li>
		<li>Rebecca Bellan - <a href="https://www.forbes.com/sites/rebeccabellan/2020/06/12/gen-z-leads-the-black-lives-matter-movement-on-and-off-social-media/?sh=452946ab19a8">"Gen Z Leads The Black Lives Matter Movement, On And Off Social Media"</a></li>
	</ul>
	
		<h3>Time Stamps</h3>
			<p>0:00 — Intro &amp; Questions<br>
			1:45 —  “Strange Fruit” &amp; “Black Rage”<br>
			3:50 — “Living for the City” &amp; “What’s Going On”<br>
			8:55 — “FDT”<br>
			14:05 — Noname &amp; J. Cole<br>
			16:59 — The Black Arts Movement &amp; Intersectionality<br>
			22:49 — Technology as a Driving Force<br>
			26:00 — Sampling<br>
			28:15 — TikTok &amp; BLM<br>
			29:15 — Will We Achieve Real and Final Change?<br>
			32:35 — Closing Thoughts</p>
</div>
	
<div id="4" class="tabcontent">
	<h3>Episode #4: “Billie Eilish and the Concept of the Musical Genius”</h3>
	<p>A pressing issue that has faced not only the modern music industry, but music consumption for centuries is that of the concept of the musical genius. In this episode, we examine various iterations of the “genius” archetype and how it can often be a driving force behind a musical artist’s entire career. We look at Billie Eilish as a case study for the most recent occurrence of the music industry’s “genius.”</p>
	
	<h3>Listenings</h3>
	<ul class="center">	
		<li>Billie Eilish — <a href="https://www.youtube.com/watch?v=DyDfgMOUjCI">“bad guy”</a></li>
		<li>Billie Eilish — <a href="https://www.youtube.com/watch?v=Jn1Uwsg3eRQ">“bad guy” (Live From Saturday Night Live)</a></li>
		<li><a href="https://www.youtube.com/watch?v=an76NRrV-zQ">The making of Billie Eilish's SNL performance</a></li>
		<li><a href="https://www.youtube.com/watch?v=i1IpnJ1UO0w">Slow motion video of Billie Eilish at the 2020 Grammy Awards</a></li>
		<li>Billie Eilish — <a href="https://www.youtube.com/watch?v=-PZsSWwc9xA">“all the good girls go to hell”</a></li>
	</ul>
<h3>Readings</h3>
	<ul>
		<li>Joe Coscarelli - <a href="https://www.nytimes.com/2019/03/28/arts/music/billie-eilish-debut-album.html">"Billie Eilish Is Not Your Typical 17-Year-Old Pop Star. Get Used to Her."</a></li>
		<li>Charles Burney - <i>Music, Men, and Manners In France and Italy, 1770</i></li>
		<li>Ann Pellegrini - <a href="https://read.dukeupress.edu/camera-obscura/article-abstract/22/2%20(65)/127/97540/Unnatural-Affinities-Me-and-Judy-at-the-Lesbian?redirectedFrom=fulltext">"Unnatural Affinities: Me and Judy at the Lesbian Bar"</a></li>
		<li>Daniel Heartz - <a href="https://doi.org/10.1093/gmo/9781561592630.article.05889">"Classical"</a></li>
		<li>Jennifer Fleeger - <a href="https://read.dukeupress.edu/camera-obscura/article-abstract/27/3%20(81)/69/58492/Deanna-Durbin-and-the-Mismatched-Voice">"Deanna Durbin and the Mismatched Voice"</a></li>
		<li>Bruno Nettl - <a href="https://www.press.uillinois.edu/books/catalog/67rdq6mq9780252064685.html">"In The Service of The Masters" in <i>Heartland Excursions: Ethnomusicological Reflections on Schools of Music</i></a></li>
		<li>Ciara Barret: <a href="https://www.taylorfrancis.com/books/e/9781315720432/chapters/10.4324/9781315720432-5">"Just a Voice and Youth: Shirley Temple, Deanna Durbin, Judy Garland and the rise of the musical child star in the 1930s" in <i>Childhood and Celebrity</i></a></li>
		<li>BBC Newsround: <a href="https://www.bbc.co.uk/newsround/51265890">"Billie Eilish at the Grammys: A timeline of her life and career"</a></li>
		<li>Tim Bouwhuis: <a href="https://timbouwhuis.nl/billie-eilish-all-the-good-girls-go-to-hell-lucifer-and-the-embodiment-of-individualism-paper/.">"Billie Eilish’[s] “all the good girls go to hell” and the embodiment of individualism"</a></li>
		<li>Bianca Mastroianni: <a href="https://www.girlfriend.com.au/billie-eilish-is-labelled-a-genius-for-this-slow-mo-video">"Billie Eilish is labelled a GENIUS for this slow-mo video"</a></li>
		<li>Ruby McAuliffe: <a href="https://zunews.com/2019/03/opinion-billie-eilish-drops-genius-debut-album/">"Opinion: Billie Eilish drops genius debut album"</a></li>
		<li>On Air With Ryan Seacrest: <a href="https://onairwithryan.iheart.com/content/2019-08-02-the-genius-decision-billie-eilishs-parents-just-made/">"The Genius Decision Billie Eilish’s Parents Just Made"</a></li>
		<li>Kathleen Waterston: <a href="https://rehabinkmag.com/2020/02/05/rehabilitative-rewiring-treating-tourette-syndrome-with-fmri-and-neurofeedback/.">"Rehabilitative rewiring: Treating Tourette syndrome with fMRI and neurofeedback"</a></li>
	</ul>
	
	<h3>Time Stamps</h3>
		<ul>
			<li>01:44 — Background of the musical genius myth</li>
			<li>10:19 — Female prodigies in music</li>
			<li>14:32 — Adultification</li>
			<li>23:11 — How does Billie Eilish’s slow motion red carpet video make her “genius”?</li>
			<li>29:12 — Billie Eilish’s SNL performance of “bad guy”</li>
			<li>35:17 — Alana’s conspiracy theory about Billie Eilish and FINNEAS’ ages</li>
			<li>43:02 — Billie Eilish’s similarities to Post Malone, who is not usually considered a genius</li>
			<li>51:58 — Closing comments</li>
		</ul>
</div>

<div id="5" class="tabcontent">
	<h3>Episode #5: “The ‘O’ Word”</h3>
	<p>We treat “opera” as a grossly overgeneralized umbrella term when it is far from that! In this episode, we highlight a variety of opera pieces while discussing the operatic canon’s place in today’s society.</p>
	<h3>Listenings</h3>
	<ul class="center">	
		<li>Aria: Purcell — <a href="https://www.youtube.com/watch?v=jOIAi2XwuWo" target="_blank" rel="noreferrer noopener">When I am laid in earth — Dido’s Lament— (1689, alleged premiere) (English)</a></li>
		<li>Chorus (technically a septet): Handel — <a href="https://www.youtube.com/watch?v=pK7KesCMTEk" target="_blank" rel="noreferrer noopener">Di timpani e trombe —Agrippina (1709) (Italian)</a></li>
		<li>Trio: Mozart — <a href="https://www.youtube.com/watch?v=bR2U8bXtUfI" target="_blank" rel="noreferrer noopener">Soave sia il vento (Act I trio) — Cosi fan tutte — (1790) (Italian)</a></li>
		<li>Sextet: Rossini —<a href="https://www.youtube.com/watch?v=rvAFpbbmaww" target="_blank" rel="noreferrer noopener"> Ma, Signore (Act I Finale) — Il Barbiere di Siviglia (The Barber of Seville) — (1816) (Italian)</a></li>
		<li>Chorus: Verdi — <a href="https://www.youtube.com/watch?v=2VejTwFjwVI" target="_blank" rel="noreferrer noopener">Va pensiero — Nabucco — (1842) (Italian)</a></li>
		<li>Duet: Strauss — <a href="https://www.youtube.com/watch?v=Ehxk1HTDh0k" target="_blank" rel="noreferrer noopener">Die Uhr Duett (The Watch Duet) — (1874) (German)</a></li>
		<li>Duet and chorus: Poulenc — <a href="https://www.youtube.com/watch?v=wchkYKj5n8A">Ave Maria — Dialogue des Carmelites (The Dialogue of the Carmelites) — (1953) (French)</a></li>
		<li>Aria: Muhly — <a href="https://www.youtube.com/watch?v=Jpl39PXL7Ek" target="_blank" rel="noreferrer noopener">I see Forio standing still — Marnie — (2017) (English)</a></li>
	</ul>
	<h3>Time Stamps</h3>
	<ul>
		<li>00:41 — The premise of the episode</li>
		<li>23:18 — How Agrippina was updated to reflect contemporary times</li>
		<li>28:55 — Current trends in opera</li>
		<li>34:53 — The significance of opera &amp; its commentary on pop culture</li>
		<li>42:26 — Will opera ever die?</li>
	</ul>
</div>
	
<div id="6" class="tabcontent">
	<h3>Episode #6: “Animals and Music, Music and Animals”</h3>
	<p>In this episode, we discuss a number of topics concerning the relationships between non-human animals and the thing we call music, such as music-making capacities in species other than our own, human musical representations of other species in our own musical practices, and the use of “the animal” in performance and other art forms.</p>

	<h3>Listenings</h3>
	<ul class="center">	
		<li>Ludwig van Beethoven — <a href="https://open.spotify.com/track/7FEy3V5UIRkLbIgIBv7kyo?si=E_T48U5uSaSNDoHVWHJvrA"> “Pastorale” Symphony No. 6 in F Major, II. Andante molto mosso</a> (the “birds” at 12:25)</li>
		<li>Maurice Ravel — <a href="https://www.youtube.com/watch?v=Bje9i-nPIQQ"><i>L'enfant et les sortilèges</i>, "Duo miaulé"</a></li>
		<li>Olivier Messiaen — <a href="https://open.spotify.com/track/4B5OVZlCszB0Vs8MIy75AS?si=2y9XTOmfSwC3JR01sefWHg"><i>Catalogue d’oiseaux</i>, I/42: No. 6, L’alouette lulu</a></li>
		<li>Laurie Spiegel — <a href="http://retiary.org/mice/anon_a_mouse_audio.html"><i>Anon a Mouse</i></a></li>
		<li><a href="http://retiary.org/mice/mouse_op_synopsis.html">Synopsis</a></li>
		<li><a href="http://retiary.org/mice/squeakbretto.html">Libretto</a></li>
		<li>Kyoko Kobayashi — <a href="https://open.spotify.com/track/4BCaT44c7uwCCEbHJoFYaS?si=rkMspPUeTzav95hfUy_yAw">“Cat Canon”</a></li>
		<li>Paul Horn — <a href="https://open.spotify.com/track/3CNu8nVLNyi35fSTz24BRK?si=H1lHMFqDTreyeCAyUtHffQ">“Haidda”</a></li>
		<li>Jim Nollman — <a href="https://open.spotify.com/album/2aBdh1LJLxBtYemCR0Ht7z?si=hPdepLEoQCmddYtxJHk9yQ"><i>Playing Music With Animals</i></a></li>
		<li>Oswald Wiener and Helmut Schoener — <a href="https://open.spotify.com/album/3WDqUwLTv3aBGEGQ60re4y?si=M__-OlUIQ1STYSBA5Z7FXQ"><i>Animal Music/Tiermusik</i></a>&nbsp;</li>
		<li>Roger Payne — <a href="https://youtu.be/sjkxUA041nM"><i>Songs of the Humpback Whale</i></a>&nbsp;</li>
	</ul>

	<h3>Readings</h3>
	<ul>
	<li>Animals &amp; Society Institute &#8211; <a href="https://www.youtube.com/watch?v=mqndATOrIVc">“Defining the Animal Turn with Harriet Ritvo”</a> and <a href="https://www.youtube.com/watch?v=URmmUHtCdrg">“Defining Biosemiotics with Alison Sealey”</a></li>
	<li>Emily Doolittle &amp; Bruno Gingras &#8211; “Quick Guide to Zoomusicology”</li>
	<li>Dario Martinelli &#8211; <a href="http://www.sibetrans.com/trans/articulo/93/introduction-to-the-issue-and-to-zoomusicology">“Introduction (to the issue and to zoomusicology)”</a>&nbsp;</li>
	<li>Emily Doolittle &#8211; <a href="http://www.sibetrans.com/trans/articulo/94/crickets-in-the-concert-hall-a-history-of-animals-in-western-music">“Crickets in the Concert Hall: A History of Animals in Western Music”</a></li>
	<li>Samuel ockwood &#8211; “A Singing Hesperomys”</li>
	<li>Rachel Mundy &#8211; “Evolutionary Categories and Musical Style from Adler to America”</li>
	<li>Una Chaudhuri &#8211; “‘Of All Nonsensical Things’: Performance and Animal Life”</li>
	<li>Rachel Mundy &#8211; <a href="https://www.litsciarts.org/2018/10/12/why-listen-to-animals/">“Why Listen to Animals?”</a></li>
	</ul>
	<h3>Time Stamps</h3>
		<ul>
			<li>00:24 — Overview of the topic</li>
			<li>28:45 — Everyone shares songs they selected that involve non-human animals in some way</li>
			<li>37:32 — “Wolf Project” gatherings</li>
			<li>41:06 — Human efficiency</li>
			<li>54:54 — Animation’s influence on how we perceive animals</li>
			<li>58:10 — The significance of visual language</li>
		</ul>
</div>
	
<div id="7" class="tabcontent">
	<h3>Episode #7: “PC Music, Hyperpop, and the Existence of Genre”</h3>
	<p>We recorded this episode three days before SOPHIE’s untimely death on Saturday, January 30th, 2021. As one of the pioneers of hyperpop, SOPHIE was a true visionary and we’re thankful for the work she shared with us. Although her life was short, her legacy lives on. We dedicate this episode to SOPHIE.<br><br>In 2013, British music producer A.G. Cook founded the record label PC Music. The label’s known for exaggerating elements of 1990s and early 2000s pop and electronic music, such as the use of vocal effects and synthesizers. In this episode, we discuss PC Music, the advent of hyperpop, and the existence of genres in music today.</p>
<h3>Readings</h3>
	<ul>
	<li>Selim Bulut - <a href="https://www.dazeddigital.com/music/article/47273/1/pc-music-a-g-cook-history-end-of-decade-2010s-retrospective">"The history of PC Music, the most exhilarating record label of the 2010s</a></li>
	<li>Jon Pareles - <a href="https://www.nytimes.com/2020/09/09/arts/music/ag-cook-pc-music-apple.html">"Too Pop? Too Weird? A.G. Cook of PC Music Is Stepping Out on His Own"</a></li>
	<li>Joe Vitigliano - <a href="https://americansongwriter.com/a-g-cook-is-changing-popular-music-as-we-know-it/">"A.G. Cook Is Changing Popular Music As We Know It"</a></li>
	<li>Shaad D'Souza - <a href="https://www.thefader.com/2020/09/21/a-g-cook-apple-7g-interview-profile-2020">"How A.G. Cook became pop’s great disruptor"</a></li>
	<li>Sam Goldner - <a href="https://www.vice.com/en/article/8xw3g4/2010s-were-the-decade-that-genre-collapsed">"The 2010s Were the Decade That Genre Collapsed"</a></li>
	<li>Eli Enis - <a href="https://www.vice.com/en/article/bvx85v/this-is-hyperpop-a-genre-tag-for-genre-less-music">"This is Hyperpop: A Genre Tag for Genre-less Music"</a></li>
	<li>Noah Berlatsky - <a href="https://www.grammy.com/grammys/news/ag-cook-art-perfect-pop-song">"A.G. Cook &amp; The Art Of A Perfect Pop Song"</a></li>
	<li>The Pitchfork Review - <a href="https://pitchfork.com/features/podcast/100-gecs-and-the-mystery-of-hyperpop/">“100 gecs and the Mystery of Hyperpop”</a></li>
	</ul>
	<h3>Time Stamps</h3>
		<ul>
			<li>01:01 — Initial reactions to songs</li>
			<li>06:52 — Opinions on the term/genre name “hyperpop”</li>
			<li>07:51 — Sincerity/authenticity in hyperpop</li>
			<li>32:48 — Discussing the future of hyperpop</li>
		</ul>
</div>
	
<div id="8" class="tabcontent">
	<h3>Episode #8: “Love Songs”</h3>
	<p>In this episode, we discuss a variety of songs that illustrate just how many different ways there are to interpret the feeling known as “love”.</p>
	
<h3>Listenings</h3>
	<ul class="center">
		<li>The Magnetic Fields - <a href="https://www.youtube.com/watch?v=z7XmHuT0N88">“Absolutely Cuckoo”</a></li>
		<li>Khruangbin - <a href="https://www.youtube.com/watch?v=cxrotrIvqyY">“Cómo Te Quiero”</a></li>
		<li>The Carpenters - <a href="https://www.youtube.com/watch?v=jV127kNz0hs">“[They Long to Be] Close to You”</a></li>
		<li><a href="https://www.youtube.com/watch?v=jV127kNz0hs"></a></li>
		<li>Lorde - <a href="https://www.youtube.com/watch?v=ZQkdwymDanE">“The Louvre”</a></li>
		<li>The Beatles - <a href="https://www.youtube.com/watch?v=QDYfEBY9NM4">“Let It Be”</a></li>
	</ul>
	
	<h3>Time Stamps</h3>
		<ul>
			<li>00:38 — Discussing “Absolutely Cuckoo” by The Magnetic Fields</li>
			<li>09:55 — Discussing “Cómo Te Quiero” by Khruangbin</li>
			<li>17:52 — Discussing “[They Long to Be] Close to You” by The Carpenters</li>
			<li>30:02 — Discussing “The Louvre” by Lorde</li>
			<li>34:36 — Discussing “Let It Be” by The Beatles &amp; sharing additional thoughts about love &amp; nostalgia</li>
	</ul>
</div>

<div class="container"></div>
<div class="footer">
	<h6>MUSE | © 2021 by UCLA Musicology Department. Individual articles are the copyright of their authors. | uclamusejournal@gmail.com</h6>
  <div class="footer-right">
	  <h6><a href="https://www.instagram.com/uclamusicstudies/"><img class="social" src="iglyph.png"></a></h6>
	  <h6><a href="https://www.facebook.com/uclamusicstudies/"><img class="social" src="fglyph.png"></a></h6>
	  <h6><a href="https://open.spotify.com/user/onh9otqhp57vzp7391raxhdpk?si=263c5a46cce74f95"><img class="social" src="sglyph.png"></a></h6>
  </div>
</div>
</body>
</html>