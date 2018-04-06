-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2016 at 07:45 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `addques`
--

CREATE TABLE `addques` (
  `id` int(11) NOT NULL,
  `select_name` varchar(225) NOT NULL,
  `modules` varchar(225) NOT NULL,
  `sub_modules` varchar(225) NOT NULL,
  `enter_ques` varchar(225) NOT NULL,
  `enter_ans1` varchar(225) NOT NULL,
  `enter_ans2` varchar(225) NOT NULL,
  `enter_ans3` varchar(225) NOT NULL,
  `enter_ans4` varchar(225) NOT NULL,
  `true_ans` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addques`
--

INSERT INTO `addques` (`id`, `select_name`, `modules`, `sub_modules`, `enter_ques`, `enter_ans1`, `enter_ans2`, `enter_ans3`, `enter_ans4`, `true_ans`) VALUES
(35, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', '    Quantity A  is x2+  & Quantity B 2x-1 ?  ', 'A.	Quantity A is greater.', 'B.	Quantity B is greater.', 'C.	The two quantities are equal.', 'D.	The relationship cannot be determined from the information given.', 'A'),
(37, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'Each employee of a certain company is in either Department X or Department Y, and there are more than twice as many employees in Department X as in Department Y. The average (arithmetic mean) salary is $25,000 for the emplo', '$25,000', '$36,000', '$16,000', '$20,000', 'A,B'),
(38, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'F f, g, and h are positive integers such that, f is a factor of g, and g is a factor of h, which of the following statements must be true?', 'A.	f  is a factor of  g2.', 'B.	f  is a factor of gh.', 'C.	f  is a factor of  h-g', 'D.    f is a factor of g-h', 'A,B,C'),
(40, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'If the value of the inventory at Business K was $30,000 for April, what was the value of the inventory at Business K for June?', '$34.762', '$29,925', '$357', '$4900', '$29,925'),
(41, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'A university admitted 100 students who transferred from other institutions. Of these students, 34 transferred from two-year community colleges, 25 transferred from private four-year institutions, and the rest transferred fr', '15/100', '18/100', '17/150', '12/400', '17/150'),
(42, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'At Business M, the value of the inventory for May was what percent of the value of the inventory for June?', '24.56', '89.3', '87.2', '12.0', '89.3'),
(43, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'For which of the six businesses shown was the percent change in the value of the inventory from April to June greatest?', 'G', 'R', 'H', 'P', 'G'),
(44, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'Approximately how many people are in the production and transportation sector of the workforce?', '1.22 million', '2.16 million', '3.43 million', '4.21 million', ' 4.21 million'),
(45, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'Approximately what fraction of the workforce in the food service area of the service sector consists of males', '(a)7/4', '(b)45/8', '(c)4/7', '(d)6/7', 'c'),
(46, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'In the workforce, the ratio of the number of males to the number of females is the same for the sales sector as it is for the protective service area of the service sector. Which of the following is closest to the number o', 'A. 2.9 million', 'B. 4.7 million', 'C. 6.3 million', 'D 6.0 million', 'A'),
(47, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', ' If x is distant by 5 units from -1, what are the possible values of x? ', 'A. 4', 'B. -7', 'C. -6', 'D. 8', 'A,C'),
(48, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'Which of the triangles below, defined by their three sides, are right triangles? ', 'A. 2,4,6', 'B. 6 , 8 , 10 ', 'C.1.2 , 1.6 , 2.0  ', 'D. 3 , 5 , âˆš34', 'B,C,D'),
(49, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', ' The lengths of the sides AB and AC of triangle ABC are both equal to 10 and the size of the interior angle at vertex A of triangle ABC is equal to 30Â°. Which is true about triangle ABC? ', 'A.Angles ABC and A C B are equal in size.  ', 'B. Angle ABC has a size of 30Â° ', 'C.Angle ACB has a size of 75Â°  ', 'D.The area of triangle ABC is equal to 25 ', 'A ,C ,D'),
(50, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'Which of the following is true? ', 'A) | x | > 0 for all real values of x.   ', 'B) x2 + 1 > 0 for all real values of x.', 'C) | x + 1| > 0 for all real values of x.  ', 'D) | x | + 1 > 0 for all real values of x.', 'B,D'),
(51, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'Which of the following is true for all real numbers x and y? ', ' A) |- x - y| = |x + y|      ', 'B) |x - y| = |x + y|', 'C) |y - x| = |x - y|', 'D) |- x + y| = |x - y| ', 'A,C,D'),
(52, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'a, b, c, d, e, f, and h are numbers such that a Ã— b Ã— c = 100, a Ã— d Ã— e = 0 and b Ã— f Ã— h = 0. Which of the following could be true? ', 'A) a = 0  ', 'B) d = 0 or f = 0 ', 'C) d Ã— e not equal to 0', 'D) f = 0 or h = 0 ', 'B,C,D'),
(53, 'GRE EXAM', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', 'Farm X is 8 miles due west of farm Y, and farm Z is 7 miles due north of farm Y, Distance between x and z & 10miles ', 'A.The quantity on the left is greater ', 'B.The quantity on the right is greater ', 'C.Both are equal.', 'D. The relationship cannot be determined without further information ', 'A'),
(54, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', '   9 less than 4X = 39 and (X,10) ?', 'A. The quantity on the left is greater ', 'B. The quantity on the left is greater ', 'C  Both are equal.', 'D.The relationship cannot be determined without further information', 'A'),
(55, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', '  A rectangle has area 30  Perimeter of this rectangle 25 ?', 'A. The quantity on the left is greater ', 'B. The quantity on the left is greater ', 'C. Both are equal.', 'D.The relationship cannot be determined without further information', 'D'),
(59, 'GRE EXAM', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'if x=10^-1 ,what is the value of (x+1/x)(1/x) ?', '107', '101', '200', '111', '101'),
(60, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'Who among the following watches Aaj Tak?', '(a)Professor       ', '(b)CS', '(c) Reporter ', '(d) Doctor', '(a)'),
(61, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'The reporter watches which of the following channels ?', '(a) Zee News  ', '(b) DD News', '(c) Star News', '(d) Canâ€™t be determined', '(d)'),
(62, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'Who among the following is a Doctor ?', '(a) Vivan       ', '(b) Uber', '(c) Pravin', '(d) Shane', '(c)'),
(63, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'What is the profession of Questa ?', '(a) Doctor        ', ' (b) Businessman', '(c) CA ', '(d) Player', '(b)'),
(64, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'Which of the following combinations is true ?', '(a) Pravin â€” CA â€” DD News      ', '(b) Questa â€” Player â€” Zee News ', '(c) Ricky â€” Profe ssor â€” Aaj Tak ', '(d) Shane â€” CS â€” News Nation', '(c)'),
(65, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'Which of the following statements is/are true ?', '(a) Shane is a CS and watches Star News        ', '(b) Tim watches either zee News or Star News', ' (c) Ricky is a Professor and watches DD News', '(d) All are true     ', '(b)'),
(66, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', ' What is the profession of Vivan ?', '(a) Player ', '(b) CS  ', '(c) Doctor ', '(d) CA', '(d)'),
(67, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'Who among the following sits between C and D ?', '(a)F      ', '(b)E  ', '(c)B ', '(d)H', '(d)'),
(68, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', ' Who among the following sits third to the left of F ?', '(a) B      ', '(b) A  ', '(c) C  ', '(d) E', '(a)'),
(69, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'Who among the following sits on the extreme ends of the row ?', '(a) D, A     ', ' (b) G, E ', '(c) G, F  ', '(d) H, F', '(c)'),
(82, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'In these series, you will be looking at both the letter pattern and the number pattern. Fill the blank in the middle of the series or end of the series.SCD, TEF, UGH, ____, WKL', 'A  (CMN	 	', 'B   UJI', 'C   VIJ', 'D   IJT', 'C'),
(83, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'There are two alphabetical series here. The first series is with the first letters only: STUVW. The second series involves the remaining letters: CD, EF, GH, IJ, KL,B2CD, _____, BCD4, B5CD, BC6D', 'A.	B2C2D		', 'B.	B.C3D ', 'C.	B2C3D', 'D.	D.CD7', 'B'),
(84, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'Because the letters are the same, concentrate on the number series, which is a simple 2, 3, 4, 5, 6 series, and follows each letter in order.FAG, GAF, HAI, IAH, ____', 'A. JAK	', 'B. HAL 	', 'C. HAK', 'D. JAI', 'A'),
(85, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'The middle letters are static, so concentrate on the first and third letters. The series involves an alphabetical order with a reversal of the letters. The first letters are in alphabetical order: F, G, H, I , J. The second a', 'A. OLPA	', 'B. KLMA	', 'C. LLMA', 'D. KLLA', 'D'),
(86, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'The second and forth letters in the series, L and A, are static. The first and third letters consist of an alphabetical order beginning with the letter E.CMM, EOO, GQQ, _____, KUU', 'A. GRR	', 'B. GSS ', 'C. ISS	', 'D. ITT', 'C'),
(87, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'The first letters are in alphabetical order with a letter skipped in between each segment: C, E, G, I, K. The second and third letters are repeated; they are also in order with a skipped letter: M, O, Q, S, U.ZA5 ,Y4B, XC6, W', 'A. E7V	', 'B. V2E', 'C. VE5	', 'D. VE7', 'D'),
(88, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'There are three series to look for here. The first letters are alphabetical in reverse: Z, Y, X, W, V. The second letters are in alphabetical order, beginning with A. The number series is as follows: 5, 4, 6, 3, 7.QPO, NML, K', 'A. HGF	', 'B. CAB ', 'C. JKL	', 'D. GHI', 'A'),
(89, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'This series consists of letters in a reverse alphabetical order. JAK, KBL, LCM, MDN, _____', 'A. OEP	', 'B. NEO', 'C. MEN	', 'D. PFQ', 'B'),
(90, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'This is an alternating series in alphabetical order. The middle letters follow the order ABCDE. The first and third letters are alphabetical beginning with J. The third letter is repeated as a first letter in each subsequent ', 'A. JKJ	', 'B. HJH 	', 'C. IJI', 'D. JHJ', 'A'),
(91, 'BANKING TEST', 'REASONING ABILITY', 'NO FEILD REQUIEED', 'This series consists of a simple alphabetical order with the first two letters of all segments: B, C, D, E, F, G, H, I, J, K. The third letter of each segment is a repetition of the first letter.P5QR, P4QS, P3QT, _____,P1QV', 'A. PQW		', 'B. PQV2', 'C. P2QU', 'D. PQ3U', 'C'),
(92, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'Some of the world ', ' (a)/ largest water bodies are   ', '(b)/ drying up thus threatening', '(c)/ the livelihoods of millions', '(d)/ No error', 'a. Worlds is used in the place of world'),
(93, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'Among the many', '(a)/ challenges facing the country  ', '(b)/ in the next decade', '(c)/ is poverty and unemployment ', '(d)/ No error', 'd.are is used in the place of is'),
(94, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'According to economists', '(a)/ not more than five per cent  ', '(b)/ of education loans taken ', '(c) /  by students are overdue', '(d)/ No error', 'd. is used in the place of are'),
(95, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'The two candidates share', '(a)/ a reputation for   ', '(b)/ competency as well as', '(c)/ for good communication skills', '(d)/ No error', 'd.for will not be used'),
(96, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'His main qualification', '(a)/ on the job is ', '(b)/ his extensive experience ', '(c)/ in foreign branches', '(d)/ No error', 'b.for replaces on'),
(97, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'A representative from the ', '(a)/ Reserve Bank will provide students an ', '(b)/ insight into the ', '(c)/ economic future of our country ', '(d)/ No error', '(d) no error'),
(98, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'As one of the leader', '(a)/ insurance companies in  ', '(b)/ India they offer', '(c)/ comprehensive financial services', '(d)/ No error ', 'a. leading is used in the place of leader.'),
(99, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'There is a rumor that ', '(a)/ this multinational company will   ', '(b)/ set up its regional headquarters', '(c)/ in India at short', '(c)/ no error', 'd.shortly is used in the place of short.'),
(100, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'Despite taking steps to', '(a)/ encourage foreign investment  ', '(b)/ there has been any', '(c)/ substantial improvement in our economy ', '(d)/ No error', 'c.no replace any'),
(101, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'We had made every effort', '(a)/ to ensure that a  ', ' (b)/ compromise is reached and ', '(c)/ that the deal was signed', '(d)/ No error', 'c. was is used in place of is'),
(104, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'Many animals and plants live in water ', '(1) / but not in the same kind of water . ', '(2) / because not all water is the same ', '(3) / Sea water, for instance, contains a lot of salt, fresh water contains very little. ', '(4) /  No error ', '4'),
(105, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'A sparrow has made a nest in Keshoâ€™s house', '(1) / and had laid eggs. Both Kesho and his sister Shyama ', '(2) / watched the nest for hours every day.', ' (3) / Even meal times were forgotten. ', '(4) / No error', '1'),
(106, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', ' A skillful advertiser may be able to create', '(1) / practically a monopoly for himself.  ', '(2) / not because his product is superior to', '(3) / but because he has succeeded in inducing people to believe that it is .', '(4)/ No error ', '2'),
(107, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'Whatever may be the origin of speech,', '(1)/ we can be certain that man did not began  ', '(2)/ to feel the need to speak ', '(3) / until he began to live in communities.', '(4) / No error ', '2'),
(108, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'The â€¦â€¦â€¦â€¦â€¦â€¦â€¦â€¦reforms that are taking place in the global economic  scenario are â€¦â€¦â€¦â€¦â€¦.as they are full of optimism.', '(1) Exorbitant , unnecessary     ', '(2) Colossal, unfavorable', '(3) Drastic, disappoint', '(4) Sweeping ,unrealistic', ' 4'),
(109, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'Sita was so â€¦â€¦â€¦â€¦â€¦â€¦â€¦in his prayer that she did not pay any â€¦â€¦â€¦â€¦â€¦â€¦â€¦â€¦to our presence.', '(1) Engrossed, remuneration    ', '(2) Absorbed, heed ', '(3) Perfect, attention ', '(4) Careless, significance', '1'),
(110, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'He expressed â€¦â€¦â€¦â€¦â€¦â€¦â€¦â€¦for his hasty â€¦â€¦â€¦â€¦â€¦â€¦.', '(1) Regret , action    ', '(2) Pleasure , speech', '(3) Repentance ,movement ', '(4) Anguish , provocation', '1'),
(111, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'The residents on this island are soâ€¦â€¦â€¦â€¦â€¦â€¦..that they do not â€¦â€¦â€¦â€¦â€¦â€¦even their closest relatives.', '(1) Callous, consider   ', '(2) Hospitable ,greet    ', '(3) Uncivilized ,recognize', '(4) Indifferent , hurt', ' 3'),
(112, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'The annual â€¦â€¦â€¦â€¦â€¦â€¦â€¦â€¦..of industrial products has risen â€¦â€¦â€¦â€¦â€¦â€¦â€¦..in the recent years.', '(1) Output, enormously   ', '(2) Outcome, hugely', '(3) outlay ,paramount ', '(4) Outbreak ,tremendously', ' 3'),
(113, 'BANKING TEST', 'ENGLISH LANGUAGE', 'NO FEILD REQUIEED', 'Even after requesting ', '(1)/ him, he did not  ', '(2)/ tell us that how', '(3)/ he solved the problem', '(4)/ No error', '3'),
(114, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', '465â€¢84 + 765â€¢86 â€“ 211â€¢99 = ?', '(1) 1100    ', '(2) 1080   ', '(3) 1000 ', '(4) 1020', ' 4'),
(115, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', ' 151.1% of 151.1 + 151.1 = ?', '(1) 380     ', '(2) 400   ', '(3) 350', '(4) 420  ', '1'),
(116, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', ' 2001 Ã— 473 Ã· 1001 â€“ 245 = ?', '(1) 650       ', '(2) 700  ', '(3) 950 ', '(4) 850 ', ' 2'),
(117, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', 'âˆš2450 - âˆš1200 + âˆš440 = ?', '(1) 36', '(2) 53   ', '(3) 44    ', '(4) 25', ' 1'),
(118, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', '501/58 * 291/101 Ã· 31/155 = ?', '(1) 140       ', '(2) 125   ', '(3) 95  ', '(4) 85', ' 2'),
(119, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', 'If the compound interest on an amount of Rs. 29000 in two years is Rs. 9352.5, what is the rate of interest?', '(1) 11    ', '(2)  9   ', '(3) 15', '(4) 18', '3'),
(120, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', 'Three friends A, B and C start running around a circular stadium and complete a single round in 8, 18 and 15 seconds respectively. After how many minutes will they meet again at the starting point for the first time?', '(1) 12       ', '(2)  6 ', '(3)  8   ', '(4) 15', ' 2'),
(121, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', 'The perimeter of a square is equal to the radius of a circle having area 39424 sq cm, what is the area of square?', '(1) 1225 sq cm  ', '(2) 441 sq cm ', '(3) 784 sq cm  ', '(4) Canâ€™t say', ' 3'),
(122, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', 'The committee should consist of 2 Males, 2 Females and 1 Child?', '(1) 450        ', '(2) 225  ', '(3) 55 ', '(4) 90 ', ' 1'),
(123, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', 'The committee should include all the 3 Childs?', '(1) 90        ', '(2) 180', '(3) 21 ', '(4) 55', ' 4'),
(124, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', ' Thirty men can complete a work in 36 days. In how many days can 18 men complete the same piece of work?', '(1) 48       ', '(2) 36  ', '(3) 60  ', '(4) 72 ', ' 3'),
(125, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', 'Ram spends 50% of his monthly income on household items, 20% of his monthly income on buying clothes,5% of his monthly income on medicines and saves remaining Rs. 11,250 . What is Ramâ€™s monthly income?', '(1) Rs. 38,200    ', ' (2) Rs. 34,000  ', '(3) Rs. 41,600 ', '(4) Rs. 45,000 ', '4'),
(126, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', 'The number obtained by interchanging the two digits of a two digit number is lesser than the original number by 54. If the sum of the two digits of the number is 12, then what is the original number?', '(1) 28        ', '(2) 39', '(3) 82', '(4)None of these', '4'),
(127, 'BANKING TEST', 'QUANTITATIVE REASONING', 'NO FEILD REQUIEED', 'At present Geeta is eight times her daughterâ€™s age. Eight years from now, the ratio of the ages of Geeta and her daughter will be 10 : 3 respectively. What is Geetaâ€™s present age ?', '(1) 32 years     ', '(2) 40 years', '(3) 36 years ', '(4) Canâ€™t say', ' 1'),
(128, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', 'In how many different ways can 4 boys and 3 girls be arranged in a row such that all the boys stand together and all the girls stand together ?', '(1) 75     ', '(2) 576   ', '(3) 288   ', '(4) 24  ', ' 3'),
(129, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', '(42)^2 - (38)^2  - (17)^2= ? / 0.1', '1) 4.1  ', '2) 3.1 ', '3) 5.1 ', '4) 6.1', '2'),
(130, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', '702 Ã· 27 + 108 x 0.75 = ?', '1) 79   ', '2) 89', '3) 98  ', '4)107 ', '4'),
(131, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', '348 x 9 x ? = 37584', '1) 11   ', '2) 12 ', '3) 14 ', '4) 16 ', '2'),
(133, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', '1234.131-93.12 -431.1 -?= 8.432', '1) 411.072  ', '2) 369.497  ', '3) 701.479 ', '4) 356.479 ', '3'),
(134, 'BANKING TEST', 'QUANTITATIVE APTITUDE', 'NO FEILD REQUIEED', '(54% of 3845) - (36% of 2755) = ?', '1) 1340.65     ', '2) 1284.5 ', '3) 1084.5 ', '4) 1410.75 ', '3');

-- --------------------------------------------------------

--
-- Table structure for table `addtest`
--

CREATE TABLE `addtest` (
  `id` int(11) NOT NULL,
  `subj_id` varchar(225) NOT NULL,
  `test_name` varchar(225) NOT NULL,
  `test_ques` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtest`
--

INSERT INTO `addtest` (`id`, `subj_id`, `test_name`, `test_ques`) VALUES
(8, 'GRE EXAM', 'Reading Comprehension', '20'),
(9, 'GRE EXAM', 'Text Comprehension', '20'),
(10, 'GRE EXAM', 'Sentence Equivalence', '20'),
(11, 'BANKING TEST', 'Reasoning Ability', '14'),
(13, 'IELTS TEST', 'Reading', '10'),
(14, 'IELTS TEST', 'Writing', '10'),
(15, 'IELTS TEST', 'Listening', '10'),
(16, 'IELTS TEST', 'Speaking', '10'),
(17, 'GRE EXAM', 'Quantitative Reasoning', '20'),
(18, 'GRE EXAM', 'Analytical Writing', '20'),
(19, 'BANKING TEST', 'English langauge', '20'),
(20, 'BANKING TEST', 'Quantitative Aptitude', '20');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `venue` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(225) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `venue`, `date`, `time`, `description`) VALUES
(4, 'ielts ', 'Gumar mandi ludhaiana', '1916-07-02', '03:00', 'Register for IELTS now.\r\n\r\nIELTS is jointly owned by the British Council, IDP: IELTS Australia and Cambridge English Language Assessment.'),
(5, 'Latest new about bankpo', 'Dehli', '1916-05-04', '05:00', 'http://www.dnaindia.com/india/report-don-t-want-to-lose-my-job-by-speaking-on-beef-ban-cea-arvind-subramanian-2187081 The remark by Subramanian, who is on leave from the Peterson Institute for International Economics in Washington since may 2016, comes days after he spoke about the adverse impact of social tensions on development.'),
(6, ' Latest news about GRE ', 'Ludhiana in samrala chonk ', '1916-06-17', '03:15', ' LUDHIANA: HRD ministry is going to the Cabinet with its proposal to set up National Authority for Testing (NAT). To be established as a society, NTA will be a lean body and conduct aptitude test for class IX, X, XI, XII students.');

-- --------------------------------------------------------

--
-- Table structure for table `passage`
--

CREATE TABLE `passage` (
  `id` int(225) NOT NULL,
  `select_ques` varchar(225) NOT NULL,
  `enter_ques` varchar(225) NOT NULL,
  `enter_ans1` varchar(225) NOT NULL,
  `enter_ans2` varchar(225) NOT NULL,
  `enter_ans3` varchar(225) NOT NULL,
  `enter_ans4` varchar(225) NOT NULL,
  `true_ans` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passage`
--

INSERT INTO `passage` (`id`, `select_ques`, `enter_ques`, `enter_ans1`, `enter_ans2`, `enter_ans3`, `enter_ans4`, `true_ans`) VALUES
(1, 'hbjhbJHNKJ', 'JBKJBJKB', 'KBJBJ', 'BKJJBK', 'UHU', 'JBKJB', 'JJH'),
(2, 'JDNHJDNKJ', 'JBJKNJKHBJ', 'BHBJBJ', 'BJBJK', 'BKJB', 'KJB', 'KBK'),
(3, 'jhj', 'jhjh', 'jhjh', 'jhnjkhnvv', 'gvgvhg', 'vgvhv', 'qqqq'),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reading`
--

CREATE TABLE `reading` (
  `id` int(225) NOT NULL,
  `test_name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reading`
--

INSERT INTO `reading` (`id`, `test_name`, `description`) VALUES
(8, 'IELTS TEST', 'm mhdbcgdhgcdjhcbkdjbcjk,b'),
(9, 'GRE TEST', 'rrrrrrrrrrhhh'),
(10, 'GRE TEST', 'rrr'),
(11, 'IELTS TEST', 'kmk'),
(12, 'IELTS TEST', 'RHRHRHRHRHRHRHHR'),
(13, 'GRE TEST', 'BJKBKJNKJNKJ'),
(17, 'IELTS TEST', 'jhjrrrrr'),
(18, 'GRE TEST', 'hbhsjbjhbkjb'),
(19, 'GRE TEST', 'kkkkkkk'),
(20, 'GRE TEST', 'kkkkkknjijhgrfh'),
(21, 'GRE TEST', 'kkkkkknjijhgrfh');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `S.NO` int(11) NOT NULL,
  `NAME` varchar(225) NOT NULL,
  `ROLL NO` int(225) NOT NULL,
  `MARKS` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`S.NO`, `NAME`, `ROLL NO`, `MARKS`) VALUES
(1, 'karam', 7118, 907),
(2, 'reet', 7111, 900);

-- --------------------------------------------------------

--
-- Table structure for table `tb1`
--

CREATE TABLE `tb1` (
  `id` int(11) NOT NULL,
  `login_id` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1`
--

INSERT INTO `tb1` (`id`, `login_id`, `password`, `name`, `address`, `city`, `phone`, `email`) VALUES
(2, 'penny', '12345', 'penny', '12345', 'ldh', '989898', 'gg@gg'),
(5, 'karam', 'karam', 'reet', 'gugu nanak girls collage ludh', 'ludhaiana', '7654329822', 'reet@876gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `exam` varchar(225) NOT NULL,
  `module` varchar(225) NOT NULL,
  `sub_module` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `url` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `exam`, `module`, `sub_module`, `description`, `url`) VALUES
(25, 'Ielts', 'LISTENING', '', 'Listening tips: part1', 'https://www.youtube.com/watch?'),
(26, 'Ielts', 'LISTENING', '', 'Listening tips: part2', 'https://www.youtube.com/watch?'),
(29, 'Ielts', 'WRITING', '', 'Writing tips : part1', 'https://www.youtube.com/watch?'),
(30, 'Ielts', 'WRITING', '', 'Writing tips : part2', 'https://www.youtube.com/watch?'),
(43, 'Ielts', 'SPEANKING', '', 'Speaking tips & tricks:part1', 'https://www.youtube.com/watch?'),
(44, 'Ielts', 'SPEANKING', '', 'Speaking tips & tricks:part2', 'https://www.youtube.com/watch?'),
(49, 'banking', 'English Language', '', 'Tricks and tips part:1', 'https://www.youtube.com/watch?'),
(50, 'banking', 'English Language', '', 'Tricks and tips part: 2', 'https://www.youtube.com/watch?'),
(51, 'banking', 'English Language', '', 'Tricks and tips part: 3', 'https://www.youtube.com/watch?'),
(52, 'banking', 'Quantitative Aptitude', '', 'Tricks and tips part:1', 'https://www.youtube.com/watch?'),
(53, 'banking', 'Quantitative Aptitude', '', 'Tricks and tips part: 2', 'https://www.youtube.com/watch?'),
(54, 'banking', 'Quantitative Aptitude', '', 'Tricks and tips part: 3', 'https://www.youtube.com/watch?'),
(55, 'banking', 'Reasoning Ability', '', 'Tricks and tips part:1', 'https://www.youtube.com/watch?'),
(56, 'banking', 'Reasoning Ability', '', 'Tricks and tips part: 2', 'https://www.youtube.com/watch?'),
(57, 'banking', 'Reasoning Ability', '', 'Tricks and tips part: 3', 'https://www.youtube.com/watch?'),
(62, 'Ielts', 'READING', '', 'Tricks and tips part: 1', 'https://www.youtube.com/watch?'),
(63, 'Ielts', 'READING', '', 'Tricks and tips part: 2', 'https://www.youtube.com/watch?'),
(69, 'GRE', 'Verbal section', 'Reading Comprehension', 'Reading-Tricks and tips part:1', 'https://www.youtube.com/watch?'),
(70, 'GRE', 'Verbal section', 'Reading Comprehension', 'Reading-Tricks and tips part:2', 'https://www.youtube.com/watch?'),
(71, 'GRE', 'Verbal section', 'Text Comprehension', 'Test-Tricks and tips part:1', 'https://www.youtube.com/watch?'),
(72, 'GRE', 'Verbal section', 'Text Comprehension', 'Test-Tricks and tips part:2', 'https://www.youtube.com/watch?'),
(73, 'GRE', 'Verbal section', 'Sentence Equivalence', 'Sentence-Tricks & tips part:1', 'https://www.youtube.com/watch?'),
(74, 'GRE', 'Verbal section', 'Sentence Equivalence', 'Sentence-Tricks & tips part:2', 'https://www.youtube.com/watch?'),
(76, 'GRE', 'Analytical writing section', 'Reading Comprehension', 'Tricks and tips part:1', 'https://www.youtube.com/watch?'),
(77, 'GRE', 'Analytical writing section', 'Reading Comprehension', 'Tricks and tips part: 2', 'https://www.youtube.com/watch?'),
(78, 'GRE', 'Analytical writing section', 'Reading Comprehension', 'Tricks and tips part: 3', 'https://www.youtube.com/watch?'),
(79, 'GRE', 'Quantitative reasoning', 'Reading Comprehension', 'Tricks and tips part:1', 'https://www.youtube.com/watch?'),
(80, 'GRE', 'Quantitative reasoning', 'Reading Comprehension', 'Tricks and tips part: 2', 'https://www.youtube.com/watch?'),
(81, 'GRE', 'Quantitative reasoning', 'Reading Comprehension', 'Tricks and tips part: 3', 'https://www.youtube.com/watch?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addques`
--
ALTER TABLE `addques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addtest`
--
ALTER TABLE `addtest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passage`
--
ALTER TABLE `passage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reading`
--
ALTER TABLE `reading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`S.NO`);

--
-- Indexes for table `tb1`
--
ALTER TABLE `tb1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addques`
--
ALTER TABLE `addques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `addtest`
--
ALTER TABLE `addtest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `passage`
--
ALTER TABLE `passage`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reading`
--
ALTER TABLE `reading`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `S.NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb1`
--
ALTER TABLE `tb1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
