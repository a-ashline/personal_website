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
<div class="small-12 columns small-centered left-align" style="margin-top:10px; margin-bottom: 50px;">
    <fieldset>
        <div class="small-12 medium-7 columns">
            <fieldset style="background-color: darkgray;">
                <h5>Major Coursework</h5>
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
        <div class="small-12 medium-5 columns ">
            <fieldset style="background-color: darkgray;">
                <h5>Work Experience</h5>
                <ul>
                    <li>
                        <p>
                        ITS Consultant at Siena College, Loudonville, NY from June 2015 to May 2016
                        <br>
                        &nbsp;&nbsp;&nbsp;As a consultant, I diagnosed technical issues in classrooms and labs. Assisted students 
                        and faculty with computer issues in person and on the phone. Aided ITS staff with reimaging 
                        and installing operating systems and software</p> 
                    </li>
                </ul>
            </fieldset>
        </div>
        <!--<div class="small-12 medium-6 columns ">
            <fieldset style="background-color: darkgray;">
                <h5>Projects</h5>
                <ul>
                    <li>
                        <p>
                        </p>
                    </li>
                </ul>


            </fieldset>
        </div>-->
        <div class="small-12 medium-12 columns">
            <fieldset style="background-color: darkgray;">
                <h5>Technical Experience</h5>
                <p>This site was developed using Phpstorm.<br>
                Experience with Bootstrap, Foundation, Github, Oracle.</p>

            </fieldset>
        </div>
    </fieldset>
</div>







';
require_once("footer.php");