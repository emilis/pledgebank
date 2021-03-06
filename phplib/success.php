<?
// success.php:
// Array of Success Stories, for use on success and front pages
//
// Copyright (c) 2007 UK Citizens Online Democracy. All rights reserved.
// Email: matthew@mysociety.org. WWW: http://www.mysociety.org
//
// $Id: success.php,v 1.11 2008-03-05 14:51:35 matthew Exp $

$success_titles = array(
    'bakul' => _('Donate books to build a library'),
    'airfarespledge' => _('Organise aid trip to New Orleans'),
    'undies' => _('Collect underwear for orphans'),
    'electionwatch07' => _('Gather people to monitor elections'),
    'First1000' => _('Get 1,000 people to move house'),
    'SaveTheSycamore' => _('Campaign to save a local tree'),
    'trees4kenya' => _('Raise money for charity'),
    'give3hugsaday' => _('Make people smile'),
    'showerpower' => _('Help the environment'),
    'WIPTintern' => _('Fund a technology scholarship'),
);

$success_stories = array(
array('summary' => '
<h3><a href="/Bakul-Library">' . $success_titles['bakul'] . ' &ndash; Bakul-Library</a></h3>
<p><a href="/Bakul-Library"><img class="r" alt="' . _('Bakul Library') . '" width="282" height="211"
src="/i/Bakul-Library-small.jpeg"></a></p>' .
p(_('&ldquo;&hellip;the pledge campaign was just perfect. And we told the
skeptics that they anyway did not have to contribute if they did not find a
thousand others foolish enough to believe in it. As we neared our target, more
and more people got involved in the mobilization as even the skeptics wanted
this idea to succeed. As a result of that campaign now we have one of the best
children\'s libraries in India, and set up entirely with the small
contributions of a thousand-odd people.&rdquo;')).
p('<a href="/success#bakul">' . _('Read more about this amazing story&hellip;') . '</a>'),
'entry' => '
<p><a name="bakul" href="/Bakul-Library"><img class="l" alt="' . _('Bakul Library') . '" width="282" height="211"
src="/i/Bakul-Library-small.jpeg"></a></p>
<h3><a href="/Bakul-Library">' . $success_titles['bakul'] . ' &ndash; Bakul-Library</a></h3>' .
p(_('&ldquo;Let me thank you first for making the story of Bakul into the Bakul
Story that people want to talk about. After you talked about Bakul at the Net
Squared Conference and to Idealist, of course the podcast happened. And after
that, we became a case study on social entrepreneurship at IIM Calcutta, one of
the premier Business Schools in India and at Delhi University, the premier
University of India. But it all started with you. Thanks once again for that.')) .
p(_('&ldquo;Anyway...Bakul is an attempt to pool together the small individual
contributions of people interested in the social development of India. It is an
attempt to beat the cynicism that nothing can happen because we can only
contribute in small ways and they cannot change anything. That is why, when we
discovered Pledge Bank, we were excited. Here was a forum that was trying to do
a similar thing. So, it was kind of a perfect tool for us in our campaign.')) .
p(_('&ldquo;Moreover, when we started the campaign, "Donate Books: Build a
Library", we got many incredulous responses. Many thought it sounded too good
to be true and doubted its feasibility though they wanted it to happen. We also
did not have a bank account to accept contributions and no space to store
donations of books.  So, the pledge campaign was just perfect. And we told the
skeptics that they anyway did not have to contribute if they did not find a
thousand others foolish enough to believe in it. As we neared our target, more
and more people got involved in the mobilization as even the skeptics wanted
this idea to succeed. As a result of that campaign now we have one of the best
children\'s libraries in India, and set up entirely with the small
contributions of a thousand-odd people.&rdquo;')),
),
array('summary' => '
<h3><a href="/success/airfarespledge">' . $success_titles['airfarespledge'] . ' &ndash; airfarespledge</a></h3>
<p><a href="/success/airfarespledge"><img src="/i/airfarespledge.tn.jpeg" class="r" title="' . _('My best friend in Biloxi MS') . '"
alt="' . _('The creator of the pledge with a friendly dog, tagged 595') . '"></a>' .
p(_('&ldquo;After seeing the news about Hurricane Katrina, which had some
pretty graphic pictures showing the damage, I thought of how I could
help....Being a fan of Jazz music and knowing a lot about New Orleans,
Harry Connick Jr was the first person I thought of, I found connick.com to
see if they had a donation or fund raiser link.  A few of the members were
donating their time and money, and being an international person, donating
money, just didn&rsquo;t work for me.')) .
p('<a href="/success/airfarespledge">' . _('Continue reading&hellip;') . '</a>'),
'entry' => '
<p><a name="airfarespledge" href="/success/airfarespledge"><img class="r" src="/i/airfarespledge.tn.jpeg" title="' . _('My best friend in Biloxi MS') . '"
alt="' . _('The creator of the pledge with a friendly dog, tagged 595') . '"></a>
<h3><a href="/success/airfarespledge">' . $success_titles['airfarespledge'] . ' &ndash; airfarespledge</a></h3>' .
p(_('&ldquo;After seeing the news about Hurricane Katrina, which had some
pretty graphic pictures showing the damage, I thought of how I could
help....Being a fan of Jazz music and knowing a lot about New Orleans,
Harry Connick Jr was the first person I thought of, I found connick.com to
see if they had a donation or fund raiser link.  A few of the members were
donating their time and money, and being an international person, donating
money, just didn&rsquo;t work for me.')) .
p(_('&ldquo;My pledge was originally to raise some money to help pay for
airfares to get to New Orleans to help with Hurricane Katrina Relief
organisation CERMT (Emergency Relief Massage Therapy).&rdquo;')) .
p('<a href="/success/airfarespledge">' . _('Continue reading&hellip;') . '</a>'),
), array(
'summary' => '
<p><a href="/Undies4Liberia"><img class="r" alt="' . _('The pledge creator stood by a huge pile of underwear') .'"
src="/i/Undies4Liberia-small.jpeg"></a></p>
<h3><a href="/Undies4Liberia">' . $success_titles['undies'] . ' &ndash; Undies4Liberia</a></h3>' .
p(_('&ldquo;&hellip;I set up my pledge, expecting a few family members and friends to sign up. I never thought my pledge would be successful, and that so many total strangers would get involved!
My goal for a successful pledge should have produced 450 pairs of undies; but the final count is 753 pairs of new, clean undies for the children of Liberia!')) .
p('<a href="/success#undies">' . _('Read more about this amazing story&hellip;') . '</a>'),
'entry' => '
<p><a name="undies" href="/Undies4Liberia"><img class="r" src="/i/Undies4Liberia-large.jpeg"
alt="' . _('The pledge creator stood by a huge pile of underwear') . '"></a>
<h3><a href="/Undies4Liberia">' . $success_titles['undies'] . ' &ndash; Undies4Liberia</a></h3>' . 
p(_('&ldquo;The idea of just wanting a new, clean pair of undies sounds crazy to most of us, but for orphans in Liberia, this is a luxury! After spending a month working at an orphanage in Liberia last year, I noticed most of the kids only had one pair of underwear, which was usually falling apart at the seams. I know I take my clean, comfortable undies for granted, but it felt like such a natural, easy way for people to get involved!')) .
p(_('&ldquo;I actually stumbled upon PledgeBank while I was trying to find another website, but thought it was a great way to get people involved in something that&rsquo;s very close to my heart! I set up my pledge, expecting a few family members and friends to sign up. I never thought my pledge would be successful, and that so many total strangers would get involved!')) .
p(_('&ldquo;My goal for a successful pledge should have produced 450 pairs of undies; but the final count is 753 pairs of new, clean undies for the children of Liberia! The response was so great that not only will the children at one orphanage benefit from the generosity of strangers, but I will be able to give new undies to multiple orphanages! I just put all of the undies on a shipping container this week, which will arrive in Monrovia around the beginning of April. I&rsquo;m leaving for Liberia on March 24th to spend 6 months there working with a wonderful organization called Orphan Relief and Rescue. ORR works with 80+ orphanages in and around Monrovia, so there will be plenty of children to give all of the donated undies to!')) .
p(_('&ldquo;Even though the pledge is closed, people are still contacting me to send undies and giftcards! So, in the end, over 750 pairs of undies will be going to the orphans of Liberia because of the kind-hearted people who use PledgeBank! To say &lsquo;thank you&rsquo; is not enough; but to see the children smile because someone cares says it all!&rdquo;'))
), array(
'summary' => '
<h3><a href="/electionwatch07">' . $success_titles['electionwatch07'] . ' &ndash; electionwatch07</a></h3>
<p><a href="/electionwatch07"><img class="r" alt="' . _('Election observer Becky, outside a polling station') .'"
src="http://www.openrightsgroup.org/wp-content/uploads/observers.jpg" width="195" height="200"></a></p>' .
p(_('&ldquo;Basically, without PledgeBank I doubt we would have had nearly
as many election observers volunteer. The public nature of PledgeBank also
seemed to encourage the very high follow-through rate which meant that most
people who signed up actually did the election observation. The result of
the pledge was that 25 people were accredited by the Electoral Commission
to observe elections in Scotland and England. Their observations fed into
<a href="http://www.openrightsgroup.org/e-voting-main/"
title="ORG&rsquo;s report into the May 2007 elections">our 65-page
report</a> which was recently launched with significant press
coverage.&rdquo;')), 'entry' => '
<p><a name="electionwatch07" href="/electionwatch07"><img class="l" alt="' . _('Election observer Becky, outside a polling station') . '"
src="http://www.openrightsgroup.org/wp-content/uploads/observers.jpg" width="195" height="200"></a></p>
<h3><a href="/electionwatch07">' . $success_titles['electionwatch07'] . ' &ndash; electionwatch07</a></h3>' .
p(_('&ldquo;Basically, without PledgeBank I doubt we would have had nearly
as many election observers volunteer. The public nature of PledgeBank also
seemed to encourage the very high follow-through rate which meant that most
people who signed up actually did the election observation. The result of
the pledge was that 25 people were accredited by the Electoral Commission
to observe elections in Scotland and England. Their observations fed into
<a href="http://www.openrightsgroup.org/e-voting-main/"
title="ORG&rsquo;s report into the May 2007 elections">our 65-page
report</a> which was recently launched with significant press
coverage.&rdquo;')),
), array(
'summary' => '
<h3><a href="/First1000">' . $success_titles['First1000'] . ' &ndash; First1000</a></h3>
<p><a href="/First1000"><img class="r" alt="' . _('First1000 logo') . '"
src="http://www.pledgebank.com/pics/First1000.gif" width="100" height="90"></a></p>
' . p(_('&ldquo;The membership of the
Free State Project was very active in recruiting signers, and as a result
of the pledge, 1000 people will be moving to New Hampshire by the end of
2008 in order to become activists for liberty!&rdquo;')),
'entry' => '
<p><a name="First1000" href="/First1000"><img class="r" alt="' . _('First1000 logo') . '"
src="http://www.pledgebank.com/pics/First1000.gif" width="100" height="90"></a></p>
<h3><a href="/First1000">' . $success_titles['First1000'] . ' &ndash; First1000</a></h3>
' . p(_('&ldquo;The membership of the
Free State Project was very active in recruiting signers, and as a result
of the pledge, 1000 people will be moving to New Hampshire by the end of
2008 in order to become activists for liberty!&rdquo;')),
), array(
'summary' => '
<h3><a href="/SaveTheSycamore">' . $success_titles['SaveTheSycamore'] . ' &ndash; SaveTheSycamore</a></h3>
<p><a href="/SaveTheSycamore"><img class="r" alt="' . _('Save The Sycamore') . '" width="150" height="200"
src="http://www.pledgebank.com/pics/SaveTheSycamore.jpeg"></a></p>' .
p(_('&ldquo;The amount of elderly people who supported me in this pledge by
writing and phoning the council was phenomenal. Thank you so much for
affording us a professional launch pad. My next pledge will be to promote
Pledgebank - I am so grateful. I cannot thank you enough for giving me the
opportunity to make a difference. I truly am
<strong>astounded</strong>!!!!!! With thanks from myself, family and my
community.&rdquo;')),
'entry' => '
<p><a name="SaveTheSycamore" href="/SaveTheSycamore"><img class="l" alt="' . _('Save The Sycamore') . '" width="150" height="200"
src="http://www.pledgebank.com/pics/SaveTheSycamore.jpeg"></a></p>
<h3><a href="/SaveTheSycamore">' . $success_titles['SaveTheSycamore'] . ' &ndash; SaveTheSycamore</a></h3>' .
p(_('&ldquo;The amount of elderly people who supported me in this pledge by
writing and phoning the council was phenomenal. Thank you so much for
affording us a professional launch pad. My next pledge will be to promote
Pledgebank - I am so grateful. I cannot thank you enough for giving me the
opportunity to make a difference. I truly am
<strong>astounded</strong>!!!!!! With thanks from myself, family and my
community.&rdquo;')),
), array(
'entry' => '
<h3><a name="trees4kenya" href="/trees4kenya">' . $success_titles['trees4kenya'] . ' &ndash; trees4kenya</a></h3>' .
p(_('&ldquo;I&rsquo;ve followed MySociety&rsquo;s projects for some time,
and when PledgeBank was announced, it sounded like a great idea so I got
involved. Harnessing the power of collective action is made much easier by
this easy-to-use tool.')) .
p(_('&ldquo;Animal Aid has a large group of supporters, so we asked them by
email to support the Pledge, to get the ball rolling. Then we asked
everyone who had signed up to tell their friends and get them to sign up
too. As we&rsquo;ve done more pledges, we&rsquo;ll email people who have
signed up to related pledges telling them about the new pledges we
launch.')) .
p(_('&ldquo;As a result of the pledges, a vegetarian orphanage has an
irrigation system, and areas of land have been converted to food
production, so that the institution can be self-sufficient. We&rsquo;ve
also raised money for scientific reports, and coordinated mass letter
writing efforts to our elected representatives.&rdquo;')),
), array(
'entry' => '<h3><a name="give3hugsaday" href="/give3hugsaday">' . $success_titles['give3hugsaday'] . ' &ndash; give3hugsaday</a></h3>' .
p(_('&ldquo;I started with a fairly simple pledge that most users
would be able to sign on to and just see what happens&hellip; I also was
really intrigued by the idea of power in numbers and how this could be used
for something with more significant, concrete results&hellip; I emailed it
out to about 5 or 6 friends/family; and within a few hours 2 or 3 had
joined.  This was apparently enough to get it shown to the public, and from
there people kept signing.&rdquo;')),
), array(
'entry' => '
<h3><a name="showerpower" href="/showerpower">' . $success_titles['showerpower'] . ' &ndash; showerpower</a></h3>' . 

p(_('&ldquo;I heard about PledgeBank through reading Michael Norton&rsquo;s
book 365 Ways to Change the World - I bought this book for my sister and I,
as we found that in an evening we would often fall into the habit of
bemoaning the problems of the world and feeling helpless to do anything
about them. One of the major environmental issues in Australia is the lack
of water. my sister and I started thinking if we personally could change
our habits this would be a very small step in the right direction - then we
read about PledgeBank and thought if we could get other individuals to
change their habits this would start adding up!')) .

p(_('&ldquo;I suppose my great hope is that as individuals if we can regain a
sense of personal responsibility for our actions and connection to the
external environment, then the world would be a better place. As opposed to
seeing these major world problems as something someone needs to address,
maybe we could have a greater sense of our own ability to positively change
the present and the future.')) .

p(_('&ldquo;I must say that at first, a shorter shower and a bucket to move
daily seemed to be a sort of strange punishment! But as the days have gone
by this daily action has become something that gives me a great sense of
joy and reconnection to the world. As a household (there are four of us
doing this) we have become more interested in our garden, because rather
than watering it absentmindedly with a hose, we have to really look at what
needs to be watered with our bucket. I have started to notice the growth of
each plant and also I now notice the birds and animals that were probably
there all the time but I was too busy to notice! Instead of long shower,
head to the city - it has become short shower, time in the garden, before
heading to the city.')) .

p(_('&ldquo;A few people I don&rsquo;t know somewhere in the world signed
the pledge&hellip;and that made me really happy.&rdquo;')),
),

array(
'summary' => '
<h3><a href="/WIPTintern">' . $success_titles['WIPTintern'] . ' &ndash; WIPTintern</a></h3>'
. p(_('&ldquo;Having signed a pledge on Pledgebank before, I decided it could be a really
effective tool in helping me empower and mobilize others. We decided that we
would raise some money to provide a small working stipend for a young woman
intern. Within the first 48 hours, I had reached my goal of pledgers. It was
profoundly exciting, and really helped energize our modest fundraising
effort.&rdquo;')),
'entry' => '
<h3><a name="WIPTintern" href="/WIPTintern">' . $success_titles['WIPTintern'] . ' &ndash; WIPTintern</a></h3>'
. p(_('&ldquo;Having signed a pledge on Pledgebank before, I decided it could be a really
effective tool in helping me empower and mobilize others. We decided that we
would raise some money to provide a small working stipend for a young woman
intern. Within the first 48 hours, I had reached my goal of pledgers. It was
profoundly exciting, and really helped energize our modest fundraising
effort.&rdquo;'))
),

);

$success_summary = array();
foreach ($success_stories as $story) {
    if (isset($story['summary']))
        $success_summary[] = $story['summary'];
}
