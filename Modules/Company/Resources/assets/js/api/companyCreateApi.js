export default async function companyCreateApi() {
    try {
        return await axios.post('/api/company', { taxpayer_id: 'LOAD850511ADA', name: 'aaaa' } );
    } catch(error) {
        //ilos.growl.failAxios(error);
        throw new Error(error);
    }
}
