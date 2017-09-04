-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 20, 2017 at 07:39 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1-log
-- PHP Version: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `WDA038`
--

-- --------------------------------------------------------

--
-- Table structure for table `BlogDetail`
--

CREATE TABLE IF NOT EXISTS `BlogDetail` (
  `blogDetailId` int(11) NOT NULL AUTO_INCREMENT,
  `blogId` int(11) NOT NULL,
  `tekst` text NOT NULL,
  `beschrijving` text NOT NULL,
  PRIMARY KEY (`blogDetailId`),
  UNIQUE KEY `blogId` (`blogId`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BlogDetail`
--

INSERT INTO `BlogDetail` (`blogDetailId`, `blogId`, `tekst`, `beschrijving`) VALUES
(2, 2, 'Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman\'s earth, if free men make it, will be truly round: a globe in practice, not in theory.\r\n\r\nScience cuts two ways, of course; its products can be used for both good and evil. But there\'s no turning back from science. The early warnings about technological dangers also come from science.\r\n\r\nWhat was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.\r\n\r\nA Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That\'s how I felt seeing the Earth for the first time. I could not help but love and cherish her.\r\n\r\nFor those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.\r\n\r\nThe Final Frontier\r\nThere can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.\r\n\r\nThere can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.\r\n\r\nThe dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.\r\nSpaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.\r\n\r\nReaching for the Stars\r\nAs we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.\r\n\r\n \r\nTo go places and do things that have never been done before – that’s what living is all about.\r\nSpace, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.\r\n\r\nAs I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.', 'Problems look mighty small from 150 miles up'),
(3, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales, est vel dapibus tempor, eros leo aliquet ex, eu convallis metus dui eget arcu. Nulla tincidunt ipsum eu volutpat dapibus. Vivamus tincidunt urna sed commodo aliquam. Curabitur nisl justo, convallis pharetra erat eget, vulputate pulvinar odio. Proin commodo ultrices condimentum. Praesent eleifend egestas scelerisque. Nunc velit libero, facilisis vitae mollis eu, commodo id nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent sed est viverra, suscipit massa ac, facilisis erat. Nullam at mi vitae metus consectetur auctor sed quis dolor. Aliquam lobortis maximus dolor sed vulputate. Nunc turpis elit, tempor vel leo sit amet, interdum condimentum lorem. Vivamus vulputate, magna varius iaculis auctor, justo sem pellentesque enim, sed auctor diam nisl sit amet est. Etiam semper dapibus est, ac eleifend sem elementum vel. Pellentesque non nisi nunc. Vestibulum id elementum libero.\r\n\r\nCurabitur ut aliquam eros. Etiam laoreet nunc quis hendrerit porttitor. Praesent vel sem rutrum, volutpat risus ut, vehicula tellus. Phasellus efficitur fringilla pulvinar. In nisi erat, rutrum vel ultrices nec, fermentum quis sapien. Ut sit amet porta ante. Etiam pharetra, dolor vitae viverra varius, nulla nibh sollicitudin massa, eget feugiat augue risus ut metus. Pellentesque non neque sem. Proin eu pulvinar diam.\r\n\r\nNullam et bibendum orci, nec scelerisque velit. Duis venenatis leo quis vulputate porta. Pellentesque condimentum consectetur dui, at laoreet ante sodales at. Donec sit amet vestibulum mi. Nullam et commodo eros, mollis porttitor libero. Ut eget sem sapien. Aliquam vestibulum nulla ex, ut vehicula mi ultricies eu. Fusce maximus elementum dui, eu tristique lorem feugiat vitae. Nullam augue sem, volutpat id egestas a, lacinia ut lorem. Duis fringilla suscipit mauris nec consectetur. Ut id sapien dictum, sodales libero ut, venenatis enim. Phasellus quis condimentum tellus, at fringilla risus. Duis ex enim, pellentesque non pharetra ut, tempor nec ipsum. Nulla facilisi. Curabitur ultricies vitae tellus at feugiat. Quisque porttitor vestibulum est vel mollis.\r\n\r\nNulla facilisi. Nulla fringilla commodo nunc, at fringilla eros vehicula a. Fusce et convallis eros. Fusce pharetra convallis volutpat. Fusce eu hendrerit sapien. Integer ornare purus erat, vel eleifend ex ornare quis. Maecenas posuere, eros vitae tincidunt convallis, tellus eros faucibus mi, et sagittis turpis lorem convallis massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam feugiat elementum ex, sit amet tincidunt diam. Fusce sagittis tempor turpis id interdum. Sed rutrum ligula et dolor posuere gravida. Donec libero quam, tincidunt ut dolor eu, dapibus tempor justo. Duis porta ultrices turpis lobortis accumsan. Proin egestas diam eu est blandit, vitae sollicitudin quam vestibulum.\r\n\r\nPellentesque vehicula id enim vitae consectetur. Aenean sed libero nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris nec pretium ligula. Aliquam sed tincidunt quam, pharetra posuere nisi. Cras viverra felis lectus, at pretium elit sagittis non. Aenean dapibus convallis tellus, non efficitur metus porta a. Ut bibendum sit amet lectus a imperdiet. Aliquam tristique nunc elementum sem euismod consequat ac sed dui.', 'We predict too much for the next year and yet far too little for the next ten.'),
(4, 4, 'In the first chapter, Hawking discusses the history of astronomical studies, including the ideas of Aristotle and Ptolemy. Aristotle, unlike many other people of his time, thought that the Earth was round. He came to this conclusion by observing lunar eclipses, which he thought were caused by the earth\'s round shadow, and also by observing an increase in altitude of the North Star from the perspective of observers situated further to the north. Aristotle also thought that the sun and stars went around the Earth in perfect circles, because of \"mystical reasons\". Second-century Greek astronomer Ptolemy also pondered the positions of the sun and stars in the universe and made a planetary model that described Aristotle\'s thinking in more detail.\r\n\r\nKepler\'s sun-centric elliptical orbit model of the solar system\r\nToday, it is known that the opposite is true: the earth goes around the sun. The Aristotelian and Ptolemaic ideas about the position of the stars and sun were disproved in 1609. The first person to present a detailed argument that the earth revolves around the sun was the Polish priest Nicholas Copernicus, in 1514. Nearly a century later, Galileo Galilei, an Italian scientist and Johannes Kepler, a German scientist, studied how the moons of some planets moved in the sky, and used their observations to validate Copernicus\'s thinking. To fit the observations, Kepler proposed an elliptical orbit model instead of a circular one. In his 1687 book on gravity, Principia Mathematica, Isaac Newton used complex mathematics to further support Copernicus\'s idea. Newton\'s model also meant that stars, like the sun, were not fixed but, rather, faraway moving objects. Nevertheless, Newton believed that the universe was made up of an infinite number of stars which were more or less static. Many of his contemporaries, including German philosopher Heinrich Olbers, disagreed.\r\nThe origin of the universe represented another great topic of study and debate over the centuries. Early philosophers like Aristotle thought that the universe has existed forever, while theologians such as St. Augustine believed it was created at a specific time. St. Augustine also believed that time was a concept that was born with the creation of the universe. More than 1000 years later, German philosopher Immanuel Kant thought that time goes back forever.\r\nIn 1929, astronomer Edwin Hubble discovered that galaxies are moving away from each other. Consequently, there was a time, between ten and twenty billion years ago, when they were all together in one singular extremely dense place. This discovery brought the concept of the beginning of the universe within the province of science. Today, scientists use two partial theories, Einstein\'s general theory of relativity and quantum mechanics, to describe the workings of the universe. Scientists are still looking for a complete unified theory that would describe everything in the universe. Hawking believes that the search for such a universal theory, even though motivated by the essential human need for logic, order and understanding, might affect the survival of the human species.\r\nChapter 2: Space and Time[edit]\r\nBefore Galileo and Newton, it was assumed that Aristotle was right in saying that objects are essentially at rest until a force acts to set them in motion. Newton proved this to be wrong, using Galileo\'s experiments to devise his laws of motion. Newton also developed his law of gravitation, which accurately described the motions of space objects. According to the Aristotelian tradition, events stay in the same place over a period of time. Newton\'s laws proved that to be false, positing that each object in the universe is moving relative to others, and that it is impossible to assign an absolute resting position.\r\nBoth Aristotle and Newton believed in absolute time, a concept independent of space. But this belief does not work for objects moving at or near the speed of light. The speed of light was first measured in 1676 by the Danish astronomer Ole Christensen Roemer, who observed that the time it took light to come from Jupiter\'s moons varied depending on their distance from the earth. The speed of light was found to be very fast but finite. However, scientists found a problem when they tried to say that light always traveled at the same speed. The scientists imagined a substance called the ether to explain light\'s absolute speed.\r\n\r\nEinstein said that time was not absolute, or always the same\r\n\r\nThis is a light cone\r\nBut the assumption of ether did not properly explain the speed of light in many other phenomena. In 1905, Albert Einstein said the idea of the ether was not needed if another idea, the idea of absolute time (or time that is always the same) was dropped. French mathematician Henri Poincare also had the same idea, but from a mathematical perspective. Einstein\'s idea is called the theory of relativity.\r\nEvents can be described by light cones. The top of the light cone tells where the light from the event will travel, the bottom tells where the light was in the past, and the center is the event itself. Besides light cones, Hawking also talks about how light can bend. When light goes past a highly massive object, such as a star, the light changes direction slightly towards the object.\r\nAfter talking about light, Hawking talks about time in Einstein\'s theory of relativity. One prediction that Einstein\'s theory makes is that time will go by slower when something is near huge masses. However, when something is farther away from the mass, time will go by faster. Hawking used the idea of two twins living at different places to describe his idea. If one of the twins went to live on a mountain, and another twin went to live near the sea, the twin who went to live on the mountain would be a little bit younger than the twin who went to live at the sea.\r\nChapter 3: The Expanding Universe[edit]\r\n\r\nThe Big Bang is shown here. From the picture, we can tell the universe is getting bigger over time\r\nIn this chapter, Hawking talks about the expanding universe. The universe is getting bigger over time. One of the things he uses to explain his idea is the Doppler shift. The Doppler shift happens when something moves toward or away from another object. There are two types of things that happen in Doppler shift - red shifting and blue shifting. Red shifting happens when something is moving away from us. This is caused by the wavelength of the visible light reaching us increasing, and the frequency decreasing, which shifts the visible light towards the red/infra-red end of the electromagnetic spectrum. Red-shift is linked to the belief that the universe is expanding as the wavelength of the light is increasing, almost as if stretched as planets and galaxies move away from us, which shares similarities to that of the doppler effect, involving sound waves. Blue shifting happens when something is moving toward us, the opposite process of red-shift, in which the wavelength decreases and frequency increases, shifting the light towards the blue end of the spectrum. A scientist named Edwin Hubble found that many stars are red shifted and are moving away from us. Hawking uses the Doppler shift to explain that the universe is getting bigger. The beginning of the universe is thought to have happened through something called the Big Bang. The Big Bang was a very big explosion that created the universe.\r\nChapter 4: The Uncertainty Principle[edit]\r\nThis chapter is about the uncertainty principle. The uncertainty principle says that the speed and the position of a particle cannot be found at the same time. To find where a particle is, scientists shine light at the particle. If a high frequency light is used, the light can find the position more accurately but the particle\'s speed will be unknown (because the light will change the speed of the particle). If a lower frequency light is used, the light can find the speed more accurately but the particle\'s position will be unknown. The uncertainty principle disproved the idea of a theory that was deterministic, or something that would predict everything in the future.\r\n\r\nHere is a picture of a light wave.\r\nHow light behaves is also talked more about in this chapter. Some theories say that light acts like particles even though it really is made of waves; one theory that says this is Planck\'s quantum hypothesis. A different theory also says that light waves also act like particles; a theory that says this is Heisenberg\'s uncertainty principle.\r\n\r\nLight interference causes many colors to appear.\r\nLight waves have crests and troughs. The highest point of a wave is the crest, and the lowest part of the wave is a trough. Sometimes more than one of these waves can interfere with each other - the crests and the troughs line up. This is called light interference. When light waves interfere with each other, this can make many colors. An example of this is the colors in soap bubbles.\r\nChapter 5: Elementary Particles and Forces of Nature[edit]\r\nQuarks and other elementary particles are the topic of this chapter.\r\nQuarks are very small things that make up everything we see (matter). There are six different \"flavors\" of quarks: the up quark, down quark, strange quark, charmed quark, bottom quark, and top quark. Quarks also have three \"colors\": red, green, and blue. There are also anti-quarks, which are the opposite of the regular quarks. In total, there are 18 different types of regular quarks, and 18 different types of anti quarks. Quarks are known as the \"building blocks of matter\" because they are the smallest thing that make up all the matter in the universe.\r\n\r\nA particle of spin 1 needs to be turned around all the way to look the same again, like this arrow.\r\nAll particles (for example, the quarks) have something called spin. The spin of a particle shows us what a particle looks like from different directions. For example, a particle of spin 0 looks the same from every direction. A particle of spin 1 looks different in every direction, unless the particle is spun completely around (360 degrees). Hawking\'s example of a particle of spin 1 is an arrow. A particle of spin two needs to be turned around halfway (or 180 degrees) to look the same. The example given in the book is of a double-headed arrow. There are two groups of particles in the universe: particles with a spin of 1/2, and particles with a spin of 0, 1, or 2. All of these particles follow Pauli\'s exclusion principle. Pauli\'s exclusion principle says that particles cannot be in the same place or have the same speed. If Pauli\'s exclusion principle did not exist, then everything in the universe would look the same, like a roughly uniform and dense \"soup\".\r\n\r\nThis is a proton. It is made up of three quarks. All the quarks are different colors because of confinement.\r\nParticles with a spin of 0, 1, or 2 move force from one particle to another. Some examples of these particles are virtual gravitons and virtual photons. Virtual gravitons have a spin of 2 and they represent the force of gravity. This means that when gravity affects two things, gravitons move to and from the two things. Virtual photons have a spin of 1 and represent electromagnetic forces (or the force that holds atoms together).\r\nBesides the force of gravity and the electromagnetic forces, there are weak and strong nuclear forces. Weak nuclear forces are the forces that cause radioactivity, or when matter emits energy. Weak nuclear force works on particles with a spin of 1/2. Strong nuclear forces are the forces that keep the quarks in a neutron and a proton together, and keeps the protons and neutrons together in an atom. The particle that carries the strong nuclear force is thought to be a gluon. The gluon is a particle with a spin of 1. The gluon holds together quarks to form protons and neutrons. However, the gluon only holds together quarks that are three different colors. This makes the end product have no color. This is called confinement.\r\nSome scientists have tried to make a theory that combines the electromagnetic force, the weak nuclear force, and the strong nuclear force. This theory is called a grand unified theory (or a GUT). This theory tries to explain these forces in one big unified way or theory.\r\nChapter 6: Black Holes[edit]\r\n\r\nA picture of a black hole and how it changes light around it.\r\nBlack holes are talked about in this chapter. Black holes are stars that have collapsed into one very small point. This small point is called a singularity. Black holes suck things into their center because they have very strong gravity. Some of the things it can suck in are light and stars. Only very large stars, called super-giants, are big enough to become a black hole. The star must be one and a half times the mass of the sun or larger to turn into a black hole. This number is called the Chandrasekhar limit. If the mass of a star is less than the Chandrasekhar limit, it will not turn into a black hole; instead, it will turn into a different, smaller type of star. The boundary of the black hole is called the event horizon. If something is in the event horizon, it will never get out of the black hole.\r\nBlack holes can be shaped differently. Some black holes are perfectly spherical - like a ball. Other black holes bulge in the middle. Black holes will be spherical if they do not rotate. Black holes will bulge in the middle if they rotate.\r\nBlack holes are difficult to find because they do not let out any light. They can be found when black holes suck in other stars. When black holes suck in other stars, the black hole lets out X-rays, which can be seen by telescopes.\r\nIn this chapter, Hawking talks about his bet with another scientist, Kip Thorne. Hawking bet that black holes did not exist, because he did not want his work on black holes to be wasted. He lost the bet.\r\nChapter 7: Black Holes Ain\'t So Black[edit]\r\nThis chapter explains more about black holes.\r\nHawking realized that the event horizon of a black hole could only get bigger, not smaller. The area of the event horizon of a black hole gets bigger whenever something falls into the black hole. He also realized that when two black holes combine, the size of the new event horizon is greater than or equal to the sum of the event horizons of the two other black holes. This means that a black hole\'s event horizon can never get smaller.\r\nDisorder, also known as entropy, is related to black holes. There is a scientific law that has to do with entropy. This law is called the second law of thermodynamics, and it says that entropy (or disorder) will always increase in an isolated system (for example, the universe). The relation between the amount of entropy in a black hole and the size of the black hole\'s event horizon was first thought of by a research student (Jacob Bekenstein) and proven by Hawking, whose calculations said that black holes emit radiation. This was strange, because it was already said that nothing can escape from a black hole\'s event horizon.\r\nThis problem was solved when the idea of pairs of \"virtual particles\" was thought of. One of the pair of particles would fall into the black hole, and the other would escape. This would look like the black hole was emitting particles. This idea seemed strange at first, but many people accepted it after a while.\r\nChapter 8: The Origin and Fate of the Universe[edit]\r\nHow the universe started and how it might end is talked about in this chapter.\r\nMost scientists believe that the universe started in an explosion called the Big Bang. The model for this is called the \"hot big bang model\". When the universe starts getting bigger, the things inside of it also begin to get cooler. When the universe was first beginning, it was infinitely hot. The temperature of the universe cooled and the things inside the universe began to clump together.\r\nHawking also talks about how the universe could have been. For example, if the universe formed and then collapsed quickly, there would not be enough time for life to form. Another example would be a universe that expanded too quickly. If a universe expanded too quickly, it would become almost empty. The idea of many universes is called the many-worlds interpretation.\r\nInflationary models are also discussed in this chapter, and so is the idea of a theory that unifies quantum mechanics and gravity.\r\nEach particle has many histories. This idea is known as Feynman\'s theory of sum over histories. A theory that unifies quantum mechanics and gravity should have Feynman\'s theory in it. To find the chance that a particle will pass through a point, the waves of each particle needs to be added up. These waves happen in imaginary time. Imaginary numbers, when multiplied by themselves, make a negative number. For example, 2i X 2i = -4.\r\nChapter 9: The Arrow of Time[edit]\r\nIn this chapter Hawking talks about why \"real time\" as humans observe and experience it (in contrast to the \"imaginary time\" in the laws of science) seems to have a certain direction, notably from the past towards the future. The things that give time this property are the arrows of time.\r\nFirstly, there is the thermodynamic arrow of time. According to this, starting from any higher order organized state, the overall disorderliness in the world always increases as time passes. This is why we never see a broken pieces of a cup gather themselves together to form a whole cup. Even though human civilizations have tried to make things more orderly, the energy dissipated in this process has created more overall disorder in the universe.\r\nThe second arrow is the psychological arrow of time. Our subjective sense of time seems to flow in one direction, which is why we remember the past and not the future. Hawking claims that our brain measures time in a way where disorder increases in the direction of time. We never observe it working in the opposite direction. In other words, the psychological arrow of time is intertwined with the thermodynamic arrow of time.\r\nThirdly there is the cosmological arrow of time, the direction of time in which our universe is expanding and not contracting. Hawking believes that in order for us to observe and experience the first two arrows of time, the universe would have to begin in a very smooth and orderly state. And then as it expanded, it became more disorderly. So the thermodynamic arrow agrees with the cosmological arrow.\r\nHowever, because of the \"no boundary\" proposal for the universe, after a period of expansion, the universe will probably start to contract. But it will probably not go backwards in time to a more smooth, orderly state. The thermodynamic arrow in the contracting phase will not be as strong.\r\nAs for why humans experience these three arrows of time going in the same direction, Hawking postulates that humans have been living in the expanding phase of the universe. He thinks that intelligent life couldn\'t exist in the contracting phase of the universe. Only the expanding phase of the universe is suitable for intelligent beings like humans to exist, because it contains a strong thermodynamic arrow. Hawking calls this the \"weak anthropic principle\".\r\nChapter 10: The Unification of Physics[edit]\r\nA wavy open segment and closed loop of string.\r\nThe fundamental objects of string theory are open and closed strings.\r\nPhysicists have come up with partial theories to describe a limited range of things, but a complete, unified and consistent theory which can take into account all of these partial theories remain unknown. Hawking is cautiously optimistic that such a unified theory of the universe may be found soon. Such a theory must combine the classical theory of gravity with the uncertainty principle found in quantum mechanics. Attempts to do that have led to the occurrence of absurd infinitely massed particles or an infinitely small universe. In 1976, the theory of \"supergravity\" was suggested as a solution. But the calculations to verify the theory was deemed time-consuming and thus abandoned. In 1984, another kind of theories called the \"string theories\", where basic objects are not particles but two-dimensional strings, became popular among physicists. They were claimed to explain the existence of certain particles better than supergravity and other theories. However, according to string theories, instead of the usual four space-time dimensions, the universe could have dozens of them. It is imagined that humans do not experience the other dimensions because these are too tightly curled up. This is due to the \"weak anthropic principle\", according to which intelligent beings like humans cannot exist in any other way. Sting theories appear to allow this situation for certain regions of the universe, but there may be other regions of the universe where more than four dimensions are prominent. Furthermore, supergravity, p-brane and string theories all describe different situations with similar results, as if using different approximations of the same theory.\r\nHawking thus proposes three possibilities: 1) there exists a complete unified theory that we will eventually find; 2) there are an infinite number of theories that overlap and describe the universe more and more accurately and 3) there is no ultimate theory. The third possibility has been sidestepped by acknowledging the limits set by the uncertainty principle. The second possibility describes what has been happening in physical sciences so far, with increasingly accurate partial theories. Hawking believes that such refinement has a limit and that by studying the very early stages of the universe in a laboratory setting, it is possible to finally find a complete unified theory in the 21st century. Such a theory might not be proven but would be mathematically consistent. The predictions of such a basic set of laws would match our observations. However, given the complicated nature of realistic situations, it would only be a first step to a complete understanding of the events around us.\r\nChapter 11: Conclusion[edit]\r\nHumans have always wanted to make sense of the universe and their place in it. At first, events were considered random and controlled by human-like emotional spirits. But in astronomy and in some other situations, regularities were observed. With the advancement of the human civilization in the modern age, more regularities and laws were discovered. Laplace suggested at the beginning of the nineteenth century that the universe’s structure and evolution could eventually be precisely explained by a set of laws. However, the origin of these laws was left in God’s domain. In the twentieth century, quantum theory introduced the uncertainty principle, which set limits to the predictive accuracy of laws to be discovered. The big bang implied by the general theory of relativity indicates that a creator of the universe or God has the freedom to choose the origin and the laws of the universe. When one combines theory of gravity with quantum mechanics, however, a unified and completely self-contained theory may emerge, in which God has little or no role to play. So the search of a unified theory may shed light on the nature of God. However, most scientists today are working on the theories themselves than asking such philosophical questions. On the other hand, these physical theories are so mathematical and technical that philosophers are not discussing them like they used to do, let alone ordinary people. Hawking would like to see that eventually everybody would one day talk about these theories in order to understand the true origin and nature of the universe, accomplishing the ultimate triumph of human reasoning.', 'is a popular-science book on cosmology (the study of the universe) by British physicist Stephen Hawking.[1] It was first published in 1988. Hawking wrote the book for nonspecialist readers with no prior knowledge of scientific theories.'),
(5, 5, 'qdsfdqsfqdf', 'qdsf'),
(6, 6, 'den tekst', 'schwifty'),
(7, 14, 'what a text', 'sldfjsqdfjksmldqfjsldfjsldjf'),
(8, 16, 'what a text', 'sldfjsqdfjksmldqfjsldfjsldjf'),
(9, 17, 'everybody just passes them around because there is no expiration date on them !', 'did you know the dirty secret of champagne gifts'),
(10, 18, 'everybody just loves it spread the love', 'did you know the nice secret of beer gifts'),
(11, 20, 'qdfqfsqdfdsfqdfsqdf', 'dqfqdfsdfqdf');

-- --------------------------------------------------------

--
-- Table structure for table `Blogs`
--

CREATE TABLE IF NOT EXISTS `Blogs` (
  `blogId` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(150) NOT NULL,
  `datum` datetime NOT NULL,
  `isDeleted` tinyint(4) NOT NULL,
  `userId` int(11) NOT NULL,
  `categorieID` int(11) NOT NULL,
  `totalComments` int(11) NOT NULL,
  PRIMARY KEY (`blogId`),
  KEY `fk_categorieID` (`categorieID`),
  KEY `fk_userId` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Blogs`
--

INSERT INTO `Blogs` (`blogId`, `titel`, `datum`, `isDeleted`, `userId`, `categorieID`, `totalComments`) VALUES
(2, 'Man must explore, and this is exploration at its greatest', '2017-07-07 14:51:12', 0, 1, 1, 3),
(3, 'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine.', '2017-08-08 00:00:00', 0, 2, 2, 5),
(4, 'A Brief History of Time: From the Big Bang to Black Holes', '2017-03-08 00:00:00', 0, 1, 1, 5),
(5, 'blogTest', '2017-08-09 00:00:00', 0, 2, 2, 0),
(6, 'den titel', '2017-08-19 00:00:00', 0, 2, 2, 0),
(14, 'have to read this', '2017-08-19 00:00:00', 0, 1, 2, 0),
(16, 'What a blog post damn', '2017-08-19 00:00:00', 1, 1, 2, 1),
(17, 'champagne gifts', '2017-08-20 00:00:00', 0, 1, 1, 0),
(18, 'beer gifts', '2017-08-20 00:00:00', 0, 1, 1, 0),
(20, 'dsqffds', '2017-08-20 00:00:00', 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categorieen`
--

CREATE TABLE IF NOT EXISTS `categorieen` (
  `categorieID` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(30) NOT NULL,
  `beschrijving` text NOT NULL,
  PRIMARY KEY (`categorieID`),
  UNIQUE KEY `naam` (`naam`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorieen`
--

INSERT INTO `categorieen` (`categorieID`, `naam`, `beschrijving`) VALUES
(1, 'space', 'concepts about space'),
(2, 'artificial intelligence', 'exciting concepts about ai'),
(3, 'koken', 'amai das lekker'),
(4, 'autos', 'wat een mooie machines');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE IF NOT EXISTS `Comments` (
  `commentId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `datum` datetime NOT NULL,
  `tekst` text NOT NULL,
  `blogId` int(11) NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `titel` varchar(50) NOT NULL,
  PRIMARY KEY (`commentId`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Comments`
--

INSERT INTO `Comments` (`commentId`, `userId`, `datum`, `tekst`, `blogId`, `isActive`, `titel`) VALUES
(1, 1, '2017-08-09 00:00:00', 'dit is echt een zeer leuke informatieve blog. keep it up ! ', 2, 1, 'goed bezig'),
(2, 2, '2017-08-19 00:00:00', 'commentaar2', 2, 1, 'sexy titel'),
(3, 2, '2017-08-19 00:00:00', ' echt wel tof', 2, 1, 'leuk gedaan'),
(4, 1, '2017-08-19 00:00:00', 'qqs', 3, 1, 'qdf'),
(5, 1, '2017-08-19 00:00:00', 'test', 3, 1, 'test'),
(6, 1, '2017-08-19 00:00:00', 'qsdf', 4, 1, 'test3'),
(7, 1, '2017-08-19 00:00:00', 'hallo', 4, 1, 'werkt dit ?'),
(8, 1, '2017-08-19 00:00:00', 'qqq', 4, 1, 'fq'),
(9, 1, '2017-08-19 00:00:00', 'lkjf', 4, 1, 'qfdlj'),
(10, 1, '2017-08-19 00:00:00', 'ggg', 4, 1, 'qqq'),
(11, 1, '2017-08-19 00:00:00', 'heel innovatieve aanpak', 3, 1, 'tof gedaan'),
(12, 1, '2017-08-19 00:00:00', 'awesome', 3, 1, 'cool'),
(13, 1, '2017-08-19 00:00:00', 'sss', 3, 1, 'ff'),
(14, 1, '2017-08-19 00:00:00', 'woehoe', 16, 1, 'eindelijk');

-- --------------------------------------------------------

--
-- Table structure for table `Fotos`
--

CREATE TABLE IF NOT EXISTS `Fotos` (
  `fotoId` int(11) NOT NULL AUTO_INCREMENT,
  `blogId` int(11) DEFAULT NULL,
  `naam` varchar(30) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  PRIMARY KEY (`fotoId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Fotos`
--

INSERT INTO `Fotos` (`fotoId`, `blogId`, `naam`, `userId`) VALUES
(2, 2, 'blog1.jpg', NULL),
(3, 3, 'blog2.jpg', NULL),
(4, NULL, 'user1.jpg', 1),
(7, 17, '12443618_10207809870678468.jpg', NULL),
(8, 18, '11844968_1087445391283012_.jpg', NULL),
(9, 19, '11229379_1126867674007450_.jpg', NULL),
(10, 20, '12887380_10207809873078528.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isActive` tinyint(4) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL,
  `creationDate` datetime NOT NULL,
  `isAdmin` tinyint(4) NOT NULL,
  `cookie` text,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`userId`, `username`, `email`, `isActive`, `wachtwoord`, `creationDate`, `isAdmin`, `cookie`) VALUES
(1, 'kwiki30', 'maxime.walravens@student.ehb.be', 1, '$2y$10$NExMFcploQODOspjJ.ceTu0269cLkvRXASm9etE4vXQBP3p4PtIJ2', '2017-07-04 12:31:26', 1, '$2y$10$I0aWcfMxtjbxcDl.fmk9jup5KwT7vwrOugy/MweUNyYVZNo9sI0pi'),
(2, 'aristocrates', 'maxime-walravens@hotmail.com', 1, '$2y$10$Eqxs1.QPGuVoohOkw2MiUON9rafG0BemsH6Y.nXelgWGjliSp.ATe', '2017-07-12 18:03:29', 0, NULL),
(3, 'username', 'email@email.com', 1, '$2y$10$J6RbeRThT/IakC1p5vDNCObX9m67tfxwE6dj5ObnLrxe3acEsXMNy', '2017-08-20 00:00:00', 0, NULL),
(4, 'jane', 'email2@email.com', 1, '$2y$10$uQmZ.5n6JrKj5qUTUfYW..ASV3sYelQKJbeoruhzXeUo9bs8D.By2', '2017-08-20 00:00:00', 0, NULL),
(5, 'test', 'test@test.com', 1, '$2y$10$NSQ6Bee7.CimyJwCxLoGuufZAdCRnIUrcVtpjJHffc60D0Y.mMRei', '2017-08-20 00:00:00', 0, '$2y$10$U61DNTlvgDemjqaRoBitc.UwIy2MfyyDn0zfKQDRwCpHKLlILnm32'),
(6, 'jack', 'jack@jack.com', 1, '$2y$10$i6CeVb6NYg3IKxwM3y2.mOsFcYBj1NtOPNBszJVENBLcuxD2fBgt6', '2017-08-20 00:00:00', 0, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BlogDetail`
--
ALTER TABLE `BlogDetail`
  ADD CONSTRAINT `fk_blogid` FOREIGN KEY (`blogId`) REFERENCES `Blogs` (`blogId`);

--
-- Constraints for table `Blogs`
--
ALTER TABLE `Blogs`
  ADD CONSTRAINT `fk_categorieID` FOREIGN KEY (`categorieID`) REFERENCES `categorieen` (`categorieID`),
  ADD CONSTRAINT `fk_userId` FOREIGN KEY (`userId`) REFERENCES `Users` (`userId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
