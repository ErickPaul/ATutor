<?php require('../common/body_header.inc.php'); ?>

<h2>Groups</h2>
	<p>The group area allows an instructor or assistant with Group privileges to create and manage groups of enrolled students within various projects. This may be useful for assigning group-specific tests or assignments, brainstorming, collaborative projects, online discussions and case studies, peer editing or responses, and so on.</p>

	<p>There are two ways to create groups: manually or by using automated tools to generate the groups. To facilitate the creation of multiple sets of groups, groups are collected together by type. An example of a group type may be "Tutorials" or "Project A". This feature lets students belong to different groups across multiple projects.</p>
	
	<h3>Create multiple groups automatically</h3>
		<p>Creating groups automatically allows an instructor to specify the number of groups to create, or the number of students per group, and populate groups accordingly. </p>
		
		<p>Enter the group type, group prefix (such as "Tutorial" - the groups will then be named "Tutorial 1", "Tutorial 2",...), and a default description that will be applied to each group. To determine the number of groups that will be created, enter the number of students per group, or the number of groups. Groups will automatically be created accordingly. Check the box beside "Fill groups randomly upon creation" if you'd like the groups evenly populated at random. Uncheck this box if you wish to create the groups, but populate them manually at a later time. Finally, choose which tools be made avialable to this groups (File Storage, Forums) and use the <code>Create</code> button.</p>


	<h3>Create a single group manually</h3>
		<p>It is also possible to create groups manually, one by one. This is a good way of creating groups if you have particular needs in terms of which students work together, and a relatively small class. This method is also good for adding groups to existing projects or types of groups. For example, if groups were created and populated automatically, and then several new students enroll, it's possible to manually add the new students to a new group within an existing project or type.</p>

		<p>Enter the type of project, title, and description. Also choose which tools be made avialable to this groups (File Storage, Forums) and use the <code>Create</code> button.</p>

	<h3>Managing Groups</h3>

	<p>From the groups page, it is possible to <code>Edit</code> a group's title, description and tools or <code>Delete</code> a group entirely.</p>

	<p>To manage the members of a group, select the group and use the <code>Members</code> button. The group members screen displays the course list. All unassigned students can automatically be added to the group by using the <code>Assign Unassigned</code> button, or picked manually and saved using the dropdowns, and then the <code>Save</code> button.</p>

<?php require('../common/body_footer.inc.php'); ?>
