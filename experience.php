<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12/3/2016
 * Time: 1:48 AM
 */
session_start();
$_SESSION['sticky']=false;
require_once("header.php");

echo'
<div class="small-12 columns small-centered left-align" style="margin-top:10px; margin-bottom: 40px;">
    <fieldset>
        <div class="small-12 medium-5 columns left-align">
            <fieldset style="background-color: darkgray;">
                <h4>Major Coursework</h4>
                <div class="small-6 columns">
                    <ul>
                        <li>Object-Oriented Programming</li>
                        <li>Data Structures</li>
                        <li>Web Application Development</li>
                        <li>Theory of Computation</li>
                        <li>Analysis of Algorithms</li>
                        <li>Robotics</li>
                        <li>Software Engineering I and II</li>
                    </ul>
                </div>
                <div class="small-6 columns">
                    <ul>
                        <li>Advanced Database Management</li>
                        <li>UI Concepts</li>
                        <li>Discrete Structures</li>
                        <li>Database Management</li>
                        <li>Assembly Language and Computer Architecture</li>
                    </ul>
                </div>
            </fieldset>
        </div>
        <div class="small-12 medium-7 columns ">
            <fieldset style="background-color: darkgray;">
                <h4>Work Experience</h4>
                <ul>
                    <li>
                        Help Desk Specialist at Catholic Charities, Albany, NY from January 2017 to June 2017
                        <ul>
                            <li>Provided technical support for issues computer systems through the Spiceworks ticket 
                            system.</li>
                            <li>Traveled to agencies within Catholic Charities and provided on-site 
                            support.</li>
                            <li>Updated pages on their website, along with websites for the other agencies.</li>
                        </ul>
                    </li>
                    <br>
                    <li>
                        ITS Consultant at Siena College, Loudonville, NY from June 2015 to May 2016
                        <ul>
                            <li>Diagnosed technical issues in classrooms and labs.</li>
                            <li>Assisted students and faculty with computer issues in person and on the phone. </li>
                            <li>Aided ITS staff with reimaging and installing operating systems and software. </li>
                        </ul>
                    </li>
                    
                </ul>
            </fieldset>
        </div>
        
        <div class="small-12 medium-7 columns ">
            <fieldset style="background-color: darkgray;">
                <h4>Projects</h4>
                <ul>
                    <li>
                        <h5>Deductive Proof Application</h5>
                        <ul>
                            <li>Developed a web application based on client requests.</li>
                            <li>Worked in a team of six to develop an application that would help users improve their 
                            deductive reasoning by utilizing an instructor/student structure.</li>
                            <li>Designed the database structure using phpMyAdmin</li>
                        </ul>
                    </li>
                    <br>
                    <li>
                        <h5>Robotics</h5>
                        <ul>
                            <li>Worked with a team of three in a research environment to program a robot to fill a desired task.</li>
                            <li>Created a program that utilized a Roomba, an Xbox 360 Kinect, and a mechanical arm in Ubuntu.</li>
                            <li>Developed the program in Python</li>
                        </ul>
                    </li>
                    <li>
                        <h5>Ticket to Ride</h5>
                        <ul>
                            <li>Worked with a team of 4 to recreate the board game Ticket to Ride in a java applet</li>
                        </ul>
                    </li>
                </ul>
            </fieldset>
        </div>
        <div class="small-12 medium-5 columns">
            <fieldset style="background-color: darkgray;">
                <h4>Technical Experience</h4>
                <p>This site was developed in Phpstorm using the Foundation framework.</p>
                <p>• Language experience with Java, Python, HTML, CSS, Javascript, PHP, AJAX, JSON, JQuery.<br>
                • Experience with creating and maintaining a database with MS Access and PHPmyAdmin.<br>
                • Experience using command line and powershell.
                </p>
                
                
            </fieldset>
        </div>
        
        
        
        
    </fieldset>
</div>







';
require_once("footer.php");