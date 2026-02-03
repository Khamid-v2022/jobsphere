import { getJob } from "@/lib/api/jobs";

type Props = { params: { id: string } };

export default async function JobDetailPage({ params }: Props) {
    const job = await getJob(Number(params.id));

    return (
        <div>
            <h2 className="text-2xl font-bold mb-2">{job.title}</h2>
            <p>{job.description}</p>
            <button className="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
                Apply Now
            </button>
        </div>
    );
}