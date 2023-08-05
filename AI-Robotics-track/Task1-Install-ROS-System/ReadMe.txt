First Step: I followed these steps in this page http://wiki.ros.org/noetic/Installation/Ubuntu to install ROS Noetic on ubuntu 20.04 and create the catkin workspace. The installation process has ended successfully. 

Second Step: I followed the smart methods GitHub instructions but when reached this command "roslaunch robot_arm_pkg check_motors.launch" I run into this error ""roslaunch robot_arm_pkg check_motors.launch" I run into this error "RLException: [check_moters.launch] is neither a launch file in package [arm_pkg] nor is [arm_pkg] a launch file name the traceback for the execution was written to the log file"" 

Third Step: since neither the engineers (in the Zoom meeting) nor me were able to fix the RLException error, I used the ubuntu VM clone that has been created by eng Wafaa to complete this task.  


Fourth Step: I used the ubuntu VM clone and checked the existence of the ros system using the "roscore" command. See photo "rescore-version.pnp"


Fifth Step: I run the following commands:
$ roslaunch robot_arm_pkg check_motors.launch
$ roslaunch robot_arm_pkg check_motors_gazebo.launch
$ rosrun robot_arm_pkg joint_states_to_gazebo.py

To run the Rivs and gazebo simulators. See photos "running-vis-simulator.pnp" and "running-gazebo-simulator.png" 


However, the command  "rosrun robot_arm_pkg joint_states_to_gazebo.py" showed another RLException error.





