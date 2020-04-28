<?php

$yesterday = date('Ymd',strtotime("yesterday"));
// No data to prepare yet
$content = <<<"EOD"

<h3>Public Json API</h3>
<p>All APIs are under the <code>api/</code> endpoint.
<h3>APIs</h3>
<table class="table table-bordered">
    <tr class="thead-dark">
        <th>url</th><th>Description</th>
    </tr>
    <tr>
        <td><a href="/api/nightly/?date={$yesterday}">/api/nightly/?date={$yesterday}</a></td>
        <td>Provides the list of nightly buildids for a day and the changeset they were built (data from buildhub)</td>
    </tr>
    <tr>
        <td><a href="/api/nightly/crashes/?buildid=20190927094817">/api/nightly/crashes/?buildid=20190927094817</a></td>
        <td>Gives the crashes for a buildid (data from socorro)</td>
    </tr>
</table>

<h3>Views</h3>
<table class="table table-bordered">
    <tr class="thead-dark">
        <th>url</th><th>Description</th>
    </tr>
    <tr>
        <td>
            <ul class="list-unstyled mb-0">
                <li><a href="/nightly/">/nightly/</a> (today)</li>
                <li><a href="/nightly/?date={$yesterday}">/nightly/?date={$yesterday}</a></li>
            </ul>
        </td>
        <td>Provides the list of nightly buildids for a day, their crashes, changelog, bugs fixed</td>
    </tr>
    <tr>
        <td><a href="/beta/">/beta</a></td>
        <td>Provides the list of beta builds for the current release, their crashes, uplifts</td>
    </tr>
    <tr>
        <td><a href="/release/">/release</a></td>
        <td>Provides historical data for past releases and basic release date information for future releases.</td>
    </tr>
</table>


EOD;