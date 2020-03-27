<template>
    <div>
        <table cellpadding="1" cellspacing="1">
            <tbody>
            <tr>
                <td>
                    <img src="http://127.0.0.1:8000/images/x.gif" class="r1" alt="Lumber" title="Lumber">
                </td>
                <td id="l4" title="12">750/800</td>
                <td>
                    <img src="http://127.0.0.1:8000/images/x.gif" class="r2" alt="Clay" title="Clay">
                </td>
                <td id="l3" title="8">750/800</td>
                <td>
                    <img src="http://127.0.0.1:8000/images/x.gif" class="r3" alt="Iron" title="Iron">
                </td>
                <td id="l2" title="8">750/800</td>
                <td>
                    <img src="http://127.0.0.1:8000/images/x.gif" class="r4" alt="Crop" title="Crop">
                </td>
                <td id="l1" title="12">750/800</td>
                <td>
                    <img src="http://127.0.0.1:8000/images/x.gif" class="r5" alt="Crop consumption"
                         title="Crop consumption">
                </td>
                <td>0/12</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
